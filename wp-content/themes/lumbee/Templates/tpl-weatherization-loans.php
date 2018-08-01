<?php
/**
 * Template Name: Weatherization Loans
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
            $whether_page_banner = get_field('whether_page_banner');
            $wether_page_title = get_field('wether_page_title');
            ?>
            <section class="top-banner">
                <div class="banner-img banner-small" style="background:url(<?php echo $whether_page_banner; ?>);">
                    <div class="banner-content">
                        <h1><?php echo $wether_page_title; ?></h1>
                    </div>
                </div>
            </section>
            <div class="intro weatherization">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="energy-efficiency">
                <div class="container">
                    <div class="row">
                        <?php
                        $what_energy_title = get_field('what_energy_title');
                        ?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2><?php echo $what_energy_title ?></h2>
                            <div class="efficiency-list cf">
                                <ul class="left">
                                    <?php
                                    if (have_rows('what_energy_left_list')):
                                        while (have_rows('what_energy_left_list')) : the_row();
                                            $enargy_point_name = get_sub_field('enargy_point_name');
                                            ?>
                                            <li><?php echo $enargy_point_name; ?></li>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </ul>
                                <ul class="right">
                                    <?php
                                    if (have_rows('what_energy_right_list')):
                                        while (have_rows('what_energy_right_list')) : the_row();
                                            $rep_right_enargy_point_name = get_sub_field('rep_right_enargy_point_name');
                                            ?>
                                            <li><?php echo $rep_right_enargy_point_name; ?></li>
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
            <div class="who-eligible">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 center-block">
                            <?php
                            $who_is_text = get_field('who_is_text');
                            $who_is_shot_intro = get_field('who_is_shot_intro');
                            ?>
                            <h2><?php echo $who_is_text; ?></h2>  
                            <p><?php echo $who_is_shot_intro; ?></p>
                            <ul>
                                <?php
                                if (have_rows('who_is_repeater')):
                                    while (have_rows('who_is_repeater')) : the_row();
                                        $who_is_text = get_sub_field('who_is_text');
                                        ?>
                                        <li><?php echo $who_is_text; ?>
                                            <?php
                                            if (have_rows('who_is_sub_point_repeter')):
                                                ?>
                                                <ul>
                                                    <?php
                                                    while (have_rows('who_is_sub_point_repeter')) : the_row();
                                                        $who_is_sub_text = get_sub_field('who_is_sub_text');
                                                        ?>
                                                        <li>- <?php echo $who_is_sub_text; ?></li>
                                                        <?php
                                                    endwhile;
                                                    ?>
                                                </ul>
                                                <?php
                                            endif;
                                            ?>
                                        </li>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="terms-law">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>What Are The Terms & Limits on Loans?</h2>   
                            <table>
                                <thead>
                                    <tr><th>Weatherization Loans</th>
                                        <th>Amount</th>
                                        <th>Terms <span>(months)</span></th></tr>  
                                </thead>
                                <?php
                                if (have_rows('weatherization_loans_repeater')):
                                    while (have_rows('weatherization_loans_repeater')) : the_row();
                                        $rep_weatherization_loans = get_sub_field('rep_weatherization_loans');
                                        $rep_weatherization_amount = get_sub_field('rep_weatherization_amount');
                                        $rep_weatherization_terms = get_sub_field('rep_weatherization_terms');
                                        ?>
                                        <tr>
                                            <td data-title="Weatherization"><?php echo $rep_weatherization_loans; ?></td>
                                            <td data-title="Amount"><?php echo $rep_weatherization_amount; ?></td>
                                            <td data-title="Terms (months)"><?php echo $rep_weatherization_terms; ?></td>
                                        </tr>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </table>
                            <table>
                                <thead>
                                    <tr><th>Water Heater Loans</th>
                                        <th>Amount</th>
                                        <th>Terms <span>(months)</span></th></tr>
                                </thead>
                                <?php
                                if (have_rows('water_heater_loans_repeater')):
                                    while (have_rows('water_heater_loans_repeater')) : the_row();
                                        $rep_water_heater_loans = get_sub_field('rep_water_heater_loans');
                                        $water_heater_amount = get_sub_field('water_heater_amount');
                                        $rep_water_heater_terms = get_sub_field('rep_water_heater_terms');
                                        ?>
                                        <tr>
                                            <td data-title="Water Heater Loans"><?php echo $rep_water_heater_loans; ?></td>
                                            <td data-title="Amount"><?php echo $water_heater_amount; ?></td>
                                            <td data-title="Terms (months)"><?php echo $rep_water_heater_terms; ?></td>
                                        </tr>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </table>
                            <?php
                            if (have_rows('wat_question_repeater')):
                                while (have_rows('wat_question_repeater')) : the_row();
                                    $weatherization_loan_question = get_sub_field('weatherization_loan_question');
                                    ?>
                                    <h3><?php echo $weatherization_loan_question; ?></h3>
                                    <ul>
                                        <?php
                                        if (have_rows('wat_answer_point')):
                                            while (have_rows('wat_answer_point')) : the_row();
                                                $wath_rep_answer = get_sub_field('wath_rep_answer');
                                                ?>
                                                <li><?php echo $wath_rep_answer; ?>
                                                    <ul>
                                                        <?php
                                                        if (have_rows('attached_pdf')):
                                                            while (have_rows('attached_pdf')) : the_row();
                                                                $pdf_file = get_sub_field('pdf_file');
                                                                $pdf_file_name = get_sub_field('pdf_file_name');
                                                                ?>
                                                                <li><a href="<?php echo $pdf_file; ?>"><?php echo $pdf_file_name; ?></a></li>
                                                                <?php
                                                            endwhile;
                                                        endif;
                                                        ?>
                                                    </ul>
                                                </li>
                                                <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </ul>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <?php endwhile; ?>                 

<?php endif; ?>
<?php get_footer(); ?>