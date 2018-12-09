<?php get_header(); ?>

<div class="content_container">

    <div class="left_content" id="blog_wrapper">
        <ul id="blog_container">

            <!-- the loop -->
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <li>
                    <div class="post_image">
                        <?php 
                            $attr = array(
                                'id' => 'hero_image',
                                );
                                echo get_the_post_thumbnail( $id, 'banner', $attr );
                        ?>
                    </div>

                    <h2><?php the_title(); ?></h2>
                    <hr class="small_line">
                    <p><?php the_field('post_description'); ?></p>
                    <a href="<?php the_permalink(); ?>">
                    <button>Read More</button>
                    </a>
                </li>

            <?php endwhile; ?>

        </ul>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

    </div><!-- Close Left Content -->
hjkhjhjhj
    <?php get_sidebar(); ?>

</div><!-- Close Content Container -->

<?php get_footer(); ?>