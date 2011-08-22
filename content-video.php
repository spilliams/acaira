<?php /* display a video among other posts */ ?>
<!-- begin content-video -->
<a href='<?php the_permalink(); ?>'><div class='gallery-thumb'>
  <img src='<?php bloginfo('stylesheet_directory'); ?>/images/vimeo.png'>
  <span class='gallery-title' style='display:none'><?php the_title(); ?></span>
</div></a>
<!-- end content-video -->
