<?php
/**
* @version 
* @package mosprayer.model.class.php
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
class MosprayerModel extends CoBase {

  var $mainframe;
  var $database;
  var $ut;
  var $config;
  function MosprayerModel () { // contructor
    global $mainframe;
    global $database; 
    $this->mainframe = $mainframe;
    $this->database = $database;
    if (!isset($coUtils)) $coUtils = new MosprayerUtils();
		$this->ut = $coUtils;  
    $this->_coVersion = parent::$_coVersion;
    
  }
  function allowType($type) {
  	$typeArray = array("current", "add", "drop", "change", "dropfromdb", "addtodb");
  	(in_array($type, $typeArray)) ? $ret=strtolower($type) : $ret="add";
  	return $ret;
  }    
  function fldsDiff($itype, $cfldList, $diffArray) {
    if (empty($itype) or empty($diffArray)) return;
    $fldList="";
    $type = $this->allowType($itype);
    if (!isset($cfldList) or empty($cfldList)) $cfldList = $this->arrayKey2Str($diffArray);
    if ($itype=="current") $type="add";	// chg current to add to load default config value
    if ($itype=="dropfromdb") $type="drop";	// chg dropfromdb to standdard DROP
    while (list($key, $val) = each($diffArray)) {
      $pattern = '/'.$key.'.*/';
      preg_match($pattern, $cfldList, $result);	// fldlist must have \n at each line
      if ($result) $fldList .= rtrim($type." ".$result[0]);	// get the 1st match item from array
    }
    return $fldList;
  }  
  function dbQuerySelectValue($mc_query) {
  	$this->database->setQuery($mc_query);
  	return $this->database->loadResult();
  }
  function dbQueryExec($sql) {
//    $this->ppDebug($sql,__METHOD__);      
    if (empty($sql)) return;
   	$this->database->setQuery($sql);
  	$result=$this->database->query();
  	if (!$result) { echo "<script> alert('".$this->database->getErrorMsg()."'); window.history.go(-1); </script>\n"; }
  	else { return $result; }
  }
  function dbQuerySelect($iQuery) {
//    $this->ppDebug($iQuery,__METHOD__);      
  	$this->database->setQuery($iQuery);
  	$mc_rows = $this->database->loadObjectList();
  	return $mc_rows;
  }    
  function fldsListFromArray($iArray) {
//    $this->ppDebug($iArray,__METHOD__);    
  	$fldList="";
  	if (!empty($iArray)) while (list($key, $val) = each($iArray)) $fldList .= "$key = '". $val. "', ";
  	if ($fldList) $fldList = substr($fldList,0,strlen($fldList)-2); // strip off , and space
  	return $fldList;
  } 


  function getItemid($row) {
    if ( ( $this->type == 1 ) || ( $this->type == 3 ) ) {
    	$bs 	= $this->mainframe->getBlogSectionCount();
    	$bc 	= $this->mainframe->getBlogCategoryCount();
    	$gbs 	= $this->mainframe->getGlobalBlogSectionCount();
    }

  	// get Itemid
  	switch ( $this->type ) {
  		case 2:
  			$query = "SELECT id"
  			. "\n FROM #__menu"
  			. "\n WHERE type = 'content_typed'"
  			. "\n AND componentid = " . (int) $row->id
  			;
  			$this->database->setQuery( $query );
  			$Itemid = $this->database->loadResult();
  			break;

  		case 3:
  			if ( $row->sectionid ) {
  				$Itemid = $this->mainframe->getItemid( $row->id, 0, 0, $bs, $bc, $gbs );
  			} else {
  				$query = "SELECT id"
  				. "\n FROM #__menu"
  				. "\n WHERE type = 'content_typed'"
  				. "\n AND componentid = " . (int) $row->id
  				;
  				$this->database->setQuery( $query );
  				$Itemid = $this->database->loadResult();
  			}
  			break;

  		case 1:
  		default:
  			$Itemid = $this->mainframe->getItemid( $row->id, 0, 0, $bs, $bc, $gbs );
  			break;
  	}
    return $Itemid;
  } 
 
  function getArticleTitle($larticleid) {
  	$aid=0;
  	if (is_array($larticleid) and (!empty($larticleid))) $aid=$larticleid[0];	// joomla 1.5.1 crash if not have this
  	else if (isset($larticleid)) $aid=$larticleid;
  	if (!$aid) $aid=0;
  	$add_txt="";
  	$mc_rows=$this->dbQuerySelect("Select title, id from #__content where id=$aid");
  	if ($mc_rows) {
  		$mc_i = 0;
  		foreach($mc_rows as $mc_row) { $ART[$mc_i] = $mc_row->title; }
  		if (strlen($ART[$mc_i]) < 35) { $add_txt = ""; }
  		if (strlen($ART[$mc_i]) > 35) { $add_txt = "..."; }
  		$art_txt = substr($ART[$mc_i], 0, 35) . $add_txt;
  		return $art_txt;
  	}
  }   

}
?>