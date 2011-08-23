<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div><!-- .entry-header -->
	<?php edit_post_link( __( 'Edit', 'acaira' ), '<span class="edit-link">', '</span>' ); ?>
  <br>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'acaira' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</div><!-- #post-<?php the_ID(); ?> -->