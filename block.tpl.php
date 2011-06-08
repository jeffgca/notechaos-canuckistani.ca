<?php
// $Id: block.tpl.php,v 1.1 2009/12/05 11:27:55 sunn Exp $
?>
<div class="block-header"></div>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="clear-block block block-<?php print $block->module ?>">

<?php if (!empty($block->subject)): ?>
  <h2><?php print $block->subject ?></h2>
<?php endif;?>

  <div class="content"><?php print $block->content ?></div>
  <div class="block-footer"></div>
</div>
