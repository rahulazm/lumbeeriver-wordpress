<?php
/**
 * Template Name: Understanding Your Bill
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
                $uyb_page_banner = get_field('uyb_page_banner');
                $uyb_page_title = get_field('uyb_page_title');
                ?>
                <div class="banner-img banner-small" style="background:url(<?php echo $uyb_page_banner; ?>);">
                    <div class="banner-content">
                        <h1><?php echo $uyb_page_title; ?></h1>
                    </div>
                </div>
            </section>
            <?php /* <div class="bill-acordion">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-group" id="accordion">
                                <?php
                                    if (have_rows('uyb_faq_repeater')):
                                    $ic = 0;
                                    while (have_rows('uyb_faq_repeater')) : the_row();
                                    $uyb_faq_question = get_sub_field('uyb_faq_question');
                                    $rep_faq_answer = get_sub_field('rep_faq_answer');
                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $ic; ?>">
                                                <span> <?php echo $uyb_faq_question; ?> </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse<?php echo $ic; ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php echo $rep_faq_answer; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    $ic++;
                                    endwhile;
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> */ ?>
            <div class="nc-accordian">
                <div class="panel-group" id="accordion">
                    <?php
                        if (have_rows('uyb_faq_repeater')):
                        $ic = 0;
                        while (have_rows('uyb_faq_repeater')) : the_row();
                        $uyb_faq_question = get_sub_field('uyb_faq_question');
                        $rep_faq_answer = get_sub_field('rep_faq_answer');
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="container">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $ic; ?>">
                                        <img class="open-img" src="<?php echo get_template_directory_uri(); ?>/images/ExpandIco.png" alt="ExpandIco.png" />
                                        <img class="close-img" src="<?php echo get_template_directory_uri(); ?>/images/CloseIco.png" alt="CloseIco.png" /> <?php echo $uyb_faq_question; ?> 
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div id="collapse<?php echo $ic; ?>" class="panel-collapse collapse">
                            <div class="container">
                                <div class="panel-body">
                                    <?php echo $rep_faq_answer; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $ic++;
                        endwhile;
                        endif;
                    ?>
                </div> 
            </div>
            <div class="monthy-faci-chrg">
                <div class="container">
                    <div class="row">
                        <?php
                        $monthly_facility_charge_title = get_field('monthly_facility_charge_title');
                        $monthly_facility_charge_description = get_field('monthly_facility_charge_description');
                        ?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="heading-utitlity"> <h2><?php echo $monthly_facility_charge_title; ?></h2></div>
                            <?php echo $monthly_facility_charge_description; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-rate-main">
                <div class="view-rate">
                    <div class="container">
                        <div class="row">
                            <?php
                            $monthly_facility_charge = get_field('monthly_facility_charge');
                            $monthly_facility_charge_icon = get_field('monthly_facility_charge_icon');
                            ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="heading-utitlity"><a href="#"><h2><?php echo $monthly_facility_charge; ?></h2></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-btm text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="view-img">
                                    <img src="<?php echo $monthly_facility_charge_icon; ?>" alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>