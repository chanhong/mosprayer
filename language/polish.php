<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2007 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//admin.mosprayer.html.php
define('_PRY_A_KEEPUPTODATE','If you want to keep up to date with this and other great components from Chanh Ong please subscribe to the mailing list by clicking these buttons');
define('_PRY_A_SUBSCRIBE','Subscribe');
define('_PRY_A_UNSUBSCRIBE','Unsubscribe');
define('_PRY_A_BACKUP','Backup');
define('_PRY_A_BACKUP_DESC','Backup the mos_content_prayers table');
define('_PRY_A_RESTORE','Restore');
define('_PRY_A_RESTORE_DESC','Restore the mos_content_prayers table');
define('_PRY_A_CONFIG','Configuration');
define('_PRY_A_CONFIG_DESC','Change the configuration');
define('_PRY_A_INSTRUCTIONS','Instructions');
define('_PRY_A_INSTRUCTIONS_DESC','Post Install Configuration');
define('_PRY_A_ABOUT','About');
define('_PRY_A_ABOUT_DESC','About this component');
define('_PRY_A_LINK','Link');
define('_PRY_A_LINK_DESC','To authors website');
define('_PRY_A_CHECK','Check for updates');
define('_PRY_A_VERSION','Your version is ');
define('_PRY_A_DONATE','Please consider hitting the donate button below to donate. This will inspire me to improve this script more');
define('_PRY_A_REVIEW','Review Prayers (Newest First)');
define('_PRY_A_DISPLAY','Display #');
define('_PRY_A_NAME_SUB','Imi�');
define('_PRY_A_EMAIL_SUB','Email');
define('_PRY_A_HOMEPAGE','Strona domowa');
define('_PRY_A_PRAYER','Komentarz');
define('_PRY_A_ARTICLE','Article');
define('_PRY_A_PUBLISHED','Published');
define('_PRY_A_MOS_BY','A MOS4.5 Custom Component by');
define('_PRY_A_CURRENT_SETTINGS','Current Setting');
define('_PRY_A_EXPLANATION','Explanation');
define('_PRY_A_ADMIN_EMAIL','Admin Email');
define('_PRY_A_ADMIN_EMAIL_DESC','If email is switched on, an email will be sent to this address when a new prayer is entered');
define('_PRY_A_ADMIN_ALERTS','Admin Email Alerts');
define('_PRY_A_ADMIN_EMAIL_ENABLE','Enable/Disable emails to Admin');
define('_PRY_A_VISITOR_EMAIL','Visitor Email Alerts');
define('_PRY_A_VISITOR_EMAIL_DESC','Enable/Disable emails to the person who submitted the prayer');
define('_PRY_A_REVIEW_SUBM','Review Submissions');
define('_PRY_A_REVIEW_DESC','If you set this to yes then prayers will be added to the database and will wait for you to review and publish them before showing. You will recieve an email <strong>only</strong> if there is a value in &quot;Admin email&quot; and you have &quot;Email Alerts&quot; set to &quot;yes&quot;');
define('_PRY_A_REGISTERED_ONLY','Registered Users Only');
define('_PRY_A_REG_ONLY_DESC','Set &quot;Yes&quot; to allow only registered users to leave prayers but anyone can see prayers, Set &quot;No&quot; to allow any visitor to prayer');
define('_PRY_A_NOTIFY_VERSION','Notify if new version available');
define('_PRY_A_NOT_VER_DESC','If set to &quot;Yes&quot; you will be shown a dialog on the main screen when an update is available to this component (<em>NOTE: The only data sent to the update server is your version number</em>)');
define('_PRY_A_HAVE_DONATED','Have you Donated?');
define('_PRY_A_DONATE2','Please consider make a donation throught paypal. This will inspire me to improve this script more! :-)');
define('_PRY_A_IMPORTANT_NOTE','IMPORTANT NOTES');
define('_PRY_A_TEMPLATE','In order for mambo to check and see if its showing an article that can be prayered on, you must make a small change to your template.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> and look for the entry');
define('_PRY_A_CHANGE_TO','Change this to the following');
define('_PRY_A_HAVE_FUN','Thats it! ~ (Comment will only show on the article id = something otherwise it will not show)<p>Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_PRY_A_FORCE_PREVIEW','Force a preview');
define('_PRY_A_FORCE_PREVIEW_TEXT','Set this to yes to force your visitors to preview their prayers before final submission');
define('_PRY_A_HIDE','Hide  Prayers');
define('_PRY_A_HIDE_DESC','Show (Prayers (x) - Add Prayers) instead of the prayers and form by default');
define('_PRY_A_DATE','Date');
define('_PRY_A_HIDE_URL','Hide URL');
define('_PRY_A_HIDE_URL_DESC','Hide URL - Use to hide URL on the prayers form by default');
define('_PRY_A_EMAIL_REQ','Email Required');
define('_PRY_A_EMAIL_REQ_DESC','Use to set either email is required or not on the prayers form by default');
define('_PRY_A_EXCL_SEC','Exclude Section');
define('_PRY_A_EXCL_SEC_DESC','Use to exclude section not to show prayers form by default, eg: 0,1');
define('_PRY_A_PER_PAGE','Prayers per page');
define('_PRY_A_PER_PAGE_DESC','Use to show number of prayers per page, eg: 3');
define('_PRY_A_NEW_1ST','New Prayers First');
define('_PRY_A_NEW_1ST_DESC','List new prayer entries first');
define('_PRY_A_FORM_ABOVE','Comment Form Above');
define('_PRY_A_FORM_ABOVE_DESC','Show prayer form above prayer entries');
define('_PRY_A_USE_DIVCSS','Use DIV CSS');
define('_PRY_A_USE_DIVCSS_DESC','Show prayer form using DIV CSS from template');
define('_PRY_A_EXCL_CONT','Exclude Contents');
define('_PRY_A_EXCL_CONT_DESC','Use to exclude contents via article id not to show prayers form, eg: 0,1');
define('_PRY_A_IP','IP');
define('_PRY_A_USE_USERNAME','Use username');
define('_PRY_A_USE_USERNAME_DESC','Show username instead of name');
define('_PRY_A_CLOSE_CONT','Close Contents');
define('_PRY_A_CLOSE_CONT_DESC','Use to close contents via article id not to show prayers form, eg: 0,1');
define('_PRY_A_USE_SECTOKEN','Use security token');
define('_PRY_A_USE_SECTOKEN_DESC','Check for security token when submit prayer (invisible Captcha)');

