<?php


// Create id attribute allowing for custom "anchor" value.
$id = 'text_media-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Load Variables
$title = get_field('title');
$side_title = get_field('side-title');
$paragraph = get_field('paragraph');
$button = get_field('button-text');
$image = get_field('image');

?>

<section id="about">
    <div class="container">
        <div class="about-content sec-grid">
            <div id="<?php echo esc_attr($id); ?>" class="about-info">
                <div><h2 class="vertical-title ani-delay-2 ani-right"><?php echo $side_title; ?></h2></div>
                <div class="about-detail ani-delay-1 ani-left">
                    <h2 class="horizontal-title"><?php echo $title; ?></h2>
                    <p><?php echo $paragraph; ?></p>
                    <button class="btn-general btn-light" onclick="window.location.href='<?php echo $button['url']; ?>'"><?php echo $button['title']; ?></button>
                </div>
            </div>
            <div class="about-image ani-fade-up">
                <img src="<?php echo $image; ?>">
            </div>
        </div>
    </div>
</section>
