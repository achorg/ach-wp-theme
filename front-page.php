<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<div id="featured-content">
    <div class="primary">
       
        <?php dynamic_sidebar( 'primary-home-widget-area' ); ?>
    </div>
    <div class="secondary">
    <?php dynamic_sidebar( 'secondary-home-widget-area' ); ?>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
