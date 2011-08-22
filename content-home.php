<div id='cUp'>
  <script type='text/javascript'>upIds=['h1','h2','h3','h4','h5'];upId='h1';</script>
  <!-- link these when they're finally up -->
  <div id='h1' class='up'><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home/h1.jpg"></div>
  <div id='h2' class='up hidden'><img src='<?php bloginfo('stylesheet_directory'); ?>/images/home/h2.jpg'></div>
  <div id='h3' class='up hidden'><img src='<?php bloginfo('stylesheet_directory'); ?>/images/home/h3.jpg'></div>
  <div id='h4' class='up hidden'><img src='<?php bloginfo('stylesheet_directory'); ?>/images/home/h4.jpg'></div>
  <div id='h5' class='up hidden'><img src='<?php bloginfo('stylesheet_directory'); ?>/images/home/h5.jpg'></div>
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