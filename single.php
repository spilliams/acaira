<?php /**
 * @package WordPress
 * @subpackage Acaira
 */
get_header();
  if (have_posts()): while (have_posts()) : the_post();
    get_template_part( 'content-post' );
  endwhile; else:
    get_template_part( '404' );
  endif;
get_footer();
?>