<?php
/**
 * Template Name: Membership
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
            $page_banner = get_field('mem_page_banner');
            $page_title = get_field('mem_page_title');
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
            <div class="Membership-main">
                <?php
                if (have_rows('membership_repeater')):
                    $i = 0;
                    while (have_rows('membership_repeater')) : the_row();
                        $membership_rep_name = get_sub_field('membership_rep_name');
                        $membership_rep_description = get_sub_field('membership_rep_description');
                        $membership_rep_image = get_sub_field('membership_rep_image');
                        $membership_rep_attachment = get_sub_field('membership_rep_attachment');
                        $attachment_id = get_field($membership_rep_attachment);
                        $url = wp_get_attachment_url($membership_rep_attachment);
                        $title = get_the_title($membership_rep_attachment);
                        $myfile = filesize(get_attached_file($membership_rep_attachment));
                        $bytes = size_format($myfile,2);
                        if (($i % 2) == 0):
                            ?>
                            <div class="membership-row cf"> 
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-md-12">   
                                            <div class="col-md-5 col-sm-5 member-img">
                                                <img src="<?php echo $membership_rep_image; ?>" alt="">
                                            </div>
                                            <div class="col-md-7 col-sm-7 member-info">
                                                <div class="heading-utitlity"> <h2><?php echo $membership_rep_name; ?></h2></div>
                                                <p><?php echo $membership_rep_description; ?></p>
                                                <ul class="cf">
                                                    <li><a title="View" class="default-btn" href="<?php echo $url; ?>">View</a></li>
                                                    <li class="or">or</li>
                                                    <li><a title="Download" download="<?php echo $url; ?>" class="downld" href="<?php echo $url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/downloadIcon.png">Download</a><span>Size: <?php echo $bytes; ?> Format : PDF </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        else :
                            ?>
                            <div class="membership-row cf"> 
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-md-12">     
                                            <div class="col-md-5 col-sm-5 member-img pull-right">
                                                <img src="<?php echo $membership_rep_image; ?>" alt="">
                                            </div>
                                            <div class="col-md-7 col-sm-7 member-info">
                                                <div class="heading-utitlity"> <h2><?php echo $membership_rep_name; ?></h2></div>
                                                <p><?php echo $membership_rep_description; ?></p>
                                                <ul class="cf">
                                                    <li><a title="View" class="default-btn" href="<?php echo $url; ?>">View</a></li>
                                                    <li class="or">or</li>
                                                    <li><a title="Download" download="<?php echo $url; ?>" class="downld" href="<?php echo $url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/downloadIcon.png">Download</a><span>Size: <?php echo $bytes; ?> Format : PDF </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endif;
                        $i++;
                    endwhile;
                endif;
                ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer(); ?>