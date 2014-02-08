<?php
/**
* @version 
* @package mosprayer.html.class.php
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
/*
include_once("co.html.class.php");
class MosprayerHTML extends CoHTML {
*/
include_once("mosprayer.jquery.class.php");
class MosprayerHTML extends MosprayerJQuery {
  function aLink($iLink,$iName,$iTarget="") { 
  	!empty($iName) ? $urlText = $iName : $urlText = "[Link]"; 
    return $this->a($iLink, $urlText, $iTarget); // call parent class explicit
  }  
  function homePageLink($ihomepage) {
    (!$ihomepage || $ihomepage == "http://" || $ihomepage == "http:///") ? $lhomepage="None" : $lhomepage=$this->aLink($ihomepage,"[Link]");
    return $lhomepage;
  }
  function bbCodeHelpJson() {
    return 'bbCodeHelp({
		"title": "Supported BBCode",
		"description": "",
		"items": [ { '.$this->bbCodeHelp().' } ]
})';
  }
  function bbCodeHelp() {
    return "<strong>Supported BBCode</strong><p />
[b]bolded text[/b]<br /> 	
[i]italicized text[/i]<br /> 	
[u]underlined text[/u]<br /> 	
[s]striked text[/s]<br /> 
[sub]subscripts text[/sub]<br /> 
[sup]superscripts text[/sup]<br /> 
[center]center text[/center]<br />
[hr] To draw a line<br />
[url]http://ongetc.com[/url]<br />
To quote:[quote]quoted text[/quote]<br /> 
[code]monospaced text[/code]<br /> 
To change text size: [size=9]Your Text[/size]<br />
To change text color: [color=red]Red Text[/color]<br /> 
or [color=#FF0000]Red Text[/color]<br />
(Can use many different color names or hex codes.)";
  }
  function aboutBBLink($id) {
    $js= "
  \$('a#bbcode".$id."').click(function () {
    if (\$('div#bbcodetohide".$id."').is(':hidden')) {
      \$('div#bbcodetohide".$id."').slideDown('slow');
    } else {
      \$('div#bbcodetohide".$id."').hide();
    }
  });
";

    return $this->jQReady($js)
    ."For more BBCode info: &nbsp;<a id='bbcode".$id."' href='#showbbcode".$id."'><span style='font-size:smaller'>[Click here]</span></a>
<a name='showbbcode".$id."' title='showbbcode".$id."'></a>
<div class='bbCodeToHide' id='bbcodetohide".$id."'>".$this->bbCodeHelp()."</div>";
  }
  function nameLink($icbno,$name) { return "<a href=\"#edit\" onclick=\"return listItemTask('$icbno','edit')\">$name</a>"; }
  function tickLink($ipub) {
    if ($ipub == "1") { $ltick='<img src="images/tick.png" border="0">'; } else { $ltick=""; }
    return $ltick;
  } 

  function yourVersion($verLable, $mccom) { return $this->tag("font",$verLable." : ".$mccom['version'],"small"); }  
  function releaseVersion($mccfg, $mccom) {
    $mosprayer_version="mosprayer_version.php";	// productiont
    $url=$mccom['mesite'].'static/'.$mosprayer_version; // production
    $url.='?myver='.$mccom['version'];
    ($mccfg['updates'] == "1")  
    ? $mosprayer_release_version = '<iframe src="'.$url.'" height="33px" frameborder="1"></iframe>'
    : $mosprayer_release_version = "";
    return $mosprayer_release_version;
  }
  function jsPopupAlert($redirectlink,$imsg) {
    return $this->jsCode("\nalert('$imsg');\ndocument.location.href='$redirectlink';");
  }
  function bbCodeBar($iform,$iformbody) {   
    $rform=strtolower($iform);
    $rformbody=strtolower($iformbody);
    $bb="bb_".$rform;
    $tt="tt_".$rform;
    $helpbox=$rform."helpbox";
// var bb_commentform25 = new bbclass('commentform25');
// var tt_commentform25 = 'commentForm25.mc_comment';
 
    $js = $this->jsCode("
var ".$bb." = new bbclass('".$rform."');
var ".$tt." = '".$iform.".".$iformbody."';
"
);
    return $js.'<input id="bbutton" class="mosprayerBBBUTTON" value="B" style="font-weight: bold;" onclick="javascript:'.$bb.'.b('.$tt.',\'b\')" title="[b]Bolded text[/b]" type="button" />
    <input id="ubutton" class="mosprayerBBBUTTON" value="U" style="text-decoration: underline;" onclick="javascript:'.$bb.'.b('.$tt.',\'u\')" title="[u]Underlined text[/u]" type="button" />
    <input id="ibutton" class="mosprayerBBBUTTON" value="I" style="font-style: italic;" onclick="javascript:'.$bb.'.b('.$tt.',\'i\')" title="[i]Italicized text[/i]" type="button" />
    <input id="colorbutton" class="mosprayerBBBUTTON" value="Color" onclick="javascript:'.$bb.'.b('.$tt.',\'color\')" title="Font color: [color=red]text[/color] Tip: you can also use color=#FF0000" type="button" />
    <input id="centerbutton" class="mosprayerBBBUTTON" value="Center" onclick="javascript:'.$bb.'.b('.$tt.',\'center\')" title="[center]center text[/center]" type="button" />
    <input id="quotebutton" class="mosprayerBBBUTTON" value="Quote" onclick="javascript:'.$bb.'.b('.$tt.',\'quote\')" title="To quote: [quote]quoted text[/quote]" type="button" />
    <input id="linkbutton" class="mosprayerBBBUTTON" value="URL" onclick="javascript:'.$bb.'.b('.$tt.',\'url\')" title="Insert URL: [url]http://url[/url] or [url=http://url]URL text[/url]" type="button" />
    <input id="codebutton" class="mosprayerBBBUTTON" value="Code" onclick="javascript:'.$bb.'.b('.$tt.',\'code\')" title="Code display: [code]code[/code]" type="button" />
    <input id="sizebutton" class="mosprayerBBBUTTON" value="Size" onclick="javascript:'.$bb.'.b('.$tt.',\'size\')" title="Font size: [size=x-small]small text[/size]" type="button" />
   <input id="'.$helpbox.'" name="'.$helpbox.'" size="73" class="mosprayerHelpBox" value="Tip: Mouse over or click on above button for bbcode." readonly="readonly" type="text" title="Tip: Mouse over or click on above button for bbcode." /><br  />
';
  }  

  function noComments($mccfg) { 
  ($mccfg['use_divcss']=="0")
  ? $output = '<p /><div align="center"><b>'._PRY_R_NO_COM.'</b></div>'
  : $output = '<p class="mosprayerFORMMsg">'._PRY_R_NO_COM.'</p>';  
  return $output;
  }
  function footerAbout() { return $this->copyright(_PRY_A_MOS_BY." Chanh Ong"); }
  function copyright($iText="") { 
    return $iText."<br /><div style='font-size:smaller' align='center'><a href='http://ongetc.com'>&copy;2010 MosPrayer</a></div>";
  }  
  function cfgListFromSchemaArray($mcarray,$mccfg) {  
    $aYesNo = array('0'=>_PRY_A_NO, '1'=>_PRY_A_YES);  
    $cfgLine = "<tr align='center' valign='middle'>\n<td align='left' valign='top'><strong>%s</strong></td>\n<td align='left' valign='top'>%s</td>\n<td align='left' valign='top'>%s</td>\n</tr>";
    while (list($key, $val) = each($mcarray)) {
      if (array_key_exists($key,$mccfg)) {
        $typefld = strtolower($val['type']); // same as above
        switch ($typefld) {
          case "input" : $ifld = $this->input(array('name'=>$key,'value'=>$mccfg[$key])); break;
          case "radio":
             $ifld = $this->inputRadio(array('name'=>$key,'class'=>"inputbox"), $aYesNo, $mccfg[$key]);            
             break;
          case "select" :
             $ifld = $this->optionList(array('name'=>$key,'class'=>"inputbox","size"=>"2"), $aYesNo, $mccfg[$key]);       
            break;
        }
        if ($ifld) $buff .= sprintf($cfgLine,$val['name'],$ifld,$val['desc']);
      }
    }  
    return $buff; 
  }
}
?>