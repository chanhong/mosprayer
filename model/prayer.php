<?php
/**
* @version 
* @package config.model.class.php
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
include_once("mosprayer.php");
class MosprayerPrayerModel extends MosprayerModel {
  function notExclude($mccfg,$id) { 
    return $this->notExcludeContents($mccfg, $id) 
      && $this->notExcludeSection($mccfg, $id)
      ; 
  }  
  function notExcludeSection($mccfg, $excl_id) {
    $exclude_array = explode( ',', $mccfg['excl_sec']);
    return !in_array($this->thisSID($excl_id), $exclude_array);       
  }  
  function notExcludeContents($mccfg, $excl_id) {
    $exclude_array = explode( ',', $mccfg['excl_contents']);
    return !in_array($this->thisAID($excl_id), $exclude_array);    
  }  
  function notCloseContents($mccfg, $excl_id) {
    $exclude_array = explode( ',', $mccfg['close_contents']);
    return !in_array($this->thisAID($excl_id), $exclude_array);
  }   
  function thisAID($aID) { return $this->dbQuerySelectValue("SELECT id FROM #__content where id=".$aID); }    
  function thisSID($sID) { return $this->dbQuerySelectValue("SELECT sectionid FROM #__content where id=".$sID); }  
  function dbSelectValue($aid) { return $this->dbQuerySelectValue("Select entry from #__content_mosprayer_requests where id=".$aid); }
  function dbSelectArticleComments($mccfg, $id) {
  	if ($mccfg['new_1st'] =="1" ) { $lorderby="order by id DESC"; } else {$lorderby="order by id ASC"; }
  	return $this->dbQuerySelect("SELECT * FROM #__content_mosprayer_requests where articleid=".$id." AND published=1 ".$lorderby);
  } 
  function dbSetFilter($search) {
    $where = "";
    if (isset($search) && $search!= "") { 
      $where = " WHERE entry LIKE '%".$search."%' OR name LIKE '%".$search."%' OR email LIKE '%".$search."%'";    
    }   
    return $where;
  }
  function getVarsFromPosts() {
//    $oneComment['articleid'] = $mccom['articleid'];  
  	$oneComment['name']=mosGetParam( $_POST, 'mc_comment_name', '' );
  	$oneComment['email']=$this->ut->spamUndoEmail(mosGetParam( $_POST, 'mc_comment_email', '' ));
  	$oneComment['homepage']=mosGetParam( $_POST, 'mc_comment_homepage', '' );
  	$mc_comment=mosGetParam( $_POST, 'mc_comment', '' ); // don't allow html
  	$oneComment['entry']=stripslashes(str_replace("\"","'",$mc_comment));  // replace double quote w/ single
  	return $oneComment;
  }   

  function dbSelect($search, $limitstart, $limit) {
    $where = $this->dbSetFilter($search);
    return $this->dbQuerySelect("SELECT * FROM #__content_mosprayer_requests" . $where ." ORDER BY id DESC LIMIT ".$limitstart.", ".$limit);
  }
  function getCount($search) { 
    $where = $this->dbSetFilter($search);    
    $result = $this->dbQueryExec("SELECT id FROM #__content_mosprayer_requests ".$where." ORDER BY id DESC");
    $total = $this->database->getNumRows($result);
    return $total; 
  }
    
  function getLatestX($numberofposts, $iusername="") {
    $qry="SELECT b.title, a.id as mcid, a.articleid as id, name, `date`, `time`  
  FROM `#__content` as b, `#__content_mosprayer_requests` as a LEFT JOIN `#__content` as c ON (c.id=a.articleid)
  WHERE b.id=a.articleid and published='1'".$iusername." order by mcid desc limit ".$numberofposts;   
    return $this->dbQuerySelect($qry);
  }   

  function action($task, $cid, $option) {
    $qry = $this->setActionSql($task, $cid);
    if (!empty($qry)) $this->dbQueryExec($qry);
    mosRedirect('index2.php?option='.$option, $task);        
  }    
  function setActionSql($task, $cid) {
    $qry = "";
    if (count( $cid )) {
      $cids = implode( ',', $cid );   
      switch ($task) {
      case "remove":
        $qry = "DELETE FROM #__content_mosprayer_requests WHERE id IN ($cids)";
        break;
      case "publish":
        $qry = "UPDATE #__content_mosprayer_requests SET published='1' WHERE id IN ($cids)";
        break;
      case "unpublish":
        $qry = "UPDATE #__content_mosprayer_requests SET published='0'  WHERE id IN ($cids)";
        break;
      }
    }
    return $qry;
  }   
  function dbAddPrep($mccom, $mccfg) {
    $oneComment = $this->getVarsFromPosts();
    $oneComment['articleid'] = $mccom['articleid'];       
    $output = _PRY_R_FULLY;  
// this will cause ajax to fail
//    $this->ut->ppDebug($oneComment,__METHOD__.'Check input');         
    if ($this->ut->isInputValid($oneComment,$mccfg)) {   
      $oneComment = $this->ut->cleanInput($oneComment);
      $oneComment['articleid'] = $mccom['articleid'];          
      $oneComment['date'] = date("F j, Y");
      $oneComment['time'] = date("G:i");
      $oneComment['ip'] = getenv('REMOTE_ADDR');  
      if (MOSPRAYER_DEBUG) { $oneComment['entry'] = "(".$mccom['gaid'].")=>".$oneComment['entry']; }      
//      (($mccfg['review'] == "0") or ($mccom['gid']=="25")) ? $oneComment['published'] = "1" : $oneComment['published'] = "0";
      (($mccfg['review'] == "0") or ($mccom['admin']==true)) ? $oneComment['published'] = "1" : $oneComment['published'] = "0";      
// this will cause ajax to fail      
//      $this->ut->ppDebug($oneComment,__METHOD__);   
      $output = $oneComment;
    }
    return $output;
  }  
  function dbAdd($mccom, $mccfg) {
    if ($mccom['gaid']<> $mccom['articleid']) return; // if not the same article don't add comment, prevent double post
// this will cause ajax to fail    
//    $this->ut->ppDebug($mccom,__METHOD__.'=>aid=>'.$mccom['articleid']);     
    $oneComment = $this->dbAddPrep($mccom, $mccfg);
    if (isset($oneComment) and is_array($oneComment)) {
//      $this->ut->ppDebug($oneComment,__METHOD__);   
      $this->dbInsert($oneComment); 
      $oneComment = $this->ut->sendAlert($oneComment, $mccfg);    
    }
    return $oneComment;
  }
  function xxdbAdd($mccom, $mccfg) {
    $oneComment = $this->getVarsFromPosts();
    $oneComment['articleid'] = $mccom['articleid'];       
    $output = _PRY_R_FULLY;    
    $this->ut->ppDebug($oneComment,__METHOD__.'Check input');         
    if ($this->ut->isInputValid($oneComment,$mccfg)) {   
      $oneComment = $this->ut->cleanInput($oneComment);
      $oneComment['articleid'] = $mccom['articleid'];          
      $oneComment['date'] = date("F j, Y");
      $oneComment['time'] = date("G:i");
      $oneComment['ip'] = getenv('REMOTE_ADDR');      
      if (MOSPRAYER_DEBUG) { $oneComment['entry'] = "(".$mccom['gaid'].")=>".$oneComment['entry']; }
      (($mccfg['review'] == "0") or ($mccom['gid']=="25")) ? $oneComment['published'] = "1" : $oneComment['published'] = "0";
      $this->ut->ppDebug($oneComment,__METHOD__);   
      $this->dbInsert($oneComment); 
      $output = $oneComment;
//      $output = $this->ut->sendAlert($oneComment, $mccfg);    
    }
    return $output;
  }
  function dbEditSave($option) {
  	$cid = intval(mosGetParam( $_POST, 'cid', '' ));
  	$comment = mosGetParam( $_POST, 'comment', '', 0x0002 ); // 2 = allow html
  	$comment = $this->ut->bbCode($comment);
  	$this->dbQueryExec('UPDATE #__content_mosprayer_requests SET entry="'.$comment.'" WHERE id = "'.$cid.'"');
  	$mosmsg = "Comment id ".$cid." is saved";
  	mosRedirect( 'index2.php?option='. $option, $mosmsg);
  }  
//INSERT INTO `#__content_mosprayer_requests` (`articleid`, `id`, `entry`, `name`, `email`, `homepage`, `date`, `time`, `published`) VALUES (1, 0, 'This is a test entry against article 1', 'Chanh Ong', 'chanh.ong@gmail.com', 'http://ongetc.com', 'Today', 'Now!', '0') 
  function dbInsert($iArray) {
    !empty($iArray) ? $fldList = $this->fldsListFromArray($iArray) : $fldList = "";
//     $this->ppDebug($iArray,__METHOD__.'=>fldList=>'.$fldList);     
    (!empty($fldList) and !empty($iArray['articleid'])) ? $sql = "INSERT INTO #__content_mosprayer_requests SET id=0, ".$fldList : $sql = ""; 
//     $this->ppDebug($sql,__METHOD__.'sql=>');     
    if (!empty($sql)) $this->dbQueryExec($sql);  
    return;
  }      

  // need to work on these below
  function schemaArray() {
    $mcarray=array();
    $mcarray['articleid'] = array(
    'field'=>"int(11) NOT NULL default 0",
    );
    $mcarray['id'] = array(
    'field'=>"int(10) unsigned zerofill NOT NULL AUTO_INCREMENT",
    );     
    $mcarray['entry'] = array(
    'field'=>"text NOT NULL",    
    );
    $mcarray['name'] = array(
    'field'=>"text NOT NULL",       
    );
    $mcarray['email'] = array(
    'field'=>"varchar(63) NOT NULL default ''",       
    );
    $mcarray['homepage'] = array(
    'field'=>"varchar(63) NOT NULL default ''",       
    );
    $mcarray['date'] = array(
    'field'=>"varchar(20) NOT NULL default ''",      
    );
    $mcarray['time'] = array(
    'field'=>"varchar(5) NOT NULL default ''", 
    );
    $mcarray['published'] = array(
    'field'=>"char(1) NOT NULL default '0'",     
    );
    $mcarray['ip'] = array(
    'field'=>"char(15) NOT NULL default ''",     
    );    
    return $mcarray;
  }  
  
  function getFieldsList($itype="current") {
// must separate by a return for parse to work correctly
// reminder! add to both current cfg and add cfg for the upgrade to work correctly!
/*
    $cfgFlds="articleid int(11) NOT NULL default 0,
entry text NOT NULL,
name text NOT NULL,
email varchar(63) NOT NULL default '',
homepage varchar(63) NOT NULL default '',
date varchar(20) NOT NULL default '',
time varchar(5) NOT NULL default '',
published char(1) NOT NULL default '0',
 ";
*/

  $cfgFlds = $this->array2Field($this->schemaArray());

