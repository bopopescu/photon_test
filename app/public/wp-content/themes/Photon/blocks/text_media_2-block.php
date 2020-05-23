<?php

// Load Variables


$title = get_field('title');
$side_title = get_field('side-title');
$paragraph = get_field('paragraph');
$button = get_field('button-text');
$team = get_field('team');

?>

<section id="team">
    <div class="container">
        <div class="team-content sec-grid">
            <div class="team-info">
                <div><h2 class="vertical-title ani-right ani-delay-2"><?php echo $side_title; ?></h2></div>
                <div class="team-detail ani-left ani-delay-1">
                    <h2 class="horizontal-title"><?php echo $title; ?></h2>
                    <p><?php echo $paragraph; ?></p>
                    <button class="btn-general btn-light" onclick="window.location.href='<?php echo $button['url']; ?>'"><?php echo $button['title']; ?></button>
                </div>
            </div>

    <?php if( have_rows('team') ): ?>

    	<div class="team-items">

    	<?php while( have_rows('team') ): the_row();

        //vars
        $image = get_sub_field('image');
        $sub_title = get_sub_field('title');
        $job = get_sub_field('job');


    		?>

        <div class="team-item team-item-1 ani-fade-up">
            <img src="<?php echo $image; ?>">
            <div class="team-item-overlay">
                <div class="team-item-info">
                    <h5><?php echo $sub_title; ?></h5>
                    <p><?php echo $job; ?></p>
                    <ul class="team-social-list">
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    	<?php endwhile; ?>

    </div>

    <?php endif; ?>

   </div>
  </div>
</section>
