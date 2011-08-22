<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div><!-- .entry-header -->

  <div class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'acaira' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'acaira' ) );
			if ( '' != $tag_list ) {
				$utility_text = __( 'This entry was posted in %1$s and tagged %2$s by <a href="%4$s">%3$s</a>.', 'acaira' );
			} elseif ( '' != $categories_list ) {
				$utility_text = __( 'This entry was posted in %1$s by <a href="%4$s">%3$s</a>.', 'acaira' );
			} else {
				$utility_text = __( 'This entry was posted by <a href="%4$s">%3$s</a>.', 'acaira' );
			}

			printf(
				$utility_text,
				$categories_list,
				$tag_list,
				get_the_author(),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
			);
		?>
		<?php edit_post_link( __( 'Edit', 'acaira' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-meta -->
  <br>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'acaira' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</div><!-- #post-<?php the_ID(); ?> -->