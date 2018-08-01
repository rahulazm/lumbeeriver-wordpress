<?php
/**
 * Template Name: BYOT
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
            <?php if (!empty($all_main_title_background_image)) { ?>
                <section class="top-banner new-banner">
                    <div class="banner-img" style="background:url('<?php echo get_template_directory_uri(); ?>/images/BYOT.png');">
                        <div class="overlay"></div>
                        <div class="banner-content">
                            <h1><?php echo $all_pages_title_text; ?></h1>
                        </div>
                    </div>
                </section>
            <?php } ?>
            <section class="byot-content">
                <div class="container">
                    <?php
                    $byot_main_page_title = get_field('byot_main_page_title');
                    $byot_left_image = get_field('byot_left_image');
                    $byot_right_text = get_field('byot_right_text');
                    $byot_message = get_field('byot_message');
                    ?>
                    <?php if (!empty($byot_main_page_title)) { ?>
                        <h2><?php echo $byot_main_page_title; ?></h2>
                    <?php } ?>
                    <div class="byot-content-image">
                        <img src="<?php echo $byot_left_image; ?>" alt="BYOTImg.png" />
                    </div>
                    <div class="byot-content-price">
                        <p><?php echo $byot_right_text; ?></p>
                    </div>
                    <div class="clearfix"></div>
                    <?php the_content(); ?>
                    <h3 style="text-align:center;"><?php echo $byot_message; ?></h3>
                </div>
            </section>
            <section class="byot-content-brown">
                <div class="container">
                    <?php the_field('byot_download_content'); ?>
                    <div class="row brown-image">
                        <?php
                        if (have_rows('download_section_repeater')):
                            while (have_rows('download_section_repeater')) : the_row();
                                ?>
                                <div class="col-md-6 col-sm-6">
                                    <a href="<?php the_sub_field('download_sub_link'); ?>">
                                        <img src="<?php the_sub_field('download_sub_image'); ?>" alt="NestImg.png" />
                                        <span><?php the_sub_field('download_sub_text'); ?></span>
                                    </a>
                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?>
                      </div>
                </div>
            </section>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>