<nav class="pager">
    <ul>

<?php if (is_single()) : ?>

      <li class="older">
        <em class="kicker">Previous Post</em>
        <?php previous_post_link(); ?>
      </li>
      <li class="newer">
        <em class="kicker">Next Post</em>
        <?php next_post_link(); ?>
      </li>

<?php else: ?>

      <li class="older"><?php next_posts_link(__('Older Posts')); ?></li>
      <li class="newer"><?php previous_posts_link(__('Newer Posts')); ?></li>

<?php endif; ?>

    </ul>

</nav>
