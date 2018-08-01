<?php
/**
 * Template Name: About Touchstone
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
            <?php $title = get_field('about_page_title'); ?>
            <?php if (!empty($title)) { ?>
                <section class="top-banner">
                    <div class="banner-img" style="background:url(<?php echo get_field('about_main_title_background_image'); ?>);">
                        <div class="banner-content">
                            <h1><?php echo $title; ?></h1>
                        </div>
                    </div>
                </section>
            <?php } ?>
            <section class="touch_video">
                <?php $youtube_id = get_field('youtube_video_id'); ?>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </section>
            <?php $page_back = get_field('about_topuch_page_background'); ?>
            <section class="about-touchstone" style="background:url(<?php echo $page_back; ?>) no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                            <?php the_content(); ?>
                        </div>
                    </div>

                </div>
            </section>
            <section class="new_layout_about_touch">
                <div class="member_tools_box">
                    <div class="box_content" style="background-image: url(<?php echo get_field('new_left_side_image'); ?>);">
                    </div>
                    <div class="box_content" style="background:#fff">
                        <?php $rep_title = get_field('ec_option_title'); ?>
                        <?php if (!empty($rep_title)) { ?>
                            <h3><?php echo $rep_title; ?></h3>
                        <?php } ?>
                        <div class="text_ul newli">
                            <ul>
                                <?php
                                if (have_rows('ec_add_option_repeater')):
                                    while (have_rows('ec_add_option_repeater')) : the_row();
                                        $option_name = get_sub_field('add_ec_option');
                                        ?>
                                        <li><?php echo $option_name; ?></li>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                            <div class="btn_new_lay">
                                <?php
                                $btn_name = get_field('at_button_text');
                                $btn_link = get_field('at_button_link');
                                ?>
                                <?php if (!empty($btn_name)) { ?>
                                    <div class="btn-wrapper">
                                        <a href="<?php echo $btn_link; ?>" class="default-btn"><?php echo $btn_name; ?></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>