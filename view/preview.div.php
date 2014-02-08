<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<div id="mosprayerPREVIEW"><a name="mosprayerPREVIEW" title="mosprayerPREVIEW"></a>
  <div class="componentheading"><?=_PRY_R_PREVIEW_HEAD;?></div>
  <p class="mosprayerFORMMsg"><?=_PRY_R_PREVIEW_INTRO;?></p>
  <p>
    <label for="mc_comment_name" id="labelmc_comment_name" class="mosprayerFORMLabel"><?=_PRY_A_NAME_SUB;?>: </label>
    <?=$viewParm['name'];?>
  </p>
  <p>
    <label for="mc_comment_email" id="labelmc_comment_email" class="mosprayerFORMLabel"><?=_PRY_A_EMAIL_SUB;?>: </label>
    <?=$viewParm['email'];?>
  </p>
  <p>
    <label for="mc_comment_homepage" id="labelmc_comment_homepage" class="mosprayerFORMLabel"><?=_PRY_A_HOMEPAGE;?>: </label>
    <?=$viewParm['homepage'];?> [<a href="<?=$viewParm['homepage'];?>" target="_blank"><?=_PRY_R_CHECKLINK;?></a>]  
  </p>
  <p>
    <label for="mc_comment_entry" id="labelmc_comment_entry" class="mosprayerFORMLabel"><?=_PRY_A_PRAYER;?>: </label>
    <?=$viewParm['entry'];?>
  </p>
  <div id="mosprayerFORM"><a name="mosprayerFORM" title="mosprayerFORM"></a>
  <?=$this->renderView("_preview.php");?>
  </div>
</div>