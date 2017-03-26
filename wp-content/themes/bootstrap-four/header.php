<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php get_the_title()?></title>
    <meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="container">
    <div class="col-md-1 col-xs-2 col-sm-1">
        <a href="<?php get_template_directory_uri(); ?>" class="navbar-brand navbar-light bg-faded navbar-left"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"/></a>
    </div>
    <div class="navbar-collapse navHeaderCollapse text-uppercase text-wrap">
        <nav role="navigation">

            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
        </nav>

    </div>
</div>

