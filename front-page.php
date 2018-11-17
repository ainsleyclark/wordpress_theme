<?php get_header(); ?>


<div id="header">
    <!-- Home Hero Image -->
    <?php 
        $attr = array(
        'id' => 'hero_image',
        );
        echo get_the_post_thumbnail( $id, 'banner', $attr );
    ?>
    <!-- Header Wrapper for Text -->
    <div id="header_wrapper">
        <h1><?php bloginfo('name'); ?></h1>
        <hr>
        <h2><?php bloginfo('description'); ?></h2>
        <button id="learnmore">Get Started</button>
    </div>
</div>

<div id="features_container">
    <?php
        // vars
    $features = get_field('home_key_features');	
    if( $features ): ?>
            <div class="header_container">
                <h1> <?php echo $features['title']; ?> </h1>
                <h2> <?php echo $features['sub_title']; ?> </h2>
                <div>
                    <hr>
                </div>
            </div>

            <!-- Left Box -->
            <div class="home_box">
                <div class="feature_icon">
                    <img src="<?php echo $features['sub_heading_1_picture']; ?>" alt="<?php echo $features['sub_heading_1_picture']; ?>" />
                </div>
                <h1> <?php echo $features['sub_heading_1']; ?> </h1>
                <p> <?php echo $features['sub_heading_1_text']; ?> </p>
            </div>

            <!-- Middle Box -->
            <div class="home_box">
                <div class="feature_icon">
                    <img src="<?php echo $features['sub_heading_2_picture']; ?>" alt="<?php echo $features['sub_heading_1_picture']; ?>" />
                </div>
                <h1> <?php echo $features['sub_heading_2']; ?> </h1>
                <p> <?php echo $features['sub_heading_2_text']; ?> </p>
            </div>

            <!-- Right Box -->
            <div class="home_box">
                <div class="feature_icon">
                    <img src="<?php echo $features['sub_heading_3_picture']; ?>" alt="<?php echo $features['sub_heading_1_picture']; ?>" />
                </div>
                <h1> <?php echo $features['sub_heading_3']; ?> </h1>
                <p> <?php echo $features['sub_heading_3_text']; ?> </p>
            </div>

    <?php endif; ?>
</div>

<div class="banner_image">
<?php
        // vars
        $banner = get_field('home_banner_image');	

        if( $banner ): ?>
            <img src="<?php echo $banner['banner_background']; ?>" alt="<?php echo $banner['banner_background']; ?>" />
            <h1> <?php echo $banner['title']; ?> </h1>
            <h2> <?php echo $banner['sub_title']; ?> </h2>
<?php endif; ?>

</div>

<div class="main_content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>