<?php
/**
* @version 
* @package mambo.utils.class.php
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
/* dependencies: 
 + administrator/components/com_mosprayer/json.php
 + administrator/components/com_mosprayer/array_diff_key.php
 + includes/phpmailer/class.phpmailer.php
 + Mambo global variables
 + SHOULD NOT have any database releated call here!
*/
if (!class_exists('CoUtils')) include_once("co.utils.class.php");
include_once("mosprayer.html.class.php");
class MosprayerUtils extends CoUtils {
  var $h;
  var $adminside;
  var $_VERSION;
  var $my;
  var $type;
  var $mambo;
  var $timeOffset; 
  function MosprayerUtils () { // contructor
    global $mainframe;
    global $mosConfig_offset;  
    global $adminside;
    global $_VERSION;
    global $my;
    global $type;
  	if (!isset($coHTML)) $coHTML = new MosprayerHTML();
		$this->h = $coHTML;
    $this->mainframe = $mainframe;
    $this->adminside = $adminside;
    $this->_VERSION = $_VERSION;
    $this->timeOffset = $mosConfig_offset;     
    $this->my = $my;
    $this->type = $type;
//    $this->mambo['ds']=$this->setDS();
  	$this->mambo['ds']=DIRECTORY_SEPARATOR;      
  	// mambo h:/path/mos joomla path/joomla  H:/mos46, add slash for abs path to make the same as url path with slash for consistent
  	$this->mambo['siteabspath']=$this->fixDupInPathRtrim($GLOBALS['mosConfig_absolute_path']); 
  	$this->mambo['siteurl']=$this->fixDupInPathRtrim($GLOBALS['mosConfig_live_site']);
  }
  function sendAlert($mccom, $mccfg) {
    $from=$mccfg['admin_email'];
    $mcmsg=_PRY_A_NAME_SUB.": ".$mccom['name']."\n".
    		_PRY_A_EMAIL_SUB.": ".$mccom['email']."\n".
  			_PRY_R_HOMEPAGE. ": ".$mccom['homepage']."\n".
  			_PRY_A_PRAYER. ": ".stripslashes($mccom['entry'])."\n".
  			$mccom['date']." - ".$mccom['time']."\n".
        "**Prayers on Articles Script (MosPrayer) released by Chanh Ong base on MosPrayer **";
    $mcmsgAdmin = _PRY_A_IP. ": ".$mccom['ip']."\n". $mcmsg;   
        
    if ($mccfg['email_alerts'] == "1") $this->mailAdmin($mccfg['admin_email'], $mccom['atitle'], $mcmsgAdmin, $from);
    if ($mccfg['email_alerts_user'] == "1") $this->mailUser($mccom['email'], $mccom['atitle'], $mcmsg, $from);
    (($mccfg['review'] == "0") or ($mccom['gid']=="25")) 
      ? $reviewmsg = _PRY_R_THANKS3 : $reviewmsg = _PRY_R_THANKS4;
    return $reviewmsg; 
  }
  function isInputValid($mccom,$mccfg) {
  	if ( ($mccom['name']=="") || 
  	      ($mccom['entry']=="") || 
  	      ($mccom['articleid']=="") || 
  	      (($mccfg['email_req']=="1") && ($mccom['email']=="")) 
  	      ) return false;
  	else return true;
  }      
  function cleanInput($mccom) {
    $oneComment = array();
  	$inpfilter = $mccom['siteabspath'] . '/includes/phpInputFilter/class.inputfilter.php';
  	if (file_exists($inpfilter)) {
  	    require_once($inpfilter);
  	    $iFilter = new InputFilter();
  	    $oneComment['name'] = trim( $iFilter->process( $mccom['name'] ) );
  	    $oneComment['email'] = trim( $iFilter->process( $mccom['email'] ) );
  	    $oneComment['homepage'] = trim( $iFilter->process( $mccom['homepage'] ) );
  	    $oneComment['entry'] = trim( $iFilter->process( $mccom['entry'] ) ); 
    }
    $oneComment['name'] = $this->escapeString( $mccom['name'] ) ;
    $oneComment['email'] = $this->escapeString( $mccom['email'] ) ;
    $oneComment['homepage'] = $this->escapeString( $mccom['homepage'] ) ;
    $oneComment['entry'] = $this->bbCode( $this->escapeString( $mccom['entry'] ) ) ; 
  	return $oneComment;
  }

