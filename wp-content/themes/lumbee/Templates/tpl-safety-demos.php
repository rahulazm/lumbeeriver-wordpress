<?php
/**
 * Template Name: Safety Demos
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
            <div class="safety-headline">
                <div class="main_content_about">
                    <?php $safety_main_title = get_field('safety_main_title'); ?>
                    <h2 class="member-heading"><?php echo $safety_main_title; ?></h2>
                </div>
            </div>
            <div class="safety-content">
                <div class="container-fluid">
                    <?php
                    if (have_rows('sub_add_safety_demonstration_repeater')):
                        $i = 0;
                        while (have_rows('sub_add_safety_demonstration_repeater')) : the_row();
                            $sub_safety_demonstration_images = get_sub_field('sub_safety_demonstration_images');
                            $sub_safety_demonstration_description = get_sub_field('sub_safety_demonstration_description');
                            if ($i % 2 == 0):
                                ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="safety-demos-left-image">
                                            <img src="<?php echo $sub_safety_demonstration_images; ?>" alt="SafetyDemo1.png" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="safety-demos-left-content">
                                            <?php echo $sub_safety_demonstration_description; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            else:
                                ?>
                                <div class="row">
                                    <div class="col-md-6 visible-sm visible-xs">
                                        <div class="safety-demos-right-image">
                                            <img src="<?php echo $sub_safety_demonstration_images; ?>" alt="SafetyDemo2.png" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="safety-demos-right-content">   
                                            <?php echo $sub_safety_demonstration_description; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 hidden-sm hidden-xs">
                                        <div class="safety-demos-right-image">
                                            <img src="<?php echo $sub_safety_demonstration_images; ?>" alt="SafetyDemo2.png" />
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endif;
                            $i++;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="safety-contact-content">
                <?php the_field('safety_description'); ?>
            </div>
        </div>
    <?php endwhile; ?>                 
<?php endif; ?>
<?php get_footer(); ?>