<?php
/**
 * Template Name: Enargy Service Kit
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
            $page_banner = get_field('esk_banner_image');
            $esk_title = get_field('esk_title');
            ?>
            <section class="top-banner">
                <div class="banner-img" style="background:url(<?php echo $page_banner; ?>);">
                    <div class="banner-content">
                        <?php if (!empty($esk_title)) { ?>
                            <h1><?php echo $esk_title; ?></h1>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <div class="intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="energy-kit-intro cf">
                                <?php the_content(); ?>
                            </div>
                            <div class="enrgy-kit-instrument cf">
                                <?php
                                if (have_rows('saving_kit_repeater')):
                                    while (have_rows('saving_kit_repeater')) : the_row();
                                        $esk_rep_icon = get_sub_field('esk_rep_icon');
                                        $esk_rep_title = get_sub_field('esk_rep_title');
                                        $esk_rep_short_intro = get_sub_field('esk_rep_short_intro');
                                        ?>
                                        <div class="kit-row">
                                            <div class="col-md-2 col-sm-3 col-xs-12 kit-img">
                                                <img src="<?php echo $esk_rep_icon; ?>" alt="WaterHeaterJacket" />
                                            </div>
                                            <div class="col-md-10 col-sm-9 col-xs-12 pull-right kit-info">
                                                <h2><?php echo $esk_rep_title; ?></h2>
                                                <p><?php echo $esk_rep_short_intro; ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>