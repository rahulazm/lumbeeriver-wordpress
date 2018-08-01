<?php
/**
 * Template Name: Become a Member
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
            $page_banner = get_field('bam_banner_image');
            $_page_title = get_field('bam_title');
            ?>
            <section class="top-banner">
                <div class="banner-img" style="background:url(<?php echo $page_banner; ?>);">
                    <div class="banner-content">
                        <?php if (!empty($_page_title)) { ?>
                            <h1><?php echo $_page_title; ?></h1>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <div class="intro become_member_intro">
                <div class="container">
                    <?php
                    $bam_main_title = get_field('bam_main_title');
                    $bam_image = get_field('bam_image');
                    $bam_short_description = get_field('bam_short_description');
                    ?>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="<?php echo $bam_image; ?>" alt="map" />
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="heading-utitlity">
                                <?php if (!empty($bam_main_title)) { ?>
                                    <h2><?php echo $bam_main_title; ?></h2>
                                <?php } ?>
                                <?php if (!empty($bam_short_description)) { ?>
                                    <p><?php echo $bam_short_description; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="benefits_membership">
                <div class="container">
                    <div class="row">
                        <?php
                        $bam_membership_heading = get_field('bam_membership_heading');
                        $bam_membership_message = get_field('bam_membership_message');
                        $bam_membeship_short_description = get_field('bam_membeship_short_description');
                        ?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php if (!empty($bam_membership_heading)) { ?>
                                <h2><?php echo $bam_membership_heading; ?></h2>
                            <?php } ?>
                            <div class="benefits_ul">
                                <ul class="left_benefits">
                                    <?php
                                    if (have_rows('benefits_of_having_a_membership_left_list')):
                                        while (have_rows('benefits_of_having_a_membership_left_list')) : the_row();
                                            $bam_membership_name = get_sub_field('bam_membership_name');
                                            ?>
                                            <li><?php echo $bam_membership_name; ?></li>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </ul>
                                <ul class="right_benefits">
                                    <?php
                                    if (have_rows('benefits_of_having_a_membership_right_side')):
                                        while (have_rows('benefits_of_having_a_membership_right_side')) : the_row();
                                            $bam_rep_membership_list = get_sub_field('bam_rep_membership_list');
                                            ?>
                                            <li><?php echo $bam_rep_membership_list; ?></li>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>

                                </ul>
                            </div>
                            <?php if (!empty($bam_membership_message)) { ?>
                                <h3><?php echo $bam_membership_message; ?></h3>
                            <?php } ?>
                            <?php if (!empty($bam_membeship_short_description)) { ?>
                                <p><?php echo $bam_membeship_short_description; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="become_member_bottom">
                <div class="container">
                    <?php
                    $bam_icon = get_field('bam_icon');
                    $bam_title_3 = get_field('bam_title_3');
                    $bam_tag_line = get_field('bam_tag_line');
                    $bam_description_3 = get_field('bam_description_3');
                    ?>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <img src="<?php echo $bam_icon; ?>" alt="BecomeAMemberIcon" />
                            <?php if (!empty($bam_title_3)) { ?>
                                <h2><?php echo $bam_title_3; ?></h2>
                            <?php } ?>
                            <?php if (!empty($bam_tag_line)) { ?>
                                <h3><?php echo $bam_tag_line; ?></h3>
                            <?php } ?>
                            <?php if (!empty($bam_description_3)) { ?>
                                <p><?php echo $bam_description_3; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>