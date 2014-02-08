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
define('_PRY_A_KEEPUPTODATE','Se vuoi conoscere tutte le novità riguardanti questo e gli altri componenti sviluppati dall\' autore di MosPrayer, Chanh Ong, iscriviti alla mailing list usando questo pulsante');
define('_PRY_A_SUBSCRIBE','Iscriviti alla mailing list');
define('_PRY_A_UNSUBSCRIBE','Cancellati dalla mailing list');
define('_PRY_A_BACKUP','Backup');
define('_PRY_A_BACKUP_DESC','Fa il backup della tabella mos_content_prayers');
define('_PRY_A_RESTORE','Ripristina');
define('_PRY_A_RESTORE_DESC','Ripristina la tabella mos_content_prayers');
define('_PRY_A_CONFIG','Configurazione');
define('_PRY_A_CONFIG_DESC','Va al menù di configurazione');
define('_PRY_A_INSTRUCTIONS','Istruzioni');
define('_PRY_A_INSTRUCTIONS_DESC','Configurazione Post Installazione');
define('_PRY_A_ABOUT','Informazioni');
define('_PRY_A_ABOUT_DESC','Informazioni aggiuntive su questo componente');
define('_PRY_A_LINK','Link');
define('_PRY_A_LINK_DESC','Collegamento al sito dello sviluppatore di MosPrayer');
define('_PRY_A_CHECK','Controlla se sono disponibili nuove versioni');
define('_PRY_A_VERSION','La tua versione è ');
define('_PRY_A_DONATE','Contribuite allo sviluppo di questo componente facendo una donazione tramite il pulsante qui sotto. Questo mi darà la possibilità di migliorare ulteriormente lo script');
define('_PRY_A_REVIEW','Controlla prayeri (A partire dai più recenti )');
define('_PRY_A_DISPLAY','Visualizzati per pagina #');
define('_PRY_A_NAME_SUB','Nome');
define('_PRY_A_EMAIL_SUB','Email');
define('_PRY_A_HOMEPAGE','Homepage');
define('_PRY_A_PRAYER','Commento');
define('_PRY_A_ARTICLE','Articolo');
define('_PRY_A_PUBLISHED','Pubblicato');
define('_PRY_A_MOS_BY','Un componente MOS4.5 custom sviluppato da ');
define('_PRY_A_CURRENT_SETTINGS','Impostazioni correnti');
define('_PRY_A_EXPLANATION','Spiegazione');
define('_PRY_A_ADMIN_EMAIL','Indirizzo Email dell\' amministratore');
define('_PRY_A_ADMIN_EMAIL_DESC','Se gli avvisi all\'admin sono attivati, una Email viene mandata a questo indirizzo quando un nuovo prayero viene inserito');
define('_PRY_A_ADMIN_ALERTS','Email di avviso all\' amministratore');
define('_PRY_A_ADMIN_EMAIL_ENABLE','Abilita/Disabilita l\' invio di Emails all\' amministratore');
define('_PRY_A_VISITOR_EMAIL','Email di avviso ai visitatori');
define('_PRY_A_VISITOR_EMAIL_DESC','Abilita/Disilita la spedizione di una Email di conferma alla persona che ha inserito il prayero');
define('_PRY_A_REVIEW_SUBM','Esamina prayeri inseriti');
define('_PRY_A_REVIEW_DESC','Se impostato a Si i prayeri saranno inseriti nel database ma rimarranno invisibili in attesa di essere controllati e pubblicati da un amministratore. Una Email di avvertimento verrà spedita all\' indirizzo <strong>solo</strong> se è stato fornito un valore per il campo &quot;Indirizzo Email dell\' admin&quot; e &quot;Email di avviso&quot; è impostato a  &quot;Si&quot;');
define('_PRY_A_REGISTERED_ONLY','Solo utenti registrati');
define('_PRY_A_REG_ONLY_DESC','Impostato a &quot;Si&quot;permette ai soli utenti registrati di lasciare prayeri che rimangono comunque visibili da chiunque, Impostato a &quot;No&quot; permette anche ad utenti non registrati di aggiungere prayeri');
define('_PRY_A_NOTIFY_VERSION','Informami se ci sono nuove versioni disponibili');
define('_PRY_A_NOT_VER_DESC','Se impostato a &quot;Si&quot; verrà mostrata una finestra di dialogo nello schermo principale se è disponibile un update per questo componente (<em>NOTE: L\'unico dato mandato al server di update è il numero di versione</em>)');
define('_PRY_A_HAVE_DONATED','Hai fatto una donazione?');
define('_PRY_A_DONATE2','Per favore, considera la possibilità di fare una donazione via paypal. Questo mi ispirerà a migliorare ulteriormente lo script! :-)');
define('_PRY_A_IMPORTANT_NOTE','NOTE IMPORTANTI ');
define('_PRY_A_TEMPLATE','Perchè Mambo/Joomla possa controllare se un articolo può essere prayerato devi fare una piccola modifica al tuo template.<br><a href="index2.php?option=templates&task=edit">Apri il file di template</a> e cerca la riga');
define('_PRY_A_CHANGE_TO','E modificala perchè diventi:');
define('_PRY_A_HAVE_FUN','e abbiamo finito! ~ (Il Commento apparirà solo se  id articolo = qualcosa, altrimenti non verrà mostrato)<p>Divertitevi!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_PRY_A_FORCE_PREVIEW','Forza anteprima');
define('_PRY_A_FORCE_PREVIEW_TEXT','Se impostato a si forza i tuoi visitatori ad effettuare una anteprima dei loro prayeri prima della loro sottomissione finale');
define('_PRY_A_HIDE','Nascondi  Commenti');
define('_PRY_A_HIDE_DESC','Mostra (Commenti (x) - Aggiungi Commenti) invece di  prayeri e form come default');
define('_PRY_A_DATE','Data');
define('_PRY_A_HIDE_URL','Nascondi URL');
define('_PRY_A_HIDE_URL_DESC','Nascondi URL - Usato per nescondere la textbox URL presente nel form  di aggiunta prayeri per default');
define('_PRY_A_EMAIL_REQ','Indirizzo Email obbligatorio');
define('_PRY_A_EMAIL_REQ_DESC','Usato per indicare se l\' indirizzo Email sia obbligatorio o meno nel form di inserimento dei prayeri');
define('_PRY_A_EXCL_SEC','Escludi Sezione');
define('_PRY_A_EXCL_SEC_DESC','Esclude la visualizzazione del form di aggiunta prayeri per una particolare sezione. Es. 0,1');
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
define('_PRY_A_NO',"No");
define('_PRY_A_YES',"Si");
define('_PRY_R_COM_NUMBER',"Numero di prayeri");
define('_PRY_R_NO_COM',"Non ci sono ancora prayeri a questo articolo - Se vuoi aggiungerne uno puoi completare il form qui sotto...");
define('_PRY_R_POST',"Inserito da");
define('_PRY_R_HOMEPAGE',"la cui homepage è");
define('_PRY_R_DATE_ON',"il");
define('_PRY_R_DATE_AT',"alle");
define('_PRY_R_ADD_PRAYER',"Aggiungi i tuoi prayeri a questo articolo...");
define('_PRY_R_ADD_COM2'," ...");
define('_PRY_R_NAME',"Nome");
define('_PRY_R_EMAIL',"Indirizzo E-Mail");
define('_PRY_R_EMAIL_NOT',"In tuo indirizzo E-mail non verrà visualizzato sul sito ma solo all' amministratore");
define('_PRY_R_HOMEPAGE_IN',"Homepage");
define('_PRY_R_COM',"Commento");
define('_PRY_R_FULLY',"Per favore devi completare tutti i campi del form!");
define('_PRY_R_NEW_COM',"Nuovo prayero relativo a");
define('_PRY_R_HAVE_NEW',"C' è un nuovo prayero relativo al seguente articolo:");
define('_PRY_R_LOGIN',"Per favore fai il login e pubblica o cancella questo prayero");
define('_PRY_R_QUICKLINK',"premi qui per fare il login");
define('_PRY_R_THANKS',"Grazie per il tuo prayero su");
define('_PRY_R_THANKS2',"Grazie per il tuo prayero sull' articolo seguente");
define('_PRY_R_ADMIN_REV',"Un amministratore controllerà a breve i tuoi prayeri");
define('_PRY_R_ENTERED',"Sei entrato");
define('_PRY_R_VISIT',"Torna a trovarci presto a");
define('_PRY_R_THANKS3',"Grazie per aver lasciato i tuoi prayeri - Sono stati aggiunti alla pagina");
define('_PRY_R_THANKS4',"Grazie per aver lasciato i tuoi prayeri - Verranno letti da un amministratore prima di essere pubblicati");
define('_PRY_R_SUBMIT',"Invia");
define('_PRY_R_RESET',"Cancella");
define('_PRY_R_NOT_AUTH',"Non sei autorizzato a lasciare prayeri- Per piacere esegui il login");
define('_PRY_R_PREV_PAGE',"Pagina Precedente");
define('_PRY_R_NEXT_PAGE',"Pagina Successiva");
define('_PRY_R_PAGE',"Pagina");
define('_PRY_R_REQUEST',"Commenti");
define('_PRY_R_OF',"di");
define('_PRY_R_CANCEL',"Annullamento");
define('_PRY_R_FORM_INTRO',"Enter your prayer below.");
define('_PRY_R_PREVIEW_HEAD',"Please check your entry...");
define('_PRY_R_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Cancelling will erase your prayer!");
define('_PRY_R_REQ'," <small><i>(obbligatorio)</i></small>");
define('_PRY_R_OPT'," <small><i>(facoltativo)</i></small>");
define('_PRY_R_HOMEURL',"here");
define('_PRY_R_CHECKLINK',"CHECK LINK");
define('_PRY_R_QUICKPOST',"Quick Post");
?>