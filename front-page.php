<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>

<div id="featured-content">
<?php
dynamic_sidebar( 'primary-home-widget-area' );
dynamic_sidebar( 'secondary-home-widget-area' );
dynamic_sidebar( 'tertiary-home-widget-area' );
?>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
