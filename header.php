<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />

<?php wp_head(); ?>

</head>
<body>

    <!-- Main Nav Bar -->
    <nav>
        <div class="content_container">
            <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                        echo '<img src="'. esc_url( $logo[0] ) .'">';
                } else {
                        echo '<h1 id="logo">Logo</h1>';
            } ?> 

            <?php 
                $args = array(
                    'theme_location' => 'primary'
                );
            ?>

            <?php wp_nav_menu( $args ); ?>
        </div>
    </nav>

<div id="wrapper">

<!-- Add Big Banner Image Support to about, contact & blog pages -->
<?php if(is_page( array ('about', 'contact', 'blog'))) { ?>
    <div class="banner_image">
        <?php 
                $attr = array(
                'id' => 'hero_image',
                );
                echo get_the_post_thumbnail( $id, 'banner', $attr );
            ?>
        <span class="page_title">
            <?php single_post_title(); ?>
        </span>
    </div>
<?php } ?>
