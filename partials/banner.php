<?php
$bg_img = get_the_post_thumbnail_url();
 ?>

 <div class="container-fluid banner" style="background-image: url(<?php echo $bg_img; ?> );">
    <h1 class="text-center white text-center"><?php the_title(); ?></h1>
   <div class="overlay-dark"></div>
 </div>
