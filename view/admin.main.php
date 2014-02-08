<?php 
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
  $thispage="index2.php?option=".$this->mccom['me'];  // com_mosprayer
?>
<table width="100%" border="1" cellpadding="3" cellspacing="3" bgcolor="#EDF1F1">
<tr>
<td align="center" valign="middle"><?=$this->h->aLink("http://ongetc.com","COAddOns - MosPrayer"); ?></td>
<td valign="top">
	<table width="100%" border="0" cellpadding="3" cellspacing="3">
	<tr>
		<td width="50%" align="center" valign="top">
		<?=$this->h->aLink($thispage,"Refresh",'')." : Refresh this page "; ?>
		</td>
		<td width="50%" align="center" valign="top">
		<?=$this->h->aLink($thispage."&task=config",_PRY_A_CONFIG,'')." : ". _PRY_A_CONFIG_DESC; ?><br />
		</td>
	</tr>
	</table>
</td>
</tr></table>
<form action="index2.php" method="post" name="adminForm">
<table cellpadding="3" cellspacing="0" border="0" width="100%"><tr>
<td width="100%" class="sectionname"><?=_PRY_A_REVIEW; ?></td>
<td nowrap="nowrap"><?=_PRY_A_DISPLAY; ?></td>
<td> <?=$this->pageNav->writeLimitBox(); ?> </td>
<td>Search:</td>
<td> <input type="text" name="search" value="<?=$viewParm['search'];?>" class="inputbox" onChange="document.adminForm.submit();" />
</td></tr></table>
<table cellpadding="3" cellspacing="0" border="0" width="100%" class="adminlist">
<tr>
<th width="1%" class="title"><input type="checkbox" name="toggle" value="" onclick="checkAll('<?=count($viewData); ?>');" /></th>
<th width="10%" class="title"><?=_PRY_A_NAME_SUB ?></th>
<th width="3%" class="title"><?=_PRY_A_EMAIL_SUB ?></th>
<th width="4%" class="title"><?=_PRY_A_HOMEPAGE ?></th>
<th width="51%" class="title"><?=_PRY_A_PRAYER ?></th>
<th width="11%" class="title"><?=_PRY_A_ARTICLE ?></th>
<th width="7%" class="title"><?=_PRY_A_IP ?></th>
<th width="8%" class="title"><?=_PRY_A_DATE ?></th>
<th width="5%" class="title"><?=_PRY_A_PUBLISHED ?></th>
</tr>
<?php 
  if ($viewData) { 
    $k = 0;
    foreach($viewData as $row)  { 
?>
<tr class="row<?=$k; ?>">
<td width="1%" valign="top"><input type="checkbox" id="cb<?=$k; ?>" name="cid[]" value="<?=intval($row->id); ?>" onClick="isChecked(this.checked);" /></td>
<td width="10%" align="left" valign="top"><?=$row->name; ?></td>
<td width="3%" align="left" valign="top"><a href="mailto:<?=$row->email; ?>">[Link]</A></td>
<td width="4%" align="center" valign="top"><?=$this->h->homePageLink($row->homepage); ?></td>
<td width="51%" align="left" valign="top"><?=$this->commentEditLink($row); ?></td>
<td width="11%" align="left" valign="top"><?=$this->getArticleTitleLink($row->articleid); ?></td>
<td width="7%" align="left" valign="top"><?=$row->ip;?></td>
<td width="8%" align="left" valign="top"><?=$row->date; ?></td>
<td width="5%" align="center" valign="top"><?=$this->h->tickLink($row->published); ?></td>
</tr>
<?php
      $k = $k+1; 
    } 
  }?>
</table>
<table cellpadding="3" cellspacing="0" border="0" width="100%" class="adminlist">
<tr><th align="center" colspan="8"> <?=$this->pageNav->writePagesLinks(); ?></th></tr>
<tr><td align="center" colspan="8"> <?=$this->pageNav->writePagesCounter(); ?></td></tr>
</table>
<input type="hidden" name="option" value="<?=$this->mccom['me']; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
</form>
<?=$this->h->footerAbout();?>