<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/grid.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/prettyPhoto.css" rel="stylesheet" type="text/css" />

        <?php wp_head(); ?>
        
        <script type="text/javascript">
                $(window).load(function(){
                        $('.slider')._TMS({
                                duration:800,
                                easing:'easeOutQuad',
                                preset:'diagonalFade',
                                pagination:false,
                                slideshow:6000,
                                banners:false,
                                waitBannerAnimation:false,
                                pauseOnHover:true
                        });
                        $("a[data-gal^='prettyVideo']").prettyPhoto({animation_speed:'normal',theme:'facebook',slideshow:false, autoplay_slideshow: false});
                }); 
        </script>		
        <!--[if lt IE 7]>
                <div style=' clear: both; text-align:center; position: relative;'>
                        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                                <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
                        </a>
                </div>
        <![endif]-->
        <!--[if lt IE 9]>
                <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>js/html5.js"></script>
                <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>css/ie.css" type="text/css" media="screen">
        <![endif]-->
    </head>
    <body <?php body_class(); ?> id="page1">
            <div class="extra">
    <!--==============================header=================================-->
                <header>
                    <!--<div class="main">-->
                        <div class="bg-1" id="logo-template">
                            <h1><a href="index.html"></a></h1>
                        </div>
                        <nav>
                           <?php wp_nav_menu('menu')?>
                        </nav>

                    <!--</div>-->
                </header>