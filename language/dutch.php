<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Joomla - Reacties on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//admin.mosprayer.html.php
define('_PRY_A_KEEPUPTODATE','Als je op de hoogte wilt blijven van deze en andere goeie componenten van Chanh Ong schrijf je dan in voor de mailing list door op deze knoppen te klikken');
define('_PRY_A_SUBSCRIBE','Abonneren');
define('_PRY_A_UNSUBSCRIBE','Abonnement opzeggen');
define('_PRY_A_BACKUP','Backup');
define('_PRY_A_BACKUP_DESC','Backup de #__content_mosprayer_requests tabel');
define('_PRY_A_RESTORE','Terugzetten');
define('_PRY_A_RESTORE_DESC','De #__content_mosprayer_requests tabel terugzetten');
define('_PRY_A_CONFIG','Configuratie');
define('_PRY_A_CONFIG_DESC','Verander de configuratie');
define('_PRY_A_INSTRUCTIONS','Instructies');
define('_PRY_A_INSTRUCTIONS_DESC','Post Installatie Configuratie');
define('_PRY_A_ABOUT','Over');
define('_PRY_A_ABOUT_DESC','Over dit component');
define('_PRY_A_LINK','Link');
define('_PRY_A_LINK_DESC','Naar de auteurs website');
define('_PRY_A_CHECK','Controleer voor updates');
define('_PRY_A_VERSION','Gebruikte versie is ');
define('_PRY_A_DONATE','Aub, neem in overweging om de onderstaande knop aan te klikken en mij £10 Britse ponden te sturen. Het zal mij zeker motiveren dit script te verbeteren..');
define('_PRY_A_REVIEW','Beoordeel Reagerenden (Nieuwste eerst)');
define('_PRY_A_DISPLAY','Toon #');
define('_PRY_A_NAME_SUB','Naam');
define('_PRY_A_EMAIL_SUB','E-mail');
define('_PRY_A_HOMEPAGE','Homepage');
define('_PRY_A_PRAYER','Reactie');
define('_PRY_A_ARTICLE','Artikel');
define('_PRY_A_PUBLISHED','Gepubliceerd');
define('_PRY_A_MOS_BY','Een MOS4.5 Custom Component van');
define('_PRY_A_CURRENT_SETTINGS','Huidige Stand');
define('_PRY_A_EXPLANATION','Verklaring');
define('_PRY_A_ADMIN_EMAIL','Admin E-mail');
define('_PRY_A_ADMIN_EMAIL_DESC','Als e-mail aanstaat zal er een mailtje gestuurd worden wanneer er een nieuw reactie is toegevoegd');
define('_PRY_A_ADMIN_ALERTS','Admin E-mail Notificatie');
define('_PRY_A_ADMIN_EMAIL_ENABLE','Zet e-mails naar de Admin aan/uit');
define('_PRY_A_VISITOR_EMAIL','Bezoeker Email Notificatie');
define('_PRY_A_VISITOR_EMAIL_DESC','Zet e-mails naar de bezoeker die reactie heeft achtergelaten aan/uit');
define('_PRY_A_REVIEW_SUBM','Beoordeel Inzendingen');
define('_PRY_A_REVIEW_DESC','Als je dit op &quot;Ja&quot; zet, worden de prayeraren aan de database toegevoegd en zullen op je wachten om beoordeeld en gepubliceerd te worden alvorens ze te zien zullen zijn. Je krijgt <strong>alleen</strong> een e-mail als er een waarde staat in &quot;Admin e-mail&quot; en je &quot;Admin Email Notificatie&quot; op &quot;Ja&quot; hebt gezet');
define('_PRY_A_REGISTERED_ONLY','Alleen geregistreerde gebruikers');
define('_PRY_A_REG_ONLY_DESC','Zet op &quot;Ja&quot; om alleen ingelogde gebruikers reactie te tonen en te laten maken. Zet op &quot;Nee&quot; om iedere bezoeker de prayeraren te laten zien');
define('_PRY_A_NOTIFY_VERSION','Bericht bij een nieuwe versie');
define('_PRY_A_NOT_VER_DESC','Als dit op &quot;Ja&quot; staat, zie je op het hoofdscherm wanneer er een update van dit component beschikbaar is. (<em>MERK OP: de enige data die naar update server gezonden wordt is je versie nummer</em>)');
define('_PRY_A_HAVE_DONATED','Heb je al gedoneerd?');
define('_PRY_A_DONATE2','Aub, neem in overweging om &pound;10,00 via paypal te doneren. Dit zal mij inspireren dit script verder te verbeteren! :-)');
define('_PRY_A_IMPORTANT_NOTE','BELANGRIJK');
define('_PRY_A_TEMPLATE','Om Joomla/Mambo in staat te stellen om te controleren of het een artikel laat zien waarop reactie geleverd kan worden moet je een kleine verandering in je template aanbrengen.<br><a href="index2.php?option=templates&task=edit">Bewerk jouw template bestand</a> en zoek de volgende regel op');
define('_PRY_A_CHANGE_TO','En verander het in het volgende');
define('_PRY_A_HAVE_FUN','Dat is alles! ~ (Ik beantwoord geen e-mail meer in trant van &quot;<em>Ik heb jouw component geinstalleerd maar ik zie het formulier niet</em>&quot; :-)</p> <p>          Veel Plezier!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_PRY_A_FORCE_PREVIEW','Forceer nakijken');
define('_PRY_A_FORCE_PREVIEW_TEXT','Zet dit op &quot;Ja&quot; om te forceren dat je bezoekers hun reactie nakijken voordat het definitief ingezonden wordt');
define('_PRY_A_HIDE','Verberg reactie');
define('_PRY_A_HIDE_DESC','Toon &quot;Aantal reacties (x) - Voeg je reactie op dit artikel toe&quot; in plaats van standaard alle prayeraren en het formulier');
define('_PRY_A_DATE','Datum');
define('_PRY_A_HIDE_URL','Verberg URL');
define('_PRY_A_HIDE_URL_DESC','Verberg URL - Gebruik om standaard de URL op het reactiescherm te verbergen');
define('_PRY_A_EMAIL_REQ','E-mail Vereist');
define('_PRY_A_EMAIL_REQ_DESC','Gebruik dit om al of niet e-mail vereist te laten zijn op het reactiescherm');
define('_PRY_A_EXCL_SEC','Exclude Sectie');
define('_PRY_A_EXCL_SEC_DESC','Gebruik om standaard een sectie te laten excluden voor het tonen van hetreactiescherm, bv.: 0,1');
define('_PRY_A_PER_PAGE','Reacties per pagina');
define('_PRY_A_PER_PAGE_DESC','Gebruik voor het aantal te tonen reacties, bv.: 3');
define('_PRY_A_NEW_1ST','Nieuwe reacties eerst');
define('_PRY_A_NEW_1ST_DESC','Toon nieuwe reacties eerst');
define('_PRY_A_FORM_ABOVE','Reactiescherm boven');
define('_PRY_A_FORM_ABOVE_DESC','Toon reactiescherm boven de andere reacties');
define('_PRY_A_USE_DIVCSS','Gebruik DIV CSS');
define('_PRY_A_USE_DIVCSS_DESC','Toon reactiescherm op basis van DIV CSS van uw template');
define('_PRY_A_EXCL_CONT','Exclude artikel');
define('_PRY_A_EXCL_CONT_DESC','Gebruik om bij bepaalde artikelen geen ereactiescherm te tonen, bv.: 0,1');
define('_PRY_A_IP','IP');
define('_PRY_A_USE_USERNAME','Use username');
define('_PRY_A_USE_USERNAME_DESC','Show username instead of name');
define('_PRY_A_CLOSE_CONT','Close Contents');
define('_PRY_A_CLOSE_CONT_DESC','Use to close contents via article id not to show prayers form, eg: 0,1');
define('_PRY_A_USE_SECTOKEN','Use security token');
define('_PRY_A_USE_SECTOKEN_DESC','Check for security token when submit prayer (invisible Captcha)');