  function getToken($mccom) {  // this has to be here for mccom
 //   $this->ppDebug($_POST,"Your Post");  
 //   $this->ppDebug($mccom,"mccom");     
    $return = '0';
    $mosprayerts = $this->getParam('MosPrayerTS','post');
    if (!empty($mosprayerts)) {
      $seconds = 60*10;	// 10 minutes timeout
    	$str = $mccom['meip'].$mccom['articleid'].$mosprayerts;
    	if(isset($_COOKIE[$mccom['me']]) && $_COOKIE[$mccom['me']] == md5($str)) 
        $return = $mosprayerts; // 1241217007 return the token
      else if (((int)$mosprayerts + $seconds) < mktime()) 
        $return = "-1";    
      else 
        $return = '0';
    }
    /*
   	if (MOSPRAYER_DEBUG) {
  		echo '<p /><b><<< DEBUG >>></b>';
  		echo '<br />abs: '.$mccom['siteabspath'];
  		echo '<br />id: '.$mccom['articleid'].' str: '.$str;
      echo '<br />Timestamp: '.$mosprayerts;      
  		echo '<br />gctoken: '.md5($str);
  		echo '<br />mctoken: '.$_COOKIE[$mccom['me']];
      echo '<p /><h3>Return status: '.$return."</h3>";      
  	}   
    */
    return $return;
  }   
  function mailAdmin($to, $atitle, $mcmsg, $from) {
  	$to = $to."\n";
  	$subject = _PRY_R_NEW_COM." ".$this->mambo['siteurl'];
  	$msg = _PRY_R_HAVE_NEW." $atitle \n\n".$mcmsg.
        "\n\n"._PRY_R_LOGIN."\n"._PRY_R_QUICKLINK.": ".$this->mambo['siteurl']."administrator";
  	$this->mosMail( $from, $from , $to, $subject, $msg );//Send to admin
  }
  function mailUser($to,$atitle,$mcmsg,$from) {
    $to = $to."\n";
  	$subject = _PRY_R_THANKS." ".$this->mambo['siteurl']."...";
  	$msg = _PRY_R_THANKS2.": $atitle \n"._PRY_R_ADMIN_REV.".  "._PRY_R_ENTERED."\n\n".$mcmsg.
        "\n\n"._PRY_R_VISIT.": ".$this->mambo['siteurl'];
  	$this->mosMail( $from, $from , $to, $subject, $msg );//Send to user
  }	
  function mosMail($from, $fromName='', $to, $subject, $msg) {
  	if (!$this->isJ15()) { // don't load if J1.5 otherwise use phpmailer class
      $phpmailer = $this->mambo['siteabspath'].'includes/phpmailer/class.phpmailer.php';
//  		$this->ppDebug($phpmailer,__METHOD__.'=>phpmailer');
       $this->usingOnce($phpmailer);    
//       $this->usingOnce($this->mambo['siteabspath'].'includes/phpmailer/class.phpmailer.php');
  	}
  	if (function_exists( 'mosMail' )) {	// use Mambo or Joomla mosMail if exist
  		$res = mosMail($from, $fromName, $to, $subject, $msg);
  	} else if (class_exists("MosPHPMailer")) {	// use phpmailer class
  		$res = $this->mcMail($from, $fromName, $to, $subject, $msg);
  	} else { // default to php mail
  		$res = $this->phpMail ($from, $fromName='', $to, $subject, $msg);
  	}
  }  
  function createMail( $from='', $fromname='', $subject, $body ) {
  	global $mainframe, $mosConfig_sendmail;
  	global $mosConfig_smtpauth, $mosConfig_smtpuser;
  	global $mosConfig_smtppass, $mosConfig_smtphost;
  	global $mosConfig_mailfrom, $mosConfig_fromname, $mosConfig_mailer;

  	$mail = new mosPHPMailer();

  	$mail->PluginDir = $mainframe->getCfg('absolute_path') .'/includes/phpmailer/';
  	$mail->SetLanguage( 'en', $mainframe->getCfg('absolute_path') . '/includes/phpmailer/language/' );
  	$mail->CharSet 	= substr_replace(_ISO, '', 0, 8);
  	$mail->IsMail();
  	$mail->From 	= $from ? $from : $mosConfig_mailfrom;
  	$mail->FromName = $fromname ? $fromname : $mosConfig_fromname;
  	$mail->Mailer 	= $mosConfig_mailer;

  	// Add smtp values if needed
  	if ( $mosConfig_mailer == 'smtp' ) {
  		$mail->SMTPAuth = $mosConfig_smtpauth;
  		$mail->Username = $mosConfig_smtpuser;
  		$mail->Password = $mosConfig_smtppass;
  		$mail->Host 	= $mosConfig_smtphost;
  	} else

  	// Set sendmail path
  	if ( $mosConfig_mailer == 'sendmail' ) {
  		if (isset($mosConfig_sendmail))
  			$mail->Sendmail = $mosConfig_sendmail;
  	} // if

  	$mail->Subject 	= $subject;
  	$mail->Body 	= $body;

  	return $mail;
  }  
  function mcMail($from, $fromname, $recipient, $subject, $body, $mode=0) {
  	global $mosConfig_debug;
  	$mail = $this->createMail( $from, $fromname, $subject, $body );

  	// activate HTML formatted emails
  	if ( $mode ) {
  		$mail->IsHTML(true);
  	}

  	if( is_array($recipient) ) {
  		foreach ($recipient as $to) {
  			$mail->AddAddress($to);
  		}
  	} else {
  		$mail->AddAddress($recipient);
  	}
  	$mailssend = $mail->Send();
  	return $mailssend;
  } 
 
