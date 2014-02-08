<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<div id="mosprayerHEAD">
  <?=_PRY_R_ADD_PRAYER;?><b><?=$viewParm['atitle'];?></b>
  <?=_PRY_R_ADD_COM2;?>
<?=$this->_viewParm['mcajaxsubmit'];?>
</div>
<form method="post" action="<?=$viewParm['mc_post_string'];?>" id="commentForm<?=$viewParm['articleid'];?>" name="commentForm<?=$viewParm['articleid'];?>">
<p class="mosprayerFORMMsg"><?=_PRY_R_FORM_INTRO;?></p>
<div class="text">
<?=_PRY_R_NAME;?><span class="mosprayerFORMLabelSuffix"><?=_PRY_R_REQ;?></span>
</div>
<input type="text" id="mc_comment_name" title="<?=_PRY_R_NAME;?>" name="mc_comment_name" class="mosprayerInputBox" style="width:268px;" value="<?=$viewParm['name'];?>" tabindex="1" <?=$viewParm['mode'];?> />
<div class="text">
<?=_PRY_R_EMAIL;?><span class="mosprayerFORMLabelSuffix"><?=$viewParm['emailoption'];?></span>
</div>
<input type="text" id="mc_comment_email" title="<?=_PRY_R_EMAIL;?>" name="mc_comment_email" class="mosprayerInputBox" style="width:268px;" value="<?=$this->ut->spamNotEmail($viewParm['email']);?>" tabindex="2" <?=$viewParm['mode'];?> />
<div class="smalltext"><?=_PRY_R_EMAIL_NOT;?></div>
<?=$viewParm['emailinfo'];?>
<?=$viewParm['url'];?>
<p>
<?=$viewParm['about'];?>
<?=$viewParm['aboutbar'];?><br />
<div class="text"><?=_PRY_R_COM;?></div>
<textarea id="mc_comment" title="<?=_PRY_R_COM;?>" name="mc_comment" cols="48" rows="7" wrap="virtual" tabindex="4" class="mosprayerTextBox"></textarea><br />
<div id="result" style="padding:5px;">
</div>
<?=$this->renderView("_submit.button.php");?>
</form>