//mosprayer.php
define('_PRY_A_NO',"Nee");
define('_PRY_A_YES',"Ja");
define('_PRY_R_COM_NUMBER',"Aantal reacties");
define('_PRY_R_NO_COM',"Er is nog geen reactie op dit stuk <br /> Voeg er eentje toe met het formulier hieronder...");
define('_PRY_R_POST',"Gemaakt door");
define('_PRY_R_HOMEPAGE',"Homepage");
define('_PRY_R_DATE_ON',"op");
define('_PRY_R_DATE_AT',"om");
define('_PRY_R_ADD_PRAYER',"Voeg je reactie op dit artikel toe...");
define('_PRY_R_ADD_COM2'," ...");
define('_PRY_R_NAME',"Naam");
define('_PRY_R_EMAIL',"E-mail");
define('_PRY_R_EMAIL_NOT',"Je e-mail wordt niet op de site getoond - alleen aan onze beheerder");
define('_PRY_R_HOMEPAGE_IN',"Homepage");
define('_PRY_R_COM',"Reactie");
define('_PRY_R_FULLY',"Vul het formulier volledig in!");
define('_PRY_R_NEW_COM',"Nieuwe reactie op");
define('_PRY_R_HAVE_NEW',"Je hebt een nieuwe reactie op artikel:");
define('_PRY_R_LOGIN',"Login en publiceer of verwijder deze reactie");
define('_PRY_R_QUICKLINK',"Hier is een quick link om in te loggen");
define('_PRY_R_THANKS',"Bedankt voor je reactie op");
define('_PRY_R_THANKS2',"Bedankt voor je reactie op het volgende artikel");
define('_PRY_R_ADMIN_REV',"Een beheerder zal spoedig je reactie beoordelen");
define('_PRY_R_ENTERED',"Je voerde in");
define('_PRY_R_VISIT',"Bezoek onze site gauw nog eens op");
define('_PRY_R_THANKS3',"Bedankt voor je reactie - Hij is toegevoegd aan deze pagina");
define('_PRY_R_THANKS4',"Bedankt voor je reactie - Hij zal worden beoordeeld door een beheerder alvorens het wordt gepubliceerd!");
define('_PRY_R_SUBMIT',"Versturen");
define('_PRY_R_RESET',"Reset");
define('_PRY_R_NOT_AUTH',"Je bent niet geauthoriseerd om reacties achter te laten - Eerst aanmelden a.u.b.");
define('_PRY_R_PREV_PAGE',"Vorige Page");
define('_PRY_R_NEXT_PAGE',"Volgende Page");
define('_PRY_R_REQUEST',"Reacties"); 
define('_PRY_R_PAGE',"Pagina");
define('_PRY_R_OF',"van");
define('_PRY_R_CANCEL',"Annuleer");
define('_PRY_R_FORM_INTRO',"Hier uw reactie inbrengen.");
define('_PRY_R_PREVIEW_HEAD',"Controleer uw reactie a.u.b...");
define('_PRY_R_PREVIEW_INTRO',"Is alles correct? <p />A.u.b. alle wijzigingen aanbrengen alvorens te versturen. Attentie: Annuleren wist uw reactie!");
define('_PRY_R_REQ'," <small><i>(verplicht)</i></small>");
define('_PRY_R_OPT'," <small><i>(optioneel)</i></small>");
define('_PRY_R_HOMEURL',"hier");
define('_PRY_R_CHECKLINK',"CHECK LINK");
define('_PRY_R_QUICKPOST',"Quick Post");
?>