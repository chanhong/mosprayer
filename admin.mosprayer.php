<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
include_once('components/com_mosprayer/mosprayer.main.class.php');
$cid = mosGetParam( $_REQUEST, 'cid', array() );
global $mosprayer;
if (!isset($mosprayer)) $mosprayer = new MosprayerMain();
echo $mosprayer->mcaMain($cid, $option, $task);
?>
