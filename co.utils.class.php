<?php
/**
* @version 
* @package co.utils.class.php
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
// SHOULD NOT have any database releated call here!
include_once("co.base.class.php");
class CoUtils extends CoBase {
  function CoUtils() { // contructor
    $this->_coVersion = parent::$_coVersion;    
  }
   
  // function that use low level function from low level
  function mergeArrayWithRow($iArray, $iRow) {
  	$rArray=$iArray;
  	if ($iArray and $iRow) {
  		while (list($key, $val) = each($iArray)) {
  			if (isset($iRow[$key]) and ($iRow[$key]<>null)) $rArray[$key] = $iRow[$key]; // get value from cfg in db
  			else $rArray[$key] = $iArray[$key]; // get value from cfg array
  		}
  	}
  	return $rArray;  
  }
  function spamNotEmail($email) { return str_replace('@', '[at]', $email); }  
  function spamUndoEmail($email) { return str_replace('[at]', '@', $email); }  
  function phpMail ($from, $fromName='', $to, $subject, $msg) {
  	$header  = "MIME-Version: 1.0\r\n";
  	$header .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  	$header .= "Content-Transfer-encoding: 8bit\r\n";
  	$header .= "From: ".$from."\r\n";
  	$header .= "Message-ID: <".md5(uniqid(time()))."@{$_SERVER['SERVER_NAME']}>\r\n";
  	$header .= "Return-Path: ".$from."\r\n";
  	$header .= "X-Priority: 3\r\n";
  	$header .= "X-MSmail-Priority: Low\r\n";
  	$header .= "X-Mailer: PHP\r\n"; //hotmail and others dont like PHP mailer. --Microsoft Office Outlook, Build 11.0.5510
  	$header .= "X-Sender: ".$from."\r\n";
  	$res = mail($to, $subject, $msg, $header);  
  }
	function var2String($var,$format=""){
		$code="";
    if (is_array($var)) {
      $code = 'array('."\n";
      foreach ($var as $key => $value) {
        ($format) ? $yestab = "\t" : $yestab = "";
        $code .= $yestab."'$key'=>".self::var2String($value).',';
//        $code .= $yestab."'$key'=>".self::var2String($value).',';        
        if ($format) $code .= "\n";
      }
      $code = chop($code, ','); //remove unnecessary coma
      $code .= ')';
      return $code;
    } else {
      if (is_string($var)) {
        return "'".self::escapeSingleQuote($var)."'";
      } elseif (is_numeric($var)) {
        return $var;
      } elseif (is_bool($code)) {
        return ($code ? 'TRUE' : 'FALSE');
      } else {
        return 'NULL';
      }
    }
	} 
  function diffDaysInDate($tm,$days) { 
  	$diff = self::d2t(self::t2days($tm)+$days);
  	return self::dte($diff);
  }
  function diffDays($tm,$dte) { 
  	if ($dte>$tm) { $diff=$dte-$tm; } else { $diff=$tm-$dte;} 
  	return self::t2Days($diff);
  }
	function siteAbsDir() { return self::stripDriveLetter(getcwd()); }
	function siteUrl() { return self::siteUrlName() . self::siteRoot(); } 
	function fullUrl() { return self::siteUrlName() . $_SERVER['REQUEST_URI']; }
  
  // low level function w/o dependency
	function basename($filespec) {
		$path_parts = pathinfo($filespec);
		(count($path_parts)>0) ? $return = $path_parts['basename'] : $return = "";
		return $return;
	}
	function siteUrlName() {
		$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
		$protocol = substr(strtolower($_SERVER["SERVER_PROTOCOL"]), 0, strpos(strtolower($_SERVER["SERVER_PROTOCOL"]), "/")) . $s;
		$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
		return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port;
	}
	function lastPart($inString,$inParse="/") {
		$tArray = explode($inParse,$inString);
		$last = end($tArray);	// get the last item
		(!empty($last)) ? $return = $last : $return = "";
		return $return;
	}
	function siteRoot() {
		$uri=explode("/",$_SERVER['REQUEST_URI']);
		(!empty($uri) && isset($uri[1]) && $uri[1]<>"") ? $siteFolder="/".$uri[1] : $siteFolder="";
		return $siteFolder;
	}  
	function encryptPw($pw) { 
    $salt = "salt";
    return sha1($salt.$pw.$salt); 
  }
  function stripDriveLetter($iPath) { return array_pop(explode(":",$iPath)); } 
	function string2Var($string){ return eval('return '.$string.';'); }  
  function stripos($str,$needle,$offset=0) { return strpos(strtolower($str),strtolower($needle),$offset); }  
  function using($iFile) { 
    $found = false;
    if (@file_exists($iFile)) {
      include($iFile); 
      $found = true;
    }
    return $found;
  }  
  function usingOnce($iFile) { 
    $found = false;
    if (@file_exists($iFile)) {
      include_once($iFile); 
      $found = true;
    }
    return $found;
  }
  function escapeSingleQuote($string) {	// fix single quote problem with fckeditor
    return str_replace("'","&#039",str_replace("\n","",str_replace("\r","",$string)));
	}  
 	function fileExist($filespec) {
		(file_exists($filespec)) ? $return = $filespec : $return = ""; 
		return $return;
	}
	function getLastArrayItem($iArray, $field) {
		if (empty($iArray)) return array();
		$iArray = self::sortArrayByField($iArray, $field);
		end($iArray);
		$lastPage = array_pop($iArray);
		return $lastPage[$field];
	}
	function sortArrayByField($original, $field, $descending = false) {
		if (empty($original)) return array();
		$sortArr = array();
		foreach ( $original as $key => $value ) $sortArr[ $key ] = $value[ $field ];
		( $descending ) ? arsort( $sortArr ) : asort( $sortArr );
		$resultArr = array();
		foreach ( $sortArr as $key => $value ) $resultArr[ $key ] = $original[ $key ];
		return $resultArr;
	}  
  function getTimeOffset($idate,$itime,$ioffset) {
    $offsettime = strtotime($idate." ".$itime)+($ioffset*60*60);
    $texttime = strftime ( "%m/%d/%Y %H:%M" , $offsettime);
    return explode(" ",$texttime);
  }
  function escapeString($istring) {
  	if ((self::is1stNewer2nd(substr(phpversion(),1,3),"4.2")) && (function_exists('mysql_real_escape_string'))) { 
  		$istring = self::quote_smart($istring); 
  	}
  	else { 
  		if (function_exists('mysql_escape_string'))  { 
  			$istring = mysql_escape_string($istring); 
  		} 
  	} // php 4.2
  return $istring;
  }
  function pregMatchBetween($a_sStart, $a_sEnd, $a_sSubject) {
  	$pattern = '/'. $a_sStart .'(.*?)'. $a_sEnd .'/';
  	preg_match($pattern, $a_sSubject, $result);
  	return $result[1];
  }  
  function is1stNewer2nd($first,$second) {
     (version_compare($first,$second)=="1") ? $newer=true : $newer=false;
     return $newer;
  }
//  function setDS() { return (preg_match("/\//i", $_SERVER['DOCUMENT_ROOT'])) ? $ds="/" : $ds="\\"; }
  function setDS($ivar="") { 
    if ($ivar=="") $ivar = getcwd();
    return (preg_match("/\//i", $ivar)) ? $ds="/" : $ds="\\"; 
  }  
  function ds2UrlPath($ivar,$ds='\\') {
  	($ds=="\\") ? $output = str_replace('\\', '/', $ivar) : $output = $ivar;	// convert bs to slash directory to url 
  	return $output;
  }
  function fixDupInPathRtrim($ivar) { 	// mambo h:/path/mos joomla path/joomla
//    (preg_match("/\//i", $ivar)) ? $ids="/" : $ids="\\"; 
    $ids = self::setDS($ivar);
  	str_replace($ids.$ids, $ids, $ivar);	// remove dup
  	return rtrim($ivar,$ids).$ids;	// trim last slash
  }
  function quoteSmart($istring) {
    if (get_magic_quotes_gpc()) { $istring = stripslashes($istring); }
    if (!is_numeric($istring)) { $istring = mysql_real_escape_string($istring); }
    return $istring;
  }  

  function strPad($ivar, $ilen, $ipad, $iflag=STR_PAD_RIGHT) {
    $trans = array('$'=>$ivar,' '=>$ipad);
    $output = str_pad('$',$ilen-strlen($ivar)+1,' ',$iflag);
    return strtr($output,$trans);
  }
  function escEntities($istr) { return htmlentities($istr, ENT_QUOTES,"UTF-8"); }
  function trimSlash($istring) { return str_replace("//", "/", $istring); }
// replace crlf to br, replace 2br to </p><<o> then append <p>..</p>
  function nl2p($text) { return '<p>' . str_replace("<br/><br/>", "</p><p>", str_replace("\r\n", "<br/>", $text))."</p>"; }
  function nl2brStrict($text, $replacement = '<br />') { return preg_replace("((\r\n)+)", trim($replacement), $text); }
  function setNameWithMaxLength($iname,$imax) {
    if (get_magic_quotes_gpc()) $iname = stripslashes($iname);
    if (strlen($iname) > $imax and $imax>0) { $iname = substr($iname,0,$imax-4)." ...";   }
    if (get_magic_quotes_gpc()) $iname = addslashes($iname);	
  	$iname = self::escEntities($iname);
    return $iname;
  }
  function ximgSrc($img) { 
  	($img) ? $output = "<img src=\"$img\" alt=\"image\" />" : $output="";
  	return $output;
  }

  function nameRandId($iname) {
  	// ID name Randomizer to avoid conflict in case of multiple modules 
  	srand ((double) microtime() * 1000000);
  	$uniqid = rand( 1, 99 );
  	return $iname.$uniqid;
  }
  function bbCode($messagetext) {
  // assume it already been clean before call this function
//  $messagetext = stripslashes($messagetext);
    $target_tags = "target=\'_blank\'";

    $search = array(
//		"/\[img\](.+?)\[\/img\]/is",
//    "/\[img\]((http|https|ftp):\/\/[a-z0-9;\/\?:@=\&\$\-_\.\+!*'\(\),~%# ]+?)\[\/img\]/is",
        "/\[url\]((http|https|ftp|mailto):\/\/([a-z0-9\.\-@:]+)[a-z0-9;\/\?:@=\&\$\-_\.\+!*\'\(\),\#%~ ]*?)\[\/url\]/is",
        "/\[url=((http|https|ftp|mailto):\/\/[a-z0-9;\/\?:@=\&\$\-_\.\+!*\'\(\),~%# ]+?)\]\[\/url\]/is",
        "/\[url=((http|https|ftp|mailto):\/\/[a-z0-9;\/\?:@=\&\$\-_\.\+!*\'\(\),~%# ]+?)\](.+?)\[\/url\]/is",
        "/\[email\]([a-z0-9\-_\.\+]+@[a-z0-9\-]+\.[a-z0-9\-\.]+?)\[\/email\]/ies",
        "/\[color=([\#a-z0-9]+?)\](.+?)\[\/color\]/is",
        "/\[size=([+\-\da-z]+?)\](.+?)\[\/size\]/is",
        "/\[b\](.+?)\[\/b\]/is",
        "/\[u\](.+?)\[\/u\]/is",
        "/\[i\](.+?)\[\/i\]/is",
        "/\[s\](.+?)\[\/s\]/is",
        "/\[center\](.+?)\[\/center\]/is",
        "/\[hr\]/i",
        "/\[code\](.+?)\[\/code\]/is",
        "/\[sub\](.+?)\[\/sub\]/is",
        "/\[sup\](.+?)\[\/sup\]/is",
    );
    $replace = array(
//		"<img src=\'$1\' border=\'0\' alt=\'$1\' />",
//    "<img src=\'$1\' border=\'0\' alt=\'$1\' />",
        "[<a $target_tags href=\'$1\'>$3</a>]",
        "<a $target_tags href=\'$1\'>$1</a>",
        "<a $target_tags href=\'$1\'>$3</a>",
        "<a $target_tags href=\'mailto:$1\'>$1</a>",
        "<span style=\'color: $1\'>$2</span>",
        "<span style=\'font-size: $1\'>$2</span>",
        "<strong>$1</strong>",
        "<u>$1</u>",
        "<i>$1</i>",
        "<s>$1</s>",
        "<center class=\'bbcode\'>$1</center>",
        "<hr class=\'bbcode\' />",
        "<pre class=\'bbcode\'>$1</pre>",
        "<sub class=\'bbcode\'>$1</sub>",
        "<sup class=\'bbcode\'>$1</sup>",
    );

  $messagetext = preg_replace($search, $replace, $messagetext);

  $quote_search = array(
        "/\[quote\]/is",
        "/\[quote ([^\]]+?)\]/is",
        "/\[quote=([^\]]+?)\]/is",
        "/\[\/quote\]/is"
  );
  $quote_replace = array(
        "<blockquote class=\'bbcode\'>:<div>",
        "<blockquote class=\'bbcode\'>:<div><strong>$1</strong><br />",
        "<blockquote class=\'bbcode\'>:<div><strong>$1</strong><br />",
        "</div></blockquote>"
  );
    if(isset($messagetext)){
      // do BB Code here
      $body = $messagetext;
      // no sense doing any of this if there is no [ in the body
      if(strstr($body, "[")){
          // convert bare email addresses into bbcode tags as best we can.
        $body = preg_replace("/(^|[\s])([a-z0-9][a-z0-9\-_\.\+]+@[a-z0-9\-]+\.[a-z0-9\-\.]+[a-z0-9])([\?\!\.,;:\s]|$)/i", "$1[email]$2[/email]$3", $body);

        // fiddle with white space around quote and code tags.
        $body=preg_replace("/\s*(\[\/*(code|quote)\])\s*/", "$1", $body);
        // run the pregs defined above
        $body = preg_replace($search, $replace, $body);
        // quote has to be handled differently because they can be embedded.
        // we only do quote replacement if we have matching start and end tags
        if(strstr($body, "[quote") && substr_count($body, "[quote")==substr_count($body, "[/quote]")){
            $body = preg_replace($quote_search, $quote_replace, $body);
        }
      }
      $messagetext = $body;
    }
    return $messagetext;
  }  
  function unHTMLEntities($string) {
      // replace numeric entities
      $string = preg_replace('~&#x([0-9a-f]+);~ei', 'chr(hexdec("\\1"))', $string);
      $string = preg_replace('~&#([0-9]+);~e', 'chr("\\1")', $string);
      // replace literal entities
      $trans_tbl = get_html_translation_table(HTML_ENTITIES);
      $trans_tbl = array_flip($trans_tbl);
      return strtr($string, $trans_tbl);
  }
  function getParam($param,$posttype="") {
    $return = "";
  	if ($posttype) {
  		if (isset($_POST["$param"])) $return = $_POST["$param"];
  	} else {	// assume get
  		if (isset($_GET["$param"])) $return = $_GET["$param"];
  	}
  	return self::unHTMLEntities($return);
  }  
  function sendToken($mysite) {
  	$myid=strtolower(self::getParam('id'));
  	$myapp=strtolower(self::getParam('app'));
  	$ctToken = mktime();
  	setcookie($myapp,md5($mysite.$myid.$ctToken), 0, '/');
  	self::sendHeader();
  	echo $ctToken;
  }
  // security check to ensure only serve from the server where the application is run.
  function isGoodRequest($mysite) {
  	if ($mysite==$_SERVER['SERVER_NAME']) {	// some site use cluster servers so can't use this $_SERVER['SERVER_ADDR']
  		return true;
  	} else {
  		self::sendHeader();
  		echo "This server only serve from ".$_SERVER['SERVER_NAME'];
  		return false;
  	}
  }
  function sendHeader() {
  	# 'Expires' in the past
  	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

  	# Always modified
  	header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');

  	# HTTP/1.1
  	header('Cache-Control: no-store, no-cache, must-revalidate');
  	header('Cache-Control: post-check=0, pre-check=0', false);

  	# HTTP/1.0
  	header('Pragma: no-cache');
  }
  // old way to send ajax token, now use front controller
  function xgetServerMain() {
    $mysite=self::getParam('ip');
    $mytask=strtolower(self::getParam('task'));
    if (self::isGoodRequest($mysite)==true) {
    	switch ($mytask) {
    		case 'gettoken':
    			self::sendToken($mysite);
    			break;
    		default:
    	}
    } 
  }  
	function getIncludeContent($filename) {
    $contents = "";
    if (is_file($filename)) {
      ob_start();
      include $filename;
      $contents = ob_get_contents();
      ob_end_clean();
    }
    return $contents;
	}   
  function unAmp($text) { return str_replace("&amp;", "&", $text); }  
  function xampIt($text) { 
    $pos = strripos("&amp;", $text);
    ($pos == false) ? $return = $text : $return = str_replace("&", "&amp;", $text);
    return $return;
  }    
  function ampIt($text) { 
    $search = "&amp;";
    $pos = stripos($search, $text);
    if ($pos > 0 ) $text = str_replace($search, "&", $text);
    return str_replace("&", "&amp;", $text);
  }     
  function d2t($dte) { return ($dte*60*60*24); }
  function t2Days($tm) { return round($tm/60/60/24); }
  function dte($tm) { return date( "Y-m-d H:i:s",$tm); }
//  function prt($il) { echo $il."\n<br />"; }  
  // need to move this to COBase but first need to write a replacement for mosGetParam
  function arrayFromPost($iArray) {
  	// get each variable from _POST variable use iarray as key
  	while (list($key, $val) = each($iArray)) $oArray[$key] = self::getParam($key, 'post');
  	return $oArray;
  }   
//  function pDebug($iarray,$itext="",$show="show") { parent::pDebug($iarray,$itext,$show); }  
}
?>