<?php
/**
 * Template Name: My Account
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
                $ma_page_banner = get_field('ma_page_banner');
                $ma_title = get_field('ma_title');
                $aac_main_title = get_field('aac_main_title');
                $aac_image = get_field('aac_image');
                $aac_image2 = get_field('aac_image2');
                $aac_image3 = get_field('aac_image3');


                ?>
                <div class="banner-img" style="background:url(<?php echo $ma_page_banner; ?>);">
                    <div class="banner-content">
                        <?php if (!empty($ma_title)) { ?>
                            <h1><?php echo $ma_title; ?></h1>
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
            <div class="myaccount-main text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(!empty($aac_main_title)){ ?>
                            <div class="heading-utitlity"><h2><?php echo $aac_main_title; ?></h2></div>
                            <?php } ?>
                            <?php if(!empty($aac_image)){ ?>
                            <div class="smart-hub"><a href="<?php echo get_field('account_link'); ?>" target="_blank"><img src="<?php echo $aac_image; ?>" alt="SmartHub" title="SmartHub"></a></div>
                            <?php } ?>
                            <p>&nbsp;</p>
                            <?php if(!empty($aac_image2)){ ?>
                            <div class="smart-hub"><a href="<?php echo get_field('account_link2'); ?>" target="_blank"><img src="<?php echo $aac_image2; ?>" alt="" title=""></a></div>
                            <?php } ?>
                            <p>&nbsp;</p>
                            <?php if(!empty($aac_image3)){ ?>
                            <div class="smart-hub"><a href="<?php echo get_field('account_link3'); ?>" target="_blank"><img src="<?php echo $aac_image3; ?>" alt="" title=""></a></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>