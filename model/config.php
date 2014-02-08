<?php
/**
* @version 
* @package config.model.class.php
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
include_once("mosprayer.php");
class MosprayerConfigModel extends MosprayerModel {

  function schemaArray() {
    $mcarray=array();
    $mcarray['id'] = array(
    'type'=>'',
    'name'=>'', 
    'desc'=>'',
    'field'=>"int(10) unsigned zerofill NOT NULL AUTO_INCREMENT",
    );    
    $mcarray['admin_email'] = array(
    'type'=>'input',
    'name'=>_PRY_A_ADMIN_EMAIL, 
    'desc'=>_PRY_A_ADMIN_EMAIL_DESC,
    'field'=>"varchar(63) NOT NULL default 'changeme@mail.com'",
    );
    $mcarray['excl_sec'] = array(
    'type'=>'input',
    'name'=>_PRY_A_EXCL_SEC, 
    'desc'=>_PRY_A_EXCL_SEC_DESC,
    'field'=>"varchar(63) NOT NULL default '0'",    
    );
    $mcarray['excl_contents'] = array(
    'type'=>'input',
    'name'=>_PRY_A_EXCL_CONT, 
    'desc'=>_PRY_A_EXCL_CONT_DESC,
    'field'=>"varchar(63) NOT NULL default '0'",       
    );
    $mcarray['close_contents'] = array(
    'type'=>'input',
    'name'=>_PRY_A_CLOSE_CONT, 
    'desc'=>_PRY_A_CLOSE_CONT_DESC,
    'field'=>"varchar(63) NOT NULL default '0'",       
    );     
    $mcarray['per_page'] = array(
    'type'=>'input',
    'name'=>_PRY_A_PER_PAGE,
    'desc'=>_PRY_A_PER_PAGE_DESC,
    'field'=>"varchar(3) NOT NULL default '15'",       
    );
    $mcarray['donated'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_HAVE_DONATED,
    'desc'=>_PRY_A_DONATE2,
    'field'=>"varchar(1) NOT NULL default '0'",       
    );
    $mcarray['email_alerts'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_ADMIN_ALERTS, 
    'desc'=>_PRY_A_ADMIN_EMAIL_ENABLE,
    'field'=>"varchar(1) NOT NULL default '1'",      
    );
    $mcarray['email_alerts_user'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_VISITOR_EMAIL,  
    'desc'=>_PRY_A_VISITOR_EMAIL_DESC,
    'field'=>"varchar(1) NOT NULL default '0'", 
    );
    $mcarray['review'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_REVIEW_SUBM,  
    'desc'=>_PRY_A_REVIEW_DESC,
    'field'=>"varchar(1) NOT NULL default '1'",     
    );
    $mcarray['regonly'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_REGISTERED_ONLY, 
    'desc'=>_PRY_A_REG_ONLY_DESC,
    'field'=>"varchar(1) NOT NULL default '0'",      
    );
    $mcarray['updates'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_NOTIFY_VERSION,  
    'desc'=>_PRY_A_NOT_VER_DESC,
    'field'=>"varchar(1) NOT NULL default '0'",       
    );
    $mcarray['force_preview'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_FORCE_PREVIEW, 
    'desc'=>_PRY_A_FORCE_PREVIEW_TEXT,
    'field'=>"varchar(1) NOT NULL default '1'",     
    );
    $mcarray['hide_comments'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_HIDE, 
    'desc'=>_PRY_A_HIDE_DESC,
    'field'=>"varchar(1) NOT NULL default '0'",     
    );
    $mcarray['hide_url'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_HIDE_URL, 
    'desc'=>_PRY_A_HIDE_URL_DESC,
    'field'=>"varchar(1) NOT NULL default '1'",        
    );
    $mcarray['email_req'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_EMAIL_REQ, 
    'desc'=>_PRY_A_EMAIL_REQ_DESC,
    'field'=>"varchar(1) NOT NULL default '0'",     
    );
    $mcarray['new_1st'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_NEW_1ST, 
    'desc'=>_PRY_A_NEW_1ST_DESC,
    'field'=>"varchar(1) NOT NULL default '1'",  
    );
    $mcarray['form_above'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_FORM_ABOVE, 
    'desc'=>_PRY_A_FORM_ABOVE_DESC,
    'field'=>"varchar(1) NOT NULL default '0'",     
    );
    $mcarray['use_divcss'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_USE_DIVCSS, 
    'desc'=>_PRY_A_USE_DIVCSS_DESC,
    'field'=>"varchar(1) NOT NULL default '1'",        
    );
    $mcarray['use_username'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_USE_USERNAME, 
    'desc'=>_PRY_A_USE_USERNAME_DESC,
    'field'=>"varchar(1) NOT NULL default '1'",        
    ); 
    $mcarray['use_sectoken'] = array(
    'type'=>'radio',
    'name'=>_PRY_A_USE_SECTOKEN, 
    'desc'=>_PRY_A_USE_SECTOKEN_DESC,
    'field'=>"varchar(1) NOT NULL default '1'",        
    ); 
    return $mcarray;
  }  
  
  function getFieldsList($itype="current") {
// must separate by a return for parse to work correctly
// reminder! add to both current cfg and add cfg for the upgrade to work correctly!
/*
    $cfgFlds="admin_email varchar(63) NOT NULL default 'changeme@mail.com',
excl_sec varchar(63) NOT NULL default '0',
excl_contents varchar(63) NOT NULL default '0',
per_page varchar(3) NOT NULL default '15',
donated varchar(1) NOT NULL default '0',
email_alerts varchar(1) NOT NULL default '1',
email_alerts_user varchar(1) NOT NULL default '0',
review varchar(1) NOT NULL default '1',
regonly varchar(1) NOT NULL default '0',
updates varchar(1) NOT NULL default '0',
force_preview varchar(1) NOT NULL default '1',
hide_comments varchar(1) NOT NULL default '0',
hide_url varchar(1) NOT NULL default '1',
email_req varchar(1) NOT NULL default '0',
new_1st varchar(1) NOT NULL default '1',
form_above varchar(1) NOT NULL default '0',
use_divcss varchar(1) NOT NULL default '1',
";
*/

  $cfgFlds = $this->array2Field($this->schemaArray());

