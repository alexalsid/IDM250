<?php

/*

Template Name: contact

*/


get_header();

?>

 <main>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/contact.svg">
        <h1>Get In Touch</h1>
        <div class="form-cont">
        <form class="contact">

        <input type="text" name="name" id="name" placeholder="Jane Doe">
        <input type="text" name="email" id="email" placeholder="janedoe@example.com">
        <input type="text" name="subject" id="subject" placeholder="Subject Line">
        <textarea rows="8" cols="50">Your message...</textarea>
        <input type="submit" name="submit" id="submit" value="send">

        </form>

        </div>



    </main>


<?php


get_footer();


?>