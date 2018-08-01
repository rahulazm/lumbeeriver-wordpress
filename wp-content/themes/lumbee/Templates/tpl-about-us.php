<?php
/**
 * Template Name: About Us
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
            $about_page_banner = get_field('about_page_banner');
            $about_page_title = get_field('about_page_title');
            ?>
            <section class="top-banner">
                <div class="banner-img" style="background:url(<?php echo $about_page_banner; ?>);">
                    <div class="banner-content">
                        <?php if (!empty($about_page_title)) { ?>
                            <h1><?php echo $about_page_title; ?></h1>
                        <?php } ?>
                    </div>
                </div>
            </section>
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
            <section class="mission grey-bg">
                <div class="container">
                    <div class="row">
                        <?php
                        $ms_heading = get_field('ms_heading');
                        $ms_description = get_field('ms_description');
                        $ms_slogan = get_field('ms_slogan');
                        ?>
                        <div class="col-md-12">
                            <div class="main_content_about">
                                <?php if (!empty($ms_heading)) { ?>
                                    <h2><?php echo $ms_heading; ?></h2>
                                <?php } ?>
                                <?php if (!empty($ms_description)) { ?>
                                    <p><?php echo $ms_description; ?></p>
                                <?php } ?>
                                <?php if (!empty($ms_slogan)) { ?>
                                    <h3><?php echo $ms_slogan; ?></h3>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="numbers">
                <div class="container">
                    <div class="row">
                        <?php
                        $about_facts_section_title = get_field('about_facts_section_title');
                        ?>
                        <?php if (!empty($about_facts_section_title)) { ?>
                            <h2><?php echo $about_facts_section_title; ?></h2>
                        <?php } ?>
                        <div class="numbers-wapper">
                            <?php
                            if (have_rows('lumbee_river_facts_repeater')):
                                while (have_rows('lumbee_river_facts_repeater')) : the_row();
                                    $about_rep_num_title = get_sub_field('about_rep_num_title');
                                    $about_rep_box_number = get_sub_field('about_rep_box_number');
                                    ?>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="title-numbers">
                                            <?php echo $about_rep_num_title; ?>
                                        </div>
                                        <div class="numbers-row">
                                            <span  class="counter"><?php echo $about_rep_box_number; ?></span>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="grey-bg more-about-us">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $about_more_about_us_title = get_field('about_more_about_us_title');
                            if (!empty($about_more_about_us_title)) {
                                ?>
                                <h2>More About Us</h2>
                            <?php } ?>
                            <div class="more-about-wrapper">
                                <?php
                                if (have_rows('about_more_about_us_repeater')):
                                    $i = 1;
                                    while (have_rows('about_more_about_us_repeater')) : the_row();
                                        $about_more_text = get_sub_field('about_more_text');
                                        ?>
                                        <div class="comman-row">
                                            <div class="list-no">
                                                <div class="list-icon"><?php echo $i; ?></div>
                                                <p><?php echo $about_more_text; ?></p>
                                            </div>
                                        </div>
                                        <?php
                                        $i++;
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="membership">
                <div class="container">
                    <div class="row">
                        <?php $about_membership_organizations_title = get_field('about_membership_organizations_title'); ?>
                        <?php if (!empty($about_membership_organizations_title)) { ?>
                            <h2><?php echo $about_membership_organizations_title; ?></h2>
                        <?php } ?>
                        <div class="membership-wrapper">
                            <?php
                            if (have_rows('about_membership_organizations_repeater')):
                                while (have_rows('about_membership_organizations_repeater')) : the_row();
                                    $about__rep_membership_organizations_icon = get_sub_field('about__rep_membership_organizations_icon');
                                    $about_rep_membership_organizations_title = get_sub_field('about_rep_membership_organizations_title');
                                    $about_rep_membership_organizations_description = get_sub_field('about_rep_membership_organizations_description');
                                    ?>
                                    <div class="comman-row">
                                        <div class="member-icon">
                                            <img src="<?php echo $about__rep_membership_organizations_icon; ?>" alt="NCEC2"/>
                                        </div>
                                        <div class="member-detail">
                                            <h3><?php echo $about_rep_membership_organizations_title; ?></h3>
                                            <p><?php echo $about_rep_membership_organizations_description; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 col-md-offset-2 new_text">
                            <span class="border_bottom"></span>
                            <p>                                
                               <?php echo get_field('about_extra_description'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>