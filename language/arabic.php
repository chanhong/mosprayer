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
define('_PRY_A_KEEPUPTODATE','ÅĞÇ ÃÑÏÊ ÇáÅÔÊÑÇß İí ŞÇÆãÉ ÇáÊÍÏíËÇÊ ÅÖÛØ Úáì  ÇáÒÑ');
define('_PRY_A_SUBSCRIBE','ÅÔÊÑÇß');
define('_PRY_A_UNSUBSCRIBE','ÅäÓÍÇÈ');
define('_PRY_A_BACKUP','äÓÎÉ ÅÍÊíÇØíÉ');
define('_PRY_A_BACKUP_DESC','Úãá äÓÎÉ ÇÍÊíÇØíÉ ãä #__content_mosprayer_requests');
define('_PRY_A_RESTORE','ÅÓÊÚÇÏÉ');
define('_PRY_A_RESTORE_DESC','ÅÓÊÚÇÏÉ ÇáäÓÎÉ ÇáÅÍÊíÇØíÉ ãä #__content_mosprayer_requests');
define('_PRY_A_CONFIG','ÇáÊÚÏíáÇÊ');
define('_PRY_A_CONFIG_DESC','ÍİÙ ÇáÊÚÏíáÇÊ');
define('_PRY_A_INSTRUCTIONS','ÇáÊÚáíãÇÊ');
define('_PRY_A_INSTRUCTIONS_DESC','ØÑíŞÉ ÊäÕíÈ ÇáÈÑäÇãÌ');
define('_PRY_A_ABOUT','Úä ÇáÈÑäÇãÌ');
define('_PRY_A_ABOUT_DESC','Úä åĞÇ ÇáÈÑäÇãÌ');
define('_PRY_A_LINK','ÑÇÈØ');
define('_PRY_A_LINK_DESC','áãäÊÌ ÇáÈÑäÇãÌ');
define('_PRY_A_CHECK','ÇáÊÃßÏ ãä æÌæÏ ÊÍÏíËÇÊ');
define('_PRY_A_VERSION','ÅÕÏÇÑß åæ ');
define('_PRY_A_DONATE','íÑÌì ÇáÖÛØ Úáì ÃÚáÇä ÇáíÇåæ Ãæ Úáì ÇáÃŞá Şã ÈÏÚã ÇáÈÑäÇãÌ ÈÊÈÑÚ ÈÓíØ');
define('_PRY_A_REVIEW','ÚÑÖ ÇáÊÚáíŞÇÊ ( ÇáÃÍÏË ÃæáÇ )');
define('_PRY_A_DISPLAY','ÚÑÖ #');
define('_PRY_A_NAME_SUB','ÇáÅÓã');
define('_PRY_A_EMAIL_SUB','ÇáÈÑíÏ');
define('_PRY_A_HOMEPAGE','ÇáãæŞÚ');
define('_PRY_A_PRAYER','ÇáÊÚáíŞ');
define('_PRY_A_ARTICLE','ÇáãŞÇáÉ');
define('_PRY_A_PUBLISHED','ãäÔæÑ');
define('_PRY_A_MOS_BY','ÈÑäÇãÌ ÇáÊÚáíŞÇÊ ÈæÇÓØÉ');
define('_PRY_A_CURRENT_SETTINGS','ÇáÎÕÇÆÕ ÇáÍÇáíÉ');
define('_PRY_A_EXPLANATION','ÇáÔÑÍ');
define('_PRY_A_ADMIN_EMAIL','ÈÑíÏ ÇáãÏíÑ');
define('_PRY_A_ADMIN_EMAIL_DESC','ÈÑíÏ ÇáãÏíÑ ÇáĞí ÊÕá Çáíå ÇáÊÚáíŞÇÊ Úáì ÇáÈÑíÏ');
define('_PRY_A_ADMIN_ALERTS','ÅÈáÇÛ ÈÑíÏí');
define('_PRY_A_ADMIN_EMAIL_ENABLE','åá ÊÑíÏ ÊÈáíÛ ÈÑíÏí ÚäÏ ßá ÊÚáíŞ');
define('_PRY_A_VISITOR_EMAIL','ÈÑíÏ ááÒÇÆÑ');
define('_PRY_A_VISITOR_EMAIL_DESC','åá ÊÑíÏ ÅÑÓÇá ÈÑíÏ áßá ÒÇÆÑ Ãæ ÚÖæ ŞÇã ÈÅÖÇİÉ ÊÚáíŞ');
define('_PRY_A_REVIEW_SUBM','ÊİŞÏ ŞÈá ÇáäÔÑ');
define('_PRY_A_REVIEW_DESC','ÅĞÇ ÅÎÊÑÊ äÚã İĞáß íÚäí Ãä ÇáÊÚáíŞ íÖÇİ İí ŞÇÚÏÉ ÇáÈíÇäÇÊ æáÇ íäÔÑ ÇáÇ ÈÚÏ ÊÕÑíÍß áå ÈÇáäÔÑ .íãßäß ÊÍÏíÏ ÎíÇÑ ÅÈáÇÛ ÈÑíÏí ááãÏíÑ ÃÚáÇå æĞáß áÅÎÈÇÑß Èßá ÇáÊÚÇáíŞ ÇáÊí ÊäÊÙÑ ÇáäÔÑ');
define('_PRY_A_REGISTERED_ONLY','İŞØ ÇáÃÚÖÇÁ');
define('_PRY_A_REG_ONLY_DESC','ÅÎÊÑ äÚã áÅÊÇÍÉ ÇáÊÚáíŞÇÊ ááÃÚÖÇÁ İŞØ .. áÇ ÊÎİ ÓíÊã ÚÑÖ ÇáÊÚáíŞÇÊ ááÚÇãÉ æáßä áÇ íãßäåã ÇáÊÚáíŞ ÇáÇ ÇĞÇ ßÇä áÏíåã ÚÖæíÉ İí ÇáãÌáÉ');
define('_PRY_A_NOTIFY_VERSION','ÊÈáíÛ ÚäÏ æÌæÏ äÓÎÉ ÌÏíÏÉ');
define('_PRY_A_NOT_VER_DESC','ÅÎÊÑ äÚã ÅĞÇ ÃÑÏÊ Ãä ÊÕáß ÇáÊÍÏíËÇÊ ÚäÏ æÌæÏ äÓÎÉ ÌÏíÏÉ ãä ÇáÈÑäÇãÌ');
define('_PRY_A_HAVE_DONATED','åá ŞãÊ ÈÇáÊÈÑÚ ¿');
define('_PRY_A_DONATE2','ÅĞÇ ÅÎÊÑÊ äÚã İáä íÙåÑ ãÑÈÚ ÇáÊÈÑÚ ÊÍÊ ÇáÊÚáíŞÇÊ .. ÇĞÇ ÅÎÊÑÊ áÇ İÓíÙåÑ ãÑÈÚ ÇáÊÈÑÚ ÃÓİá ÇáÊÚáíŞÇÊ');
define('_PRY_A_IMPORTANT_NOTE','ãÚáæãÇÊ ãåãÉ');
define('_PRY_A_TEMPLATE','íÌÈ Úáíß ÊÍÑíÑ ÃãÑ İí ÇáŞÇáÈ æĞáß áÊİÚíá ÇáÊÚáíŞÇÊ İí ãÌáÊß<br><a href="index2.php?option=templates&task=edit">ÅäÊŞá Çáì ÇáŞæÇáÈ</a>');
define('_PRY_A_CHANGE_TO','ÅÓÊÈÏá ÇáßæÏ ÇáÊÇáí');
define('_PRY_A_HAVE_FUN','Thats it! ~ (I will not be answering emails along the line of &quot;<em>I&quot;ve installed your component but the form doesn&quot;t show.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_PRY_A_FORCE_PREVIEW','ãÔÇåÏÉ Ãæ ÈÑæİÉ');
define('_PRY_A_FORCE_PREVIEW_TEXT','ÅÎÊÑ äÚã ÇĞÇ ÃÑÏÊ ÚÑÖ ÈÑæİÉ ãä ÇáÊÚáíŞ ŞÈá ÇáÅÖÇİÉ áãÖíİ ÇáÊÚáíŞ');
define('_PRY_A_HIDE','ÅÎİÇÁ ÇáÍŞæá');
define('_PRY_A_HIDE_DESC','ÚÑÖ ÑæÇÈØ áÅÖÇİÉ ÇáÊÚáíŞ æ ãÔÇÏÉ ÇáÊÚáíŞÇÊ ÈÏáÇ ãä ÚÑÖ ÇáİæÑã ÊÍÊ ÇáãŞÇáÉ');
define('_PRY_A_DATE','ÇáÊÇÑíÎ');
define('_PRY_A_HIDE_URL','ÅÎİÇÁ ÇáÑÇÈØ');
define('_PRY_A_HIDE_URL_DESC','åá ÊæÏ ÅÎİÇÁ ÍŞá ÚäæÇä ãæŞÚ ãÖíİ ÇáÊÚáíŞ');
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
define('_PRY_A_NO',"áÇ");
define('_PRY_A_YES',"äÚã");
define('_PRY_R_COM_NUMBER',"ÚÏÏ ÇáÊÚáíŞÇÊ");
define('_PRY_R_NO_COM',"áÇ íæÌÏ Ãí ÊÚáíŞ Çáì ÇáÂä .. íãßäß ÇáÈÏÃ ÈÅÖÇİÉ Ãæá ÊÚáíŞ");
define('_PRY_R_POST',"ÈæÇÓØÉ");
define('_PRY_R_HOMEPAGE',"ÕÍÇÈ ãæŞÚ");
define('_PRY_R_DATE_ON',"İí");
define('_PRY_R_DATE_AT',"İí");
define('_PRY_R_ADD_PRAYER',"ÃÖİ ÊÚáíŞß ááãŞÇáÉ Ãæ ÇáÏÑÓ");
define('_PRY_R_ADD_COM2'," ...");
define('_PRY_R_NAME',"ÇáÅÓã");
define('_PRY_R_EMAIL',"ÇáÈÑíÏ");
define('_PRY_R_EMAIL_NOT',"ÓÊÊã ÍãÇíÉ ÈÑíÏß ãä ÇáÚÑÖ İí ÇáãæŞÚ");
define('_PRY_R_HOMEPAGE_IN',"ÇáãæŞÚ");
define('_PRY_R_COM',"ÇáÊÚáíŞ");
define('_PRY_R_FULLY',"íÑÌì ãáÃ ÇáÍŞæá !");
define('_PRY_R_NEW_COM',"ÊÚáíŞ ÌÏíÏ İí");
define('_PRY_R_HAVE_NEW',"áÏíß ÊÚáíŞ Úáì ÇáãŞÇáÉ ÇáÊÇáíÉ :");
define('_PRY_R_LOGIN',"íÑÌì ÇáÏÎæá ááæÍÉ ÇáÊÍßã áäÔÑ ÇáãŞÇáÉ Ãæ ÍĞİåÇ");
define('_PRY_R_QUICKLINK',"åĞÇ ÑÇÈØ ÓÑíÚ áÏÎæá áæÍÉ ÇáÊÍßã");
define('_PRY_R_THANKS',"ÔßÑÇ áÊÚáíŞß");
define('_PRY_R_THANKS2',"ÔßÑÇ áÊÚáíŞß Úáì ÇáÏÑÓ Ãæ ÇáãŞÇáÉ ÇáÊÇáíÉ");
define('_PRY_R_ADMIN_REV',"ÓíŞæã ÇáãÏíÑ ÈÊİŞÏ ÇáÊÚáíŞ ŞÈá äÔÑå");
define('_PRY_R_ENTERED',"ÃäÊ ÃÏÎáÊ");
define('_PRY_R_VISIT',"íÑÌì ÒíÇÑÉ ÇáãæŞÚ ŞÑíÈÇ");
define('_PRY_R_THANKS3',"ÔßÑÇ áÅÖÇİÊß ÇáÊÚáíŞ");
define('_PRY_R_THANKS4',"ÔßÑÇ áß Úáì ÇáÊÚáíŞ ... ÓÊÊã ãÔÇåÏÉ ÇáÊÚáíŞ ŞÈá äÔÑå ãä ŞÈá ÇáãÏíÑ");
define('_PRY_R_SUBMIT',"ÃÖİ");
define('_PRY_R_RESET',"ãÓÍ");
define('_PRY_R_NOT_AUTH',"áÇ íãßäß ÅÖÇİÉ ÊÚáíŞ íÑÌì ÊÓÌíá ÏÎæá");
define('_PRY_R_PREV_PAGE',"Prev Page");
define('_PRY_R_NEXT_PAGE',"Next Page");
define('_PRY_R_PAGE',"Page");
define('_PRY_R_REQUEST',"User Prayers");
define('_PRY_R_OF',"of");
define('_PRY_R_CANCEL',"Cancel");
define('_PRY_R_FORM_INTRO',"Enter your prayer below.");
define('_PRY_R_PREVIEW_HEAD',"Please check your entry...");
define('_PRY_R_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Cancelling will erase your prayer!");
define('_PRY_R_REQ',"<small><i> (ãØáæÈ)</i></small>");
define('_PRY_R_OPT',"<small><i>(optional)</i></small>");
define('_PRY_R_HOMEURL',"here");
define('_PRY_R_CHECKLINK',"CHECK LINK");
define('_PRY_R_QUICKPOST',"Quick Post");
?>