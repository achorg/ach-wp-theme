<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<div id="featured-content">
    <div class="primary">
        <div class="conference content-feature">
            <figure class="small-image">
                <img src="http://ach.org/wp-content/uploads/2014/10/dh2015logo.jpg">
            </figure>
            <h2>Digital Humanities 2015</h2>
            <p><em>Sydney, Australia, 29 June–3 July 2015</em></p>
            <p>Hosted by University of Western Sydney’s Digital Humanities Research Group. <a href="http://dh2014.org">Conference website</a></p>
        </div>
        <div class="conference content-feature">
            <figure class="small-image">
                <img src="http://ach.org/wp-content/uploads/2014/10/conf-2015.png">
            </figure>
            <h2>Canadian DH/ACH 2015</h2>
            <p><em>Ottawa, Ontario, 30 May–5 June 2015</em></p>
            <p>Hosted at 2015 Congress of the Social Sciences and Humanities, University of Ottawa. <a href="http://ach.org/2014/10/20/joint-ach-canadian-dh-conference-2015/">More information.</a></p>
        </div>
        <?php dynamic_sidebar( 'primary-home-widget-area' ); ?>
    </div>
    <div class="secondary">
    <?php dynamic_sidebar( 'secondary-home-widget-area' ); ?>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
