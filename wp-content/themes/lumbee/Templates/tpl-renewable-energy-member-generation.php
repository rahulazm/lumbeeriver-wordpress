<?php
/**
 * Template Name: Renewable Energy Member Generation
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
            $remg_banner_image = get_field('remg_banner_image');
            $remg_page_title = get_field('remg_page_title');
            ?>
            <section class="top-banner">
                <div class="banner-img" style="background:url(<?php echo $remg_banner_image; ?>);">
                    <div class="banner-content">
                        <?php if (!empty($remg_page_title)) { ?>
                            <h1><?php echo $remg_page_title; ?></h1>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <div class="intro-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11 center-block cf">
                            <?php
                            $remg_trading_title = get_field('remg_trading_title');
                            $remg_description = get_field('remg_description');
                            ?>
                            <div class="heading-utitlity">
                                <?php if (!empty($remg_trading_title)) { ?>
                                    <h2><?php echo $remg_trading_title; ?></h2>
                                <?php } ?>
                                <?php echo $remg_description; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="qualifying-facilities">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11 col-sm-11 center-block col-xs-12 cf">
                            <div class="col-md-6 col-sm-12 facilities cf">
                                <?php
                                $small_qualifying_facilities_heading = get_field('small_qualifying_facilities_heading');
                                $small_qualifying_facilities_message = get_field('small_qualifying_facilities_message');
                                ?>
                                <?php if (!empty($small_qualifying_facilities_heading)) { ?>
                                    <h2><?php echo $small_qualifying_facilities_heading; ?></h2>
                                <?php } ?>
                                <ul>
                                    <?php
                                    if (have_rows('small_qualifying_facilities')):
                                        while (have_rows('small_qualifying_facilities')) : the_row();
                                            $sqf_facility = get_sub_field('sqf_facility');
                                            ?>
                                            <li>- <?php echo $sqf_facility; ?></li>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </ul>
                                <?php if (!empty($small_qualifying_facilities_message)) { ?>
                                    <div class="big-txt-facility"><?php echo $small_qualifying_facilities_message; ?></div>
                                <?php } ?>
                            </div> 
                            <div class="col-md-6 col-sm-12 facilities cf">
                                <?php
                                $large_qualifying_facilities_message = get_field('large_qualifying_facilities_message');
                                $large_qualifying_facilities_heading = get_field('large_qualifying_facilities_heading');
                                ?>
                                <?php if (!empty($large_qualifying_facilities_message)) { ?>
                                    <h2><?php echo $large_qualifying_facilities_message; ?></h2>
                                <?php } ?>
                                <ul>
                                    <?php
                                    if (have_rows('large_qualifying_facilities')):
                                        while (have_rows('large_qualifying_facilities')) : the_row();
                                            $lqf_facility = get_sub_field('lqf_facility');
                                            ?>
                                            <li>- <?php echo $lqf_facility; ?></li>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </ul>
                                <?php if (!empty($large_qualifying_facilities_heading)) { ?>
                                    <div class="big-txt-facility"><?php echo $large_qualifying_facilities_heading; ?></div>
                                <?php } ?>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

        </div> 
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>