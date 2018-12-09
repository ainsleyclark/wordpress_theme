<?php get_header(); ?>


<div class="banner_image">
    <?php 
            $attr = array(
            'id' => 'hero_image',
            );
            echo get_the_post_thumbnail( '43', 'banner', $attr );
        ?>
    <span class="page_title">
        <?php single_post_title(); ?>
    </span>
</div>

<div class="content_container">

    <div class="left_content" id="blog_wrapper">
        <ul id="blog_container">
            
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
        <div class="paginate_pages">
        <?php echo paginate_links(); ?>
    </div>
    </div><!-- Close Left Content -->

    <?php get_sidebar(); ?>

</div><!-- Close Content Container -->

<?php get_footer(); ?>