<?php
/**
 * Template Name: Capital Cradit
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
            $capital_cradit_page_banner = get_field('capital_cradit_page_banner');
            $capital_cradit_page_title = get_field('capital_cradit_page_title');
            $capital_cradit_page_content_title = get_field('capital_cradit_page_content_title');
            ?>
            <section class="top-banner">
                <div class="banner-img" style="background:url(<?php echo $capital_cradit_page_banner; ?>);">
                    <div class="banner-content">
                        <h1><?php echo $capital_cradit_page_title; ?></h1>
                    </div>
                </div>
            </section>
            <div class="intro capital-credit-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="heading-utitlity">
                                <h2><?php echo $capital_cradit_page_content_title; ?></h2>
                                <?php the_content(); ?>
                            </div>
                            <div class="capital-credit-main">
                                <?php
                                if (have_rows('capital_credits_repeater')):
                                    $i = 0;
                                    while (have_rows('capital_credits_repeater')) : the_row();
                                        $capital_image = get_sub_field('capital_image');
                                        $capital_title = get_sub_field('capital_title');
                                        $capital_description = get_sub_field('capital_description');
                                        if (($i % 2) == 0):
                                            ?>
                                            <div class="row-capital-credit">
                                                <div class="col-md-6 col-sm-6 capital-img equal-hg">
                                                    <img src="<?php echo $capital_image; ?>" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 capital-info">
                                                    <h2><?php echo $capital_title; ?></h2>
                                                    <p> <?php echo $capital_description; ?></p>
                                                </div>
                                            </div>
                                            <?php
                                        else :
                                            ?>
                                            <div class="row-capital-credit">
                                                <div class="col-md-6 col-sm-6 capital-img equal-hg pull-right">
                                                    <img src="<?php echo $capital_image; ?>" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 capital-info">
                                                    <h2><?php echo $capital_title; ?></h2>
                                                    <p><?php echo $capital_description; ?></p>
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
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>