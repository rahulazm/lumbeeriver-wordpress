<?php
/**
 * Template Name: NC Green Power
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
            $all_main_title_background_image = get_field('all_main_title_background_image');
            $all_pages_title_text = get_field('all_pages_title_text');
            ?>
            <?php
            if (!empty($all_main_title_background_image)) {
                ?>
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
            <div class="green-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="green-left">
                                <?php the_field('nc_left_content'); ?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="green-right">
                                <h3><?php the_field('nc_right_title'); ?></h3>
                                <p class="content-details">Just email us or call:</p> 
                                <p><img src="<?php echo get_template_directory_uri(); ?>/images/EmailIco-white.png" alt="EmailIco-white.png" /><a href="#"><?php the_field('nc_email') ?></a></p>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/images/CallIco-white.png" alt="CallIco-white.png" /><?php the_field('nc_phone_number'); ?></p> 
                                <p class="signup-heading"><?php the_field('nc_sign_up_text'); ?></p>
                                <a class="signupbtn" href="<?php the_field('nc_button_link'); ?>"><?php the_field('nc_sign_up_button_text'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nc-accordian">
                <div class="panel-group" id="accordion">
                    <?php
                    if (have_rows('nc_faq')):
                        $inc = 0;
                        while (have_rows('nc_faq')) : the_row();
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="container">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $inc; ?>">
                                                <img class="open-img" src="<?php echo get_template_directory_uri(); ?>/images/ExpandIco.png" alt="ExpandIco.png" />
                                                <img class="close-img" src="<?php echo get_template_directory_uri(); ?>/images/CloseIco.png" alt="CloseIco.png" /> <?php the_sub_field('nc_question'); ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <div id="collapse<?php echo $inc; ?>" class="panel-collapse collapse">
                                    <div class="container">
                                        <div class="panel-body"><?php the_sub_field('nc_anser'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $inc++;
                        endwhile;
                    endif;
                    ?>
                </div> 
            </div>
            <div class="green-power-description">
                <div class="container">
                    <?php the_field('nc_last_description'); ?>
                </div>
            </div>    
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>