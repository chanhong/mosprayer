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
define('_PRY_A_KEEPUPTODATE','If you want to keep up to date with this and other great components from Chanh Ong please subscribe to the mailing list by clicking these buttons');
define('_PRY_A_SUBSCRIBE','Подписаться');
define('_PRY_A_UNSUBSCRIBE','Отказаться от подписки');
define('_PRY_A_BACKUP','Создать архив(Backup)');
define('_PRY_A_BACKUP_DESC','Создать архив таблицы комментариев');
define('_PRY_A_RESTORE','Восстановить из архива');
define('_PRY_A_RESTORE_DESC','Восстановить таблицу комментариев из архива');
define('_PRY_A_CONFIG','Настройка');
define('_PRY_A_CONFIG_DESC','Изменить настройку');
define('_PRY_A_INSTRUCTIONS','Инструкции');
define('_PRY_A_INSTRUCTIONS_DESC','Настройка после установки');
define('_PRY_A_ABOUT','Описание');
define('_PRY_A_ABOUT_DESC','Описание компоненты');
define('_PRY_A_LINK','Ссылка');
define('_PRY_A_LINK_DESC','На сайт авторов');
define('_PRY_A_CHECK','Проверить наличие обновлений');
define('_PRY_A_VERSION','Ваша версия ');
define('_PRY_A_DONATE','Кнопка для пожертвований. Пожертвовав деньги вы простимулируете дальнейшее развитие программы');
define('_PRY_A_REVIEW','Пересмотреть комментарии (От новых к более старым)');
define('_PRY_A_DISPLAY','Вывести #');
define('_PRY_A_NAME_SUB','Имя');
define('_PRY_A_EMAIL_SUB','Email');
define('_PRY_A_HOMEPAGE','Домашняя страничка');
define('_PRY_A_PRAYER','Комментарий');
define('_PRY_A_ARTICLE','Статья');
define('_PRY_A_PUBLISHED','Опубликовано');
define('_PRY_A_MOS_BY','A MOS4.5 Custom Component by');
define('_PRY_A_CURRENT_SETTINGS','Текущие настройки');
define('_PRY_A_EXPLANATION','Объяснение');
define('_PRY_A_ADMIN_EMAIL','Email администратора');
define('_PRY_A_ADMIN_EMAIL_DESC','Если email включен, то email будет отослан на указанный аддресс при появлении новых комментариев');
define('_PRY_A_ADMIN_ALERTS','Оповещение администратора по Email');
define('_PRY_A_ADMIN_EMAIL_ENABLE','Включить/Выключить отсылку писем администратору');
define('_PRY_A_VISITOR_EMAIL','Оповещения визитёра по Email');
define('_PRY_A_VISITOR_EMAIL_DESC','Включить/Выключить отсылку email автору комментариев');
define('_PRY_A_REVIEW_SUBM','Просмотр введённой формы');
define('_PRY_A_REVIEW_DESC','Режим модератора. Пока комментарий не будет просмотрен админом, комментарий не опубликуется. Вы получите оповещение <strong>только при условии</strong> включённого оповещения администратора по email');
define('_PRY_A_REGISTERED_ONLY','Только для зарегистрированных пользователей');
define('_PRY_A_REG_ONLY_DESC','&quot;Включить&quot; и только зарегистрированные пользователи смогут видеть и оставлять комментарии');
define('_PRY_A_NOTIFY_VERSION','Оповещение о новых версиях');
define('_PRY_A_NOT_VER_DESC','Диалог оповещения об обновлениях (на сервер обновлений отсылается только текущая версия компонента)');
define('_PRY_A_HAVE_DONATED','Вы уже что-то пожертвовали?');
define('_PRY_A_DONATE2','Пожертвуйте мне &pound;10.00 через paypal. Это вдохновит меня на дальнейшую разработку :-)');
define('_PRY_A_IMPORTANT_NOTE','ВАЖНЫЕ ЗАМЕТКИ');
define('_PRY_A_TEMPLATE','In order for mambo to check and see if its showing an article that can be prayered on, you must make a small change to your template.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> and look for the entry');
define('_PRY_A_CHANGE_TO','Измените это на следующее');
define('_PRY_A_HAVE_FUN','Thats it! ~ (I will not be answering emails along the line of &quot;<em>I&quot;ve installed your component but the form doesn&quot;t show.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_PRY_A_FORCE_PREVIEW','Обязательный просмотр введённого');
define('_PRY_A_FORCE_PREVIEW_TEXT','Обязательный предпросмотр введённого');
define('_PRY_A_HIDE','Спрятать комментарии');
define('_PRY_A_HIDE_DESC','Показывать (Комментарии (x) - Добавить комментарий) вместо списка комментариев и формы прямо в статье');
define('_PRY_A_DATE','Date');
define('_PRY_A_HIDE_URL','Hide URL');
define('_PRY_A_HIDE_URL_DESC','Hide URL - Use to hide URL on the prayers form by default');
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
define('_PRY_A_NO',"Нет");
define('_PRY_A_YES',"Да");
define('_PRY_R_COM_NUMBER',"Колличество комментариев");
define('_PRY_R_NO_COM',"Пока никто не прокомментировал - для Вашего комментария заполните приведённую ниже форму...");
define('_PRY_R_POST',"Написал");
define('_PRY_R_HOMEPAGE',"<br>Домашняя страница");
define('_PRY_R_DATE_ON',"<br>Дата");
define('_PRY_R_DATE_AT',"Время");
define('_PRY_R_ADD_PRAYER',"Ваш комментарий:");
define('_PRY_R_ADD_COM2'," ...");
define('_PRY_R_NAME',"Ваше имя");
define('_PRY_R_EMAIL',"E-Mail");
define('_PRY_R_EMAIL_NOT',"Ваш email не будет опубликован на сайте, он будет виден только администратору сайта");
define('_PRY_R_HOMEPAGE_IN',"Домашняя страница");
define('_PRY_R_COM',"Текст:");
define('_PRY_R_FULLY',"Не все поля заполнены!");
define('_PRY_R_NEW_COM',"Дата нового комментария");
define('_PRY_R_HAVE_NEW',"Появился новый комментарий к статье:");
define('_PRY_R_LOGIN',"Пожалуйста зарегистрируйтесь на сайте, чтобы опубликовать или удалить комментарий");
define('_PRY_R_QUICKLINK',"Быстрая ссылка для регистрации на сайте (login)");
define('_PRY_R_THANKS',"Спасибо за Ваш комментарий к статье");
define('_PRY_R_THANKS2',"Спасибо за Ваш комментарий к слудующей статье");
define('_PRY_R_ADMIN_REV',"Ваш комментарий будет опубликован после проверки модератором");
define('_PRY_R_ENTERED',"Вы ввели");
define('_PRY_R_VISIT',"Заходите ещё");
define('_PRY_R_THANKS3',"Спасибо за комментарий");
define('_PRY_R_THANKS4',"Ваш комментарий будет опубликован после проверки модератором!");
define('_PRY_R_SUBMIT',"Отослать");
define('_PRY_R_RESET',"Reset");
define('_PRY_R_NOT_AUTH',"Чтобы оставить/прочитать комментарии - зарегистрируйтесь (залогиньтесь)");
define('_PRY_R_PREV_PAGE',"Prev Page");
define('_PRY_R_NEXT_PAGE',"Next Page");
define('_PRY_R_PAGE',"Page");
define('_PRY_R_REQUEST',"User Prayers");
define('_PRY_R_OF',"of");
define('_PRY_R_CANCEL',"Cancel");
define('_PRY_R_FORM_INTRO',"Enter your prayer below.");
define('_PRY_R_PREVIEW_HEAD',"Please check your entry...");
define('_PRY_R_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Cancelling will erase your prayer!");
define('_PRY_R_REQ'," <small><i>(обязательное поле)</i></small>");
define('_PRY_R_OPT'," <small><i>(optional)</i></small>");
define('_PRY_R_HOMEURL',"here");
define('_PRY_R_CHECKLINK',"CHECK LINK");
define('_PRY_R_QUICKPOST',"Quick Post");
?>