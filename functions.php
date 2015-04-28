<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'post_thumbnails' );

function pagination_bar($the_query, $paged) {
  $big = 99999999;
  $total_pages = $the_query->max_num_pages;
  $current_page = max(1, $paged);

  if ($total_pages > 1) {
    echo paginate_links(array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big )) ),
      'format' => '?paged=%#%',
      'current' => $current_page,
      'total' => $total_pages,
    ));
  }
}

?>
