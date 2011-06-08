<?php
// $Id: page.tpl.php,v 1.2 2010/01/09 10:42:35 sunn Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
  </head>
 <body>
	<div id="header">
		<div id="search"><?php print $search_box ?></div>
		<div id="nav">
      <?php if (!empty($primary_links)): ?>
        <?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?>
      <?php endif; ?>
		</div>
		<div id="site-info">
			<div id="site-title"><a href="<?php print $base_path ?>"><?php print $site_name ?></a></div>
			<div id="site-slogan"><?php print $site_slogan ?></div>
		</div>
	</div> <!-- Header end -->
	
	<div id="content-wrapper">
		<div id="leftside">
		  <?php print $leftside ?>
      <div id="tabs"><?php print $tabs ?></div>
      <?php print $content ?>
		</div>
		<?php if ($rightside): ?>
		<div id="rightside">
		  <?php print $rightside ?>
		</div>
		<?php endif; ?>
		<div class="clear"></div>
	</div><!-- Content-wrapper end -->
	
	<div id="footer">
    <?php print $footer ?>
      <div id="footer-message"><?php print $footer_message ?><div class="rss"><a href="rss.xml"><img src="<?php print base_path() . path_to_theme() ?>/images/rss.png" alt="rss" /></a></div></div>

	</div>
	<?php print $closure ?>
</body>
</html>
