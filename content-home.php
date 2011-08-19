<div id='cUp'>
  <script type='text/javascript'>upIds=new Array();</script>
    <?php
    $args = array( 'numberposts' => 9, 'orderby' => 'rand' );
    $rand_posts = get_posts( $args );
    $first = true;
    foreach( $rand_posts as $post ) :
      $image_full_tag = get_the_post_thumbnail($post->ID,'Homepage Slideshow');
      $image_id = get_post_thumbnail_id($post->ID);
      ?>
      <div id='<?php echo $image_id; ?>' class='up<?php if ( !$first ) : ?> hidden<?php endif; ?>'>
        <script type='text/javascript'>upIds.push(<?php echo $image_id; ?>)</script>
      	<a href='<?php echo the_permalink(); ?>#<?php echo get_post_thumbnail_id(); ?>'>
      	  <?php echo $image_full_tag; ?>
      	</a>
      </div><!-- up -->
    	<?php $first = false; ?>
    <?php endforeach; ?>
</div>
<script type='text/javascript'>
  function slideshowGo() {
    next = upIds[(upIds.indexOf(upId)+1)%upIds.length]
    jQuery('#'+upId).fadeOut('slow')
    jQuery('#'+next).fadeIn('slow')
    upId = next
    setTimeout("slideshowGo()",3000)
  }
  jQuery(document).ready(function(){
    upId = parseInt(jQuery('.up')[0].id)
    setTimeout("slideshowGo()",3000)
  })
</script>