<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title><?php echo bloginfo( 'name' ); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <header>
        <nav class="nav ani-fade-up">
            <div class="container navbar">
                <a href="<?php echo home_url(); ?>" class="logo">PH</a>
                <?php
                wp_nav_menu( array(
                  'container'         => false,
                  'theme_location'    => "my-custom-menu",
              ) ); ?>
                <div class="navbar-toggler">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                </div>
            </div>
        </nav>
    </header>
<script type="text/javascript">

function navMenu() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navList = document.querySelector('.menu');

    if (navbarToggler) {
    navbarToggler.addEventListener('click', function() {
        navList.classList.toggle('nav-active');
        navbarToggler.classList.toggle('toggle');
    });
  }
};

navMenu();


</script>
