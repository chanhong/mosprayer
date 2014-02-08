<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
// Czech translation: emil, mambodrom.cz, 09.12.2007

defined( '_VALID_MOS' ) or die( 'Direct access to this location is not allowed.' );
//admin.mosprayer.html.php
define('_PRY_A_KEEPUPTODATE','Pokud chcete udržovat tuto a další komponenty od Chanh Ong aktuální, přihlaste se na rozesílací seznam stisknutím tohoto tlačítka.');
define('_PRY_A_SUBSCRIBE','Přihlásit');
define('_PRY_A_UNSUBSCRIBE','Odhlásit');
define('_PRY_A_BACKUP','Zálohovat');
define('_PRY_A_BACKUP_DESC','Zálohovat #__content_mosprayer_requests table');
define('_PRY_A_RESTORE','Obnovit');
define('_PRY_A_RESTORE_DESC','Obnovit #__content_mosprayer_requests table');
define('_PRY_A_CONFIG','Nastavení');
define('_PRY_A_CONFIG_DESC','Změnit nastavení');
define('_PRY_A_INSTRUCTIONS','Instrukce');
define('_PRY_A_INSTRUCTIONS_DESC','Nastavení po instalaci');
define('_PRY_A_ABOUT','O programu');
define('_PRY_A_ABOUT_DESC','O této komponentě');
define('_PRY_A_LINK','Odkaz');
define('_PRY_A_LINK_DESC','na webové sídlo autora');
define('_PRY_A_CHECK','Zkontrolovat aktualizace');
define('_PRY_A_VERSION','Vaše verze je ');
define('_PRY_A_DONATE','Zvažte prosím finanční příspěvek kliknutím na ikonu níže. Bude mě to inspirovat k dalšímu vylepšení tohoto skriptu.');
define('_PRY_A_REVIEW','Přehled komentářů (nové jako první)');
define('_PRY_A_DISPLAY','Zobrazit #');
define('_PRY_A_NAME_SUB','Jméno');
define('_PRY_A_EMAIL_SUB','E-mail');
define('_PRY_A_HOMEPAGE','WWW');
define('_PRY_A_PRAYER','Komentář');
define('_PRY_A_ARTICLE','Článek');
define('_PRY_A_PUBLISHED','Publikováno');
define('_PRY_A_MOS_BY','MOS4.5 uživatelská komponenta od');
define('_PRY_A_CURRENT_SETTINGS','Stávající nastavení');
define('_PRY_A_EXPLANATION','Vysvětlující popis');
define('_PRY_A_ADMIN_EMAIL','E-mail administrátora');
define('_PRY_A_ADMIN_EMAIL_DESC','Pokud je vyplněna e-mailová adresa, bude na ni zasláno oznámení o novém komentáři.');
define('_PRY_A_ADMIN_ALERTS','Upozornit administrátora mailem');
define('_PRY_A_ADMIN_EMAIL_ENABLE','Povolit/zakázat upozorňovací e-mail  administrátorovi');
define('_PRY_A_VISITOR_EMAIL','Upozornit návštěvníka mailem');
define('_PRY_A_VISITOR_EMAIL_DESC','Povolit/zakázat upozorňovací e-mail  autorovi komentáře');
define('_PRY_A_REVIEW_SUBM','Schvalovat komentáře');
define('_PRY_A_REVIEW_DESC','Pokud nastavíte na &quot;Ano&quot;, budou komentáře vloženy do databáze a budou čekat na schválení. Upozorňovací e-mail obdržíte <strong>pouze</strong>, když je vyplněno pole &quot;E-mail administrátora&quot; a volba &quot;Upozorňovat administrátora mailem&quot; je nastavena na &quot;Ano.&quot;');
define('_PRY_A_REGISTERED_ONLY','Pouze registrovaní uživatelé');
define('_PRY_A_REG_ONLY_DESC','Nastavte &quot;Ano&quot;, pokud chcete povolit zápis komentářů pouze registrovaným uživatelům a čtení všem. Nastavte &quot;Ne&quot;, pokud chcete povolit zápis komentářů komukoliv.');
define('_PRY_A_NOTIFY_VERSION','Upozornit na novou verzi');
define('_PRY_A_NOT_VER_DESC','Pokud je nastaveno &quot;Ano&quot;, bude v případě dostupnosti aktualizované verze zobrazen na hlavní obrazovce informační dialog.  (<em>POZNÁMKA: Jediná data, která jsou odesílána na aktualizační server, je číslo Vaší verze.</em>)');
define('_PRY_A_HAVE_DONATED','Přispěli jste darem?');
define('_PRY_A_DONATE2','Zvažte prosím příspěvek pomocí PayPal. Bude mě to inspirovat k dalšímu vylepšení tohoto skriptu! :-)');
define('_PRY_A_IMPORTANT_NOTE','DŮLEŽITÁ POZNÁMKA');
define('_PRY_A_TEMPLATE','Aby Mambo mohlo zobrazovat komentáře ke článkům, musíte provést malou změnu ve Vaší šabloně.<br>Upravte Váš <a href="index2.php?option=templates&task=edit">soubor šablony</a> index.php a vyhledejte zápis.');
define('_PRY_A_CHANGE_TO','Změňte na následující');
define('_PRY_A_HAVE_FUN','A je to! ~ (Komentáře budou zobrazeny pouze u článků, jejichž id = cokoliv, jinak nebudou zobrazeny)<p>Mnoho štěstí!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_PRY_A_FORCE_PREVIEW','Zobrazit náhled');
define('_PRY_A_FORCE_PREVIEW_TEXT','Nastavte na &quot;Ano&quot; pro zobrazení náhledu komentáře návštěvníkovi před jeho závěrečným odesláním.');
define('_PRY_A_HIDE','Skrýt komentáře');
define('_PRY_A_HIDE_DESC','Zobrazit (Komentáře (x) - Přidat komentář) místo komentářů a formuláře');
define('_PRY_A_DATE','Datum');
define('_PRY_A_HIDE_URL','Skrýt URL');
define('_PRY_A_HIDE_URL_DESC','Skrýt URL: Skrýt URL ve formuláři komentářů');
define('_PRY_A_EMAIL_REQ','Vyžadovat e-mail');
define('_PRY_A_EMAIL_REQ_DESC','Nastavte, zda je e-mail ve formuláři komentáře povinný údaj.');
define('_PRY_A_EXCL_SEC','Vyloučit sekce');
define('_PRY_A_EXCL_SEC_DESC','Použijte pro vyloučení sekcí, ve kterých nebudou zobrazeny komentáře, např. 0,1');
define('_PRY_A_PER_PAGE','Komentářů na stránku');
define('_PRY_A_PER_PAGE_DESC','Použijte pro nastavení počtu zobrazených komentářů na stránce, např. 5');
define('_PRY_A_NEW_1ST','Nové komentáře jako první');
define('_PRY_A_NEW_1ST_DESC','Zobrazit nový komentář jako první');
define('_PRY_A_FORM_ABOVE','Formulář komentáře nahoře');
define('_PRY_A_FORM_ABOVE_DESC','Zobrazit formulář komentáře nad seznamem komentářů');
define('_PRY_A_USE_DIVCSS','Použít DIV CSS');
define('_PRY_A_USE_DIVCSS_DESC','Zobrazit DIV ve formuláři komentáře pomocí DIV CSS ze šablony namísto tabulky');
define('_PRY_A_EXCL_CONT','Vyloučit články');
define('_PRY_A_EXCL_CONT_DESC','Použijte pro vyloučení článků pomocí id, ke kterým nebudou zobrazeny komentáře, např. 0,1');
define('_PRY_A_IP','IP');
define('_PRY_A_USE_USERNAME','Use username');
define('_PRY_A_USE_USERNAME_DESC','Show username instead of name');
define('_PRY_A_CLOSE_CONT','Close Contents');
define('_PRY_A_CLOSE_CONT_DESC','Use to close contents via article id not to show prayers form, eg: 0,1');
define('_PRY_A_USE_SECTOKEN','Use security token');
define('_PRY_A_USE_SECTOKEN_DESC','Check for security token when submit prayer (invisible Captcha)');