// reminder! add to both current cfg and add cfg for the upgrade to work correctly!
// must separate by a return for parse to work correctly
// must give it a full specification of the field for it to work.
//  use_divcss varchar(1) NOT NULL default '1',
    $cfgAddFlds="use_divcss varchar(1) NOT NULL default '1',
use_username varchar(1) NOT NULL default '0',
use_sectoken varchar(1) NOT NULL default '1',
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
  function dbInsertTable() {
    $dbInit = false;
  	if (!$this->dbSelectTable()) {
      $this->dbQueryExec($this->dbCreateTable()); // create cfg table if not there
      $this->dbQueryExec("INSERT INTO `#__content_mosprayer_config` ( `id`) value (0)");
      $this->dbUpdateTable($this->schemaArrayFromFieldsList("current"));
      $dbInit = true;
    }
    $this->ppDebug($dbInit,__METHOD__.'=>init');      
    return $dbInit;
  }    
  function dbCreateTable() {
    return "CREATE TABLE IF NOT EXISTS `#__content_mosprayer_config` (
   `id` int(10) unsigned zerofill NOT NULL auto_increment,".$this->getFieldsList("current")."
   KEY `id` (`id`)
) TYPE=MyISAM
";
  }   
  function dbAlterTable($type, $diffArray) {
    if (empty($type) or empty($diffArray)) return;
    $fldsList = trim($this->fldsDiff($type, $this->getFieldsList($type), $diffArray),","); // remove last , 
    !empty($fldsList) ? $sql = "ALTER TABLE `#__content_mosprayer_config` ".$fldsList.";" : $sql = "";
    $this->PPdebug($fldsList,'fldsList');
    $this->PPdebug($diffArray,'diffArray');
    $this->PPdebug($sql,'sql'); 
    if (!empty($sql)) $this->dbQueryExec($sql);    
  }  
  function dbUpdateTable($iArray) {
	// Sample: admin_email='".$mccfg['admin_email']."' , email_alerts='".$mccfg['email_alerts']."'
    $id = $this->getRid();
    !empty($iArray) ? $fldList = $this->fldsListFromArray($iArray) : $fldList = "";
    (!empty($fldList) and !empty($id)) ? $sql = "UPDATE #__content_mosprayer_config SET ".$fldList." where id='".$id."'" : $sql = "";  
    if (!empty($sql)) $this->dbQueryExec($sql);    
  }  
  function dbSelectTable() {
  	$rows = $this->dbQuerySelect("SELECT * FROM `#__content_mosprayer_config` limit 1");
  	($rows) ? $row = $rows[0] : $row = array(); // only one row for config
  	return $row;
  }
  function dbSaveTable($option) {
    $this->dbInsertTable();
  	$cfg = $this->schemaArrayFromFieldsList("current");    
    $mccfg = $this->ut->arrayFromPost($cfg);    
  	$this->dbUpdateTable($mccfg);
//  	$redirectlink="index2.php?option=com_mosprayer&task=config"; // stay at config screen
  	$redirectlink="index2.php?option=".$option; // force a reload to get new value from db
  	mosRedirect($redirectlink,"Saved Config!"); 
  }  
  function getRid() {
  	($row=$this->dbSelectTable()) ? $rid=$row->id : $rid=""; // should only be one row so hard code 0
  	return $rid;
  } 
  function getSchemaWoId() {
  	($rows=$this->dbSelectTable()) ? $cfgRow = $this->trim1stFromArray($rows) : $cfgRow = array(); // only one row for config
  	return $cfgRow;
  }
  function getSchema() {
  	($rows=$this->dbSelectTable()) ? $cfgRow = $this->row2Array($rows) : $cfgRow = array(); // only one row for config
  	return $cfgRow;
  }  
}
?>