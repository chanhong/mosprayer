<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 

class MoscomAdmin extends MosprayerMain{
  function showMain($cid, $option, $task) {   
    $this->mccom = $this->myInit($cid,"com"); // much pass the article id  
  	echo $this->jQueryLoad();	 
    echo $this->h->jsCode($this->h->jQNoConflict());    
//    $this->mccom['option']=$option; // must set this for all view to return
  	switch ($task) {
    // config action
  	case "config": 
     	$this->configAdmin();
  		break;
  	case "cancel":
  		mosRedirect("index2.php?option=".$option, "Cancel");
  		break;
  	case "upgdbconfig": 
      $this->dbUpgrade("config", $this->mccfg);      
  		break;
  	case "saveedit":
  		$this->config->dbSaveTable($option);
  		break;

    // comment action
  	case "remove":
  	case "publish":
  	case "unpublish": 
      $this->comment->action($task, $cid, $option);
      break;
  	case "editcomment": 
      $this->_viewData = $this->comment->dbSelectValue($this->mccom['cid']);
      echo $this->renderView("admin.editprayer.php");      
  		break;
  	case "savecomment":
      $this->comment->dbEditSave($option);
  		break;
  	case "upgdbcomment": 
      $this->dbUpgrade("comment", $this->mcSchema);       
  		break;      
    case "view":
  	default:
  		$this->commentAdmin();
  	}
  }
 
  function commentAdmin() {
    if ($upgMsg=$this->isNeedUpg("comment")) die ($upgMsg);  
    else {  
      $this->_viewParm['search'] = trim( strtolower( mosGetParam( $_POST, 'search', '' ) ) );
      $limit = intval( mosGetParam( $_POST, 'limit', 10 ) );
      $limitstart = intval( mosGetParam( $_POST, 'limitstart', 0 ) );
      $total = $this->comment->getCount($this->_viewParm['search']);
//    $this->_viewData = $this->comment->dbSelect($search, $limitstart, $limit);    
      if ($limit > $total) $limitstart = 0; 
      include_once("includes/pageNavigation.php");    
      $this->pageNav = new mosPageNav( $total, $limitstart, $limit  );
      $this->_viewData = $this->comment->dbSelect($this->_viewParm['search'], $limitstart, $limit);        
      echo $this->renderView("admin.main.php");
    }
  }   
  function configAdmin() {
  	if ($this->config->dbInsertTable()==true) {
  		echo ('<div align=center><h2 style="color:red">The default config table has been created!</h2><p /><h3>Please make sure to save your setting!</h3></div>');
    }
    if ($upgMsg=$this->isNeedUpg("config")) die ($upgMsg);
    else {
      $this->_viewParm = $this->ut->mergeArrayWithRow($this->mccfg, $this->config->getSchema());
      $this->_viewParm['tagid']='mosprayerTabs';
      $this->_viewParm['cssfile'] = $this->mccom['mcasiteurl']."css/mosprayer.ui.tabs.css";
      $this->_viewData = $this->h->cfgListFromSchemaArray($this->config->schemaArray(),$this->mccfg);
      echo $this->renderView("admin.showconfig.php");
    }
  }   
// leave this alone, use by upgrade process and work solid  
  function isNeedUpg($model) {
    $return = "";
    $cSchema = $this->$model->getSchema();    
    $cFields = $this->$model->schemaArrayFromFieldsList("current"); 
// mia fix    
    if ($this->ut->isArrayDiff($cFields, $cSchema)==true and !empty($cSchema)) {    
      $this->ut->ppDebug($cFields,__METHOD__.'=>cFields model=>'.$model);     
      $this->ut->ppDebug($cSchema,__METHOD__.'=>cSchema model=>'.$model);  
      if ($model == "config") {
        $task = "upgdbconfig";
      } else {
        $task = "upgdbcomment";
      }
      $upgLink = $this->h->aLink("index2.php?option=".$this->mccom['me']."&task=".$task,'Click here','');  // no target      
      $return = '<div align=center><h2 style="color:red">You need to upgrade your '. $model.' table!</h2><p /><h3>Please '.$upgLink.'!</h3></div>';
    }
    return $return;
  }   
  function dbUpgrade($model, $iArray) {
  	$diffArray = $cSchema = array();
  	$cSchema = $this->$model->getSchema();
    $this->ppDebug($cSchema,__METHOD__.'=>cSchema');      
  	// load the initial config value if it is not there
    $this->doUpgrade($model, "current");    
  	// do upgrade from cfg array
    $this->doUpgrade($model, "add");   
    $this->doUpgrade($model, "change");  
    $this->doUpgrade($model, "drop");  
 
   	// drop old fields from cfg table if found not match with default cfg, some clean up!  use row first since it might have old fields
  	$diffArray = $this->ut->arrayDiffKey($cSchema, $iArray);
    if (!empty($diffArray) and !empty($cSchema)) $this->$model->dbAlterTable("dropfromdb", $diffArray);	
   
    if ($model == "config") {
      $task = "config";
      $msg = "DB Config Upgraded!  Be sure to save your setting!";
    } else {
      $task = "view";
      $msg = "DB Comment Upgraded!"; 
    }
    $redirectlink="index2.php?option=".$this->mccom['me']."&task=".$task; // back to config screen
    mosRedirect($redirectlink, $msg);    
  }     
  function doUpgrade($model, $type) {
    if (!empty($model)) {
      $cArray = $this->$model->schemaArrayFromFieldsList($type);
    	$cSchema = $this->$model->getSchema();
    } 
  	if (($Diff2Array = $this->ut->arrayDiffKey($cArray, $cSchema)) 
      or ($Diff2ArrayDb = $this->ut->arrayDiffKey($cSchema, $cArray)) ) {
      if (!empty($Diff2Array)) $this->$model->dbAlterTable($type, $Diff2Array); 
      if (!empty($Diff2ArrayDb)) $this->$model->dbAlterTable($type, $Diff2ArrayDb); 
    }
  }
      
} // end class
?>