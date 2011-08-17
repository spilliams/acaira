<?php
/**
 * @package WordPress
 * @subpackage Acaira
 */

get_header();
  if (have_posts()): while (have_posts()) : the_post();
    get_template_part( 'content', get_post_format() );
  endwhile; else: ?>
    <div id="post-0" class="post error404 not-found">
  		<h1 class="entry-title"><?php _e( 'Not Found', 'acaira' ); ?></h1>
  		<div class="entry-content">
  			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'acaira' ); ?></p>
  			<?php get_search_form(); ?>
  		</div><!-- .entry-content -->
  	</div><!-- #post-0 -->
  <?php endif;
get_footer(); ?>
