<?php if ($theme === false || $theme->show_copyright == 1) : ?><span id="lhc_faq_title"><a title="<?php $theme !== false && $theme->widget_copyright_url != '' ? print '' : print '' ?>" href="<?php $theme !== false && $theme->widget_copyright_url != '' ? print htmlspecialchars($theme->widget_copyright_url) : print '' ?>" target="_blank"><img src="<?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php if ($theme !== false && $theme->copyright_image_url !== false) : print $theme->copyright_image_url; else : ?><?php echo erLhcoreClassDesign::design('images/general/logo_grey.png');?><?php endif;?>" alt="" /></a></span><?php endif;?>