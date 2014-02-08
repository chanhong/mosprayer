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
define('_PRY_A_KEEPUPTODATE','Si quieres mantenerte actualizado con éste y otros excelentes componentes de Chanh Ong subscríbete a la lista de correo clickeando en estos botones');
define('_PRY_A_SUBSCRIBE','Subscribir');
define('_PRY_A_UNSUBSCRIBE','Desuscribir');
define('_PRY_A_BACKUP','Respaldo');
define('_PRY_A_BACKUP_DESC','Respalda la tabla #__content_mosprayer_requests');
define('_PRY_A_RESTORE','Restaurar');
define('_PRY_A_RESTORE_DESC','Restaurar la tabla #__content_mosprayer_requests');
define('_PRY_A_CONFIG','Configuración');
define('_PRY_A_CONFIG_DESC','Cambia la configuración');
define('_PRY_A_INSTRUCTIONS','Instrucciones');
define('_PRY_A_INSTRUCTIONS_DESC','Configuración Post Instalación');
define('_PRY_A_ABOUT','Acerca');
define('_PRY_A_ABOUT_DESC','Acerca de este componente');
define('_PRY_A_LINK','Enlace');
define('_PRY_A_LINK_DESC','Al sitio web del autor');
define('_PRY_A_CHECK','Buscar actualizaciones');
define('_PRY_A_VERSION','Su versión es ');
define('_PRY_A_DONATE','Por favor considera pulsar el botón y enviarme GBP£5.00 Me inspirará para mejorar este script');
define('_PRY_A_REVIEW','Revisar Comentarios (Recientes primero)');
define('_PRY_A_DISPLAY','Mostrar #');
define('_PRY_A_NAME_SUB','Nombre');
define('_PRY_A_EMAIL_SUB','Email');
define('_PRY_A_HOMEPAGE','Sitio web');
define('_PRY_A_PRAYER','Comentario');
define('_PRY_A_ARTICLE','Artículo');
define('_PRY_A_PUBLISHED','Publicado');
define('_PRY_A_MOS_BY','Componente para MOS4.5 por');
define('_PRY_A_CURRENT_SETTINGS','Opciomes Actuales');
define('_PRY_A_EXPLANATION','Explicación');
define('_PRY_A_ADMIN_EMAIL','Email del Administrador');
define('_PRY_A_ADMIN_EMAIL_DESC','Si la opción email está activa, se te enviará un email a esta casilla cuando will se ingrese un nuevo comentario');
define('_PRY_A_ADMIN_ALERTS','Alertas por Email al Administrador');
define('_PRY_A_ADMIN_EMAIL_ENABLE','Habilitar/Deshabilitar emails al Administrador');
define('_PRY_A_VISITOR_EMAIL','Alertas por email al Visitante');
define('_PRY_A_VISITOR_EMAIL_DESC','Habilitar/Deshabilita emails a la persona que envió el comentario');
define('_PRY_A_REVIEW_SUBM','Revisar Envíos');
define('_PRY_A_REVIEW_DESC','Al optar por SI los comentarios se agregarán a la base de datos, esperando su revisión y publicación antes de hacerse públicos. Recibirá un email <strong>sólo</strong> si está activado &quot;Email al Admin&quot; y has fijado &quot;Alerts por Email &quot; en &quot;SI&quot;');
define('_PRY_A_REGISTERED_ONLY','Sólo Usuarios Registrados');
define('_PRY_A_REG_ONLY_DESC','Establezca &quot;SI&quot; para permitir que sólo los usuarios registrados vean o dejen comentarios, Establezca &quot;No&quot; para permitir que cualquier visitante haga comentarios');
define('_PRY_A_NOTIFY_VERSION','Notificarme si hay una nueva vesión disponible');
define('_PRY_A_NOT_VER_DESC','Si establece &quot;SI&quot; se le mostrará un diálogo en la pantalla cuando exista una nueva versión de este componente (<em>NOTA: Los únicos datos eviados al servidor de actualización es el número de su versión</em>)');
define('_PRY_A_HAVE_DONATED','Ha hecho una donación?');
define('_PRY_A_DONATE2','Por avor considere donar GBP&pound;10.00 a través de paypal. Me instpriará para mejorar más este script.! :-)');
define('_PRY_A_IMPORTANT_NOTE','NOTAS IMPORTANTES');
define('_PRY_A_TEMPLATE','Para que mambo revise si está mostrando un artículo que puede ser comentado, deberá modificar ligeramente su template.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> y busque la entrada');
define('_PRY_A_CHANGE_TO','Cambie esto a lo siguiente');
define('_PRY_A_HAVE_FUN','Listo! ~ (No contestaré del estilo de &quot;<em>Instalé su componente pero el formulario no se ve.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_PRY_A_FORCE_PREVIEW','Forzar vista previa');
define('_PRY_A_FORCE_PREVIEW_TEXT','Establezca esto en SI para forzar a sus vistantes a ver su comentario antes de enviarlo');
define('_PRY_A_HIDE','Ocultar Comentarios');
define('_PRY_A_HIDE_DESC','Mostrar (Comentarios (x) - Agregar Comentarios) en vez de los comentarios y el formulario por defecto');
define('_PRY_A_DATE','Fecha');
define('_PRY_A_HIDE_URL','Ingrese URL');
define('_PRY_A_HIDE_URL_DESC','Ocultar URL - Utilizado par ocultar URL en el formulario de comentarios por defecto');
define('_PRY_A_EMAIL_REQ','Email es obligatorio');
define('_PRY_A_EMAIL_REQ_DESC','Utilizado para configurar email obligatorio o no en el formulario de comentarios por defecto');
define('_PRY_A_EXCL_SEC','Sección de Exclusión');
define('_PRY_A_EXCL_SEC_DESC','Utilizado para no mostrar la sección de exclusión en el formulario de comentarios por defecto, por ejemplo : 0,1');
define('_PRY_A_PER_PAGE','Comenatarios por Página');
define('_PRY_A_PER_PAGE_DESC','Utilizador para mostrar el número de comentarios por página, por ejemplo : 3');
define('_PRY_A_NEW_1ST','Primero los Nuevos Comentarios');
define('_PRY_A_NEW_1ST_DESC','Muestra en la lista las nuevas entradas de comentarios');
define('_PRY_A_FORM_ABOVE','El formulario de comentarios Arriba');
define('_PRY_A_FORM_ABOVE_DESC','Muestra el formulario de comentario arriba de las entradas de comentarios');
define('_PRY_A_USE_DIVCSS','Usa DIV CSS');
define('_PRY_A_USE_DIVCSS_DESC','Muestra el formulario de comentario usando DIV CSS desde el template');
define('_PRY_A_EXCL_CONT','Contenidos Excluídos');
define('_PRY_A_EXCL_CONT_DESC','Utilizado para excluir contenidos via ID del artículo no para mostrar el formulario de comentario, por ejemplo : 0,1');
define('_PRY_A_IP','IP');
define('_PRY_A_USE_USERNAME','Use username');
define('_PRY_A_USE_USERNAME_DESC','Show username instead of name');
define('_PRY_A_CLOSE_CONT','Close Contents');
define('_PRY_A_CLOSE_CONT_DESC','Use to close contents via article id not to show prayers form, eg: 0,1');
define('_PRY_A_USE_SECTOKEN','Use security token');
define('_PRY_A_USE_SECTOKEN_DESC','Check for security token when submit prayer (invisible Captcha)');

