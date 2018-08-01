<?php
/**
 * Template Name: Voluteers
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
            $what_our_member_main_title = get_field('what_our_member_main_title');
            $what_member_left_image = get_field('what_member_left_image');
            ?>
            <h2 class="member-heading"><?php echo $what_our_member_main_title; ?></h2>
            <div class="member-volunteer">
                <div class="container-fluid">
                    <div class="col-md-6 volunteer-img">
                        <img src="<?php echo $what_member_left_image; ?>" alt="volunteer-bckgnd.jpg" />
                    </div>
                    <div class="col-md-6 volunteer-content">
                        <ul>
                            <?php
                            if (have_rows('member_volunteers_repeater')):
                                while (have_rows('member_volunteers_repeater')) : the_row();
                                ?>
                                <li><?php the_sub_field('sub_member_text'); ?></li>
                                <?php
                                endwhile;
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="intro-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main_content_about">
                                <?php the_field('member_full_description'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>                 
<?php endif; ?>
<?php get_footer(); ?>