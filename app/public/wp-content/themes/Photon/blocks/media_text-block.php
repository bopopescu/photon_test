<?php

// Load Variables


$title = get_field('title');
$side_title = get_field('side-title');
$paragraph = get_field('paragraph');
$image = get_field('image');
$button = get_field('button-text');

?>

<section id="services" class="pri-background">
       <div class="container">
           <div class="services-content sec-grid">
               <div class="services-image ani-fade-up">
                   <img src="<?php echo $image; ?>">
               </div>
               <div class="services-info">
                   <div><h2 class="vertical-title vertical-title-right ani-delay-1 ani-left"><?php echo $side_title; ?></h2></div>
                   <div class="services-detail ani-delay-1 ani-right">
                       <div id="services-slider">
                           <div class="services-slide services-slide-1">
                               <h2 class="horizontal-title light-color"><?php echo $title; ?></h2>
                               <p><?php echo $paragraph; ?></p>
                               <button class="btn-general btn-light" onclick="window.location.href='<?php echo $button['url']; ?>'"><?php echo $button['title']; ?></button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
