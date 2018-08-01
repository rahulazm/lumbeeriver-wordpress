<?php
/**
 * Template Name: Member Tools
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
            $page_banner = get_field('mt_background_image');
            $page_title = get_field('mt_page_title');
            ?>
            <section class="top-banner">
                <div class="banner-img" style="background:url(<?php echo $page_banner; ?>);">
                    <?php if (!empty($page_title)) { ?>
                        <div class="banner-content">
                            <h1><?php echo $page_title; ?></h1>
                        </div>
                    <?php } ?>
                </div>
            </section>
            <div class="intro member_tools_intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $mt_main_content_title = get_field('mt_main_content_title');
                            $mt_main_content = get_field('mt_main_content');
                            ?>
                            <div class="heading-utitlity">
                                <?php if (!empty($mt_main_content_title)) { ?>
                                    <h2><?php echo $mt_main_content_title; ?></h2>
                                <?php } ?>
                                <?php echo $mt_main_content; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="member_tools_box">
                <?php
                if (have_rows('member_tools_repeater')):
                    while (have_rows('member_tools_repeater')) : the_row();
                        $mt_rep_background_image = get_sub_field('mt_rep_background_image');
                        $mt_rep_title = get_sub_field('mt_rep_title');
                        ?>
                        <div class="box_content" style="background-image: url(<?php echo $mt_rep_background_image ?>);">
                            <h3><?php echo $mt_rep_title; ?></h3>
                            <div class="text_ul">
                                <ul>
                                    <?php
                                    if (have_rows('mt_rep_tools_option_repeater')):
                                        while (have_rows('mt_rep_tools_option_repeater')) : the_row();
                                            $mt_rep_rep_tools_name = get_sub_field('mt_rep_rep_tools_name');
                                            $mt_rep_rep_tools_link = get_sub_field('mt_rep_rep_tools_link');
                                            ?>
                                            <?php if (!empty($mt_rep_rep_tools_name)) { ?>
                                            <li><a href="<?php echo $mt_rep_rep_tools_link; ?>"><?php echo $mt_rep_rep_tools_name; ?></a></li>
                                            <?php } ?>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="other_resources_info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php $mt_other_service_title = get_field('mt_other_service_title'); ?>
                            <?php if (!empty($mt_other_service_title)) { ?>
                                <h2>Other Resources</h2>
                            <?php } ?>
                            <ul>
                            <?php
                            if (have_rows('mt_other_resources')):
                                while (have_rows('mt_other_resources')) : the_row();
                                $mt_other_resource_name = get_sub_field('mt_other_resource_name');
                                ?>
                                <li><?php echo $mt_other_resource_name; ?></li>
                                <?php
                                endwhile;
                            endif;
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>