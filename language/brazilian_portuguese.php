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
define('_PRY_A_KEEPUPTODATE','Se você quer se manter atualizado com este e outros ótimos componentes do Chanh Ong favor se inscrever na lista de email através destes botões');
define('_PRY_A_SUBSCRIBE','Inscrever');
define('_PRY_A_UNSUBSCRIBE','Desinscrever');
define('_PRY_A_BACKUP','Backup');
define('_PRY_A_BACKUP_DESC','Backup a tabela do #__content_mosprayer_requests');
define('_PRY_A_RESTORE','Restaurar');
define('_PRY_A_RESTORE_DESC','Restaurara tabela do #__content_mosprayer_requests');
define('_PRY_A_CONFIG','Configuração');
define('_PRY_A_CONFIG_DESC','Mudar a configuração');
define('_PRY_A_INSTRUCTIONS','Instruções');
define('_PRY_A_INSTRUCTIONS_DESC','Configurações pós instalação');
define('_PRY_A_ABOUT','Sobre');
define('_PRY_A_ABOUT_DESC','Sobre este componente');
define('_PRY_A_LINK','Link');
define('_PRY_A_LINK_DESC','Para o site do autor');
define('_PRY_A_CHECK','Checar atualizações');
define('_PRY_A_VERSION','Sua versão é ');
define('_PRY_A_DONATE','Favor considerar clicar nos Ads do Google na esquerda ou no botão da esquerda para doar. Isso irá inspirar o autor para aprimorar mais o script');
define('_PRY_A_REVIEW','Rever Comentários (Mais novos primeiros)');
define('_PRY_A_DISPLAY','Visualização #');
define('_PRY_A_NAME_SUB','Nome');
define('_PRY_A_EMAIL_SUB','Email');
define('_PRY_A_HOMEPAGE','Homepage');
define('_PRY_A_PRAYER','Comentário');
define('_PRY_A_ARTICLE','Artigo');
define('_PRY_A_PUBLISHED','Publicado');
define('_PRY_A_MOS_BY','Um componente do MOS4.5 por');
define('_PRY_A_CURRENT_SETTINGS','Configurações atuais');
define('_PRY_A_EXPLANATION','Explanação');
define('_PRY_A_ADMIN_EMAIL','Email do Admin.');
define('_PRY_A_ADMIN_EMAIL_DESC','Se o email estiver ligado um email será enviado para este email quando um novo comentário for colocado');
define('_PRY_A_ADMIN_ALERTS','Alertas de Emails para o Admin.');
define('_PRY_A_ADMIN_EMAIL_ENABLE','Habilitar/Desabilitar emails para o Admin');
define('_PRY_A_VISITOR_EMAIL','Emails de alertas para visitantes');
define('_PRY_A_VISITOR_EMAIL_DESC','Habilitar/Desabilitar emails para a pessoa que enviou o comentário');
define('_PRY_A_REVIEW_SUBM','Rever os envios');
define('_PRY_A_REVIEW_DESC','Se você colocou esta opção para sim então os comentários serão adicionados para o banco de dados e terá que esperar para uma revisão antes de ser publicado. Você irá receber um email <strong>somente</strong> se houver um valor em  &quot;Admin email&quot; e você tiver configurado o &quot;Alerta de email &quot; para &quot;sim&quot;');
define('_PRY_A_REGISTERED_ONLY','Usuários registrados somente');
define('_PRY_A_REG_ONLY_DESC','Configurar &quot;Sim&quot; para permitir usuários registrado verem comentários e deixar comentários, Configurar &quot;Não&quot; para permitir qualquer usuário comentar');
define('_PRY_A_NOTIFY_VERSION','Notificar se uma nova versão estive disponível');
define('_PRY_A_NOT_VER_DESC','Se você configurou para &quot;Sim&quot; será mostrado uma caixa de diálogo na tela principal se uma atualização estiver disponível (<em>NOTA: Os únicos dados que serão enviados para o servidor será o número de sua versão</em>)');
define('_PRY_A_HAVE_DONATED','Você doou?');
define('_PRY_A_DONATE2','Favor considerar doar ao criador uma quantia de GBP&pound;10.00 através do paypal. Isto irá inspirar o autor a aprimorar os scripts! :-)');
define('_PRY_A_IMPORTANT_NOTE','Notas importantes');
define('_PRY_A_TEMPLATE','Para o mambo checar se o artigo mostrado pode ser comentado ou não, você deve fazer uma pequena mudança no seu template.<br><a href="index2.php?option=templates&task=edit">Edite seu aquivo de template </a> e ache a seguinte entrada');
define('_PRY_A_CHANGE_TO','Mudar este para o seguinte');
define('_PRY_A_HAVE_FUN','Pronto! ~ (Eu não irei estar respondendo emails com a seguinte pergunta &quot;<em>Eu&quot;ve instalei o componente mas ele não &quot;funciona.....</em>&quot; :-)</p> <p>          Divirta-se!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_PRY_A_FORCE_PREVIEW','Forçar uma visualização');
define('_PRY_A_FORCE_PREVIEW_TEXT','Configurar essa opção para sim e forçar seus visitantes a visualizar seus comentários antes do envio final');
define('_PRY_A_HIDE','Esconder Comentários');
define('_PRY_A_HIDE_DESC','Mostrar (Comentários (x) - Adicionar comentários) em vez de comentários e o formulário padrão');
define('_PRY_A_DATE','Date');
define('_PRY_A_HIDE_URL','Hide URL');
define('_PRY_A_HIDE_URL_DESC','Esconder URL - Use para não mostrar a URL no formulário de comentários por default');
define('_PRY_A_EMAIL_REQ','Email obrigatório');
define('_PRY_A_EMAIL_REQ_DESC','Usado para configurar a obrigatoriedade ou não de email no formulário de comentários por default');
define('_PRY_A_EXCL_SEC','Excluir as Seções');
define('_PRY_A_EXCL_SEC_DESC','Usado para excluir as Seções que não deverão mostrar o formulário de comentários por default, eg: 0,1');
define('_PRY_A_PER_PAGE','Comentários por página');
define('_PRY_A_PER_PAGE_DESC','Use para configurar o número de comentários mostrados por página, eg: 3');
define('_PRY_A_NEW_1ST','Novos comentários Primeiro');
define('_PRY_A_NEW_1ST_DESC','Lista os novos comentários primeiro');
define('_PRY_A_FORM_ABOVE','Formulário de Comentários Acima');
define('_PRY_A_FORM_ABOVE_DESC','Mostra o Formulário de Comentários acima dos posts');
define('_PRY_A_USE_DIVCSS','Use DIV CSS');
define('_PRY_A_USE_DIVCSS_DESC','Mostra o formulário de comentários usando o Template de Formulário do DIV CSS');
define('_PRY_A_EXCL_CONT','Excluir Conteudo');
define('_PRY_A_EXCL_CONT_DESC','Use para não mostrar o formulário de comentários em um artigo específico, eg: 0,1');
define('_PRY_A_IP','IP');
define('_PRY_A_USE_USERNAME','Use username');
define('_PRY_A_USE_USERNAME_DESC','Show username instead of name');
define('_PRY_A_CLOSE_CONT','Close Contents');
define('_PRY_A_CLOSE_CONT_DESC','Use to close contents via article id not to show prayers form, eg: 0,1');
define('_PRY_A_USE_SECTOKEN','Use security token');
define('_PRY_A_USE_SECTOKEN_DESC','Check for security token when submit prayer (invisible Captcha)');

