?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
// translated by Fuga http://dndon.net

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//admin.mosprayer.html.php
define('_PRY_A_KEEPUPTODATE','��� ���� �������� �� ����� ��������� ���� ���  ����');
define('_PRY_A_SUBSCRIBE','������');
define('_PRY_A_UNSUBSCRIBE','������');
define('_PRY_A_BACKUP','���� ��������');
define('_PRY_A_BACKUP_DESC','��� ���� �������� �� #__content_mosprayer_requests');
define('_PRY_A_RESTORE','�������');
define('_PRY_A_RESTORE_DESC','������� ������ ���������� �� #__content_mosprayer_requests');
define('_PRY_A_CONFIG','���������');
define('_PRY_A_CONFIG_DESC','��� ���������');
define('_PRY_A_INSTRUCTIONS','���������');
define('_PRY_A_INSTRUCTIONS_DESC','����� ����� ��������');
define('_PRY_A_ABOUT','�� ��������');
define('_PRY_A_ABOUT_DESC','�� ��� ��������');
define('_PRY_A_LINK','����');
define('_PRY_A_LINK_DESC','����� ��������');
define('_PRY_A_CHECK','������ �� ���� �������');
define('_PRY_A_VERSION','������ �� ');
define('_PRY_A_DONATE','���� ����� ��� ����� ������ �� ��� ����� �� ���� �������� ����� ����');
define('_PRY_A_REVIEW','��� ��������� ( ������ ���� )');
define('_PRY_A_DISPLAY','��� #');
define('_PRY_A_NAME_SUB','�����');
define('_PRY_A_EMAIL_SUB','������');
define('_PRY_A_HOMEPAGE','������');
define('_PRY_A_PRAYER','�������');
define('_PRY_A_ARTICLE','�������');
define('_PRY_A_PUBLISHED','�����');
define('_PRY_A_MOS_BY','������ ��������� ������');
define('_PRY_A_CURRENT_SETTINGS','������� �������');
define('_PRY_A_EXPLANATION','�����');
define('_PRY_A_ADMIN_EMAIL','���� ������');
define('_PRY_A_ADMIN_EMAIL_DESC','���� ������ ���� ��� ���� ��������� ��� ������');
define('_PRY_A_ADMIN_ALERTS','����� �����');
define('_PRY_A_ADMIN_EMAIL_ENABLE','�� ���� ����� ����� ��� �� �����');
define('_PRY_A_VISITOR_EMAIL','���� ������');
define('_PRY_A_VISITOR_EMAIL_DESC','�� ���� ����� ���� ��� ���� �� ��� ��� ������ �����');
define('_PRY_A_REVIEW_SUBM','���� ��� �����');
define('_PRY_A_REVIEW_DESC','��� ����� ��� ���� ���� �� ������� ���� �� ����� �������� ��� ���� ��� ��� ������ �� ������ .����� ����� ���� ����� ����� ������ ����� ���� ������� ��� �������� ���� ����� �����');
define('_PRY_A_REGISTERED_ONLY','��� �������');
define('_PRY_A_REG_ONLY_DESC','���� ��� ������ ��������� ������� ��� .. �� ��� ���� ��� ��������� ������ ���� �� ������ ������� ��� ��� ��� ����� ����� �� ������');
define('_PRY_A_NOTIFY_VERSION','����� ��� ���� ���� �����');
define('_PRY_A_NOT_VER_DESC','���� ��� ��� ���� �� ���� ��������� ��� ���� ���� ����� �� ��������');
define('_PRY_A_HAVE_DONATED','�� ��� ������� �');
define('_PRY_A_DONATE2','��� ����� ��� ��� ���� ���� ������ ��� ��������� .. ��� ����� �� ������ ���� ������ ���� ���������');
define('_PRY_A_IMPORTANT_NOTE','������� ����');
define('_PRY_A_TEMPLATE','��� ���� ����� ��� �� ������ ���� ������ ��������� �� �����<br><a href="index2.php?option=templates&task=edit">����� ��� �������</a>');
define('_PRY_A_CHANGE_TO','������ ����� ������');
define('_PRY_A_HAVE_FUN','Thats it! ~ (I will not be answering emails along the line of &quot;<em>I&quot;ve installed your component but the form doesn&quot;t show.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_PRY_A_FORCE_PREVIEW','������ �� �����');
define('_PRY_A_FORCE_PREVIEW_TEXT','���� ��� ��� ���� ��� ����� �� ������� ��� ������� ����� �������');
define('_PRY_A_HIDE','����� ������');
define('_PRY_A_HIDE_DESC','��� ����� ������ ������� � ����� ��������� ���� �� ��� ������ ��� �������');
define('_PRY_A_DATE','�������');
define('_PRY_A_HIDE_URL','����� ������');
define('_PRY_A_HIDE_URL_DESC','�� ��� ����� ��� ����� ���� ���� �������');
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
define('_PRY_A_NO',"��");
define('_PRY_A_YES',"���");
define('_PRY_R_COM_NUMBER',"��� ���������");
define('_PRY_R_NO_COM',"�� ���� �� ����� ��� ���� .. ����� ����� ������ ��� �����");
define('_PRY_R_POST',"������");
define('_PRY_R_HOMEPAGE',"���� ����");
define('_PRY_R_DATE_ON',"��");
define('_PRY_R_DATE_AT',"��");
define('_PRY_R_ADD_PRAYER',"��� ������ ������� �� �����");
define('_PRY_R_ADD_COM2'," ...");
define('_PRY_R_NAME',"�����");
define('_PRY_R_EMAIL',"������");
define('_PRY_R_EMAIL_NOT',"���� ����� ����� �� ����� �� ������");
define('_PRY_R_HOMEPAGE_IN',"������");
define('_PRY_R_COM',"�������");
define('_PRY_R_FULLY',"���� ��� ������ !");
define('_PRY_R_NEW_COM',"����� ���� ��");
define('_PRY_R_HAVE_NEW',"���� ����� ��� ������� ������� :");
define('_PRY_R_LOGIN',"���� ������ ����� ������ ���� ������� �� �����");
define('_PRY_R_QUICKLINK',"��� ���� ���� ����� ���� ������");
define('_PRY_R_THANKS',"���� �������");
define('_PRY_R_THANKS2',"���� ������� ��� ����� �� ������� �������");
define('_PRY_R_ADMIN_REV',"����� ������ ����� ������� ��� ����");
define('_PRY_R_ENTERED',"��� �����");
define('_PRY_R_VISIT',"���� ����� ������ �����");
define('_PRY_R_THANKS3',"���� ������� �������");
define('_PRY_R_THANKS4',"���� �� ��� ������� ... ���� ������ ������� ��� ���� �� ��� ������");
define('_PRY_R_SUBMIT',"���");
define('_PRY_R_RESET',"���");
define('_PRY_R_NOT_AUTH',"�� ����� ����� ����� ���� ����� ����");
define('_PRY_R_PREV_PAGE',"Prev Page");
define('_PRY_R_NEXT_PAGE',"Next Page");
define('_PRY_R_PAGE',"Page");
define('_PRY_R_REQUEST',"User Prayers");
define('_PRY_R_OF',"of");
define('_PRY_R_CANCEL',"Cancel");
define('_PRY_R_FORM_INTRO',"Enter your prayer below.");
define('_PRY_R_PREVIEW_HEAD',"Please check your entry...");
define('_PRY_R_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Cancelling will erase your prayer!");
define('_PRY_R_REQ',"<small><i> (�����)</i></small>");
define('_PRY_R_OPT',"<small><i>(optional)</i></small>");
define('_PRY_R_HOMEURL',"here");
define('_PRY_R_CHECKLINK',"CHECK LINK");
define('_PRY_R_QUICKPOST',"Quick Post");
?>