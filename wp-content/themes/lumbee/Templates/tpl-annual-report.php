<?php
/**
 * Template Name: Annual Report
 *
 * @package WordPress
 * @subpackage Theme_name
 * @since Theme_name 1.0
 */
?>
<?php get_header(); ?>
<div class="sub-page">
    <?php if (have_posts()) : ?>            
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $all_main_title_background_image = get_field('all_main_title_background_image');
            $all_pages_title_text = get_field('all_pages_title_text');
            ?>
            <?php if (!empty($all_main_title_background_image)) { ?>
                <section class="top-banner new-banner">
                    <div class="banner-img" style="background:url('<?php echo $all_main_title_background_image; ?>');">
                        <div class="overlay"></div>
                        <div class="banner-content">
                            <?php if (!empty($all_pages_title_text)) { ?>
                                <h1><?php echo $all_pages_title_text; ?></h1>
                            <?php } ?>
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
            <div class="reports-list">
                <div class="container">
                    <?php
                    if (have_rows('report_download_repeater')):
                        ?>
                        <div class="row">
                            <?php
                            while (have_rows('report_download_repeater')) : the_row();
                                ?>
                                <div class="col-md-3 col-sm-6 col-xs-12 min_height">
                                    <div class="report-image">
                                        <img src="<?php the_sub_field('sub_image_download_report'); ?>" alt="2015.png" />
                                        <div class="overlay">
                                            <a href="<?php the_sub_field('download_report_file'); ?>" download>
                                                <div class="image-cover">
                                                    <span>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/download.png" alt="download.png" />
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="report-title">
                                        <?php the_sub_field('sub_download_title_report'); ?>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            ?>
                        </div>
                        <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>