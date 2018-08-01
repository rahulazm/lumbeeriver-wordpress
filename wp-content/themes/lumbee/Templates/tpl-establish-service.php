<?php
/**
 * Template Name: Establish Service
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
                <div class="triangle-left"><div class="angle-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/Apply2.png" alt="Apply2"/></div></div>
                <div class="establish_service_top">
                    <div class="container">
                        <div class="row">
                            <?php
                            $need_following_title = get_field('need_following_title');
                            ?>
                            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                                <?php if (!empty($need_following_title)) { ?>
                                    <h2><?php echo $need_following_title; ?></h2>
                                <?php } ?>
                                <div class="establish_service_Information">
                                    <div class="more-about-wrapper_new">
                                        <?php
                                        if (have_rows('information_repeater')):
                                            while (have_rows('information_repeater')) : the_row();
                                                $information_icon = get_sub_field('information_icon');
                                                $information_text = get_sub_field('information_text');
                                                ?>
                                                <div class="comman-row">
                                                    <div class="list-no">
                                                        <div class="list-icon"><img src="<?php echo $information_icon; ?>" alt="Icon" /></div>
                                                        <p><?php echo $information_text; ?></p>
                                                    </div>
                                                </div>
                                                <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="other_important_info">
                <div class="container">
                    <div class="row">
                        <?php
                        $other_information_main_title = get_field('other_information_main_title');
                        ?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php if (!empty($other_information_main_title)) { ?>
                                <h2><?php echo $other_information_main_title; ?></h2>
                            <?php } ?>
                            <ul>
                                <?php
                                if (have_rows('other_important_information_repeater')):
                                    while (have_rows('other_important_information_repeater')) : the_row();
                                        $rep_information_point = get_sub_field('rep_information_point');
                                        ?>
                                        <li><?php echo $rep_information_point; ?>

                                            <?php
                                            if (have_rows('other_information_sub_repeater')):
                                                ?>
                                                <ul>
                                                    <?php
                                                    while (have_rows('other_information_sub_repeater')) : the_row();
                                                        $rep_other_information_sub_point = get_sub_field('rep_other_information_sub_point');
                                                        ?>
                                                        <li><?php echo $rep_other_information_sub_point; ?></li>
                                                        <?php
                                                    endwhile;
                                                    ?>
                                                </ul>
                                                <?php
                                            endif;
                                            ?>
                                        </li>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="residential_service_application">
                <div class="container">
                    <?php
                    $residential_main_title = get_field('residential_main_title');
                    $residential_description = get_field('residential_description');
                    $residential_form_title = get_field('residential_form_title');
                    $residential_short_code = get_field('residential_short_code');
                    ?>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                            <h2><?php echo $residential_main_title; ?></h2>
                            <?php echo $residential_description; ?>
                            <a class="down_arrow" href="javascript:void(0)"><i class="fa fa-caret-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="application_service" id="ap_form">
                <h2><?php echo $residential_form_title; ?></h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="application_service_form">
                                <?php echo do_shortcode($residential_short_code); ?>
                            </div>
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