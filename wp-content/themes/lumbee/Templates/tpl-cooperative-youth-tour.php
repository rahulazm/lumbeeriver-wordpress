<?php
/**
 * Template Name: Cooperative Youth Tour
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
            <section class="top-banner">
                <?php
                $cyt_page_banner = get_field('cyt_page_banner');
                $cyt_page_title = get_field('cyt_page_title');
                $cyt_page_title_2 = get_field('cyt_page_title_2');
                $youtube_video_link = get_field('youtube_video_link');
                ?>
                <div class="banner-img" style="background:url(<?php echo $cyt_page_banner; ?>);">
                    <div class="banner-content">
                        <h1><?php echo $cyt_page_title; ?></h1>
                    </div>
                </div>
            </section>
            <div class="video-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if (!empty($cyt_page_title_2)) { ?>
                                <div class="heading-utitlity">
                                    <h2><?php echo $cyt_page_title_2; ?></h2>
                                </div>
                            <?php } ?>
                            <?php if (!empty($youtube_video_link)) { ?>
                                <iframe width="800" height="450" src="<?php echo $youtube_video_link; ?>" frameborder="0" allowfullscreen></iframe>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="scholarship_box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <?php
                            if (have_rows('youth_tour_faq_repeater')):
                                while (have_rows('youth_tour_faq_repeater')) : the_row();
                                    $faq_question = get_sub_field('faq_question');
                                    $faq_answer = get_sub_field('faq_answer');
                                    $faq_class = get_sub_field('youth_tour_position');
                                    if ($faq_class == 'scholarship_left') {
                                        ?>
                                        <div class="scholarship_left">
                                            <h3><?php echo $faq_question; ?></h3>
                                            <p><?php echo $faq_answer; ?></p>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <?php
                            if (have_rows('youth_tour_faq_repeater')):
                                while (have_rows('youth_tour_faq_repeater')) : the_row();
                                    $faq_question = get_sub_field('faq_question');
                                    $faq_answer = get_sub_field('faq_answer');
                                    $faq_class = get_sub_field('youth_tour_position');
                                    if ($faq_class == 'scholarship_right') {
                                        ?>
                                        <div class="scholarship_right">
                                            <h3><?php echo $faq_question; ?></h3>
                                            <p><?php echo $faq_answer; ?></p>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <section class="new_styler">
                <div class="scholarship_rules">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                                <h3><?php echo get_field('rules_main_section_title'); ?></h3>
                                <p><?php echo get_field('rules_new_description'); ?></p>

                                <h3><?php echo get_field('appliying_main_title'); ?></h3>
                                <p><b><?php echo get_field('applaying_description'); ?></b></p>
                                <ul>
                                    <?php
                                    if (have_rows('add_pdf_repeater_applying')):
                                        while (have_rows('add_pdf_repeater_applying')) : the_row();
                                            $pdf_name = get_sub_field('applying_rep_pdf_name');
                                            $pdf_file_path = get_sub_field('applaying_rep_upload_file');
                                            ?>
                                            <li><a href="<?php echo $pdf_file_path; ?>"><?php echo $pdf_name; ?></a></li>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <h2 style="float:left"><?php echo get_field('more_info_section_title'); ?></h2>
                                <p><?php echo get_field('more_info_description'); ?></p>
                                <div class="brochure-main">
                                    <div class="col-md-6 col-sm-6 col-xs-6 brochure">
                                        <a href="javascript:void(0)" title="" style="padding:0px;"><img src="<?php echo get_field('more_information_images'); ?>" alt="Brochure">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>