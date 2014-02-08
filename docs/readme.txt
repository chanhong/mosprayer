

MosPrayer Description:
  * MosPrayer is a complete a clone of MosPrayer 2.0.7 base on my tiny Mose framework that utilize MVC pattern for Mambo, MiaCMS, Joomla 1.0 and Joomla 1.5+.  
  * It provides feature for visitors to comment on content items within the supported CMS.  
  * (Note: Please make sure to download the latest MosPrayerBot 2.0+, MosPrayerLatestX 2.0+ to work with MosPrayer 2.0+)

General Features:

  # Cross platform compatible with Mambo 4.5.2+, MiaCMS, Joomla 1.5+ (w/ legacy mode), and Joomla 1.0+ (ajax only work when edit template not via plugin)
  # Multi-language support
  # MosPrayer can be easily customize via view and CSS
  # Completely integrate MosPrayerBot with MosPrayer so edting template is now optional but still supported
  # Add to show comment link in content, mamblog, blogcategory and blogsection
  # Compatible with PHP 4 and 5, global off and global emulation off
  # Store config in database, NO need to write to file!
  # Has better support for SEF enable site
  # Quick post using ajax with spinning wheel
  # Detection for auto upgrade of MosPrayer related tables  
  # CSS and JS are now load in the head whereever is possible
  # Advance feature via MosModule integration support so you can use any of MosModule command in MosPrayer comment
  # Parameter to set and use username instead of name per popular request
  # Parameter to close comment based on contents list
  # Parameter to set sectoken (turn on/off invisible captcha)
  # Companion product:  
    * MosPrayerLatestX: a moduel to show MosPrayer Latest X comments in module position
    * MosModule: a mambot that let you enhance your content with various features
    * MosPrayerBot: a mambot to show comment link on frontpage

    Notes for MosPrayerBot:
    * MosPrayerBot is now use to show comment form without the need to edit the template.
    * Please make sure emailcloak is listed before MosPrayerBot to avoid scramble the email in the comment form.
    * MosPrayerBot can now set to show in 4 places of the articles beside to show the comment form for MosPrayer.
    * MosPrayerBot can now set to not show comment link on the frontpage.

  
Specific Features:

Note: Any kind of captcha protection will not stop a human being from input a bad comment.  Instead of inconvient your visitor with hard to read captcha image, after long and hard testing with a good working captcha for MosPrayer, I decide to implement different form of captcha, a human friendly/Invisible captcha!
  
  # Spam protection:
    * Human friendly/Invisible captcha protection
    * Enhance security token processing to ensure no double comment
    * Ajax using JQuery to check form for good encrypted token which will expired in 10 minutes to prevent bad comment 
    * The comment server will only serve from where the MosPrayer is installed
    * log IP of commenter
    * Use phpInputFilter and mysql escape to filter input from comment form
    * (optional) Send popup to verify message before submit

  # Frontend featues:
    * Ajaxified some frontend function using jQuery slidedown effect
    * Support any component that use content w/ a valid id for example: like mamblog
    * Visitor or member can leave comment on a article
    * Vistor URL field can be disable by the site admin
    * Ability to page previous or next of comments w/ setable number of comments per page
    * Ability to skin using mosprayer.css down to detail of meta data.
    * Customizable comment title, etc via language file using _PRY_R_ADD_PRAYER, _PRY_R_ADD_COM2 and _PRY_R_HOMEURL.
    * Prayers sorting: new entries first or new entries last
    * Form position: Behind comments or Above comments
    * Add javascript bbcode and tooltips
    * Enhanced bbcode support to store as html for ease of retrieval into article with bot
    * Use time offset from configuration when show comment
    * Show comment link in mamblog, blogcategory and blogsection
    * Better mail handler with 3 types and fall back to php mail
    * Only show comment form when "add comment" is clicked
    * SEF enable support, tested with MiaCMS, Joomla and perhaps Mambo with htaccess.4.5.x
    * Work around emailcloak issue
    * More advance feature via MosModule integration

  # Backend featues:
    * Ajaxified admin config screen using ui.tabs.min.js 
    * Complete admin area to monitor, edit and delete comments as necessary.
    * Admin can hold comments for approval
    * Highly configurable through point and click admin interface
    * Email to be set to require or optional
    * Remember your config preference when upgrade
    * Better db config upgrade handling	* Parameter to exclude section list eg: 0 for static content
    * Parameter to exclude content list to selectively not show comment form
    * Parameter to close content list to selectively disable new comment  
    * Parameter to set and use username instead of name per popular request
    * Parameter to set sectoken (turn on/off invisible captcha)  

  # Languages support: 
    * English, French, Rusian, Dutch, Spanish, Portugese, German
    * Arabic, Polish, Italian, Swedish, Croatian, Turkish, czech

Note: translation for MosPrayer:
  * You can create you own translation file by copy "english.php" and create your language translation file.  For example: "spanish.php" please make sure the file name matches your mambo language name.
  * Once you have the translation file in place and when you set the language preference in mambelfish then MosPrayer will use your translation file to display the comment in your language.  Please consider share you translation file once you are happy with your work.  Thanks for sharing.!

Credit:  
  * Please see administrator/com_mosprayer/credit.txt for more detail

Info:
  * Wiki: http://wiki.ongetc.com 
  * Support: http://support.ongetc.com/index.php?option=com_phorum&Itemid=175
  * Download: http://support.ongetc.com/index.php?option=com_content&task=category&sectionid=1&id=149&Itemid=192

Any donation$ would be greatly appreciated. Thanks 