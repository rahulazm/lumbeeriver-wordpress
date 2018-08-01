<?php
/**
 * Template Name: Rebate Programs
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
            $rebate_page_title = get_field('rebate_page_title');
            $rebate_page_banner = get_field('rebate_page_banner');
            ?>
            <section class="top-banner">
                <div class="banner-img" style="background:url(<?php echo $rebate_page_banner; ?>);">
                    <div class="banner-content">
                        <h1><?php echo $rebate_page_title; ?></h1>
                    </div>
                </div>
            </section>
            <div class="intro-sec renewable_programs_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-sm-12 center-block cf">
                            <div class="heading-utitlity">
                                <?php the_content(); ?>
                                <span class="line_bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="renewable_programs_detail">
                            <div class="renewable_programs_text">
                                <?php $rebates_program_center_text = get_field('rebates_program_center_text'); ?>
                                <?php echo $rebates_program_center_text; ?>
                            </div>
                            <?php
                            if (have_rows('rebates_program_repeater')):
                                $i=1;
                                while (have_rows('rebates_program_repeater')) : the_row();
                                    $rebate_programs_text = get_sub_field('rebate_programs_text');
                                    $rebates_program_icon = get_sub_field('rebates_program_icon');
                                    ?>
                                    <div class="renewable_programs_box<?php echo $i; ?>">
                                        <img src="<?php echo $rebates_program_icon; ?>" alt="Fridge" />
                                        <h3><?php echo $rebate_programs_text; ?></h3>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                            endif;
                            ?>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>