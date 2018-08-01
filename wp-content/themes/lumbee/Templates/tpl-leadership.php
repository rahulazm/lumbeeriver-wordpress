<?php
/**
 * Template Name: Leadership
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
            $leadership_page_banner = get_field('leadership_page_banner');
            $leadership_page_title = get_field('leadership_page_title');
            $the_team_title = get_field('the_team_title');
            ?>
            <section class="top-banner">
                <div class="banner-img" style="background:url(<?php echo $leadership_page_banner; ?>);">
                    <div class="banner-content">
                        <h1><?php echo $leadership_page_title; ?></h1>
                    </div>
                </div>
            </section>
            <section class="team">
                <div class="container">
                    <div class="row">
                        <?php if (!empty($the_team_title)) { ?>
                            <h4><?php echo $the_team_title; ?></h4>
                        <?php } ?>
                        <h2><?php echo get_field('board_of_directors_-_executive_committee_main_title'); ?></h2>
                        <div class="team-members-list">
                            <?php
                            if (have_rows('board_of_directors_-_executive_committee_repeater')):
                                while (have_rows('board_of_directors_-_executive_committee_repeater')) : the_row();
                                    $rep_bod_member_photos = get_sub_field('executive_photos');
                                    $rep_bod_member_name = get_sub_field('rep_bod_member_name');
                                    $rep_bod_designation = get_sub_field('rep_bod_designation');
                                    $rep_bod_short_intro = get_sub_field('rep_bod_short_intro');
                                    $rep_bod_facebook_link = get_sub_field('rep_bod_facebook_link');
                                    $rep_bod_twitter_link = get_sub_field('rep_bod_twitter_link');
                                    $rep_bod_linkedin_link = get_sub_field('rep_bod_linkedin_link');
                                    ?>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="member-image">
                                            <img src="<?php echo $rep_bod_member_photos; ?>" alt="<?php echo basename($rep_bod_member_photos); ?>">
                                        </div>
                                        <span><?php echo $rep_bod_member_name; ?></span>
                                        <h4><?php echo $rep_bod_designation; ?></h4>
                                        <p><?php echo $rep_bod_short_intro; ?></p>
                                        <ul>
                                            <?php if (!empty($rep_bod_facebook_link)) { ?>
                                                <li><a href="<?php echo $rep_bod_facebook_link; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <?php } ?>
                                            <?php if (!empty($rep_bod_twitter_link)) { ?>
                                                <li><a href="<?php echo $rep_bod_twitter_link; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <?php } ?>
                                            <?php if (!empty($rep_bod_linkedin_link)) { ?>
                                                <li><a href="<?php echo $rep_bod_linkedin_link; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="officers">
                <?php
                $district_officers_title = get_field('district_officers_title');
                $district_officers_section_background_image = get_field('district_officers_section_background_image');
                ?>
                <div class="officers-img" style="background:url(<?php echo $district_officers_section_background_image; ?>);">
                    <div class="container">
                        <div class="row">
                            <div class="officers-content">
                                <h2><?php echo $district_officers_title; ?></h2>
                                <div class="team-members-list-alt">
                                    <?php
                                    if (have_rows('district_officers_repeater')):
                                        while (have_rows('district_officers_repeater')) : the_row();
                                            $do_office_image = get_sub_field('do_office_image');
                                            $do_officer_name = get_sub_field('do_officer_name');
                                            $do_officer_designation = get_sub_field('do_officer_designation');
                                            $do_office_short_intro = get_sub_field('do_office_short_intro');
                                            $do_facebook_link = get_sub_field('do_facebook_link');
                                            $do_twitter_link = get_sub_field('do_twitter_link');
                                            $do_linkedin_link = get_sub_field('do_linkedin_link');
                                            ?>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="team-wrapper">
                                                    <div class="member-image">
                                                        <img src="<?php echo $do_office_image; ?>" alt="District Officers">
                                                    </div>
                                                    <span><?php echo $do_officer_name; ?></span>
                                                    <h4><?php echo $do_officer_designation; ?></h4>
                                                    <?php echo $do_office_short_intro; ?>
                                                    <ul>
                                                        <?php if($do_facebook_link != ""){ ?><li><a href="<?php echo $do_facebook_link; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php } ?>
                                                        <?php if($do_twitter_link != ""){ ?><li><a href="<?php echo $do_twitter_link; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php } ?>
                                                        <?php if($do_linkedin_link != ""){ ?><li><a href="<?php echo $do_linkedin_link; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li><?php } ?>
                                                    </ul>
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
            </section>
            <section class="team">
                <div class="container">
                    <div class="row">
                        <?php
                        $steering_team_title = get_field('steering_team_title');
                        ?>
                        <h2><?php echo $steering_team_title; ?></h2>
                        <div class="team-members-list">
                            <?php
                            if (have_rows('steering_team_repeater')):
                                while (have_rows('steering_team_repeater')) : the_row();
                                    $steering_team_photo = get_sub_field('steering_team_photo');
                                    $steering_team_name = get_sub_field('steering_team_name');
                                    $steering_team_designation = get_sub_field('steering_team_designation');
                                    $steering_team_short_intro = get_sub_field('steering_team_short_intro');
                                    $steering_team_facebook_link = get_sub_field('steering_team_facebook_link');
                                    $steering_team_twitter_link = get_sub_field('steering_team_twitter_link');
                                    $steering_team_linkedin_link = get_sub_field('steering_team_linkedin_link');
                                    ?>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="member-image">
                                            <img src="<?php echo $steering_team_photo; ?>" alt="Steering Team">
                                        </div>
                                        <span><?php echo $steering_team_name; ?></span>
                                        <h4><?php echo $steering_team_designation; ?></h4>
                                        <p><?php echo $steering_team_short_intro; ?></p>
                                        <ul>
                                            <?php if($steering_team_facebook_link != ""){ ?><li><a href="<?php echo $steering_team_facebook_link; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php } ?>
                                            <?php if($steering_team_twitter_link != ""){ ?><li><a href="<?php echo $steering_team_twitter_link; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php } ?>
                                            <?php if($steering_team_linkedin_link != ""){ ?><li><a href="<?php echo $steering_team_linkedin_link; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li><?php } ?>
                                        </ul>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>