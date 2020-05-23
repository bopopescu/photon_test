<?php get_header('other'); ?>


<section id="about">
    <div class="container">
        <div class="about-content sec-grid">
            <div class="about-info">
                <div class="about-detail ani-delay-1 ani-left">
                    <h2 class="horizontal-title">404 Error</h2>
                    <p>Page Not Found!!</p>
                    <a href="<?php echo home_url(); ?>">
                      <button class="btn-general btn-light">Back to Home page</button>
                    </a>
                </div>
            </div>
            <div class="about-image ani-fade-up">
                <img src="<?php echo get_template_directory_uri(); ?>/img/error.png">
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
