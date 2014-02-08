<?php
/**
* @version 
* @package MosPrayer - COAddOns for Mambo & Jommla - Prayers on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//admin.mosprayer.html.php
define('_PRY_A_KEEPUPTODATE','Se voc� quer se manter atualizado com este e outros �timos componentes do Chanh Ong favor se inscrever na lista de email atrav�s destes bot�es');
define('_PRY_A_SUBSCRIBE','Inscrever');
define('_PRY_A_UNSUBSCRIBE','Desinscrever');
define('_PRY_A_BACKUP','Backup');
define('_PRY_A_BACKUP_DESC','Backup a tabela do #__content_mosprayer_requests');
define('_PRY_A_RESTORE','Restaurar');
define('_PRY_A_RESTORE_DESC','Restaurara tabela do #__content_mosprayer_requests');
define('_PRY_A_CONFIG','Configura��o');
define('_PRY_A_CONFIG_DESC','Mudar a configura��o');
define('_PRY_A_INSTRUCTIONS','Instru��es');
define('_PRY_A_INSTRUCTIONS_DESC','Configura��es p�s instala��o');
define('_PRY_A_ABOUT','Sobre');
define('_PRY_A_ABOUT_DESC','Sobre este componente');
define('_PRY_A_LINK','Link');
define('_PRY_A_LINK_DESC','Para o site do autor');
define('_PRY_A_CHECK','Checar atualiza��es');
define('_PRY_A_VERSION','Sua vers�o � ');
define('_PRY_A_DONATE','Favor considerar clicar nos Ads do Google na esquerda ou no bot�o da esquerda para doar. Isso ir� inspirar o autor para aprimorar mais o script');
define('_PRY_A_REVIEW','Rever Coment�rios (Mais novos primeiros)');
define('_PRY_A_DISPLAY','Visualiza��o #');
define('_PRY_A_NAME_SUB','Nome');
define('_PRY_A_EMAIL_SUB','Email');
define('_PRY_A_HOMEPAGE','Homepage');
define('_PRY_A_PRAYER','Coment�rio');
define('_PRY_A_ARTICLE','Artigo');
define('_PRY_A_PUBLISHED','Publicado');
define('_PRY_A_MOS_BY','Um componente do MOS4.5 por');
define('_PRY_A_CURRENT_SETTINGS','Configura��es atuais');
define('_PRY_A_EXPLANATION','Explana��o');
define('_PRY_A_ADMIN_EMAIL','Email do Admin.');
define('_PRY_A_ADMIN_EMAIL_DESC','Se o email estiver ligado um email ser� enviado para este email quando um novo coment�rio for colocado');
define('_PRY_A_ADMIN_ALERTS','Alertas de Emails para o Admin.');
define('_PRY_A_ADMIN_EMAIL_ENABLE','Habilitar/Desabilitar emails para o Admin');
define('_PRY_A_VISITOR_EMAIL','Emails de alertas para visitantes');
define('_PRY_A_VISITOR_EMAIL_DESC','Habilitar/Desabilitar emails para a pessoa que enviou o coment�rio');
define('_PRY_A_REVIEW_SUBM','Rever os envios');
define('_PRY_A_REVIEW_DESC','Se voc� colocou esta op��o para sim ent�o os coment�rios ser�o adicionados para o banco de dados e ter� que esperar para uma revis�o antes de ser publicado. Voc� ir� receber um email <strong>somente</strong> se houver um valor em  &quot;Admin email&quot; e voc� tiver configurado o &quot;Alerta de email &quot; para &quot;sim&quot;');
define('_PRY_A_REGISTERED_ONLY','Usu�rios registrados somente');
define('_PRY_A_REG_ONLY_DESC','Configurar &quot;Sim&quot; para permitir usu�rios registrado verem coment�rios e deixar coment�rios, Configurar &quot;N�o&quot; para permitir qualquer usu�rio comentar');
define('_PRY_A_NOTIFY_VERSION','Notificar se uma nova vers�o estive dispon�vel');
define('_PRY_A_NOT_VER_DESC','Se voc� configurou para &quot;Sim&quot; ser� mostrado uma caixa de di�logo na tela principal se uma atualiza��o estiver dispon�vel (<em>NOTA: Os �nicos dados que ser�o enviados para o servidor ser� o n�mero de sua vers�o</em>)');
define('_PRY_A_HAVE_DONATED','Voc� doou?');
define('_PRY_A_DONATE2','Favor considerar doar ao criador uma quantia de GBP&pound;10.00 atrav�s do paypal. Isto ir� inspirar o autor a aprimorar os scripts! :-)');
define('_PRY_A_IMPORTANT_NOTE','Notas importantes');
define('_PRY_A_TEMPLATE','Para o mambo checar se o artigo mostrado pode ser comentado ou n�o, voc� deve fazer uma pequena mudan�a no seu template.<br><a href="index2.php?option=templates&task=edit">Edite seu aquivo de template </a> e ache a seguinte entrada');
define('_PRY_A_CHANGE_TO','Mudar este para o seguinte');
define('_PRY_A_HAVE_FUN','Pronto! ~ (Eu n�o irei estar respondendo emails com a seguinte pergunta &quot;<em>Eu&quot;ve instalei o componente mas ele n�o &quot;funciona.....</em>&quot; :-)</p> <p>          Divirta-se!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_PRY_A_FORCE_PREVIEW','For�ar uma visualiza��o');
define('_PRY_A_FORCE_PREVIEW_TEXT','Configurar essa op��o para sim e for�ar seus visitantes a visualizar seus coment�rios antes do envio final');
define('_PRY_A_HIDE','Esconder Coment�rios');
define('_PRY_A_HIDE_DESC','Mostrar (Coment�rios (x) - Adicionar coment�rios) em vez de coment�rios e o formul�rio padr�o');
define('_PRY_A_DATE','Date');
define('_PRY_A_HIDE_URL','Hide URL');
define('_PRY_A_HIDE_URL_DESC','Esconder URL - Use para n�o mostrar a URL no formul�rio de coment�rios por default');
define('_PRY_A_EMAIL_REQ','Email obrigat�rio');
define('_PRY_A_EMAIL_REQ_DESC','Usado para configurar a obrigatoriedade ou n�o de email no formul�rio de coment�rios por default');
define('_PRY_A_EXCL_SEC','Excluir as Se��es');
define('_PRY_A_EXCL_SEC_DESC','Usado para excluir as Se��es que n�o dever�o mostrar o formul�rio de coment�rios por default, eg: 0,1');
define('_PRY_A_PER_PAGE','Coment�rios por p�gina');
define('_PRY_A_PER_PAGE_DESC','Use para configurar o n�mero de coment�rios mostrados por p�gina, eg: 3');
define('_PRY_A_NEW_1ST','Novos coment�rios Primeiro');
define('_PRY_A_NEW_1ST_DESC','Lista os novos coment�rios primeiro');
define('_PRY_A_FORM_ABOVE','Formul�rio de Coment�rios Acima');
define('_PRY_A_FORM_ABOVE_DESC','Mostra o Formul�rio de Coment�rios acima dos posts');
define('_PRY_A_USE_DIVCSS','Use DIV CSS');
define('_PRY_A_USE_DIVCSS_DESC','Mostra o formul�rio de coment�rios usando o Template de Formul�rio do DIV CSS');
define('_PRY_A_EXCL_CONT','Excluir Conteudo');
define('_PRY_A_EXCL_CONT_DESC','Use para n�o mostrar o formul�rio de coment�rios em um artigo espec�fico, eg: 0,1');
define('_PRY_A_IP','IP');
define('_PRY_A_USE_USERNAME','Use username');
define('_PRY_A_USE_USERNAME_DESC','Show username instead of name');
define('_PRY_A_CLOSE_CONT','Close Contents');
define('_PRY_A_CLOSE_CONT_DESC','Use to close contents via article id not to show prayers form, eg: 0,1');
define('_PRY_A_USE_SECTOKEN','Use security token');
define('_PRY_A_USE_SECTOKEN_DESC','Check for security token when submit prayer (invisible Captcha)');

//mosprayer.php
define('_PRY_A_NO',"N�o");
define('_PRY_A_YES',"Sim");
define('_PRY_R_COM_NUMBER',"N�mero de coment�rios");
define('_PRY_R_NO_COM',"N�o h� coment�rios ainda - sinta-se livre para usar o formul�rio abaixo...");
define('_PRY_R_POST',"Postado por");
define('_PRY_R_HOMEPAGE',"De quem � a p�gina");
define('_PRY_R_DATE_ON',"em");
define('_PRY_R_DATE_AT',"na");
define('_PRY_R_ADD_PRAYER',"Adicionar seus coment�rios ao artigo...");
define('_PRY_R_ADD_COM2'," ...");
define('_PRY_R_NAME',"Nome");
define('_PRY_R_EMAIL',"E-Mail");
define('_PRY_R_EMAIL_NOT',"Seu email n�o ser� visualizado no site, nem no coment�rio.");
define('_PRY_R_HOMEPAGE_IN',"Homepage");
define('_PRY_R_COM',"Coment�rio");
define('_PRY_R_FULLY',"Favor completar o formul�rio!");
define('_PRY_R_NEW_COM',"Novo coment�rio em");
define('_PRY_R_HAVE_NEW',"Voc� tem um novo coment�rio no seguinte artigo:");
define('_PRY_R_LOGIN',"Favor logar e publicar ou deletar este coment�rio");
define('_PRY_R_QUICKLINK',"Aqui um link r�pido para logar");
define('_PRY_R_THANKS',"Muito obrigado pelo seu coment�rio");
define('_PRY_R_THANKS2',"Muito obrigado pelo seu coment�rio no seguinte artigo");
define('_PRY_R_ADMIN_REV',"Um administrador ir� rever seu coment�rio assim que poss�vel");
define('_PRY_R_ENTERED',"Voc� entrou");
define('_PRY_R_VISIT',"Favor visitar o site novamente em");
define('_PRY_R_THANKS3',"Muito obrigado pelos seus coment�rios - Eles foram adicionados para a seguinte p�gina");
define('_PRY_R_THANKS4',"Muito obrigado pelos seus coment�rios - Eles ir�o ser revisados pelo administrador para serem publicados assim que poss�vel!");
define('_PRY_R_SUBMIT',"Enviar");
define('_PRY_R_RESET',"Resetar");
define('_PRY_R_NOT_AUTH',"Voc� n�o est� autorizado para deixar seus coment�rios - favor logar.");
define('_PRY_R_PREV_PAGE',"P�gina anterior");
define('_PRY_R_NEXT_PAGE',"Pr�xima p�gina");
define('_PRY_R_PAGE',"P�gina");
define('_PRY_R_REQUEST',"Coment�rios");
define('_PRY_R_OF',"de");
define('_PRY_R_CANCEL',"Cancelar");
define('_PRY_R_FORM_INTRO',"Escreva o seu coment�rio abaixo.");
define('_PRY_R_PREVIEW_HEAD',"Por favor, confira o seu coment�rio...");
define('_PRY_R_PREVIEW_INTRO',"Est� certo?? <p />Por favor fa�a as corre��es necess�rias antes de enviar.  ATEN��O: Se CANCELAR o seu coment�rio ser� apagado!");
define('_PRY_R_REQ'," <small><i>(necess�rio)</i></small>");
define('_PRY_R_OPT',"<small><i>(optional)</i></small>");
define('_PRY_R_HOMEURL',"aqui");
define('_PRY_R_CHECKLINK',"CHECK LINK");
define('_PRY_R_QUICKPOST',"Quick Post");
?>