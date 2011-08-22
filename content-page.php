<?php
/**
 * @package WordPress
 * @subpackage Acaira
 */
?>
        
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="entry-title" style="display:inline"><?php the_title(); ?></h1>
	<?php edit_post_link( __( 'Edit', 'acaira' ), '<span class="edit-link">', '</span>' ); ?><br>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</div><!-- #post-## -->
