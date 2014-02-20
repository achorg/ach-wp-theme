<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<div id="featured-content">
<div class="primary">
<div class="conference content-feature">
<figure class="small-image">
<img src="/wp-content/uploads/2014/02/dh2014logo.png">
</figure>
<h2><a href="/conferences">Digital Humanities 2014</a></h2>
<p>Our annual conference, jointly hosted by the University of Lausanne (UNIL) and Ecole Polytechnique Fédérale de Lausanne (EPFL)</p>
<p><a href="/conferences">Learn More</a> | <a href="http://dh2014.org" title="Web site for the 2014 conference.">Conference Website</a></p>
</div>
<?php dynamic_sidebar( 'primary-home-widget-area' ); ?></div>
<div class="secondary"><?php dynamic_sidebar( 'secondary-home-widget-area' ); ?></div>

</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