  function unSefURL($iURL) {
    (function_exists("sefRelToAbs")) ? $url = sefRelToAbs($iURL) : $url = $iURL;
    return $url;
  }
  function getBot() {
		($this->isJ15()) ? $ret="plugins" : $ret="mambots";
		return $ret;
	}
  function getBotTableName() {
  	($this->isJ15()) ? $ret="#__plugins" : $ret="#__mambots";
  	return $ret;
  }
  function isJ15() {
  	( (defined('JVERSION')) and ($this->is1stNewer2nd(JVERSION,'1.0') ) ) ? $ret=true : $ret=false;
  	return $ret;
  }
  function isJ10() { // Mambo, MiaCMS, Elxis
  	( (isset($this->_VERSION->PRODUCT)) and ($this->_VERSION->PRODUCT == "Joomla!") and (!$this->isJ15()) ) ? $ret=true : $ret=false;
  	return $ret;
  }  
  function mosprayerVersion($filename) {
  	$chunksize = 1*(1024*1024); // how many bytes per chunk
  	$buffer = '';
  	$handle = fopen($filename, 'rb');
  	if ($handle === false) { return false;  }
  	while (!feof($handle)) {
  		$buffer = fread($handle, $chunksize);
  		$mcversion = $this->pregMatchBetween("<version>", "<\/version>", $buffer);
  		if ($mcversion) { break; }
  	}
  	fclose($handle);
  	return trim($mcversion);
  }   
  function jsonDecode($content, $assoc=false) {
    if ( !function_exists('json_decode') ){
        function json_decode($content, $assoc=false){
          if (!class_exists('Services_JSON')) require_once 'json.php';
          if ( $assoc ){
            $json = new Services_JSON(SERVICES_JSON_LOOSE_TYPE);
          } else {
            $json = new Services_JSON;
          }
          return $json->decode($content);
        }
    }
    return json_decode($content, $assoc=false);
  }
  function jsonEncode($content) {
    if ( !function_exists('json_encode') ){
      function json_encode($content){
        if (!class_exists('Services_JSON')) require_once 'json.php';
        $json = new Services_JSON;
        return $json->encode($content);
      }
    }
    return json_encode($content);
  }  

