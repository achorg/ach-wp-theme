<?php

/**
 * Featured Images
 */
add_theme_support( 'post-thumbnails' );

/**
 * Menus
 */
add_theme_support('menus');

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'header' => __( 'Header Navigation', 'neatline-theme' ),
	'footer' => __( 'Footer Navigation', 'neatline-theme' ),
	
) );
		

/**
 * Dynamic Titles
 */
function dynamic_site_title() {
	
	if ( is_single() ) {
      wp_title('');
      echo (' | ');
      bloginfo('name');

} else if ( is_front_page() ) {
      bloginfo('name');
      echo (' | ');
      bloginfo('description');
 
} else if ( is_page() || is_paged() ) {
      bloginfo('name');
      wp_title('|');
 
} else if ( is_author() ) {
      bloginfo('name');
      wp_title(' | '.__('Author','themename').'');

} else if ( is_post_type_archive() ) {
	  bloginfo('name');
	  wp_title('|');
	  
} else if ( is_category() ) {
      bloginfo('name');
      wp_title(' | '.__('Archive for','themename').'');
      ('');

} else if ( is_tag() ) {
      bloginfo('name');
      echo (' | '.__('Tag archive for','themename').'');
      wp_title('');

} else if ( is_archive() ) {
      bloginfo('name');
      echo (' | '.__('Archive for','themename').'');
      wp_title('');

} else if ( is_search() ) {
      bloginfo('name');
      echo (' | '.__('Search Results','themename').'');
 
} else if ( is_404() ) {
      bloginfo('name');
      echo (' | '.__('404 Error (Page Not Found)','themename').'');
 
} else if ( is_home() ) {
      bloginfo('name');
      echo (' | ');
      wp_title('');
 
} else {
      bloginfo('name');
      echo (' | ');
      echo (''.$blog_longd.'');
}
}

function achwptheme_blog_archive_title() {
    // Set up our blog archives title.
    $pageTitle = 'Blog Archives';
    
    if (is_category()) {
        $pageTitle = $pageTitle . ': &#8220;'.single_cat_title().'&#8221; Category';
    } elseif (is_tag()) {
        $pageTitle = $pageTitle .': &#8220;'.single_tag_title().'&#8221; Tag';
    } elseif(is_day()) {
        $pageTitle = $pageTitle .': '.the_time('F jS, Y');
    } elseif (is_month()) {
        $pageTitle = $pageTitle .': '.the_time('F, Y');
    } elseif (is_year()) {
        $pageTitle = $pageTitle .': '.the_time('Y');
    }
    
    echo $pageTitle;
}

/**
 * Register sidebars
 */
if ( function_exists('register_sidebar') ) {
    $beforeTitle = '<h2>';
    $afterTitle = '</h2>';
    $sidebars = array('Primary', 'Secondary', 'Tertiary');
    foreach($sidebars as $sidebar) {
      register_sidebar(array(
      'name' => $sidebar . ' Home Widget Area',
          'before_widget' => '<div class="content-feature">',
          'after_widget' => '</div>',
          'before_title' => $beforeTitle,
          'after_title' => $afterTitle,
        ));
    }
}

/**
 * Replaces "[...]" on excerpt_more with an actual ellipsis.
 */
function achwptheme_excerpt_more( $more ) {
  return '&hellip;' . '<a href="'.get_permalink().'">Continue reading.</a>';
}

add_filter( 'excerpt_more', 'achwptheme_excerpt_more' );

function achwptheme_add_post_title_class($classes) {
  global $post;
  if (is_singular() && $classTitle = sanitize_title($post->post_title)) {
    $classes[] = $classTitle;
  }

  return $classes;
}

add_filter('body_class', 'achwptheme_add_post_title_class');



function menu_element_class($classes, $item){
        if($item->ID == 225 || $item->menu_item_parent == 225) {
            $classes[] = "menu_element";
        }
        return $classes;
    }
    
add_filter('nav_menu_css_class' , 'menu_element_class' , 10 , 2);


function achwptheme_theme_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    ?>

        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
            <article id="comment-<?php comment_ID(); ?>" class="comment">
                <ul class="comment-meta">
                    <li class="image"><?php echo get_avatar( $comment, '60' ); ?></li>
                    <li class="fn"><?php comment_author_link(); ?></li>
                    <li class="comment-date">
                        <?php
                        printf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
                        esc_url( get_comment_link( $comment->comment_ID ) ),
                        get_comment_time( 'c' ),
                        get_comment_date()

                        );
                        ?>
                    </li>
                    <?php edit_comment_link( __( 'Edit this Comment' ), '<li class="edit-link">', '</li>' ); ?>
                    <li class="reply-link">
                    <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'labnotes' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                    </li>
                </ul>
                <div class="comment-content">
                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
                <?php endif; ?>
                <?php comment_text(); ?>
            </div>
        </article>
<?php
}

