<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
//$currentVersion="1.2.1";
$currentVersion=mc_get_mcversion('mosprayer.xml');
$myver=mc_get_param('myver');
(mc_is1stNewer2nd($currentVersion,$myver))  
? $upgrade="<font color='red'>Your version needs to upgrade to $currentVersion</font>"
: $upgrade="<font color='green'>Your version is up to date!</font>";
echo $upgrade;
// main

function mc_is1stNewer2nd($first,$second) {
   (version_compare($first,$second)=="1") ? $newer=true : $newer=false;
   return $newer;
}

function mc_unhtmlentities($string) {
    // replace numeric entities
    $string = preg_replace('~&#x([0-9a-f]+);~ei', 'chr(hexdec("\\1"))', $string);
    $string = preg_replace('~&#([0-9]+);~e', 'chr("\\1")', $string);
    // replace literal entities
    $trans_tbl = get_html_translation_table(HTML_ENTITIES);
    $trans_tbl = array_flip($trans_tbl);
    return strtr($string, $trans_tbl);
}

function mc_get_param($param) {
	(isset($_GET["$param"])) 
	? $return=mc_unhtmlentities($_GET["$param"])
	: $return = "";
	return $return;
}

function mc_get_mcversion($filename) {
	$chunksize = 1*(1024*1024); // how many bytes per chunk
	$buffer = '';
	$handle = fopen($filename, 'rb');
	if ($handle === false) { return false;  }
	while (!feof($handle)) {
		$buffer = fread($handle, $chunksize);
		$mcversion = mc_preg_match_between("<version>", "<\/version>", $buffer);
		if ($mcversion) { break; }
	}
	fclose($handle);
	return trim($mcversion);
} 

function mc_preg_match_between($a_sStart, $a_sEnd, $a_sSubject) {
	$pattern = '/'. $a_sStart .'(.*?)'. $a_sEnd .'/';
	preg_match($pattern, $a_sSubject, $result);
	return $result[1];
}
?>
