<?php get_header(); ?>

<div class="content_container clear_fix">
    <?php get_sidebar(); ?>
    <div class="left_content" >
        <div class="small_header_container">
            <h1><?php the_field('about_header'); ?></h1>
            <hr>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>