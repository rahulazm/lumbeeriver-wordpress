<?php
/**
 * Template Name: What is Co-Op
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
            <section class="main-title">
                <div class="container">
                    <?php
                    $what_page_title = get_field('what_page_title');
                    ?>
                    <?php if (!empty($what_page_title)) { ?>
                        <div class="row">
                            <div class="col-md-12">
                                <h1><?php echo $what_page_title; ?></h1>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
            <?php $what_youtube_video_link = get_field('what_youtube_video_link'); ?>
            <div class="co-operatives">
                <div class="triangle-right"><div class="video-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/play-btn.png" alt="play video"/></div></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <iframe width="100%" src="<?php echo $what_youtube_video_link; ?>" frameborder="0" allowfullscreen></iframe>
                            <?php the_content(); ?>
                            <?php $electric_cooperatives_are = get_field('electric_cooperatives_are'); ?>
                            <h2><?php echo $electric_cooperatives_are; ?></h2>
                            <div class="clearfix"></div>
                            <ul>
                            <?php
                            if (have_rows('electric_cooperatives_repeater')):
                                while (have_rows('electric_cooperatives_repeater')) : the_row();
                                $electric_cooperatives_point = get_sub_field('electric_cooperatives_point');
                                ?>
                            <li><?php echo $electric_cooperatives_point; ?></li>
                                <?php
                                endwhile;
                                endif;
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="light-blue content-wrapper">
                <div class="container">
                    <div class="row">
                        <?php 
                           $ec_more_details = get_field('ec_more_details');
                           ?>
                        <div class="col-md-10 col-md-offset-1">
                            <?php echo $ec_more_details; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>