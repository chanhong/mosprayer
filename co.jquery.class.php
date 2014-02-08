<?php
/**
* @version 
* @package co.jquery.class.php
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
include_once("co.html.class.php");
class CoJQuery extends CoHTML {
  function jQNoConflict($iVar) { return "var ".$iVar." = jQuery.noConflict();\n";  }  
  function jQMe($jqVar, $ijs) {
    $pattern = '/\$([\(|\.])/i';
    $replacement = $jqVar.'$1';
    return preg_replace($pattern, $replacement, $ijs);
  }   
  function jQDefFn($ijs) { 
    return sprintf("function(){\n%s\n}",$ijs); 
  } 
  function jQReady($ijs) { 
    return "\n\$(document).ready(".self::jQDefFn($ijs).")"; 
  }  
  function jQMyFn($iFn, $iJs) { 
    return "
;(function(\$) {
\$.fn.".$iFn." = ".self::jQDefFn($iJs).";
})(jQuery);
"; 
  }  
}
?>