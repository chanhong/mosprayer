<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

global $mosprayer;
include_once($GLOBALS['mosConfig_absolute_path'] .'/administrator/components/com_mosprayer/mosprayer.main.class.php');
$id	= intval( mosGetParam( $_REQUEST, 'id', 0 ) );
if (!isset($mosprayer)) $mosprayer = new MosprayerMain();
echo $mosprayer->mcMain($id, "com");
?>
