<?php
/**
 * Template Name: Safety Billboard Contest
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
            $all_main_title_background_image = get_field('all_main_title_background_image');
            $all_pages_title_text = get_field('all_pages_title_text');
            ?>
            <?php if (!empty($all_main_title_background_image)) { ?>
                <section class="top-banner new-banner">
                    <div class="banner-img" style="background:url('<?php echo $all_main_title_background_image; ?>');">
                        <div class="overlay"></div>
                        <div class="banner-content">
                            <h1><?php echo $all_pages_title_text; ?></h1>
                        </div>
                    </div>
                </section>
            <?php } ?>
            <div class="intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main_content_about">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="member-volunteer billboard-contest-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="sports-left">
                            <?php
                            the_field('contact_new_left_details');
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="sports-right">
                            <?php the_field('contact_right_right_details'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="safety-contest-image">
                <div class="container">
                    <div class="row">
                        <?php
                        $main_title__safety_billboard_contest_winners = get_field('main_title_new_safety_billboard_contest_winners');
                        ?>
                        <div class="col-md-12">
                            <?php if (!empty($main_title__safety_billboard_contest_winners)) { ?>
                                <h3><?php echo $main_title__safety_billboard_contest_winners; ?></h3>
                            <?php } ?>
                        </div>
                        <?php
                        if (have_rows('safety_billboard_contest_winners_repeater_new')):
                            while (have_rows('safety_billboard_contest_winners_repeater_new')) : the_row();
                                ?>
                                <div class="col-md-6">
                                    <img src="<?php the_sub_field('sub_image_winner_new'); ?>" alt="BullardAmaya.png" />
                                    <p class="title"><?php the_sub_field('sub_title_winner_new'); ?></p>
                                    <p class="sub-detail"><?php the_sub_field('winner_sub_heading_new'); ?></p>
                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?>

                    </div>

                </div>
            </div>
            <div class="guidelines-download">
                <div class="container">
                    <?php
                    if (have_rows('guidline_repeater_new')):
                        while (have_rows('guidline_repeater_new')) : the_row();
                            ?>
                            <div class="col-md-4">
                                <a class="green-guide" style="background: <?php the_sub_field('background_color_code_new'); ?>" href="<?php the_sub_field('guidline_link_new') ?>">
                                    <img src="<?php the_sub_field('guidline_icon_new'); ?>" alt="BillboardIco.png" />
                                    <?php the_sub_field('guidline_text_new'); ?>
                                </a>    
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>                 
<?php endif; ?>
<?php get_footer(); ?>