// reminder! add to both current cfg and add cfg for the upgrade to work correctly!
// must separate by a return for parse to work correctly
// must give it a full specification of the field for it to work.
//  use_divcss varchar(1) NOT NULL default '1',
    $cfgAddFlds="ip char(15) NOT NULL default '',
";

// must separate by a return for parse to work correctly
//use_test1 prev_fld1 VARCHAR(1) NOT NULL DEFAULT '1',
    $cfgChgFlds="
";

// must separate by a return for parse to work correctly
// prev_fld1,
    $cfgDropFlds="
";
  	$retcfg = "";
  	$type=$this->allowType($itype);
  	switch ($type) {
  	case "add":
  		$retcfg = $cfgAddFlds; break;
  	case "change":
  		$retcfg = $cfgChgFlds; break;
  	case "drop":
  		$retcfg = $cfgDropFlds; break;
  	case "current":
  		$retcfg = $cfgFlds; break;
  	}
//    $this->ppDebug($retcfg,__METHOD__.'=>type=>'.$type);    
//    $this->prt($retcfg,__METHOD__);
  	return $retcfg;
  }  
  function schemaArrayFromFieldsList($itype="current") { 
    $return = $this->flds2Array($itype, $this->getFieldsList($itype)); 
    return $return;
  } 
  function dbSaveTable() {
    $this->dbInsertTable();
  	$cfg = $this->schemaArrayFromFieldsList("current");    
    $mccfg = $this->ut->arrayFromPost($cfg);    
  	$this->dbUpdateTable($mccfg);
//  	$redirectlink="index2.php?option=com_mosprayer&task=config"; // stay at config screen
  	$redirectlink="index2.php?option=com_mosprayer"; // force a reload to get new value from db
  	mosRedirect($redirectlink,"Saved Config!"); 
  }    
  function dbInsertTable() {
    $dbInit = false;
  	if (!$this->dbSelectTable()) {
      $this->dbQueryExec($this->dbCreateTable()); // create cfg table if not there
      $this->dbQueryExec("INSERT INTO `#__content_mosprayer_requests` ( `id`) value (0)");   
      $this->dbUpdateTable($this->schemaArrayFromFieldsList("current"));
   
      $dbInit = true;
    }
    $this->ppDebug($dbInit,__METHOD__.'=>init');      
    return $dbInit;
  }    
  function dbCreateTable() {
    return "CREATE TABLE IF NOT EXISTS `#__content_mosprayer_requests` (
   `id` int(10) unsigned zerofill NOT NULL auto_increment,".$this->getFieldsList("current")."
   KEY `id` (`id`)
) TYPE=MyISAM
";
  }   
  function dbAlterTable($type, $diffArray) {
    if (empty($type) or empty($diffArray)) return;
    $fldsList = trim($this->fldsDiff($type, $this->getFieldsList($type), $diffArray),","); // remove last , 
    !empty($fldsList) ? $sql = "ALTER TABLE `#__content_mosprayer_requests` ".$fldsList.";" : $sql = "";
    $this->PPdebug($fldsList,'fldsList');
    $this->PPdebug($diffArray,'diffArray');
    $this->PPdebug($sql,'sql'); 
    if (!empty($sql)) $this->dbQueryExec($sql);    
  }  
  function dbUpdateTable($iArray) {
	// Sample: admin_email='".$mccfg['admin_email']."' , email_alerts='".$mccfg['email_alerts']."'
    $id = $this->getRid();
    !empty($iArray) ? $fldList = $this->fldsListFromArray($iArray) : $fldList = "";
    (!empty($fldList) and !empty($id)) ? $sql = "UPDATE #__content_mosprayer_requests SET ".$fldList." where id='".$id."'" : $sql = "";  
    if (!empty($sql)) $this->dbQueryExec($sql);    
  }  

  function dbSelectTable() {
  	$rows = $this->dbQuerySelect("SELECT * FROM `#__content_mosprayer_requests` limit 1");
  	($rows) ? $row = $rows[0] : $row = array(); // only one row for config
  	return $row;
  }

  function getRid() {
  	($row=$this->dbSelectTable()) ? $rid=$row->id : $rid=""; // should only be one row so hard code 0
  	return $rid;
  } 
  function getSchema() {
  	($rows=$this->dbSelectTable()) ? $cfgRow = $this->row2Array($rows) : $cfgRow = array(); // only one row for config
  	return $cfgRow;
  }
}
?>