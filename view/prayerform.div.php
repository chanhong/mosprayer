<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<div id="mosprayerHEAD">
	<span class="mosprayerHEADPrefix"><?=_PRY_R_ADD_PRAYER;?></span><span class="mosprayerHEADArticle"><?=$viewParm['atitle'];?></span>
	<span class="mosprayerHEADSuffix"><?=_PRY_R_ADD_COM2;?></span>
<?=$this->_viewParm['mcajaxsubmit'];?>  
</div>
<form method="post" action="<?=$viewParm['mc_post_string'];?>" id="commentForm<?=$viewParm['articleid'];?>" name="commentForm<?=$viewParm['articleid'];?>">
<p class="mosprayerFORMMsg"><?=_PRY_R_FORM_INTRO;?></p>
<p>
<label for="mc_comment_name" id="labelmc_comment_name" class="mosprayerFORMLabel"><?=_PRY_R_NAME;?></label>
<input type="text" id="mc_comment_name" title="<?=_PRY_R_NAME;?>" name="mc_comment_name" class="mosprayerInputBox" value="<?=$viewParm['name'];?>" tabindex="1" <?=$viewParm['mode'];?> />
<span class="mosprayerFORMLabelSuffix"><?=_PRY_R_REQ;?></span>
</p>
<?=$viewParm['emailinfo'];?>
<?=$viewParm['url'];?>
<p>
<?=$viewParm['about'];?>
<?=$viewParm['aboutbar'];?><br />
<label for="mc_comment" id="labelmc_comment" class="mosprayerFORMLabel"><?=_PRY_R_COM;?></label><br />
<textarea id="mc_comment" title="<?=_PRY_R_COM;?>" name="mc_comment" cols="48" rows="7" wrap="virtual" tabindex="4" class="mosprayerTextBox"></textarea>
</p>
<?=$this->renderView("_submit.button.php");?>
</form>