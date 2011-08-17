<?php /* display a gallery among other posts */ ?>
<!-- begin content-gallery -->
<a href='<?php the_permalink(); ?>'><div class='gallery-thumb'>
  <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
  <span class='gallery-title' style='display:none'><?php the_title(); ?><br><?php the_date(); ?></span>
</div></a>
<!-- end content-gallery -->
