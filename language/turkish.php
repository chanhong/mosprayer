<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2007 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
//  @Translated by Murat Esgin webadmin[at]lavinya[dot]net  http://www.lavinya.net

defined( '_VALID_MOS' ) or die( 'Bu Dizine direkt eriþim yasaktýr.' );
//admin.mosprayer.html.php
define('_PRY_A_KEEPUPTODATE','Bu butona týklayarak mail listemize üye olacaksýnýz. Yeni eklenen güncellenen dosyalarda bildiri alabilirsiniz.');
define('_PRY_A_SUBSCRIBE','Abone Ol');
define('_PRY_A_UNSUBSCRIBE','Abonelikten Çýk');
define('_PRY_A_BACKUP','Yedekle');
define('_PRY_A_BACKUP_DESC','#__content_mosprayer_requests tablosunu yedekle');
define('_PRY_A_RESTORE','Onar');
define('_PRY_A_RESTORE_DESC','#__content_mosprayer_requests tablosunu onar');
define('_PRY_A_CONFIG','Ayarlar');
define('_PRY_A_CONFIG_DESC','Ayarlarý deðiþtir.');
define('_PRY_A_INSTRUCTIONS','Yönergeler');
define('_PRY_A_INSTRUCTIONS_DESC','Kurulum kullaným ayarlarý');
define('_PRY_A_ABOUT','Hakkýnda');
define('_PRY_A_ABOUT_DESC','Bileþen Hakkýnda');
define('_PRY_A_LINK','Link');
define('_PRY_A_LINK_DESC','Yapýmcýnýn websitesi');
define('_PRY_A_CHECK','Güncellemeleri kontrol et');
define('_PRY_A_VERSION','Sürümünüz ');
define('_PRY_A_DONATE','Bu scriptin geliþimine katkýda bulunmak için lütfen bizi destekleyin. Aþaðýdaki butona týklayarak devam edebilirsiniz.');
define('_PRY_A_REVIEW','Yorum incelemeleri (En yeniden)');
define('_PRY_A_DISPLAY','Göster #');
define('_PRY_A_NAME_SUB','Ad');
define('_PRY_A_EMAIL_SUB','Eposta');
define('_PRY_A_HOMEPAGE','Anasayfa');
define('_PRY_A_PRAYER','Yorumlar');
define('_PRY_A_ARTICLE','Makale');
define('_PRY_A_PUBLISHED','Yayýnda');
define('_PRY_A_MOS_BY','A MOS4.5 Custom Component by');
define('_PRY_A_CURRENT_SETTINGS','Geçerli ayarlar');
define('_PRY_A_EXPLANATION','Açýklamalarý');
define('_PRY_A_ADMIN_EMAIL','Admin Epostasý');
define('_PRY_A_ADMIN_EMAIL_DESC','Eðer yönetici bildirici seçeneði aktif ise belirttiðiniz adrese yeni yorum girildiðinde eposta yollanacaktýr.');
define('_PRY_A_ADMIN_ALERTS','Yönetici Eposta bildiricisi');
define('_PRY_A_ADMIN_EMAIL_ENABLE','Yöneticiye eposta Aç/Kapa');
define('_PRY_A_VISITOR_EMAIL','Ziyaretçi eposta bildiricisi');
define('_PRY_A_VISITOR_EMAIL_DESC','Ziyaretçilere yorum eklendiðinde eposta atýlýr. Aç/Kapa');
define('_PRY_A_REVIEW_SUBM','Yorum incelemesi');
define('_PRY_A_REVIEW_DESC','Eðer evet seçilirse yorumlar ilk önce admin onayýndan geçecek. Bu durumda email bildiricilerini açmanýz iyi olur.');
define('_PRY_A_REGISTERED_ONLY','Sadece kayýtlý kullanýcýlar');
define('_PRY_A_REG_ONLY_DESC','Eðer bu seçeneði aktiflerseniz sadece kayýtlý kullanýcýlar yorum býrakabilir fakat herkes bu yorumlarý okuyabilir, hayýrý seçerseniz herkes yorum býrakabilecektir.');
define('_PRY_A_NOTIFY_VERSION','Yeni sürümde bildir');
define('_PRY_A_NOT_VER_DESC','Eðer aktiflerseniz yeni güncellemelerin olduðunu ana ekranda göreceksiniz. (<em>NOT: Versiyon numaranýz yollanacaktýr</em>)');
define('_PRY_A_HAVE_DONATED','Have you Donated?');
define('_PRY_A_DONATE2','Please consider make a donation throught paypal. This will inspire me to improve this script more! :-)');
define('_PRY_A_IMPORTANT_NOTE','ÖNEMLÝ NOT');
define('_PRY_A_TEMPLATE','In order for mambo to check and see if its showing an article that can be prayered on, you must make a small change to your template.<br><a href="index2.php?option=templates&task=edit">Tema Düzenle</a> and look for the entry');
define('_PRY_A_CHANGE_TO','Bunu takip edenle deðiþtir');
define('_PRY_A_HAVE_FUN','Hepsi bu! ~ (Comment will only show on the article id = something otherwise it will not show)<p>Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_PRY_A_FORCE_PREVIEW','Önizleme');
define('_PRY_A_FORCE_PREVIEW_TEXT','Eðer aktifleþtirilirse kullanýcý yorum eklemeden önce önizleyecek');
define('_PRY_A_HIDE','Yorumlarý gizle');
define('_PRY_A_HIDE_DESC','Göster (Yorumlar (x) - Yorumlar ekle) instead of the prayers and form by default');
define('_PRY_A_DATE','Tarih');
define('_PRY_A_HIDE_URL','URL Gizle');
define('_PRY_A_HIDE_URL_DESC','URL Gizle - Yorumlara eklenen linkleri gizleyin ');
define('_PRY_A_EMAIL_REQ','Eposta gerekli');
define('_PRY_A_EMAIL_REQ_DESC','Yorumlara mail adresi girmek zorunlu olsun mu');
define('_PRY_A_EXCL_SEC','Bölüm Dýþý');
define('_PRY_A_EXCL_SEC_DESC','Bu bölümlerde yorum eklenmesin.. (lütfen bölüm id ini giriniz..)');
define('_PRY_A_PER_PAGE','Sayfa baþýna yorumlar');
define('_PRY_A_PER_PAGE_DESC','Sayfada gözükecek mesaj sayýsý. örneðin: 3');
define('_PRY_A_NEW_1ST','Yeni yorumlar ilk sýrada');
define('_PRY_A_NEW_1ST_DESC','Yeni yorumlar listelenmesi');
define('_PRY_A_FORM_ABOVE','Yorum forumu yukarýda');
define('_PRY_A_FORM_ABOVE_DESC','Yorumlarýn üstüne yorum ekleme formu eklensin mi');
define('_PRY_A_USE_DIVCSS','DIV CSS Kullan');
define('_PRY_A_USE_DIVCSS_DESC','Formda DIV CSS kullanýlsýn mý (?)');
define('_PRY_A_EXCL_CONT','Ýçerik Dýþý');
define('_PRY_A_EXCL_CONT_DESC','Yoruma kapatmak için içerik id nosunu giriniz');
define('_PRY_A_IP','IP');
define('_PRY_A_USE_USERNAME','Use username');
define('_PRY_A_USE_USERNAME_DESC','Show username instead of name');
define('_PRY_A_CLOSE_CONT','Close Contents');
define('_PRY_A_CLOSE_CONT_DESC','Use to close contents via article id not to show prayers form, eg: 0,1');
define('_PRY_A_USE_SECTOKEN','Use security token');
define('_PRY_A_USE_SECTOKEN_DESC','Check for security token when submit prayer (invisible Captcha)');

