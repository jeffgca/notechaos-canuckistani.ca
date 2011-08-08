<?php
// $Id: comment.tpl.php,v 1.2 2010/01/09 10:42:35 sunn Exp $
?>
<div class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status; print ' '. $zebra; ?>">

  <div class="clear-block">
  <?php if ($submitted): ?>
    <span class="comment-submitted"><?php print $submitted; ?></span>
  <?php endif; ?>
 
  <?php if ($comment->new) : ?>
    <span class="new"><?php print drupal_ucfirst($new) ?></span>
  <?php endif; ?>

    <div class="content">
      <?php print $content ?>
      <?php if ($signature): ?>
      <div class="clear-block">
        <div>—</div>
        <?php print $signature ?>
      </div>
      <?php endif; ?>
 <?php if ($links): ?>
    <div class="links"><?php print $links ?></div>
  <?php endif; ?>
    </div>
  </div>


</div>
