<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
	</header><!-- #masthead -->
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                <h1>
                    <?php
                    if(get_theme_mod( 'header_banner_title_setting' )){
                        echo get_theme_mod( 'header_banner_title_setting' );
                    }else{
                        echo 'NPO를 위한 테마입니다.';
                    }
                    ?>
                </h1>
                <p>
                    <?php
                    if(get_theme_mod( 'header_banner_tagline_setting' )){
                        echo get_theme_mod( 'header_banner_tagline_setting' );
                    }else{
                        echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                    }
                    ?>
                </p>
                <p>
                    <?php
                    if(get_theme_mod( 'header_banner_body_second' )){
                        echo get_theme_mod( 'header_banner_body_second' );
                    }else{
                        echo esc_html__('테마의 두 번쨰 본문이 설정되지 않았습니다.','wp-bootstrap-starter');
                    }
                    ?>
                    <?php
                        if(get_theme_mod( 'onepage_title' )){
                            echo get_theme_mod( 'onepage_title' );
                        }else{
                            echo esc_html__('원페이지 타이틀이 설정되지 않았습니다.','wp-bootstrap-starter');
                        }
                    ?>
                </p>
                <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div>
    <?php endif; ?>
    <!-- <div class="container">
        <div class="jumbotron bg-white">
            <h1 class="display-4">
                <?php
                    if(get_theme_mod( 'onepage_title' )){
                        echo get_theme_mod( 'onepage_title' );
                    }else{
                        echo esc_html__('점보트론 타이틀이 설정되지 않았습니다.','wp-bootstrap-starter');
                    }
                ?>
            </h1>
            <p class="lead">
                <?php
                    if(get_theme_mod( 'onepage_body' )){
                        echo get_theme_mod( 'onepage_body');
                    }else{
                        echo esc_html__('점보트론 바디가 작성되지 않았습니다.', 'wp-bootstrap-starter');
                    }
                ?>
            </p>
            <hr class="my-4">
            <p>
                <?php
                    if(get_theme_mod( 'onepage_body2' )){
                        echo get_theme_mod( 'onepage_body2');
                    }else{
                        echo esc_html__('점보트론 바디2가 작성되지 않았습니다.', 'wp-bootstrap-starter');
                    }
                ?>
            </p>
            <p class="lead">
                <?php
                    if(get_theme_mod( 'onepage_link' )){
                        $jLink = get_theme_mod( 'onepage_link');
                    }else{
                        $jLink = "http://collectivecollege.net";
                    }
                ?>
                <a class="btn btn-primary btn-lg" href="<?php echo $jLink ?>" role="button">더 보기</a>
            </p>
        </div>
    </div> -->
        <?php if( basename( get_page_template()) != 'blank-page-npo.php'): ?>
            <div id="content" class="site-content">
                <div class="container">
                    <div class="row">
                    <?php endif; ?>
                <?php endif; ?>
