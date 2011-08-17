<?php /**
 * @package WordPress
 * @subpackage Acaira
 */ ?>
<div id="post-0" class="post error404 not-found">
  <h1 class="entry-title"><?php _e( 'Not Found', 'acaira' ); ?></h1>
  <div class="entry-content">
    <p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'acaira' ); ?></p>
  <?php get_search_form(); ?>
  </div><!-- .entry-content -->
</div><!-- #post-0 -->

<script type="text/javascript">
	// focus on search field after it has loaded
	document.getElementById('s') && document.getElementById('s').focus();
</script>

<?php get_footer(); ?>