//mosprayer.php
define('_PRY_A_NO',"Ne");
define('_PRY_A_YES',"Ano");
define('_PRY_R_COM_NUMBER',"Komentáře");
define('_PRY_R_NO_COM',"Dosud bez komentáře. Použijte formulář dole.");
define('_PRY_R_POST',"Zaslal");
define('_PRY_R_HOMEPAGE',"");
define('_PRY_R_DATE_ON',"");
define('_PRY_R_DATE_AT',"");
define('_PRY_R_ADD_PRAYER',"Přidat komentář ");
define('_PRY_R_ADD_COM2'," ");
define('_PRY_R_NAME',"Jméno:");
define('_PRY_R_EMAIL',"E-mail:");
define('_PRY_R_EMAIL_NOT',"Váš e-mail nebude na webovém sídle zobrazen; pouze administrátorovi.");
define('_PRY_R_HOMEPAGE_IN',"Vaše www:");
define('_PRY_R_COM',"Komentář:");
define('_PRY_R_FULLY',"Vyplňte prosím formulář úplně!");
define('_PRY_R_NEW_COM',"Komentář k");
define('_PRY_R_HAVE_NEW',"Nový komentář k následujícímu článku:");
define('_PRY_R_LOGIN',"Přihlaste se prosím a publikujte nebo vymažte tento komentář.");
define('_PRY_R_QUICKLINK',"Odkaz pro přihlášení");
define('_PRY_R_THANKS',"Děkujeme za komentář na");
define('_PRY_R_THANKS2',"Děkujeme za komentář k následujícímu článku");
define('_PRY_R_ADMIN_REV',"Administrátor co nejdříve posoudí Váš komentář.");
define('_PRY_R_ENTERED'," který jste zaslali");
define('_PRY_R_VISIT',"Navštivte nás znovu na");
define('_PRY_R_THANKS3',"Děkujeme Vám za komentář. Byl přidán na tuto stránku");
define('_PRY_R_THANKS4',"Děkujeme Vám za komentář. Před publikováním bude schválen administrátorem!");
define('_PRY_R_SUBMIT',"Odeslat");
define('_PRY_R_RESET',"Vynulovat");
define('_PRY_R_NOT_AUTH',"Nemáte oprávnění k zadávání komentářů. Nejdříve se prosím přihlaste.");
define('_PRY_R_PREV_PAGE',"Předchozí strana");
define('_PRY_R_NEXT_PAGE',"Další strana");
define('_PRY_R_PAGE',"Strana");
define('_PRY_R_REQUEST',"Komentáře");
define('_PRY_R_OF',"z");
define('_PRY_R_CANCEL',"Zrušit");
define('_PRY_R_FORM_INTRO',"Zadejte níže komentář:");
define('_PRY_R_PREVIEW_HEAD',"Prosím zkontrolujte Váš komentář");
define('_PRY_R_PREVIEW_INTRO',"Jsou níže uvedené údaje v pořádku? <p />Všechny nezbytné změny proveďte před odesláním.  Upozornění: Volba Zrušit vymaže Váš komentář!");
define('_PRY_R_REQ'," <small><i>(povinné)</i></small>");
define('_PRY_R_OPT'," <small><i>(nepovinné)</i></small>");
define('_PRY_R_HOMEURL',"www");
define('_PRY_R_CHECKLINK',"CHECK LINK");
define('_PRY_R_QUICKPOST',"Quick Post");
?>