//mosprayer.php
define('_PRY_A_NO',"Hayýr");
define('_PRY_A_YES',"Evet");
define('_PRY_R_COM_NUMBER',"Yorumlarý Göster");
define('_PRY_R_NO_COM',"Henüz yorum eklenmedi - Ýlk yorumu siz yapabilirsiniz...");
define('_PRY_R_POST',"Gönderen");
define('_PRY_R_HOMEPAGE',"Anasayfa");
define('_PRY_R_DATE_ON',"on");
define('_PRY_R_DATE_AT',"at");
define('_PRY_R_ADD_PRAYER',"Konuya yorum ekle: ");
define('_PRY_R_ADD_COM2'," ...");
define('_PRY_R_NAME',"Ýsim");
define('_PRY_R_EMAIL',"E-Posta");
define('_PRY_R_EMAIL_NOT',"Eposta adresiniz kullanýcýlar tarafýndan Görülmeyecektir. Sadece site yöneticileri görebilir");
define('_PRY_R_HOMEPAGE_IN',"Anasayfa");
define('_PRY_R_COM',"Yorum");
define('_PRY_R_FULLY',"Lütfen formu tam doldurun!");
define('_PRY_R_NEW_COM',"Yeni yorum");
define('_PRY_R_HAVE_NEW',"Bu makalede yeni bir yorum var:");
define('_PRY_R_LOGIN',"Yorum yayýnlamak veya silmek için lütfen giriþ yapýn");
define('_PRY_R_QUICKLINK',"Buradan giriþ yapabilirsiniz");
define('_PRY_R_THANKS',"Yorumlarýnýz için teþekkürler.");
define('_PRY_R_THANKS2',"Bu makaleye yorum eklediðiniz için teþekkür ederiz.");
define('_PRY_R_ADMIN_REV',"Yorumunuz yöneticiler tarafýndan incelenecektir.");
define('_PRY_R_ENTERED',"Eklendiniz");
define('_PRY_R_VISIT',"Lütfen sitemizi yeniden ziyaret ediniz");
define('_PRY_R_THANKS3',"Yorumunuz için teþekkürler - Ýlgili konuya yorum ekleme iþleminiz gerçekleþmiþtir");
define('_PRY_R_THANKS4',"Yorumunuz için teþekkürler - Yayýnlanmadan önce bir yönetici yorumunuzu inceleyecek!");
define('_PRY_R_SUBMIT',"Yolla");
define('_PRY_R_RESET',"Temizle");
define('_PRY_R_NOT_AUTH',"Yorum eklemek için üye olmalýsýnýz. Üye iseniz lütfen giriþ yapýn");
define('_PRY_R_PREV_PAGE',"Önceki sayfa");
define('_PRY_R_NEXT_PAGE',"Sonraki sayfa");
define('_PRY_R_PAGE',"Sayfa");
define('_PRY_R_REQUEST',"yorumlar");
define('_PRY_R_OF',"de");
define('_PRY_R_CANCEL',"Ýptal");
define('_PRY_R_FORM_INTRO',"Aþaðýya yorumunuzu girebilirsiniz.");
define('_PRY_R_PREVIEW_HEAD',"Lütfen formu kontrol edin...");
define('_PRY_R_PREVIEW_INTRO',"Aþaðýdaki bilgiler doðru mu? <p />Lütfen yollamadan gerekli düzenlemeleri yapýn.  Dikkat: Ýptal ederseniz yorumunuz silinecektir!");
define('_PRY_R_REQ'," <small><i>(gerekli)</i></small>");
define('_PRY_R_OPT'," <small><i>(isteðe baðlý)</i></small>");
define('_PRY_R_HOMEURL',"here");
define('_PRY_R_CHECKLINK',"CHECK LINK");
define('_PRY_R_QUICKPOST',"Quick Post");
?>