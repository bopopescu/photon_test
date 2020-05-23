<?php

// Load value (array of ids).
$image_ids = get_field('gallery');

?>

<section id="portfolio">
    <div class="portfolio-items">
        <a href="<?php echo $image_ids[0]; ?>" data-fancybox="gallery" class="portfolio-item portfolio-item-1 ani-fade-up"><span>&#9741;</span></a>
        <a href="<?php echo $image_ids[1]; ?>" data-fancybox="gallery" class="portfolio-item portfolio-item-2 ani-fade-up"><span>&#9741;</span></a>
        <a href="<?php echo $image_ids[2]; ?>" data-fancybox="gallery" class="portfolio-item portfolio-item-3 ani-fade-up"><span>&#9741;</span></a>
        <a href="<?php echo $image_ids[3]; ?>" data-fancybox="gallery" class="portfolio-item portfolio-item-4 ani-fade-up ani-delay-1"><span>&#9741;</span></a>
        <a href="<?php echo $image_ids[4]; ?>" data-fancybox="gallery" class="portfolio-item portfolio-item-5 ani-fade-up ani-delay-1"><span>&#9741;</span></a>
        <a href="<?php echo $image_ids[5]; ?>" data-fancybox="gallery" class="portfolio-item portfolio-item-6 ani-fade-up ani-delay-2"><span>&#9741;</span></a>
        <a href="<?php echo $image_ids[6]; ?>" data-fancybox="gallery" class="portfolio-item portfolio-item-7 ani-fade-up ani-delay-2"><span>&#9741;</span></a>
        <a href="<?php echo $image_ids[7]; ?>" data-fancybox="gallery" class="portfolio-item portfolio-item-8 ani-fade-up ani-delay-2"><span>&#9741;</span></a>
    </div>
    <style>
      .portfolio-item-1 {
        background-image: url("<?php echo $image_ids[0]; ?>");
      }
      .portfolio-item-2 {
        background-image: url("<?php echo $image_ids[1]; ?>");
      }
      .portfolio-item-3 {
        background-image: url("<?php echo $image_ids[2]; ?>");
      }
      .portfolio-item-4 {
        background-image: url("<?php echo $image_ids[3]; ?>");
      }
      .portfolio-item-5 {
        background-image: url("<?php echo $image_ids[4]; ?>");
      }
      .portfolio-item-6 {
        background-image: url("<?php echo $image_ids[5]; ?>");
      }
      .portfolio-item-7 {
        background-image: url("<?php echo $image_ids[6]; ?>");
      }
      .portfolio-item-8 {
        background-image: url("<?php echo $image_ids[7]; ?>");
      }
    </style>
</section>
