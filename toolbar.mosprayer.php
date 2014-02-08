<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
require_once( $mainframe->getPath( 'toolbar_html' ) );
switch ( $task ) {
	case "instructions";
		menuCombo::BACKONLY_MENU();
		break;
	case "editcomment":
		menuCombo::EDIT_MENU();
		break;
	case "config":
		menuCombo::CONFIG_MENU();
		break;
	case "view":
		default:
		menuCombo::DEFAULT_MENU(); 
}
?>