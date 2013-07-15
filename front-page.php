<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<div id="featured-content">
<div class="primary">
<div class="conference content-feature">
<figure class="small-image">
<img src="/wp-content/uploads/2013/06/DH13_simplified.png">
</figure>
<h2><a href="/conferences">Digital Humanities 2013</a></h2>
<p>Our annual conference, to be held at the University of Nebraska in Lincoln, Nebraska, July 16–19.</p>
<p><a href="/conferences">Learn More</a> | <a href="http://dh2013.unl.edu">Conference Website</a></p>
</div>
<?php dynamic_sidebar( 'primary-home-widget-area' ); ?></div>
<div class="secondary"><?php dynamic_sidebar( 'secondary-home-widget-area' ); ?></div>

</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
