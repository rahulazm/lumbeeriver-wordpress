<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>
            <?php
            global $page, $paged;

            wp_title('-', true, 'right');

            bloginfo('name');

            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";

            if ($paged >= 2 || $page >= 2)
                echo ' | ' . sprintf(__('Page %s', 'mytheme'), max($paged, $page));
            ?>
        </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" >
        <meta name="handheldfriendly" content="true">
        <meta name="MobileOptimized" content="width">
        <meta name="description" content="Lumbee River Emc">
        <meta name="keywords" content="Lumbee River Emc">
        <link rel="icon" type="image/png"  href="<?php echo get_field('favicon_icon', 'option'); ?>"/>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <?php
        wp_enqueue_script('jquery');
        wp_head();
        ?>
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body <?php body_class(); ?>>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116178278-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag()

        {dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-116178278-1');
        </script>
        
        <!-- Header -->
        <header>
            <!-- Static navbar -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-contact pull-left">
                                <a href="tel:<?php echo get_field('contact_no', 'option'); ?>"><em class="fa fa-phone"></em><?php echo get_field('contact_no', 'option'); ?></a>
                            </div>
                            <div class="header-right pull-right">
                                <div class="social-icon">
                                    <ul>
                                        <?php
                                        if (have_rows('social_media_repeter', 'option')):
                                            while (have_rows('social_media_repeter', 'option')) : the_row();
                                                $s_class = get_sub_field('media_icon_class', 'option');
                                                $s_link = get_sub_field('social_media_link', 'option');
                                                ?>
                                                <li><a href="<?php echo $s_link; ?>" target="_blank"><em class="<?php echo $s_class ?>"></em></a></li>
                                                <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default  bootsnav on">
                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><em class="fa fa-search"></em></span>
                            <input title="Search" class="form-control" placeholder="Search" type="text">
                            <span class="input-group-addon close-search"><em class="fa fa-times"></em></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->
                <div class="container">            
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                            <em class="fa fa-bars"></em>
                        </button>
                        <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img longdesc="Lumbee Main Logo" alt="logo" src="<?php echo get_field('header_logo', 'option'); ?>" class="Lumbee River Emc"></a>
                    </div>
                    <!-- End Header Navigation -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse collapse" id="navbar-menu" aria-expanded="true" style="">
                        <div class="header-search hidden-sm hidden-xs">
                            <form action="<?php echo get_site_url(); ?>/" method="get">
                                <input type="text" title="search" name="s" placeholder="Search"/>
                                <button type="submit"><em class="fa fa-search"></em></button>
                            </form>
                        </div>
                        <?php wp_nav_menu(array('theme_location' => 'main_navigation', 'menu_class' => 'nav navbar-nav navbar-right', 'container' => false)); ?>
                    </div><!-- /.navbar-collapse -->
                </div>   
            </nav>
        </header>
        <!--Header end-->