<?php get_header(); ?>

<div class="content_container clear_fix">
    <?php get_sidebar(); ?>
    <div class="left_content" id="form_box">
        <div class="small_header_container">
            <h1><?php the_field('contact_header'); ?></h1>
            <hr>
        </div>

        <p><strong>This theme allows you to send emails to custom domains, and even add a custom message! Its all very flexible.</strong></p>
        <br>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <br>
        <form action="https://api.formbucket.com/f/c2K3QTQ" method="post">
            <label for="name">Name:</label>
            <input id="name" type="text" name="Name">
        
            <label for="email">Email:</label>
            <input id="email" type="email" name="Email">
        
            <label for="message">Message:</label>
            <textarea id="message" name="Message"></textarea>
            <button>Send</button>
        </form>
    </div>
</div>

<?php get_footer(); ?>