//mosprayer.php
define('_PRY_A_NO',"No");
define('_PRY_A_YES',"SI");
define('_PRY_R_COM_NUMBER',"Número de comentarios");
define('_PRY_R_NO_COM',"Aún no hay comentarios - Agrega uno usando el formulario de abajo ...");
define('_PRY_R_POST',"Enviado por ");
define('_PRY_R_HOMEPAGE',"Cuyo sitio web es");
define('_PRY_R_DATE_ON',"el");
define('_PRY_R_DATE_AT',"a");
define('_PRY_R_ADD_PRAYER',"Agrega tus comentarios a este artículo...");
define('_PRY_R_ADD_COM2'," ...");
define('_PRY_R_NAME',"Nombre");
define('_PRY_R_EMAIL',"E-Mail");
define('_PRY_R_EMAIL_NOT',"Tu email no será mostrado en este sitio - sólo al administrador");
define('_PRY_R_HOMEPAGE_IN',"Sitio Web");
define('_PRY_R_COM',"Comentario");
define('_PRY_R_FULLY',"Por favor llena completa el formulario!");
define('_PRY_R_NEW_COM',"Nuevo comentario en ");
define('_PRY_R_HAVE_NEW',"Hay un nuevo comentario sobre:");
define('_PRY_R_LOGIN',"Por favor ingrese y publique o borre este comentario");
define('_PRY_R_QUICKLINK',"Enlace rápido para ingresar");
define('_PRY_R_THANKS',"Gracias por tu comentario sobre");
define('_PRY_R_THANKS2',"Gracias por tu comentario sobre el siguiente artículo");
define('_PRY_R_ADMIN_REV',"Un administrador revisará su comentario a la brevedad");
define('_PRY_R_ENTERED',"Usted ingresó");
define('_PRY_R_VISIT',"Por favor viste nuestro sitio nuevamente en ");
define('_PRY_R_THANKS3',"Gracias por su comentario - Ha sido agregado a esta página");
define('_PRY_R_THANKS4',"Gracias por su comentario - Será revisado por un administrador antes de ser publicado!");
define('_PRY_R_SUBMIT',"Enviar");
define('_PRY_R_RESET',"Limpiar");
define('_PRY_R_NOT_AUTH',"No está autorizado a dejar comentarios - Por favor, ingrese como usuario.");
define('_PRY_R_PREV_PAGE',"Página Anterior");
define('_PRY_R_NEXT_PAGE',"Página Siguiente");
define('_PRY_R_PAGE',"Página");
define('_PRY_R_REQUEST',"comentarios");
define('_PRY_R_OF',"de");
define('_PRY_R_CANCEL',"Cancelar");
define('_PRY_R_FORM_INTRO',"Ingrese su comentario abajo.");
define('_PRY_R_PREVIEW_HEAD',"Por favor, revisa tu ingreso...");
define('_PRY_R_PREVIEW_INTRO',"¿Está correcto lo de abajo? <p />Por favor, haga cualquier cambio necesario antes de enviar.  Advertencia : Cancelando borrará tu comentario!");
define('_PRY_R_REQ'," <small><i>(requerido)</i></small>");
define('_PRY_R_OPT'," <small><i>(optional)</i></small>");
define('_PRY_R_HOMEURL',"here");
define('_PRY_R_CHECKLINK',"CHECK LINK");
define('_PRY_R_QUICKPOST',"Quick Post");
?>