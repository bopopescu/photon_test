<?php

// Load Variables
$background = get_field('background');
$form = get_field('form');
$title = get_field('title');
$name = get_field('name');
$email = get_field('email');
$message = get_field('message');
$button = get_field('button');

?>

<style>

  section#contact{
    background: linear-gradient(0deg, rgba(0,0,0, 0.7), rgba(0,0,0, 0.7)), url("<?php echo $background; ?>");
    background-size: cover;
    background-attachment: fixed;
  }

</style>

<section id="contact">
    <div class="container">
        <div class="contact-content ani-bottom">
            <h2><?php echo $title; ?></h2>
            <form name="contactform" method="POST" action="/template_parts/blocks/send_form_email.php">
                <input type="text" class="name" name="first_name" maxlength="50" size="30" placeholder="<?php echo $name; ?>">
                <input type="email" class="email" name="email" maxlength="80" size="30" placeholder="<?php echo $email; ?>">
                <textarea class="message" name="comments" maxlength="1000" cols="25" rows="6" placeholder="<?php echo $message; ?>"></textarea>
                <button type="submit"class="btn-general btn-light"><?php echo $button; ?></button>
            </form>
        </div>
    </div>
</section>
