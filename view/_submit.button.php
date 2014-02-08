<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<p id="mosprayerBOTHBTNS<?=$viewParm['articleid'];?>" class="mosprayerBOTHBTNS">
<input type="hidden" name="return" value="<?=$viewParm['return'];?>" />
<input type="button" id="mosprayerBTNQUICK<?=$viewParm['articleid'];?>" title="<?=_PRY_R_QUICKPOST;?>" name="<?=_PRY_R_QUICKPOST;?>" value="<?=_PRY_R_QUICKPOST;?>" class="mosprayerBTNQUICK" tabindex="5" />
<input type="reset" id="mosprayerBTNRESET<?=$viewParm['articleid'];?>" title="<?=_PRY_R_RESET;?>" name="<?=_PRY_R_RESET;?>" value="<?=_PRY_R_RESET;?>" class="mosprayerBTNRESET"  tabindex="6" />
<input type="submit" id="mosprayerBTNSUBMIT<?=$viewParm['articleid'];?>" title="<?=_PRY_R_SUBMIT;?>" name="<?=_PRY_R_SUBMIT;?>" value="<?=_PRY_R_SUBMIT;?>" class="mosprayerBTNSUBMIT" tabindex="7" />
</p>