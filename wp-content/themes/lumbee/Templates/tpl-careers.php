<?php
/**
 * Template Name: Careers
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
            $careers_banner_image = get_field('careers_banner_image');
            $careers_title = get_field('careers_title');
            ?>
            <section class="top-banner">
                <div class="banner-img" style="background:url(<?php echo $careers_banner_image; ?>);">
                    <div class="banner-content">
                        <?php if (!empty($careers_title)) { ?>
                            <h1><?php echo $careers_title; ?></h1>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <div class="careers-main text-center">
                <div class="container">
                    <div class="row">
                        <?php
                        $career_solid_career_title = get_field('career_solid_career_title');
                        $career_solid_career_image = get_field('career_solid_career_image');
                        $career_solid_career_link_text = get_field('career_solid_career_link_text');
                        $career_solid_career_link_url = get_field('career_solid_career_link_url');
                        ?>
                        <div class="col-md-12">
                            <?php if (!empty($career_solid_career_title)) { ?>
                                <div class="heading-utitlity"><h2><?php echo $career_solid_career_title; ?></h2></div>
                            <?php } ?>
                            <?php if (!empty($career_solid_career_image)) { ?>
                                <div class="job-search">
                                    <img src="<?php echo $career_solid_career_image; ?>" alt="SearchJob" title="SearchJob">
                                    <?php if (!empty($career_solid_career_link_text)) { ?>
                                        <a href="<?php echo $career_solid_career_link_url; ?>" title="Continue to the applicant portal"><?php echo $career_solid_career_link_text; ?></a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>