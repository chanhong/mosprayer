<?php 
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 

echo $this->h->jQTab($viewParm['tagid']);
//    $cssFile = $mccom['mcasiteurl']."css/mosprayer.ui.tabs.css";
echo $this->h->cssLink($viewParm['cssfile']);    
?> 
<div id="<?=$viewParm['tagid'];?>">
  <ul>
  <li><a href="#mosprayerConfig"><span><?=_PRY_A_CONFIG; ?></span></a></li>
  <li><a href="#mosprayerDonate"><span>Donate!</span></a></li>
  <li><a href="#mosprayerInstruction"><span>Instruction</span></a></li>
  <li><a href="#mosprayerSupport"><span>Support</span></a></li>
  <li><a href="#mosprayerMaillingList"><span>Mailling List</span></a></li>
  <li><a href="#mosprayerLicense"><span>License</span></a></li>
  <li><a href="#mosprayerVersion"><span>Version</span></a></li>
  <li><a href="#mosprayerCredit"><span>Credit</span></a></li>
  <li><a href="#mosprayerCSS"><span>CSS</span></a></li>      
  </ul>
  <div id="mosprayerConfig">
    <form action="index2.php" method="post" name="adminForm" class="adminForm" id="adminForm">
    <table width="90%" border="0" cellpadding="2" cellspacing="2" class="adminForm">
    <tr><td class="sectionname" colspan="3"><div align="center"><?php echo _PRY_A_CONFIG; ?></div></td></tr>
    <tr align="center" valign="middle">
    <td width="17%">&nbsp;</td>
    <td width="17%"><strong><?php echo _PRY_A_CURRENT_SETTINGS; ?></strong></td>
    <td width="66%"><strong><?php echo _PRY_A_EXPLANATION; ?></strong></td>
    </tr>
    <?=$viewData?>
    <tr align="center" valign="middle"><td colspan="3" align="left" valign="top"></td></tr>
    </table>
    <input type="hidden" name="task" value="saveconfig" />
    <input type="hidden" name="option" value="<?=$this->mccom['me'];?>" />
    </form>      
  </div>     
  <div id="mosprayerDonate">
    <div class="sectionname">Donate!</div><p />
    <?=_PRY_A_DONATE;?>
    <p />
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-butcc-donate.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
    <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
    </form>
    <p>Help me keep this product free by donating a little money towards my costs. ~Thanks~</p>      
  </div>
  <div id="mosprayerInstruction">
    <div align="left">
      <div align="center"><font color="#FF9900"><h5><?=_PRY_A_INSTRUCTIONS_DESC?></h5></font></div>
      <div>
        <font color="#DA3838"><b>Notes: Two reasons to install MosPrayerBot:</b></font><p />
        1. Want to show comment link on front page.<br />
        2. Don&#39;t want to edit template, meaning to skip steps below! (edting template is now optional but still supported)
        Post Install Configuration<p />
        But if you want to edit the template, then read below!<br />
      </div>
      <div><strong><font color="#ffcc00"><?=_PRY_A_IMPORTANT_NOTE?></font></strong></div>
      <div>
        <p><?=_PRY_A_TEMPLATE?></p>
        <p /><?=_PRY_A_CHANGE_TO?>
        <p />mosMainBody(); ?&gt; OR &lt;jdoc:include type=&quot;component&quot; /&gt;
        <p />
        <p>mosMainBody(); ?&gt;&lt;?php if (file_exists($mosConfig_absolute_path.&quot;/components/com_mosprayer/mosprayer.php&quot;)) { require_once($mosConfig_absolute_path.&quot;/components/com_mosprayer/mosprayer.php&quot;); } ?&gt;
        </p>
        OR
        <p>&lt;jdoc:include type=&quot;component&quot; /&gt;&lt;?php if (file_exists($mosConfig_absolute_path.&quot;/components/com_mosprayer/mosprayer.php&quot;)) { require_once($mosConfig_absolute_path.&quot;/components/com_mosprayer/mosprayer.php&quot;); } ?&gt;
        </p>
        <p><?=_PRY_A_HAVE_FUN;?></p>
      </div>
    </div>    
  </div>
  <div id="mosprayerSupport" align="left">
    <?=$this->h->a("http://ongetc.com","Author Website");?> : Check out the forums or articles there first!<br /> 
    <?=$this->h->a("mailto:chanh.ong@gmail.com","Email Request");?> : I will do my best to reply! - May take Time<br />
    <?=$this->h->a("mailto:chanh.ong@gmail.com","Custom Development");?> : I will change code for a fee - Ask for details<br />
  </div>
    <div id="mosprayerMaillingList" align="center">
    <strong>Announcement list</strong><p /><?php echo _PRY_A_KEEPUPTODATE; ?><p/>
    <form method="post"action="http://ongetc.com/mailman/subscribe/dev_ongetc.com" target="_blank">
      <input name="email" class="inputbox" value="<?=$viewParm['admin_email']?>" type="text" />
      <input name="submit" class="button" value="<?=_PRY_A_SUBSCRIBE?>" type="submit" />
      <input name="action" value="subscribe" type="hidden">
      <input name="group_ids[]" value="8" type="hidden">
    </form>    
  </div>
  <div id="mosprayerLicense">
    <iframe frameborder="0" width="100%" height="600px" align="top" src="<?=$this->mccom['mcasiteurl'];?>license.php"></iframe>      
  </div>
  <div id="mosprayerVersion">
  <?php 
    $url=$this->mccom['mesite'].'static/mosprayer_version.php?myver='.$this->mccom['version'];
    $jsChkVersion="javascript:mp_openpopup('".$url."',485,180);"; 
    echo $this->h->yourVersion(_PRY_A_VERSION,$this->mccom)
    ."<p />".$this->h->aLink($jsChkVersion,_PRY_A_CHECK,'')
    ."<p />".$this->h->releaseVersion($viewParm, $this->mccom)
    //      ."<p />".$this->h->releaseVersion($this->mccfg, $this->mccom)      
    ; 
  ?>
  </div>
  <div id="mosprayerCredit">
    <?=$this->h->aLink("http://mambo-foundation.org","Mambo Team"); ?> & 
    <?=$this->h->aLink("http://joomla.org","Joomla Team"); ?> : For a wonderful CMS! - Thanks!<br />
    <p />... And Many contributors, Please see credit.txt for more detail    
  </div>
  <div id="mosprayerCSS">
    <p>You can now skin your comments by using provided mosprayer.css file in administrator/components/com_mosprayer/css</p>
    And
    <p>You can now skin your admin tab by using provided mosprayer.ui.tabs.css file in administrator/components/com_mosprayer/css</p>    
  </div>
</div>
<?=$this->h->footerAbout();?>