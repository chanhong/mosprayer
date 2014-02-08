<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<form method="post" action="<?=$viewParm['mc_post_string'];?>" name="commentForm" id="commentForm<?=$viewParm['articleid'];?>">
  <input type="hidden" class="inputbox" name="mc_comment_name" value="<?=$viewParm['name'];?>">
  <input type="hidden" class="inputbox" name="mc_comment_email" value="<?=$viewParm['email'];?>">
  <input type="hidden" class="inputbox" name="mc_comment_homepage" value="<?=$viewParm['homepage'];?>">
  <input type="hidden" class="inputbox" name="mc_comment" value="<?=$viewParm['entry'];?>">
  <input type="hidden" class="inputbox" name="id" value="<?=$viewParm['articleid'];?>">
  <input type="hidden" class="inputbox" name="MosPrayerTS" value="<?=$viewParm['mosprayerts'];?>">      
  <input type="hidden" name="return" value="<?=$viewParm['return'];?>"> 
  <input type="reset"  name="cancel" value="<?php echo _PRY_R_CANCEL;?>" class="button" onClick="javascript:window.history.go(-1);" />
  <input type="submit" name="submit" value="<?php echo _PRY_R_SUBMIT;?>" class="button" />
</form>