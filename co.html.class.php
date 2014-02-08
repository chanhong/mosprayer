<?php
/**
 * co.html.class.php
 *
 * My HTML helper base class that contain the helper base API
 *
 * @copyright  (C) 2009 ongetc.com
 * @license    GNU/GPL http://ongetc.com/gpl.html.
 * @info       ongetc@ongetc.com http://ongetc.com
 * @version    $Id:$
 * @since      File available since Release 0.1
*/
class CoHTML {
  function CoHTML() {
  }
  function cssLink($url) { return sprintf("<link type='text/css' href='%s' rel='stylesheet' />",$url); }  
  function jsSrc($src) { return sprintf("<script type='text/javascript' src='%s'></script>\n",$src); }
  function jsCode($ijs) { return sprintf("<script type='text/javascript'><!--\n%s\n//--></script>",$ijs); } 
  
// Don't touch!  Work solid!  
	function quote($inVar) { return "\"".$inVar."\""; }
	function getRequestVal($ivalue, $type="") { 
		$return = self::getVal($_REQUEST, $ivalue); 
		return stripslashes($return);
	} 
	function getVal($inVar, $inField="", $inValue="") {
		(is_array($inVar) && (!empty($inVar[$inField]))) ? $var =$inVar[$inField] : $var = $inValue;
		(!empty($var)) ? $return = $var : $return = $inValue;
		return $return;
	}
	function href($inVar) { 
		$str="";
		foreach ($inVar as $key=>$value) { if ($key && $value) $str .= "&$key=$value"; }
    (!empty($str)) ? $return = "?".substr($str,1) : $return = "";
    return $return;
	}  
	function img($iLink, $iID, $iAlt="", $iWidth="", $iHeight="") { 
   	$sAlt = " alt=".self::quote($iAlt); 
    (!empty($iWidth)) ? $sWidth = " width=".self::quote($iWidth) :  $sWidth = "";
  	(!empty($iHeight)) ? $sHeight = " height=".self::quote($iHeight) :  $sHeight = "";
		(!empty($iLink) && !empty($iID)) 
		? $return = "<img src=".self::quote($iLink)." id=".self::quote($iID)."$sAlt$sWidth$sHeight />" 
		: $return="";
		return $return;
	}
	function a($iLink, $iName, $iTarget="") { 
  	(!empty($iTarget)) ? $sTarget = " target='$iTarget'" :  $sTarget = "";
		(!empty($iLink) && !empty($iName)) 
		? $return = "<a".$sTarget." href=".self::quote($iLink).">".$iName."</a>" 
		: $return="";
		return $return;
	}
	function tag($iTag, $iValue, $iClass="") { 
  	(!empty($iClass)) ? $class=" class=".self::quote($iClass) : $class="";  
		(!empty($iTag) and !empty($iValue)) ? $return = "<$iTag$class>$iValue</$iTag>" : $return="";
		return $return;
	}
	function form($inVar) {
 		if ((empty($inVar['action'])) or (empty($inVar['body'])) or empty($inVar)) return;     
		(!empty($inVar['name'])) ? $name=" name=".$inVar['name'] : $name="";
		(!empty($inVar['class'])) ? $class=" class=".self::quote($inVar['class']) : $class="";  
		(!empty($inVar['id'])) ? $id=" id=".self::quote($inVar['id']) : $id="";
		(!empty($inVar['style'])) ? $style=" style=".self::quote($inVar['style']) : $style="";
		(!empty($inVar['event'])) ? $onEvent=" ".$inVar['event'] : $onEvent="";
		return "\n<form method=\"post\" action=".self::quote($inVar['action']).$name.$id.$class.$style.$event.">".$inVar['body']."\n</form>";
	}

