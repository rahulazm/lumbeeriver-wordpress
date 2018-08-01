<?php
/**
 * Template Name: Utility Shield
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
                $utility_page_banner = get_field('utility_page_banner');
                $utility_page_title = get_field('utility_page_title');
                ?>
                <div class="banner-img" style="background:url(<?php echo $utility_page_banner; ?>);">
                    <div class="banner-content">
                        <h1><?php echo $utility_page_title; ?></h1>
                    </div>
                </div>
            </section>
            <section class="utility-shield-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 center-block">
                            <div class="heading-utitlity">
                                <?php $utility_page_main_title = get_field('utility_page_main_title'); ?>
                                <h2><?php echo $utility_page_main_title; ?></h2>
                                <?php the_content(); ?>
                            </div>
                            <div class="inner-utlity">
                                <?php 
                                $are_you_title = get_field('are_you_title');
                                $are_you_description = get_field('are_you_description');
                                $utility_shield_content_title = get_field('utility_shield_content_title');
                                $utility_shield_content_description = get_field('utility_shield_content_description');
                                $utility_shield_content_image = get_field('utility_shield_content_image');
                                ?>
                                <h2><?php echo $are_you_title; ?></h2>
                                <?php echo $are_you_description; ?>
                                <p><img src="<?php echo $utility_shield_content_image; ?>" alt="PipeWorker" title="PipeWorker" class="alignright"></p>
                                <h2><?php echo $utility_shield_content_title; ?></h2>

                                <?php echo $utility_shield_content_description; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>