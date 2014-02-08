<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<form action="index2.php?task=savecomment" method="post" name="adminForm" class="adminForm" id="adminForm">
<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
<tr><th colspan="4">Edit comment #<?=$this->mccom['cid']?></th></tr>
<tr><td><textarea cols="88" rows="25" name="comment" id="comment"><?=$viewData;?></textarea></td></tr>
</table>
<input type="hidden" name="task" value="<?=$this->mccom['task'];?>" />
<input type="hidden" name="option" value="<?=$this->mccom['me'];?>" />
<input type="hidden" name="cid" value="<?=$this->mccom['cid'];?>>" />
</form>