  //<input type="checkbox" id="cb1" name="cid[]" value="262" onclick="isChecked(this.checked);" 
  function inputCheckbox($inVar) {
		if (!$inVar) return;
		if (empty($inVar['type'])) $inVar['type']="checkbox";	// if type set use it otherwise override by checkbox
		return "\n".self::input($inVar);
	}
  function inputRadio($inVar, $strArray, $defaultValue) {
		$return='';
		if (empty($strArray) or empty($inVar)) return;
 		if (empty($inVar['type'])) $inVar['type']="radio";	   
		foreach ($strArray as $key=>$ea) {
			($key<>$defaultValue) ? $inVar['checked'] = "" : $inVar['checked'] = "checked";
      $inVar['value'] = $key;         
      $return .= self::input($inVar).$ea;
    }
		return $return."\n";
	}
	function optionList($inVar, $strArray, $defaultValue) {
		$availOptions='';
		if (empty($strArray) or empty($inVar)) return;    
		foreach ($strArray as $key=>$ea) { 
    	($key==$defaultValue) 
    	?	$availOptions .= "\n".self::option($key, $ea, "selected")
      : $availOptions .= "\n".self::option($key, $ea);
    }
    $inVar['value'] = $availOptions;  
    return $this->select($inVar);
	}
	function option($eachKey, $eachOption, $iselect="") {
		($iselect) ? $selected=" selected=".self::quote($iselect) : $selected = "";
		return "<option value=".self::quote($eachKey).$selected.">".$eachOption ."</option>";
	}  
  function textArea($inVar) {
    $tag = "textarea";
  	(!empty($inVar['name'])) ? $name=" name=".self::quote($inVar['name']) : $name="";
		(isset($inVar['value'])) ? $value=$inVar['value'] : $value="";    
		(!empty($inVar['class'])) ? $class=" class=".self::quote($inVar['class']) : $class="";  
		(!empty($inVar['id'])) ? $id=" id=".self::quote($inVar['id']) : $id="";
		(!empty($inVar['style'])) ? $style=" style=".self::quote($inVar['style']) : $style="";
		(!empty($inVar['event'])) ? $onEvent=" ".$inVar['event'] : $onEvent="";
		(!empty($inVar['cols'])) ? $cols=" cols=".self::quote($inVar['cols']) : $cols="";
		(!empty($inVar['rows'])) ? $rows=" rows=".self::quote($inVar['rows']) : $rows="";
		return "\n<".$tag.$id.$name.$style.$cols.$rows.$onEvent.$class.">".$value."\n</".$tag.">\n";
	}
	function select($inVar) {
	//	array('type'=>type, 'value'=>value, 'name'=>name, 'event'=>event, 'id'=>id, 'class'=>class...);
    $tag = "select";
		(!empty($inVar['name'])) ? $name=" name=".self::quote($inVar['name']) : $name="";
		(isset($inVar['value'])) ? $value=$inVar['value'] : $value="";    
		(!empty($inVar['class'])) ? $class=" class=".self::quote($inVar['class']) : $class="";  
		(!empty($inVar['selected'])) ? $selected=" selected=".self::quote($inVar['selected']) : $selected="";
		(!empty($inVar['id'])) ? $id=" id=".self::quote($inVar['id']) : $id="";
		(!empty($inVar['style'])) ? $style=" style=".self::quote($inVar['style']) : $style="";
		(!empty($inVar['event'])) ? $onEvent=" ".$inVar['event'] : $onEvent="";
		(!empty($inVar['size'])) ? $size=" size=".self::quote($inVar['size']) : $size="";
		return "\n<".$tag.$id.$name.$style.$size.$onEvent.$class.$selected.">".$value."\n</".$tag.">\n";
	}
	function input($inVar) {
	//	array('type'=>type, 'value'=>value, 'name'=>name, 'event'=>event, 'id'=>id, 'class'=>class...);
     $tag = "input";
		(!empty($inVar['name'])) ? $name=" name=".self::quote($inVar['name']) : $name="";
		(isset($inVar['value'])) ? $value=" value=".self::quote($inVar['value']) : $value="";
		(!empty($inVar['class'])) ? $class=" class=".self::quote($inVar['class']) : $class="";  
		(!empty($inVar['checked'])) ? $checked=" checked=".self::quote($inVar['checked']) : $checked="";
		(!empty($inVar['type'])) ? $type=$inVar['type'] : $type="text";
		(!empty($inVar['id'])) ? $id=" id=".self::quote($inVar['id']) : $id="";
		(!empty($inVar['style'])) ? $style=" style=".self::quote($inVar['style']) : $style="";
		(!empty($inVar['event'])) ? $onEvent=" ".$inVar['event'] : $onEvent="";
		(!empty($inVar['size'])) ? $size=" size=".self::quote($inVar['size']) : $size="";
		return "\n<".$tag." type=".self::quote($type).$id.$name.$style.$size.$onEvent.$value.$class.$checked." />";
	}
 	function button($inVar) { 
		if (!!empty($inVar['type'])) $inVar['type']="button";	// if type set to submit use it otherwise override by button
		if (!!empty($inVar['class'])) $inVar['class']="submit"; // if type set use it otherwise override by button
		(isset($inVar['value']) && !empty($inVar['name'])) ? $return = self::input($inVar) : $return=array();
		return $return;
	}
 	function password($inVar) { 
		$inVar['type']="password";
		$inVar['name']=strtolower(self::getVal($inVar,'name'));
		return self::input($inVar); 
	}
 	function submit($inVar) { 
		$inVar['type']="submit";
		$inVar['name']=strtolower(self::getVal($inVar,'value'));
		return self::button($inVar); 
	}
 	function cancel($inVar) { 
		$inVar['event']="onclick=\"javascript:history.back(1)\""; 
		$inVar['name']=strtolower(self::getVal($inVar,'value'));
		return self::button($inVar); 
	}
 	function hidden($inVar) { 
		$inVar['type']="hidden";
		(isset($inVar['value']) && !empty($inVar['name'])) ? $return = self::input($inVar) : $return=array();
		return $return;
	}
}
?>