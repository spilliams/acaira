<!-- begin content -->
  <a href='<?php the_permalink(); ?>'><div class='gallery-thumb'>
    <span class='gallery-content'>
      <?php
      $t = get_the_content();
      echo $t[0];
      ?>
    </span>
    <span class='gallery-title' style='display:none'><?php the_title(); ?><br><?php the_date(); ?></span>
  </div></a>
<!-- end content -->
