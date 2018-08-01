<?php
/**
 * Template Name: Report Outages Service
 *
 * @package WordPress
 * @subpackage Theme_name
 * @since Theme_name 1.0
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>            

    <?php while (have_posts()) : the_post(); ?>
        <div class="sub-page">
            <?php
            $establish_page_banner = get_field('establish_page_banner');
            $establish_page_title = get_field('establish_page_title');
            $form_title=get_field('form_title');
            $short_code=get_field('short_code');

            ?>
            <section class="top-banner establish_service_banner">
                <div class="banner-img" style="background:url(<?php echo $establish_page_banner; ?>);">
                    <div class="banner-content">
                        <h1><?php echo $establish_page_title; ?></h1>
                    </div>
                </div>
            </section>
            <div class="establish_service_content">
                <div class="intro establish_service_intro">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="triangle-left"><div class="angle-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/Apply2.png" alt="Apply2"/></div>
                </div>

                <div class="application_service" id="ap_form">
                <h2><?php echo $form_title; ?></h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="application_service_form">
                                <?php echo do_shortcode($short_code); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            
    <?php endwhile; ?>                 

<?php endif; ?>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

    });

    jQuery(".down_arrow").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery("#ap_form").offset().top
        }, 1500);
    });


</script>
<?php get_footer(); ?>