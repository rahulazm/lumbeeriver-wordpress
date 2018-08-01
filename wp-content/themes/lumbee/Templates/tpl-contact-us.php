<?php
/**
 * Template Name: Contact Us
 *
 * @package WordPress
 * @subpackage Theme_name
 * @since Theme_name 1.0
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>            

    <?php while (have_posts()) : the_post(); ?>
        <?php $page_title = get_field('contact_page_title'); ?>
        <div class="sub-page">
            <?php if (!empty($page_title)) { ?>
                <section class="main-title">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1><?php echo $page_title; ?></h1>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>
            <div class="contact-main">
                <?php
                $contact_map_iframe = get_field('contact_map_iframe');
                $contact_report_text = get_field('contact_report_text');
                $contact_call_text = get_field('contact_call_text');
                $contact_phone_number = get_field('contact_phone_number');
                ?>
                <div class="triangle-left"><div class="angle-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/map-ping-icon.png" alt="map-ping-icon"/></div></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="contact-heading">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ReportOutage-blue.png" alt="" title=""><h3><?php echo $contact_report_text; ?></h3>
                            </div>
                            <div class="map-img">
                                <iframe src="<?php echo $contact_map_iframe; ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="contact-heading">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Call2.png" alt="Call2" title=""><h3><?php echo $contact_call_text; ?> <a href="tel:<?php echo $contact_phone_number; ?>" title="Call Us"><?php echo $contact_phone_number; ?></a></h3>
                            </div>
                            <div class="address-info">
                                <?php $contect_address_title = get_field('contect_address_title'); ?>
                                <h2><?php echo $contect_address_title; ?></h2>
                                <?php
                                if (have_rows('contact_rep_address')):
                                    while (have_rows('contact_rep_address')) : the_row();
                                        $address_rep_title = get_sub_field('address_rep_title');
                                        $contact_rep_address_text = get_sub_field('contact_rep_address_text');
                                        ?>
                                         <div class="addresses">
                                            <h4><?php echo $address_rep_title; ?></h4>
                                            <p><?php echo $contact_rep_address_text; ?></p>
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