  function toHead($url) { // this only work for css in module but not in component
    $return = "";
    if (function_exists("addCustomHeadTag")) {
      addCustomHeadTag($url);
    }
    // need to check out with J1.0 and J1.5
    else if ( (method_exists($this->mainframe,"addCustomHeadTag") ) 
      and ($this->isJ15() or (!$this->isJ10() and isset($this->adminside) and $this->adminside==0)) ) { // any mambo & forks not admin
        $this->mainframe->addCustomHeadTag($url);
    }
    else {
      $return = $url;
    }
    return $return;
  }  
  //    (__METHOD__) ? $iwho = "Method => ".__METHOD__ : $iwho = "Class => ".__CLASS__.",Func => ".__FUNCTION__;
  // CAUTION: "not available for CSS in component only module"
  /*
  function inHeadCSS($file) { return $this->toHead($this->h->cssLink($this->unSefURL($file))); }   	
  function inHeadJS($file) { return $this->toHead($this->h->jsSrc($this->unSefURL($file))); }    	
  */
  function inHeadCSS($URLfile) { return $this->toHead($this->h->cssLink($URLfile)); }   	
  function inHeadJS($URLfile) { return $this->toHead($this->h->jsSrc($URLfile)); }   
	function debugO($inVar) {	// only when debug is true
		if (!MOSPRAYER_DEBUG) return;
		$formated=$this->h->getVal($inVar,'format');
		$msg=$this->h->getVal($inVar,'msg');
		$name=$this->h->getVal($inVar,'name');
		$output=print_r($name,true);
		if ($formated) $output = "<pre>$output</pre>";
		echo "$msg$output<br />";
	}
 
  function frontOrBack($mccom) {
    $lastPart = $this->lastPart(getcwd(),$mccom['ds']);
    ($lastPart <> "administrator") ? $mcPath = $mccom['mcadpath'] : $mcPath = $mccom['mcdpath'];
    return $mcPath;
  } 
  function getOffsetDate($iVar) {
 			$offset_date = $this->getTimeOffset($iVar->date,$iVar->time,$this->timeOffset);
			return _PRY_R_DATE_ON.' '.mosFormatDate($offset_date[0], _DATE_FORMAT_LC).' '. _PRY_R_DATE_AT.' '.$offset_date[1]; 
  }
// leave this alone, use by upgrade process and work solid  
  function arrayDiffKey($iArray1, $iArray2) {
    if(!function_exists('array_diff_key')) require_once 'array_diff_key.php';    
    return array_diff_key($iArray1, $iArray2);
  }  
  function isArrayDiff($mccfg, $cfgRow) {
    $upgRequired = false;
  	$Diff2CfgArray = $Diff2DBArray = array();
  	if (($Diff2CfgArray = $this->arrayDiffKey($mccfg,$cfgRow)) 
      or ($Diff2DBArray = $this->arrayDiffKey($cfgRow,$mccfg)) ) {
  		$this->ppDebug($Diff2CfgArray,__METHOD__.'=>Diff2CfgArray');
  		$this->ppDebug($Diff2DBArray,__METHOD__.'=>Diff2DBArray');
  		$upgRequired = true;
  	}
    return $upgRequired;
  }
// leave this alone, use by upgrade process and work solid    

 
}
?>