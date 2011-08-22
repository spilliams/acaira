<?php
/**
 * @package WordPress
 * @subpackage Acaira
 */
?>
        
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'acaira' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'acaira' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</div><!-- #post-## -->
