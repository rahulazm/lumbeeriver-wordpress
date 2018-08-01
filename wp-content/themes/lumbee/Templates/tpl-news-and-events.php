<?php
/**
 * Template Name: News & Events
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
                <div class="banner-img" style="background:url(<?php echo get_template_directory_uri(); ?>/images/NewsEventsBannerImg.png);">
                    <div class="banner-content">
                        <h1><?php echo 'News & Events'; ?></h1>
                    </div>
                </div>
            </section>
            <section class="news_events">
                <div class="container">
                    <div class="row">
                        <h1>Stay Up-To-Date</h1>
                    </div>
                </div>
                <div class="news_main">
                    <div class="col-md-4 remove_padding">
                        <div class="left_calendar_view">
                            <span class="today_date" id="today_date">17</span>
                            <span class="today_date_day" id="today_date_day">Monday</span>
                            <div class="left_event_list">
                                <span class="main_event_list_title">Events</span>
                                <div id="output_table"></div>
                                <ul id="old_ul">
                                    <li><a href="#">Event 1</a></li>
                                    <li><a href="#">Event 1</a></li>
                                    <li><a href="#">Event 1</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cal_event_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/EventImage.png" alt="" />
                            <h2 class="event_title_gradiant"><span id="single_post_name"></span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="main_calender_section">
                            <?php echo do_shortcode('[ai1ec]'); ?>
                        </div>
                        <div class="ceo_message" style="display:none;">
                            <h3>A Message From Your CEO</h3>
                            <span id="ceo_message"></span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<script type="text/javascript">
    function get_single_event_details(id) {
        var data = {
            'action': 'get_single_event',
            'post_id': id
        };
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        jQuery.post(ajaxurl, data, function (response) {
            var post_data = jQuery.parseJSON(response);
            jQuery(".ceo_message").show();
            document.getElementById("single_post_name").innerHTML =  post_data.title;
            document.getElementById("ceo_message").innerHTML =  post_data.ceo_message;
        });
    }
</script>
<script type="text/javascript">
    jQuery( ".show_my_event" ).live( "click", function() {
    //jQuery(".show_my_event").click(function () {
        var day = jQuery(this).data("day");
        var month = jQuery(this).data("month");
        //var time = jQuery(this).data("time");
        var full_date = day + "-" + month;
        var data = {
            'action': 'get_current_date_event',
            'date': full_date
        };
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        jQuery.post(ajaxurl, data, function (response) {
            var d = new Date(full_date);
            var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            document.getElementById("today_date_day").innerHTML = days[d.getDay()];
            document.getElementById("today_date").innerHTML = d.getDate();
            document.getElementById("old_ul").style.display = "none";
            var added_fields_data = jQuery.parseJSON(response);
            document.getElementById('output_table').innerHTML = added_fields_data;
        });
    });

    jQuery(document).ready(function () {
        var date = new Date();
        var monthNames = [
            "January", "February", "March",
            "April", "May", "June", "July",
            "August", "September", "October",
            "November", "December"
        ];
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();
        var full_date = day + '-' + monthNames[monthIndex] + ' ' + year;
        var d = new Date(full_date);
        var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        document.getElementById("today_date_day").innerHTML = days[d.getDay()];
        document.getElementById("today_date").innerHTML = d.getDate();
        document.getElementById("old_ul").style.display = "none";
        var data = {
            'action': 'get_current_date_event',
            'date': full_date
        };
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        jQuery.post(ajaxurl, data, function (response) {
            if (response != '') {
                var added_fields_data = jQuery.parseJSON(response);
                document.getElementById('output_table').innerHTML = added_fields_data;
            } else {
                document.getElementById('output_table').innerHTML = 'No Events for Today!';
            }
        });
    });
</script>
<?php get_footer(); ?>