<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<div>
  <div class="componentheading" align="left"><?=_PRY_R_PREVIEW_HEAD;?></div>
  <p align="left"><?=_PRY_R_PREVIEW_INTRO;?></p>
  <table border="0" width="100%" align="left">
  	<tr>
    <td width="8%" align="left" valign="top"><strong><?=_PRY_A_NAME_SUB;?></strong>:</td>
    <td width="92%" align="left" valign="top"><?=$viewParm['name'];?></td></tr>
  	<tr>
      <td align="left" valign="top"><strong><?=_PRY_A_EMAIL_SUB;?></strong></td>
      <td align="left" valign="top"><?=$viewParm['email'];?></td>
    </tr>
    <tr>
      <td align="left" valign="top"><strong><?=_PRY_A_HOMEPAGE;?></strong>:</td>
      <td align="left" valign="top"><?=$viewParm['homepage'];?> [<a href="<?=$viewParm['homepage'];?>" target="_blank"><?=_PRY_R_CHECKLINK;?></a>]</td>
  	</tr>
    <tr>
      <td align="left" valign="top"><strong><?=_PRY_A_PRAYER;?></strong>:</td>
      <td align="left" valign="top"><?=$viewParm['entry'];?></td>
    </tr>
  </table>  
  <table>
  <tr><td>
  <?=$this->renderView("_preview.php");?>
  </td></tr>
  </table>
</div>