//mosprayer.php
define('_PRY_A_NO',"Nie");
define('_PRY_A_YES',"Tak");
define('_PRY_R_COM_NUMBER',"Liczba komentarzy");
define('_PRY_R_NO_COM',"Jeszcze nie ma komentarzy - dodaj sw�j u�ywaj�c poni�szego formularza...");
define('_PRY_R_POST',"Napisa�");
define('_PRY_R_HOMEPAGE',"Strona domowa");
define('_PRY_R_DATE_ON',"dzie�");
define('_PRY_R_DATE_AT',"o");
define('_PRY_R_ADD_PRAYER',"Dodaj sw�j komentarz do tego artyku�u...");
define('_PRY_R_ADD_COM2'," ...");
define('_PRY_R_NAME',"Imi�");
define('_PRY_R_EMAIL',"E-Mail");
define('_PRY_R_EMAIL_NOT',"Tw�j e-mail nie b�dzie wy�wietlany na stronie - to informacja dla administratora");
define('_PRY_R_HOMEPAGE_IN',"Strona domowa");
define('_PRY_R_COM',"Komentarz");
define('_PRY_R_FULLY',"Prosz� wype�ni� ca�y formularz!");
define('_PRY_R_NEW_COM',"Nowy komenatrz");
define('_PRY_R_HAVE_NEW',"Masz nowy komentarz w nast�puj�cym artykule:");
define('_PRY_R_LOGIN',"Prosz� si� zalogowa� i opublikowa� b�d� usun�� ten artyku�");
define('_PRY_R_QUICKLINK',"To jest szybki link do logowania");
define('_PRY_R_THANKS',"Dzi�kujemy za tw�j komentarz");
define('_PRY_R_THANKS2',"Dzi�kujemy za tw�j komentarz w tym artykule");
define('_PRY_R_ADMIN_REV',"Niebawem administrator przejrzy tw�j komentarz");
define('_PRY_R_ENTERED',"Wszed�e�");
define('_PRY_R_VISIT',"Prosz� odwied� wkr�tce stron�");
define('_PRY_R_THANKS3',"Tw�j komentarz zosta� dodany");
define('_PRY_R_THANKS4',"Tw�j komentarz zostanie sprawdzony przez administratora przed opublikowaniem");
define('_PRY_R_SUBMIT',"Dodaj");
define('_PRY_R_RESET',"Czy��");
define('_PRY_R_NOT_AUTH',"Musisz si� zalogowa�.");
define('_PRY_R_PREV_PAGE',"Poprzednia strona");
define('_PRY_R_NEXT_PAGE',"Nast�pna strona");
define('_PRY_R_PAGE',"Strona");
define('_PRY_R_REQUEST',"Komentarze");
define('_PRY_R_OF',"z");
define('_PRY_R_CANCEL',"Anuluj");
define('_PRY_R_FORM_INTRO',"Wpisz sw�j komentarz poni�ej.");
define('_PRY_R_PREVIEW_HEAD',"<b>Podgl�d twojego komentarza</b>");
define('_PRY_R_PREVIEW_INTRO',"Je�li wszysytko jest ok to dodaj wpis<p />Uwaga: anulowanie spowoduje wykasowanie twojego komentarza.");
define('_PRY_R_REQ'," <small><i>(wymagane)</i></small>");
define('_PRY_R_OPT'," <small><i>(opcjonalne)</i></small>");
define('_PRY_R_HOMEURL',"tutaj");
define('_PRY_R_CHECKLINK',"CHECK LINK");
define('_PRY_R_QUICKPOST',"Quick Post");
?>