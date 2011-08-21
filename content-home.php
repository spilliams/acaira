<div id='cUp'>
  <script type='text/javascript'>upIds=['h1','h2','h3','h4','h5'];upId='h1';</script>
  <!-- link these when they're finally up -->
  <div id='h1' class='up'><img src='/images/home/h1.jpg'></div>
  <div id='h2' class='up hidden'><img src='/images/home/h2.jpg'</div>
  <div id='h3' class='up hidden'><img src='/images/home/h3.jpg'</div>
  <div id='h4' class='up hidden'><img src='/images/home/h4.jpg'</div>
  <div id='h5' class='up hidden'><img src='/images/home/h5.jpg'</div>
    <?php
    $args = array( 'numberposts' => 9, 'orderby' => 'rand' );
    $rand_posts = get_posts( $args );
    $first = true;
    foreach( $rand_posts as $post ) :
      $image_full_tag = get_the_post_thumbnail($post->ID,'Homepage Slideshow'); /* 1023 x 682 */
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
    setTimeout("slideshowGo()",3000)
  })
</script>