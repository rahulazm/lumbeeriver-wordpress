<?php
/**
 * Template Name: Scholarships & Grants
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
            $sg_page_banner = get_field('sg_page_banner');
            $sg_page_title = get_field('sg_page_title');
            ?>
            <section class="top-banner">
                <div class="banner-img" style="background:url(<?php echo $sg_page_banner; ?>);">
                    <div class="banner-content">
                        <h1><?php echo $sg_page_title; ?></h1>
                    </div>
                </div>
            </section>
            <div class="intro scholarships_grants_intro">
                <div class="container">
                    <div class="row">
                        <?php
                        $sg_main_title = get_field('sg_main_title');
                        $sg_description = get_field('sg_description');
                        ?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="heading-utitlity">
                                <h2><?php echo $sg_main_title; ?></h2>
                                <p><?php echo $sg_description; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="scholarship_box">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">

                                <div class="scholarship_left">
                                    <?php
                                    if (have_rows('program_left_side_repeater')):
                                        while (have_rows('program_left_side_repeater')) : the_row();
                                            $rep_progrma_title = get_sub_field('rep_progrma_title');
                                            $rep_program_description = get_sub_field('rep_program_description');
                                            ?>
                                            <h3><?php echo $rep_progrma_title; ?></h3>
                                            <p><?php echo $rep_program_description; ?></p>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="scholarship_right">
                                    <?php
                                    if (have_rows('program_right_side_repeater')):
                                        while (have_rows('program_right_side_repeater')) : the_row();
                                            $rep_right_progrma_title = get_sub_field('rep_right_progrma_title');
                                            $rep_right_program_description = get_sub_field('rep_right_program_description');
                                            ?>
                                            <h3><?php echo $rep_right_progrma_title; ?></h3>
                                            <p><?php echo $rep_right_program_description; ?></p>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="scholarship_rules">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?php
                                $rules_title = get_field('rules_title');
                                $rules_description = get_field('rules_description');
                                ?>
                                <h3><?php echo $rules_title; ?></h3>
                                <?php echo $rules_description; ?>


                                <?php
                                $applying_title = get_field('applying_title');
                                $applying_description = get_field('applying_description');
                                ?>
                                <h3><?php echo $applying_title; ?></h3>
                                <p><b><?php echo $applying_description; ?></b></p>
                                <ul>
                                    <?php
                                    if (have_rows('applying_repeater')):
                                        while (have_rows('applying_repeater')) : the_row();
                                            $applaying_pdf_file = get_sub_field('applaying_pdf_file');
                                            $appliying_pdf_file_name = get_sub_field('appliying_pdf_file_name');
                                            ?>
                                            <li><a href="<?php echo $applaying_pdf_file; ?>"><?php echo $appliying_pdf_file_name; ?></a></li>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit-application">
                    <div class="container">
                        <div class="row">
                            <?php
                            $submit_main_title = get_field('submit_main_title');
                            $submit_mail_to = get_field('submit_mail_to');
                            $submit_email_to = get_field('submit_email_to');
                            ?>
                            <div class="col-md-10 center-block">
                                <h2><?php echo $submit_main_title; ?></h2>
                                <div class="col-md-6 col-sm-6 mailto">
                                    <h3>Mail to: </h3>
                                    <?php echo $submit_mail_to; ?>
                                </div>
                                <div class="col-md-6 col-sm-6 emailto">
                                    <h3>Email to:</h3>

                                    <a href="mailto:april.<?php echo $submit_email_to; ?>" title="Email Us"><?php echo $submit_email_to; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                $mi_main_title = get_field('mi_main_title');
                                $mi_description = geT_field('mi_description');
                                ?>
                                <h2><?php echo $mi_main_title; ?></h2>
                                <?php echo $mi_description; ?>
                                <div class="brochure-main">
                                    <?php
                                    if (have_rows('brochure_repeater')):
                                        while (have_rows('brochure_repeater')) : the_row();
                                            $rep_brochure_image = get_sub_field('rep_brochure_image');
                                            $rep_brochure_title = get_sub_field('rep_brochure_title');
                                            $rep_brochure_link = get_sub_field('rep_brochure_link');
                                            ?>
                                            <div class="col-md-3 col-sm-4 col-xs-6 brochure">
                                                <a href="<?php echo $rep_brochure_link; ?>" title=""><img src="<?php echo $rep_brochure_image; ?>" alt="Brochure" alt="Brochure">
                                                    <span><?php echo $rep_brochure_title; ?></span>
                                                </a>
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
        <?php endwhile; ?>                 

    <?php endif; ?>
    <?php get_footer(); ?>