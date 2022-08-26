<?php
// cssを読み込みます
function register_css()
{
    if ( !is_admin() ) {
        wp_enqueue_style('main_style', get_template_directory_uri() . 'style-2.css');
    }
}

// jqueryを読み込みます
    function remove_default_jquery() 
    {
        if(!is_admin()) {
            wp_deregister_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), 3.2, true);
        }
    }

    // アイキャッチ画像の読み込み
    add_theme_support('post-thumbnails');

    add_action('wp_enqueue_scripts', 'register_css');

    add_action('wp_enqueue_scripts', 'remove_default_jquery');

    // add_action('init', 'add_categories_for_pages');
    // function add_categories_for_pages(){
    //     register_taxonomy_for_object_type('category', 'page');
    // }
    // add_action('pre_get_posts', 'nobita_merge_page_categories_at_category_archive');
    // function nobita_merge_page_categories_at_category_archive($query) {
    //     if ( $query->is_category == true && $query->is_main_query()) {
    //         $query->set('post_type', array('post', 'page', 'nav_menu_item'));
    //     }
    // }

    function pagination($pages = '', $range = 2) {
        $showitems = ($range * 2) + 1;
      
        global $paged;
        if(empty($paged)) {
          $paged = 1;
        }
      
        if($pages == '') {
          global $wp_query;
          $pages = $wp_query->max_num_pages;
          if(!$pages) {
            $pages = 1;
          }
        }
      
        if(1 != $pages) {
          echo '<ul class="pagination">';
          if($paged > 1) { echo '<a href="' . esc_url(get_pagenum_link($paged - 1)) . '">PREV</a>';}
          for ($i=1; $i <= $pages; $i++) {if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
              if ($paged == $i) {
                echo '<li class="active">' .$i. '</li>';
              } else {
                echo '<a href="' . esc_url(get_pagenum_link($i)) . '">' .$i. '</a>';
              }
            }
          }
      
          if ($paged < $pages) {
            echo '<a href="' . esc_url(get_pagenum_link($paged + 1)) . '">NEXT</a>';
          }
          echo '</ul>';
        }
      }
      
    
