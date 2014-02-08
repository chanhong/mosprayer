<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
class menuCombo {
  function CONFIG_MENU() {
		mosMenuBar::startTable();
		mosMenuBar::spacer();
//		mosMenuBar::saveedit(); // mia 4.8+ does not support this
//    mosMenuBar::save('savesettings');    
    mosMenuBar::save('saveedit');  
		mosMenuBar::cancel();
		mosMenuBar::spacer();
		mosMenuBar::endTable();
	}

	function BACKONLY_MENU() {
		mosMenuBar::startTable();
		mosMenuBar::back();
		mosMenuBar::endTable();
	}

	function EDIT_MENU() {
		mosMenuBar::startTable();
		mosMenuBar::spacer();
		mosMenuBar::save('savecomment');
		mosMenuBar::cancel();
		mosMenuBar::spacer();
		mosMenuBar::endTable();
	}

	function DEFAULT_MENU() {
		mosMenuBar::startTable();
		mosMenuBar::publish();
		mosMenuBar::unpublish();
		mosMenuBar::deleteList();
		mosMenuBar::spacer();
		mosMenuBar::endTable();
	}
}?>