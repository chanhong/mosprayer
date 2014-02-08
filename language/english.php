<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/


defined( '_VALID_MOS' ) or die( 'Direct access to this location is not allowed.' );
//admin.mosprayer.html.php
define('_PRY_A_KEEPUPTODATE','If you want to keep up to date with this and other great components from Chanh Ong, please subscribe to the mailing list by clicking this button.');
define('_PRY_A_SUBSCRIBE','Subscribe');
define('_PRY_A_UNSUBSCRIBE','Unsubscribe');
define('_PRY_A_BACKUP','Backup');
define('_PRY_A_BACKUP_DESC','Backup the #__content_mosprayer_requests table');
define('_PRY_A_RESTORE','Restore');
define('_PRY_A_RESTORE_DESC','Restore the #__content_mosprayer_requests table');
define('_PRY_A_CONFIG','Configuration');
define('_PRY_A_CONFIG_DESC','Change the configuration');
define('_PRY_A_INSTRUCTIONS','Instructions');
define('_PRY_A_INSTRUCTIONS_DESC','Post Install Configuration');
define('_PRY_A_ABOUT','About');
define('_PRY_A_ABOUT_DESC','About this component');
define('_PRY_A_LINK','Link');
define('_PRY_A_LINK_DESC','To author&acute;s website');
define('_PRY_A_CHECK','Check for updates');
define('_PRY_A_VERSION','Your version is ');
define('_PRY_A_DONATE','Please consider clicking the donate button below to donate. This will inspire me to improve this script more.');
define('_PRY_A_REVIEW','Review Prayers (Newest first)');
define('_PRY_A_DISPLAY','Display #');
define('_PRY_A_NAME_SUB','Name');
define('_PRY_A_EMAIL_SUB','Email');
define('_PRY_A_HOMEPAGE','Homepage');
define('_PRY_A_PRAYER','Prayer');
define('_PRY_A_ARTICLE','Article');
define('_PRY_A_PUBLISHED','Published');
define('_PRY_A_MOS_BY','A MOS4.5 Custom Component by');
define('_PRY_A_CURRENT_SETTINGS','Current Setting');
define('_PRY_A_EXPLANATION','Explanation');
define('_PRY_A_ADMIN_EMAIL','Admin Email');
define('_PRY_A_ADMIN_EMAIL_DESC','If email is turned on, an email will be sent to this address when a new prayer is entered.');
define('_PRY_A_ADMIN_ALERTS','Admin Email Alerts');
define('_PRY_A_ADMIN_EMAIL_ENABLE','Enable/Disable emails to Admin');
define('_PRY_A_VISITOR_EMAIL','Visitor Email Alerts');
define('_PRY_A_VISITOR_EMAIL_DESC','Enable/Disable emails to the person who submitted the prayer');
define('_PRY_A_REVIEW_SUBM','Review submissions');
define('_PRY_A_REVIEW_DESC','If you set this to &acute;Yes&acute; then prayers will be added to the database and will wait for you to review and publish them before appearing. You will receive an email <strong>only</strong> if there is a value in &quot;Admin email&quot; and you have &quot;Email Alerts&quot; set to &quot;Yes.&quot;');
define('_PRY_A_REGISTERED_ONLY','Registered users only');
define('_PRY_A_REG_ONLY_DESC','Set &quot;Yes&quot; to allow only registered users to leave prayers but anyone can see prayers, Set &quot;No&quot; to allow any visitor to prayer');
define('_PRY_A_NOTIFY_VERSION','Notify if new version available');
define('_PRY_A_NOT_VER_DESC','If set to &quot;Yes&quot; you will be shown a dialog on the main screen when an update to this component is available.  (<em>NOTE: The only data sent to the update server is your version number.</em>)');
define('_PRY_A_HAVE_DONATED','Have you Donated?');
define('_PRY_A_DONATE2','Please consider make a donation through PayPal. This will inspire me to improve this script more! :-)');
define('_PRY_A_IMPORTANT_NOTE','IMPORTANT NOTES');
define('_PRY_A_TEMPLATE','In order for Mambo to check and see if its showing an article that can be prayered on, you must make a small change to your template.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> and look for the entry.');
define('_PRY_A_CHANGE_TO','Change this to the following:');
define('_PRY_A_HAVE_FUN','Thats it! ~ (Comment will only show on the article id = something otherwise it will not show)<p>Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_PRY_A_FORCE_PREVIEW','Force a preview');
define('_PRY_A_FORCE_PREVIEW_TEXT','Set this to &acute;Yes&acute; to force your visitors to preview their prayers before final submission.');
define('_PRY_A_HIDE','Hide prayers');
define('_PRY_A_HIDE_DESC','Show (Prayers (x) - Add prayers) instead of the prayers and form by default');
define('_PRY_A_DATE','Date');
define('_PRY_A_HIDE_URL','Hide URL');
define('_PRY_A_HIDE_URL_DESC','Hide URL: Use to hide URL on the prayers form by default');
define('_PRY_A_EMAIL_REQ','Email required');
define('_PRY_A_EMAIL_REQ_DESC','Use to set whether or not email is required on the prayers form by default.');
define('_PRY_A_EXCL_SEC','Exclude section');
define('_PRY_A_EXCL_SEC_DESC','Use to exclude section not to show prayers form by default, e.g. 0,1');
define('_PRY_A_PER_PAGE','Prayers per page');
define('_PRY_A_PER_PAGE_DESC','Use to show number of prayers per page, e.g. 3');
define('_PRY_A_NEW_1ST','New prayers first');
define('_PRY_A_NEW_1ST_DESC','List new prayer entries first');
define('_PRY_A_FORM_ABOVE','Comment form above');
define('_PRY_A_FORM_ABOVE_DESC','Show prayer form above prayer entries');
define('_PRY_A_USE_DIVCSS','Use DIV CSS');
define('_PRY_A_USE_DIVCSS_DESC','Show prayer form using DIV w/ CSS from template instead of table');
define('_PRY_A_EXCL_CONT','Exclude contents');
define('_PRY_A_EXCL_CONT_DESC','Use to exclude contents via article id not to show prayers form, e.g. 0,1');
define('_PRY_A_IP','IP');
define('_PRY_A_USE_USERNAME','Use username');
define('_PRY_A_USE_USERNAME_DESC','Show username instead of name');
define('_PRY_A_CLOSE_CONT','Close Contents');
define('_PRY_A_CLOSE_CONT_DESC','Use to close contents via article id not to show prayers form, eg: 0,1');
define('_PRY_A_USE_SECTOKEN','Use security token');
define('_PRY_A_USE_SECTOKEN_DESC','Check for security token when submit prayer (invisible Captcha)');

