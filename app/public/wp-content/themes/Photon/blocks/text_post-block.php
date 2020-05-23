<?php

// Load Variables

$latest = get_field('latest');
$title = get_field('title');
$side_title = get_field('side_title');
$paragraph = get_field('paragraph');


?>

<section id="blog" class="pri-background">
    <div class="container">
        <div class="blog-content sec-grid">



              <?php if( have_rows('latest') ): ?>

              	<div class="latest-posts">

              	<?php while( have_rows('latest') ): the_row();

                  //vars
                  $sub_title = get_sub_field('sub_title');
                  $sub_paragraph = get_sub_field('sub_paragraph');
                  $read_more = get_sub_field('read_more');
                  $image = get_sub_field('image');
                  $author = get_sub_field('author');
                  $date = get_sub_field('date');


              		?>

                <div class="blog-post ani-delay-1 ani-fade-up">
                    <h4><?php echo $sub_title; ?></h4>
                    <p><?php echo $sub_paragraph; ?></p>
                    <a href="#"><?php echo $read_more; ?></a>
                    <div class="post-meta">
                        <img src="<?php echo $image; ?>">
                        <div class="divider">|</div>
                        <p class="author"><?php echo $author; ?></p>
                        <div class="divider">|</div>
                        <p class="date"><?php echo $date; ?></p>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>

          <?php endif; ?>

            <div class="blog-info">
                <div><h2 class="vertical-title vertical-title-right ani-left ani-delay-2"><?php echo $side_title; ?></h2></div>
                <div class="blog-detail">
                    <h2 class="horizontal-title light-color ani-right ani-delay-1"><?php echo $title; ?></h2>
                    <p><?php echo $paragraph; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
