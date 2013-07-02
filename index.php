<?php get_header(); ?>
<?php if (is_home() || is_archive()): ?>
<h1>News</h1>
<?php endif; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
<p class="kicker">
  <time pubdate datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time>
</p>
    <h1>
    <?php if (is_singular()): ?>
    <?php the_title(); ?>
    <?php else: ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php endif; ?>
  </h1>
  </header>


<div class="entry">
<?php if (!is_singular()) { ?>

	<?php the_excerpt(); ?>

<?php } else { ?>
	<?php the_content(__('Read the rest of this entry &raquo;','themename')); ?>
    
	<?php wp_link_pages(array(
				'before' => '<p><strong> '.__('Pages:','themename').' </strong>', 
				'after' => '</p>', 
				'next_or_number' => 'number')); 
				?>
    
	<?php if (is_single()) : ?>
   
		<?php the_tags('<span id="tags"><strong>'.__('Tagged as:','themename').'</strong> ', ', ', '</span>'); ?>

	<?php endif; ?>
    
	

<?php } ?>

</div>

<?php if (is_single()): ?>
<footer>
  <div class="author-info">
    <a class="author-picture" href="<?php echo get_the_author_meta('user_url'); ?>"><?php echo get_avatar(get_the_author_meta('ID'),120); ?></a>
    <p class="author-name">By <?php echo(get_the_author_meta('user_firstname') . ' ' . get_the_author_meta('user_lastname')); ?></p>
    <?php if ($description = get_the_author_meta('user_description')): ?>
    <div class="author-description"><?php echo wpautop($description); ?></div>
    <?php endif; ?>
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="all-posts">See all posts by <?php echo get_the_author_meta('user_firstname'); ?></a>
  </div>
</footer>
<?php endif; ?>

</article>

<?php if(is_single()): comments_template(); endif; ?>
<?php endwhile; ?>
<?php include (TEMPLATEPATH . '/pagination.php'); ?>
<?php else : ?>
<h1><?php _e('Not Found','achwptheme'); ?></h1>
<p><?php _e('Sorry, that cannot be found','achwptheme'); ?></p>
<?php endif; ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
