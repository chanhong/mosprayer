<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
defined('MOSPRAYER_DEBUG') or define('MOSPRAYER_DEBUG',false);
if (MOSPRAYER_DEBUG) define('CO_DEBUG',true);  // turn on CoBase debug if MOSPRAYER_DEBUG is turn on
// my general classes
if (!class_exists('CoBase')) include_once("co.base.class.php");
// mosprayer classes
if (!class_exists('Services_JSON')) include_once("json.php");
include_once("mosprayer.html.class.php");
include_once("mosprayer.utils.class.php");

class MosprayerBase extends CoBase {
  var $mccom;
  var $m;
  var $config;
  var $h;
  var $ut;
  var $mainframe;
  var $database;
  var $lang;
  var $mccfg;
  var $mcSchema;
  var $my;
  var $type;  
  var $pageNav;

  function MosprayerBase() { // contructor
    global $mainframe;
    global $database;
    global $my;
    global $type;  
    $this->mainframe = $mainframe;
    $this->database = $database;
    $this->lang = $GLOBALS['mosConfig_lang'];
    $this->my = $my;   
    $this->type = $type;   
  	if (!defined('_DATE_FORMAT_LC')) DEFINE('_DATE_FORMAT_LC',"%A, %d %B %Y"); //Uses PHP's strftime Command Format
  	if (!isset($coHTML)) $coHTML = new MosprayerHTML();
		$this->h = $coHTML;
    if (!isset($coUtils)) $coUtils = new MosprayerUtils();
		$this->ut = $coUtils;
    $this->mccom = $this->init($my);

    $mosmodulefunc = $this->mccom['siteabspath'].$this->ut->getBot()."/content/mosmodule/mosmodule_func.php";
    if (file_exists($mosmodulefunc)) { include_once($mosmodulefunc); }
    
    include_once("model".$this->mccom['ds']."mosprayer.php");
    include_once("model".$this->mccom['ds']."config.php");
    include_once("model".$this->mccom['ds']."prayer.php"); 

    if (!isset($mosprayerModel)) $mosprayerModel = new MosprayerModel();
   	if (!isset($mosprayerConfigModel)) $mosprayerConfigModel = new MosprayerConfigModel();    
    if (!isset($mosprayerCommentModel)) $mosprayerCommentModel = new MosprayerPrayerModel();
		$this->m        = $mosprayerModel;    
		$this->config   = $mosprayerConfigModel;    
		$this->comment  = $mosprayerCommentModel;  
  	$this->loadLang();    
  	if (!isset($this->mcSchema)) $this->mcSchema = $this->ut->mergeArrayWithRow($this->comment->schemaArrayFromFieldsList("current"),$this->comment->getSchema());	// get comment from db    
  	if (!isset($this->mccfg)) $this->mccfg = $this->ut->mergeArrayWithRow($this->config->schemaArrayFromFieldsList("current"),$this->config->getSchema());	// get cfg from db

  }
  function init($my) {
  	$mccom=(array)$my;
    if ($this->ut->isJ15() and $mccom['gid']==2) {
      $mccom['admin'] = true;
    } else if ($mccom['gid']==25) {
      $mccom['admin'] = true;
    }
      
  	$me='com_mosprayer';
  	$mccom['meip']=$_SERVER['SERVER_NAME'];
//  	$mccom['ds']=$this->ut->setDS();
  	$mccom['ds']=DIRECTORY_SEPARATOR;    
  	$mccom['mesite']="http://ongetc.com/";
  	$mccom['me']=$me;
    /*
    if (function_exists('mosGetParam')) {
      $mccom['cid'] = intval(mosGetParam($_GET, 'cid', 0));
      $mccom['task'] = mosGetParam($_GET, 'task', '');
    }
    */
  	// mambo h:/path/mos joomla path/joomla  H:/mos46, add slash for abs path to make the same as url path with slash for consistent
 // 	$mccom['siteabspath']=$this->ut->mambo['siteabspath']; 
 // 	$mccom['siteurl']=$this->ut->mambo['siteurl'];
//  	$mccom['siteabspath']=$this->ut->fixDupInPathRtrim($GLOBALS['mosConfig_absolute_path'],$mccom['ds']).$mccom['ds']; 
//  	$mccom['siteurl']=$this->ut->fixDupInPathRtrim($GLOBALS['mosConfig_live_site'],'/').'/';
  	$mccom['siteabspath']=$this->ut->fixDupInPathRtrim($GLOBALS['mosConfig_absolute_path']); 
  	$mccom['siteurl']=$this->ut->fixDupInPathRtrim($GLOBALS['mosConfig_live_site']);
   	$mccom['mcdpath']='components'.$mccom['ds'].$me.$mccom['ds']; // components\com_mosprayer\ if Windows
  	$mccom['mcadpath']='administrator'.$mccom['ds'].$mccom['mcdpath']; // administrator\components\com_mosprayer\ if Windows
  	$mccom['mcaabspath']=$mccom['siteabspath'].$mccom['mcadpath']; // H:/mos46/administrator/components/com_mosprayer/ 
  	$mccom['mcaabslangpath']=$mccom['mcaabspath'].'language'.$mccom['ds']; // H:/mos46/administrator/components/com_mosprayer/language/
  	// url has slash but abspath has no slash, be consistent!
  	$mccom['mcupath']=$this->ut->ds2UrlPath($mccom['mcdpath'],$mccom['ds']); // components/com_mosprayer/
  	$mccom['mcaupath']=$this->ut->ds2UrlPath($mccom['mcadpath'],$mccom['ds']); // administrator/components/com_mosprayer/
  	$mccom['mcasiteurl']=$mccom['siteurl'].$mccom['mcaupath']; // http://localhost/mos46/administrator/components/com_mosprayer/
  	$mccom['feindex']="index.php?option=";
  	$mccom['beindex']="index2.php?option=";
// move here in case something cause this to fail and won't skip all code above
    if (function_exists('mosGetParam')) {
      $mccom['cid'] = intval(mosGetParam($_GET, 'cid', 0));
      $mccom['task'] = mosGetParam($_GET, 'task', '');
    }    
//  	$mccom['version']=$this->ut->mosprayerVersion($mccom['mcaabspath'].'mosprayer.xml');
    return $mccom;
  }
  function loadLang() {
  	if ($this->lang=="en" or $this->lang=="") $this->lang="english"; //for Mambo 4.6 w/ gettext where it return en instead of english
  	$langfile=$this->mccom['mcaabslangpath'].$this->lang.'.php';
  	if ($this->ut->usingOnce($langfile)==false) $this->ut->usingOnce($this->mccom['mcaabslangpath'].'english.php'); 
//  	return "<!-- ".$langfile." -->";
  }
  function jQueryLoad() {
     return $this->ut->inHeadJS($this->mccom['mcasiteurl'].'js/mosprayer.jquery.js')    
    .$this->ut->inHeadJS($this->mccom['mcasiteurl'].'js/mosprayer.ui.tabs.js')
    .$this->ut->inHeadJS($this->mccom['mcasiteurl'].'js/mosprayer.js')
    ;
  }   
  function mosprayerURL($text) { 
    return "<!-- MosPrayer ".$text." version: ".$this->mccom['version']." http://ongetc.com -->"; 
  }
  function commentEditLink($row) { return '<a href="index2.php?option=com_mosprayer&task=editcomment&cid='.intval($row->id).'">'.$row->entry.'</a>'; }
  // need to work on this logic more to tight down security
  function isTokenGood() {
    $token=$this->ut->getToken($this->mccom);
  	if (strlen($token) == 10 and is_numeric($token)) {
      $this->mccom['mosprayerts'] = $token;
      $return = "1";
    } 
    else if ($token == "-1") $return = 'Too much time elapsed!'; 
    else if ($token == "0") $return = 'Form processing halted for suspicious activity!'; 
    return $return;
  }  
  function commentPoststringAjax($id, $itask, $Itemid, $start, $show) {
    return "index2.php?".$this->commentBuildPS($id, $itask, $Itemid, $start, $show)."&no_html=1";
  }  
  function commentBuildPS($id, $itask, $Itemid, $start, $show) {
    $itask ? $task="&task=".$itask : $task="";
  	$start ? $startstr="&start=$start": $startstr="";
  	$show ? $showstr="&show=1": $showstr="";
  	$ps = "option=com_mosprayer".$task."&id=".$id."&Itemid=".$Itemid;    
  	return $ps.$showstr.$startstr.$returnstr;
  }
  function commentPoststring($id, $itask, $Itemid, $start, $show) {
    return $this->ut->ampIt("index.php?".$this->commentBuildPS($id, $itask, $Itemid, $start, $show));
  }
  function isShowLink($option,$mccom) {
    $show = true;
    if (($this->isMCBOT()=="1" and ($mccom['etype']=="com"))  	// avoid dup
      or ($this->mambotParm("showonfp")=="0" and $_SERVER['QUERY_STRING']=="") 	// dont' show on joomla frontpage
      or ($this->mambotParm("showonfp")=="0" and !preg_match("/com_content/i", $option)) 	// don't show on mambo frontpage
      or ($this->mambotParm("showonfp")=="0" and $this->isMCBOT()=="1" and  empty($option))   // only turn off when bot is install but, noshowfp and not content
//      or ($this->ut->isJ15() and $_SERVER['QUERY_STRING']=="") // don't show on frontpage for J15, whether showfp or not, 1.5.12 is ok now
      ) {
      $show = false;
    }
    return $show;
  }  
  function navLink($thispage, $num, $start, $per_page) {
    $showeachside = 5; //  Number of items to show either side of selected page
    $prevpagelink=$nextpagelink=$prevdot=$sufdot=$pagenum="";

    $eitherside = ($showeachside * $per_page);
    if ($start+1 > $eitherside) { $prevdot = " .... "; }  
    if (($start+$eitherside)<$num) { $sufdot = " .... "; }   
    $pg=1;
    for ($y=0;$y<$num;$y+=$per_page) {   
      $class=($y==$start)?'mosprayerPAGESelected':'';
      if (($y > ($start - $eitherside)) && ($y < ($start + $eitherside))) {
        $pagenum.='&nbsp;<a class="'.$class.'" href="'.$thispage. ($y>0?('&start=').$y:'') .'#prayers">'.$pg.'</a>&nbsp;';
//        $pagenum.='&nbsp;<a class="'.$class.'" href="'.$thispage. ($y>0?('&amp;start=').$y:'') .'#prayers">'.$pg.'</a>&nbsp;';        
      }
      $pg++;
    }

    if (($start-$per_page) >= 0) { 
      $next = $start-$per_page; 
//      $prevpagelink='<a href="'.$this->sef2NormURL($thispage.($next>0?('&amp;start=').$next:''));  
      $prevpagelink='<a href="'.$this->sef2NormURL($thispage.($next>0?('&start=').$next:''));        
      $prevpagelink.= '#prayers">< '._PRY_R_PREV_PAGE.'</a>';
    } 
    if ($start+$per_page<$num) { 
//      $nextpagelink='&nbsp;<a href="'.$this->sef2NormURL($thispage.'&amp;start='.max(0,$start+$per_page));
      $nextpagelink='&nbsp;<a href="'.$this->sef2NormURL($thispage.'&start='.max(0,$start+$per_page));      
      $nextpagelink.= '#prayers">'._PRY_R_NEXT_PAGE.' ></a>';
    }
    
    $max_pages = ceil($num / $per_page); // Number of pages
    $cur = ceil($start / $per_page)+1; // Current page number    
    // Page 1 of 0 ( 0 comments )
    $navtext = _PRY_R_PAGE.' '.$cur.' '._PRY_R_OF.' '.$max_pages.' ( '.$num.' '._PRY_R_REQUEST.' )';    
    
    return $prevpagelink." ".$prevdot.$pagenum.$sufdot.$nextpagelink."<br />".$navtext; 
  }  
  function setEmailInfo() {
    $userInfo = $this->getUserInfo($this->mccfg);
  	if ($this->mccfg['use_divcss']=="0") {
      $iEmail = '<div class="text">'._PRY_R_EMAIL.'<span class="mosprayerFORMLabelSuffix">'.$this->setEmailSuffix().'</span></div>
      <input type="text" id="mc_comment_email" title="'._PRY_R_EMAIL.'" name="mc_comment_email" class="mosprayerInputBox" style="width:268px;" value="'.$this->ut->spamNotEmail($userInfo['email']).'" tabindex="2" '.$userInfo['mode'].' />
      <div class="smalltext">'._PRY_R_EMAIL_NOT.'</div>';
    } else {
      $iEmail = '<p>
      <label for="mc_comment_email" id="labelmc_comment_email" class="mosprayerFORMLabel">'._PRY_R_EMAIL.'</label>
      <input type="text" id="mc_comment_email" title="'._PRY_R_EMAIL.'" name="mc_comment_email" class="mosprayerInputBox" value="'.$this->ut->spamNotEmail($userInfo['email']).'" tabindex="2" '.$userInfo['mode'].' />
      <span class="mosprayerFORMLabelSuffix">'.$this->setEmailSuffix().'</span>
      </p>
      <p class="mosprayerFORMMsg">'._PRY_R_EMAIL_NOT.'</p>';
  }
//   	($this->mccfg['hide_url']=="0") ? $lshow_url = $iurl : $lshow_url="";
//  	return $iEmail;
  	return "";    // override not show email for mosPrayer, will set in config to show or hide later
  }
  function setHomeURL() {
  	if ($this->mccfg['use_divcss']=="0") {
      $iurl = _PRY_R_HOMEPAGE_IN.'<span class="mosprayerFORMLabelSuffix">'. _PRY_R_OPT. '</span><br /><input type="text" title="'._PRY_R_HOMEPAGE_IN.'" name="mc_comment_homepage" style="width:268px;" class="inputbox" value="http://" tabindex="3" /><br />';
    } else {
        $iurl = '<p><label for="mc_comment_homepage" id="labelmc_comment_homepage" class="mosprayerFORMLabel">'. _PRY_R_HOMEPAGE_IN. '</label>
	<input type="text" title="'._PRY_R_HOMEPAGE_IN.'" name="mc_comment_homepage" id="mc_comment_homepage" class="mosprayerInputBox" value="http://" tabindex="3" />
	<span class="mosprayerFORMLabelSuffix">'. _PRY_R_OPT. '</span></p>';
  }
   	($this->mccfg['hide_url']=="0") ? $lshow_url = $iurl : $lshow_url="";
  	return $lshow_url;
  }
  // here need to finish and test
  function setEmailSuffix() {
    ($this->mccfg['email_req']=="0") ? $lemailsuffix=_PRY_R_OPT : $lemailsuffix=_PRY_R_REQ;
    return $lemailsuffix;
  }
  function sef2NormURL($url) { return $this->ut->ampIt($this->ut->unSefURL($this->mccom['siteurl'].$url)); }  
  function commentBy($type, $iVar, $iClass="") {
    switch (strtolower($type)) {
    case "user" : 
      $return = count($iVar) . " " ._PRY_R_REQUEST . " ". _PRY_R_POST.' '.$iVar['name']; 
      break;
    case "name" : 
      $return = _PRY_R_POST.' '.stripslashes($iVar->name).', '.$this->userHomePage($iVar, $iClass).$this->ut->getOffsetDate($iVar); 
      break;
    }
    return $return;
  }  
  function commentListX($rows, $param) {
    $output = "";
    foreach ($rows as $row) {
      if ($param['type']=="userx") { // "userX"
        $metaData = " <span class=\"mosprayerlatesxmeta\">"
        .$this->ut->getOffsetDate($row)
        ."</span>";
      } else if ($param['type']=="latestx") {  // "latestX"
        $metaData =  " <span class=\"mosprayerlatesxmeta\">"
            .$this->commentBy("name", $row, $param['moduleclass_sfx'])    
/*            
          ._PRY_R_POST.' '.stripslashes($row->name).', '
          .$this->userHomePage($row, $param['moduleclass_sfx'])
          .$this->ut->getOffsetDate($row)
  */        
          ."</span>"; 
      }

      $itemid = $this->m->getItemid($row);
      $thisurl = $this->sef2NormURL("index.php?option=com_content&task=view&id=".$row->id."&Itemid=".$itemid."&show=1");   
      $atitle = $this->ut->setNameWithMaxLength($row->title, $param['max_length']);
      $output .= "<li><span class=\"mosprayerlatesxmeta\">"._PRY_R_NEW_COM."</span> "
//        .$this->h->aLink($thisurl,$atitle,"notarget")
        .$this->h->aLink($thisurl,$atitle)        
        .$metaData."</li>";
    }
    return "<div class=\"moduletable".$param['moduleclass_sfx']."\"><ul>"
    .$output."</ul></div>";
  }
  function userHomePage($iVar, $iClass) {
    (!$iVar->homepage || $iVar->homepage == "http://" || $iVar->homepage == $this->mccom['siteurl']) 
      ? $lhomepage=""
      : $lhomepage = "<span class=\"".$iClass."url\">"._PRY_R_HOMEPAGE." ".$this->h->aLink($iVar->homepage,_PRY_R_HOMEURL)." "; 
    return $lhomepage;
  }  
  // view can use $this  or $viewData from this class for data into view
  function renderView($filename) {
    $viewFile = $this->ut->frontOrBack($this->mccom)."view".$this->mccom['ds'].$filename;    
    $this->ut->ppDebug($viewFile,__METHOD__.' etype=>'.$this->mccom['etype']);  
    return parent::renderView($viewFile);
	}  
  function getArticleTitleLink($larticleid) {
    $art_txt = $this->m->getArticleTitle($larticleid);
    return $this->h->aLink("../index.php?option=com_content&task=view&id=$larticleid",$art_txt); // .. to get from the root not admin
  }  
  
