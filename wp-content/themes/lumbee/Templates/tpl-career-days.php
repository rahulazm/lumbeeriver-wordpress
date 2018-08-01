<?php
/**
 * Template Name: Career Days
 *
 * @package WordPress
 * @subpackage Theme_name
 * @since Theme_name 1.0
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>            
    <?php while (have_posts()) : the_post(); ?>
        <?php
        $all_main_title_background_image = get_field('all_main_title_background_image');
        $all_pages_title_text = get_field('all_pages_title_text');
        ?>
        <div class="sub-page">
            <?php if (!empty($all_pages_title_text)) { ?>
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
            <?php
            $schedule_speaker_main_text = get_field('schedule_speaker_main_text');
            $schedule_speaker_left_image = get_field('schedule_speaker_left_image');
            $schedule_speaker_name = get_field('schedule_speaker_name');
            $schedule_ticket_phone_number = get_field('schedule_ticket_phone_number');
            $schedule_speker_email_id = get_field('schedule_speker_email_id')
            ?>
            <?php if (!empty($schedule_speaker_main_text)) { ?>
                <h2 class="member-heading"><?php echo $schedule_speaker_main_text; ?></h2>
            <?php } ?>
            <div class="member-volunteer">
                <div class="container-fluid">
                    <div class="col-md-6 volunteer-img">
                        <img src="<?php echo $schedule_speaker_left_image; ?>" alt="speaker-banner.jpg" />
                    </div>
                    <div class="col-md-6">
                        <div class="carrer-days-content">
                            <?php if (!empty($schedule_speaker_name)) { ?>
                                <strong>Contact</strong> 
                                <p><?php echo $schedule_speaker_name; ?></p>
                            <?php } ?>
                            <?php if (!empty($schedule_ticket_phone_number)) { ?>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/images/CallIco.png" alt="CallIco.png" /><?php echo $schedule_ticket_phone_number; ?></p> 
                            <?php } ?>
                            <?php if (!empty($schedule_speker_email_id)) { ?>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/images/EmailIco.png" alt="EmailIco.png" /><a href="mailto:<?php echo $schedule_speker_email_id; ?>"><?php echo $schedule_speker_email_id; ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>                 
<?php endif; ?>
<?php get_footer(); ?>