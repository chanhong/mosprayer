<?php
/**
* @version 
* @package co.base.class.php
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
defined('CO_DEBUG') or define('CO_DEBUG',false);
class CoBase {
var $_viewData;
var $_viewParm;

  static $_coVersion;
  function CoBase () { // contructor
    $this->_coVersion = "0.1";
  }
  function debug($iarray,$itext="",$show="show",$formated="") {
//    if (empty($iarray)) return;
    ($itext) ? $otext = $itext."=>" : $otext="";
    $buff = "<p align='left'/>".$otext.print_r($iarray,true);
    if ($formated) $buff = "<pre>$buff</pre>";
    (strtolower($show)<>"show") ? $buff = "<!-- $buff -->" : $buff = $iwho.$buff;
    return $buff;
  }  
  function ppDebug($iarray,$itext="",$show="show") { if (CO_DEBUG) echo self::debug($iarray,$itext,$show); } 
  function prt($iarray,$itext="",$show="show") { echo self::debug($iarray,$itext,$show); }    
  function array2Field($iArray) {
    if (empty($iArray)) return;
    $buff="";
  	foreach ($iArray as $key=>$value) {
  		if ($value['field']) $buff .= $key." ".$value['field'].",\n"; 
  	}
  	return $buff;
  } 
  function arrayKey2Str($iarray) {
  	$ostr="";
  	while (list($key, $val) = each($iarray)) { $ostr.=$key.",\n"; }
  	return $ostr;
  }  
  function flds2Array($itype="current",$iFlds) {
    $cFlds = str_replace(array("\r\n", "\n", "\r","\n\r","\t","`","'"), "", $iFlds);	// remove all tab, return
    $arrayFlds = array();
  	$cFlds=preg_replace('/\s+/i',' ', $cFlds);	// compress all space
  	$flds=explode(',',$cFlds);
  	foreach ($flds as $fld) {
  		$cols=explode(' ',$fld);
  		if (isset($cols[0]) and $cols[0]<>null) {
  			switch ($itype) {
  			case "change":
  				$key=$cols[0];
  				$value=$cols[6];
  				$arrayFlds[$key]=$value;
  				break;
  			case "drop":
  				$key=$cols[0];
  				$value='';
  				$arrayFlds[$key]=$value;
  				break;
  			case "current":
  			case "add":
  				$key=$cols[0];
  				$value=$cols[5];
  				$arrayFlds[$key]=$value;
  				break;
  			default:
  			}
  		}
  	}
  	return $arrayFlds;
  }
  function trim1stFromArray($row) {
  	$barray=array();
  	if ($row) {
  		$barray = get_object_vars($row);  // convert row to array
  		array_shift($barray);  // shift off id field
  	}
  	return $barray;
  } 
  function row2Array($row) {
  	$barray=array();
  	if ($row) {
  		$barray = get_object_vars($row);  // convert row to array
//  		array_shift($barray);  // shift off id field
  	}
  	return $barray;
  }   
  function renderView($filename) {
//    self::ppDebug($filename,__METHOD__);   
    $contents = "";
    if (is_file($filename)) {
      if (!empty($this->_viewData)) $viewData = $this->_viewData; // pass data into view if not empty    
      if (!empty($this->_viewParm)) $viewParm = $this->_viewParm; // pass data into view if not empty          
      ob_start();
      include $filename;
      $contents = ob_get_contents();
      ob_end_clean();
    }
    return $contents;   
	}     
}
?>