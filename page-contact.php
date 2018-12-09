<?php get_header(); ?>

<div class="content_container">

    <div class="left_content" id="form_box">
        <div class="small_header_container">
            <h1><?php the_field('contact_header'); ?></h1>
            <hr class="small_line">
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

        <?php

        if($_POST['submit']) {

        } else {

        ?>
            <form action="contactform.php" method="post">
                <label for="name">Name:</label>
                <input id="name" type="text" name="Name">
            
                <label for="email">Email:</label>
                <input id="email" type="email" name="Email">
            
                <label for="message">Message:</label>
                <textarea id="message" name="Message"></textarea>
                <button>Send</button>
            </form>
        <?php } ?>

    </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>