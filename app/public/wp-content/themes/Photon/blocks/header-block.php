<?php

// Load Variables

$background = get_field('background');
$title = get_field('title');
$description = get_field('description');


?>

<style>

 section#basic {
   background: linear-gradient(0deg, rgba(0,0,0, 0.7), rgba(0,0,0, 0.7)), url("<?php echo $background; ?>");
 }


</style>

<section id="basic">
    <div class="container">
        <div class="basic-content">
            <h1 class="main-title ani-fade-up"><?php echo $title; ?></h1>
            <p class="main-slogan ani-fade-up ani-delay-1"><?php echo $description; ?></p>
        </div>
        <div class="arrows ani-delay-2">
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</section>
