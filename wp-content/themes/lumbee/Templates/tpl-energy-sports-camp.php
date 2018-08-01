<?php
/**
 * Template Name: Energy Sports Camps
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
            <div class="sports-content">
                <div class="container">
                    <?php $camp_image = get_field('camp_image'); ?>
                    <?php if (!empty($camp_image)) { ?>
                        <img src="<?php echo $camp_image; ?>" alt="SportsCampsLogo.png" />
                    <?php } ?>
                    <?php the_content(); ?> 
                </div>
            </div>
            <div class="sports-rules">
                <div class="container">
                    <?php
                    $rules_title = get_field('rules_title');
                    ?>
                    <?php if (!empty($rules_title)) { ?>
                        <h2><?php echo $rules_title; ?></h2>
                    <?php } ?>
                    <ul>
                        <?php
                        if (have_rows('add_rules_repeater')):
                            while (have_rows('add_rules_repeater')) : the_row();
                                ?><li><?php the_sub_field('sub_add_rules'); ?></li><?php
                            endwhile;
                        endif;
                        ?>
                    </ul>

                </div>
            </div>
            <div class="member-volunteer">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        $camp_title = get_field('2017_camp_title');
                        $left_images = get_field('2017_left_images');
                        $camp_dates = get_field('2017_camp_dates');
                        ?>
                        <div class="col-md-6 volunteer-img">
                            <img src="<?php echo $left_images; ?>" alt="campdatesImg.png" />
                        </div>
                        <div class="col-md-6 volunteer-content">
                            <div class="camp-dates">
                                <?php if (!empty($camp_title)) { ?>
                                    <h3><?php echo $camp_title; ?></h3>
                                <?php } ?>
                                <?php echo $camp_dates; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sports-documents">
                <?php $application_deadline_title = get_field('application_deadline_title'); ?>
                <?php if (!empty($application_deadline_title)) { ?>
                    <h3><?php echo $application_deadline_title; ?></h3>
                <?php } ?>
                <div class="container-fluid documents-div">
                    <div class="row">
                        <?php
                        if (have_rows('scholarship_applications_repeter')):
                            while (have_rows('scholarship_applications_repeter')) : the_row();
                                ?>
                                <div class="col-md-6 col-sm-6 document-download-link">
                                    <a href="<?php the_sub_field('scholarship_applications_link') ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/applicationIco.png" alt="applicationIco.png" />
                                        <?php the_sub_field('scholarship_applications_title') ?>
                                    </a>
                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="member-volunteer">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="sports-left">
                            <?php the_field('got_left_content'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="sports-right">
                            <?php
                            $got_main_title = get_field('got_main_title');
                            $got_name = get_field('got_name');
                            $got_phone_number = get_field('got_phone_number');
                            $got_email_id = get_field('got_email_id');
                            ?>
                            <?php if (!empty($got_main_title)) { ?>
                                <h3><?php echo $got_main_title; ?></h3>
                            <?php } ?>
                            <?php if (!empty($got_name)) { ?>
                                <strong>Contact</strong> 
                                <p><?php echo $got_name; ?></p>
                            <?php } ?>
                            <?php if (!empty($got_phone_number)) { ?>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/images/CallIco.png" alt="CallIco.png" /><?php echo $got_phone_number; ?></p> 
                            <?php } ?>
                            <?php if (!empty($got_email_id)) { ?>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/images/EmailIco.png" alt="EmailIco.png" /><a href="mailto:<?php echo $got_email_id; ?>"><?php echo $got_email_id; ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sports-info-link">
                <?php
                $visit_main_title = get_field('visit_main_title');
                $visit_link = get_field('visit_link');
                $visit_text = get_field('visit_text');
                ?>
                <?php if (!empty($visit_main_title)) { ?>
                    <h3><?php echo $visit_main_title; ?></h3>
                <?php } ?>
                <?php if (!empty($visit_text)) { ?>
                    <a href="<?php echo $visit_link; ?>"><?php echo $visit_text; ?></a>
                <?php } ?>
            </div>
        </div>
    <?php endwhile; ?>                 
<?php endif; ?>
<?php get_footer(); ?>