  function getLatestX($numberofposts, $iusername="") {
    if (empty($iusername)) {
      $usrname = "";
    } else {
      $usrname = " and a.name = '".$iusername."'"; // get name
    }
    return $this->comment->getLatestX($numberofposts, $usrname);
  }    
  function getUserInfo($mccfg) {
  	$ruser=array('name'=>'','email'=>'','mode'=>'');
  	if ($mccfg['regonly'] == "1" || $this->my->id <> "") {
  		$mc_user = $this->m->dbQuerySelect("SELECT * FROM #__users where id = ".$this->my->id);  // get username
  		if ($mc_user) {
//        $this->mccom['gid'] = $mc_user[0]->gid;      
        ($mccfg['use_username'] == "1") 
        ?  $ruser['name'] = $mc_user[0]->username // pull username from user array        
        :  $ruser['name'] = $mc_user[0]->name; // pull name from user array
  		  $ruser['email'] = $mc_user[0]->email;
  		  $ruser['gid'] = $mc_user[0]->gid;        
  		  $ruser['mode'] = 'READONLY';
  		}
  	}
  	return $ruser;
  }
  function getBotId() {
  	$query = "SELECT id FROM ".$this->ut->getBotTableName()." WHERE element = 'mosprayerbot' AND folder = 'content'";
    return $this->m->dbQuerySelectValue($query);
  }
  function mambotParm($parm) {
  	$mambot = new mosMambot( $this->database );
  	$mambot->load( $this->getBotId() );
  	$bot_params =& new mosParameters( $mambot->params );
  	return $bot_params->def($parm);
  }
  function isMCBOT() { 
    return $this->m->dbQuerySelectValue("SELECT published FROM ".$this->ut->getBotTableName()." WHERE name LIKE 'mosprayerbot'"); 
  }  
 
} // end class
?>