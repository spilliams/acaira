<?php
/**
 * @package WordPress
 * @subpackage Acaira
 */
?>
        
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( is_front_page() ) { ?>
		<h2 class="entry-title"><?php the_title(); ?></h2>
	<?php } else { ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php } ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'acaira' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'acaira' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</div><!-- #post-## -->
