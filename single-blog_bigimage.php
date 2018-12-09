<?php
/*
Template Name: Featured Image Thumbnail Post
Template Post Type: post
*/
?>  
<?php get_header(); ?>

    <div class="banner_image">

        <?php 
            $attr = array(
                'id' => 'hero_image',
                );
                echo get_the_post_thumbnail( '43', 'banner', '$attr ');
        ?>
        <span class="page_title">
            Blog
        </span>
    </div>

<div class="content_container clear_fix">
    <?php get_sidebar(); ?>
    <div class="left_content" id="blog_post_wrapper">
        <div class="featured_blog_image">
            <?php 
                $attr = array(
                    'id' => 'hero_image',
                    );
                    echo get_the_post_thumbnail( $id, 'banner', $attr );
            ?>
        </div>
        <div class="blog_post_content">
            <h2><?php the_title(); ?></h2>
            <hr class="small_line">
            
            <p><?php the_time(); ?></p>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>

        </div>
    </div>

            <?php
        //Get only the approved comments 
        $args = array(
            'status' => 'approve'
        );
        
        // The comment Query
        $comments_query = new WP_Comment_Query;
        $comments = $comments_query->query( $args );
        
        // Comment Loop
        if ( $comments ) {
            foreach ( $comments as $comment ) {
                echo '<p>' . $comment->comment_content . '</p>';
            }
        } else {
            echo 'No comments found.';
        }
        ?>
</div>
<?php get_footer(); ?>