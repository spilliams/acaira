<?php /* display a gallery among other posts */ ?>
<!-- begin content-gallery -->
<a href='<?php the_permalink(); ?>'><div class='gallery-thumb'>
  <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); /* 200 x 200 */ ?>
  <span class='gallery-title' style='display:none'><?php the_title(); ?></span>
</div></a>
<!-- end content-gallery -->
