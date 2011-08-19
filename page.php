<?php /**
 * @package WordPress
 * @subpackage Acaira
 */
get_header();
  if (have_posts()): while (have_posts()) : the_post();
    if (is_front_page()):
      get_template_part( 'content-home' );
    else:
      get_template_part( 'content-page' );
    endif;
  endwhile; else:
    get_template_part( '404' );
  endif;
get_footer();
?>