//mosprayer.php
define('_PRY_A_NO',"No");
define('_PRY_A_YES',"Yes");
define('_PRY_R_COM_NUMBER',"View Prayer Requests");
define('_PRY_R_NO_COM',"There are no prayers yet. Feel free to add one using the form below.");
define('_PRY_R_POST',"Posted by");
define('_PRY_R_HOMEPAGE',"whose homepage is");
define('_PRY_R_DATE_ON',"on");
define('_PRY_R_DATE_AT',"at");
define('_PRY_R_ADD_PRAYER',"Add Prayers: ");
define('_PRY_R_ADD_COM2'," ");
define('_PRY_R_NAME',"Name:");
define('_PRY_R_EMAIL',"E-mail:");
define('_PRY_R_EMAIL_NOT',"Your email will not be displayed on the site; only to our administrator.");
define('_PRY_R_HOMEPAGE_IN',"Home page:");
define('_PRY_R_COM',"Prayer:");
define('_PRY_R_FULLY',"Please fully complete the form!");
define('_PRY_R_NEW_COM',"New prayer on");
define('_PRY_R_HAVE_NEW',"You have a new prayer on the following article:");
define('_PRY_R_LOGIN',"Please login and publish or delete this prayer.");
define('_PRY_R_QUICKLINK',"Here is the quick link to login:");
define('_PRY_R_THANKS',"Thanks for your prayers on");
define('_PRY_R_THANKS2',"Thanks for your prayer on the following article:");
define('_PRY_R_ADMIN_REV',"An administrator will review your prayers shortly.");
define('_PRY_R_ENTERED',"You entered");
define('_PRY_R_VISIT',"Please visit our site again soon at");
define('_PRY_R_THANKS3',"Thanks for your prayers. They have been added to this page");
define('_PRY_R_THANKS4',"Thanks for your prayers. They will be reviewed by an administrator prior to being published!");
define('_PRY_R_SUBMIT',"Submit");
define('_PRY_R_RESET',"Reset");
define('_PRY_R_NOT_AUTH',"You are not authorized to leave prayers. Please login first.");
define('_PRY_R_PREV_PAGE',"Prev Page");
define('_PRY_R_NEXT_PAGE',"Next Page");
define('_PRY_R_PAGE',"Page");
define('_PRY_R_REQUEST',"Prayers");
define('_PRY_R_OF',"of");
define('_PRY_R_CANCEL',"Cancel");
define('_PRY_R_FORM_INTRO',"Enter your prayer below:");
define('_PRY_R_PREVIEW_HEAD',"Please check your entry.");
define('_PRY_R_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Canceling will erase your prayer!");
define('_PRY_R_REQ'," <small><i>(required)</i></small>");
define('_PRY_R_OPT'," <small><i>(optional)</i></small>");
define('_PRY_R_HOMEURL',"here");
define('_PRY_R_CHECKLINK',"CHECK LINK");
define('_PRY_R_QUICKPOST',"Quick Post");
?>