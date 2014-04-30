<?php
global $post;
$ancestors = array_reverse(get_post_ancestors($post->ID));

if ($ancestors) {
  $oldestAncestor = $ancestors[0];
} else {
  $oldestAncestor = $post->ID;
}

$pageNav = wp_list_pages(
  array(
    'title_li' => '',
    'depth' => 2,
    'child_of' => $oldestAncestor,
    'echo' => 0
  )
);

get_header();

if (have_posts()) : while (have_posts()) : the_post();?>

<?php if ($ancestors): ?>
<div class="genealogy kicker">
<?php foreach ($ancestors as $ancestor): ?>
<a href="<?php echo get_permalink($ancestor); ?>"><?php echo get_the_title($ancestor); ?></a>
<?php endforeach; ?>
</div>
<?php endif; ?>
<h1><?php the_title(); ?></h1>

<div class="entry">
<?php if(has_post_thumbnail()) : ?>
  <figure class="featured-image">
    <?php the_post_thumbnail('full'); ?>
    <figcaption>
      <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
    </figcaption>
  </figure>
<?php endif; ?>

<?php the_content(); ?>
</div>

<?php if(is_single()): comments_template(); endif; ?>

<?php if($pageNav): ?>
<nav role="contextual" class="contextual">
<ul>
    <?php wp_list_pages(
      array(
        'title_li'=>'',
        'include'=> $oldestAncestor
      ) ); ?>
    <?php echo $pageNav; ?>
</ul>
</nav>
<?php endif; ?>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