//mosprayer.php
define('_PRY_A_NO',"Não");
define('_PRY_A_YES',"Sim");
define('_PRY_R_COM_NUMBER',"Número de comentários");
define('_PRY_R_NO_COM',"Não há comentários ainda - sinta-se livre para usar o formulário abaixo...");
define('_PRY_R_POST',"Postado por");
define('_PRY_R_HOMEPAGE',"De quem é a página");
define('_PRY_R_DATE_ON',"em");
define('_PRY_R_DATE_AT',"na");
define('_PRY_R_ADD_PRAYER',"Adicionar seus comentários ao artigo...");
define('_PRY_R_ADD_COM2'," ...");
define('_PRY_R_NAME',"Nome");
define('_PRY_R_EMAIL',"E-Mail");
define('_PRY_R_EMAIL_NOT',"Seu email não será visualizado no site, nem no comentário.");
define('_PRY_R_HOMEPAGE_IN',"Homepage");
define('_PRY_R_COM',"Comentário");
define('_PRY_R_FULLY',"Favor completar o formulário!");
define('_PRY_R_NEW_COM',"Novo comentário em");
define('_PRY_R_HAVE_NEW',"Você tem um novo comentário no seguinte artigo:");
define('_PRY_R_LOGIN',"Favor logar e publicar ou deletar este comentário");
define('_PRY_R_QUICKLINK',"Aqui um link rápido para logar");
define('_PRY_R_THANKS',"Muito obrigado pelo seu comentário");
define('_PRY_R_THANKS2',"Muito obrigado pelo seu comentário no seguinte artigo");
define('_PRY_R_ADMIN_REV',"Um administrador irá rever seu comentário assim que possível");
define('_PRY_R_ENTERED',"Você entrou");
define('_PRY_R_VISIT',"Favor visitar o site novamente em");
define('_PRY_R_THANKS3',"Muito obrigado pelos seus comentários - Eles foram adicionados para a seguinte página");
define('_PRY_R_THANKS4',"Muito obrigado pelos seus comentários - Eles irão ser revisados pelo administrador para serem publicados assim que possível!");
define('_PRY_R_SUBMIT',"Enviar");
define('_PRY_R_RESET',"Resetar");
define('_PRY_R_NOT_AUTH',"Você não está autorizado para deixar seus comentários - favor logar.");
define('_PRY_R_PREV_PAGE',"Página anterior");
define('_PRY_R_NEXT_PAGE',"Próxima página");
define('_PRY_R_PAGE',"Página");
define('_PRY_R_REQUEST',"Comentários");
define('_PRY_R_OF',"de");
define('_PRY_R_CANCEL',"Cancelar");
define('_PRY_R_FORM_INTRO',"Escreva o seu comentário abaixo.");
define('_PRY_R_PREVIEW_HEAD',"Por favor, confira o seu comentário...");
define('_PRY_R_PREVIEW_INTRO',"Está certo?? <p />Por favor faça as correções necessárias antes de enviar.  ATENÇÃO: Se CANCELAR o seu comentário será apagado!");
define('_PRY_R_REQ'," <small><i>(necessário)</i></small>");
define('_PRY_R_OPT',"<small><i>(optional)</i></small>");
define('_PRY_R_HOMEURL',"aqui");
define('_PRY_R_CHECKLINK',"CHECK LINK");
define('_PRY_R_QUICKPOST',"Quick Post");
?>