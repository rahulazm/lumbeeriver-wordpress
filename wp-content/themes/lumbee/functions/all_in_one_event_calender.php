<?php
add_action('wp_ajax_get_current_date_event', 'get_current_date_event');
add_action('wp_ajax_nopriv_get_current_date_event', 'get_current_date_event');

function get_current_date_event() {
	global $wpdb;
	global $ai1ec_registry;
	$current_date = $_POST['date'];
	$date_string =   ($date);
	//$get_event = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."ai1ec_events WHERE start='$date_string'");
	$get_event = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."ai1ec_events");
	$post_ids = array();
	foreach ($get_event  as $event){
		$start_date = date('d-F Y',$event->start);
		if($current_date == $start_date){
			$post_ids[]= $event->post_id;
		}
	}
	//$post_ids_string = implode( ',', $post_ids );
	$args = array(
	'post_type' => 'ai1ec_event',
        'post__in' => $post_ids
	);
	$posts = get_posts($args);
	$events_html = "";
	$events_html .= "<ul>";
	foreach ($posts as $cal_post) {
		$events_html .= '<li>';
		$events_html .= '<a href="javascript:void(0)" class="left-event_list" onclick="get_single_event_details('.$cal_post->ID.')">'. $cal_post->post_title .'</a>';
		$events_html .= '</li>';
	}
	$events_html .= "</ul>";
	if ($post_ids) {
        $tp_result = json_encode($events_html);
        echo $tp_result;
	 }
	wp_die();
    }

/* Get Single Event Data AJAX */
add_action('wp_ajax_get_single_event', 'get_single_event');
add_action('wp_ajax_nopriv_get_single_event', 'get_single_event');

function get_single_event() {
    $single_psot_id = $_POST['post_id'];
    $post_data = get_post( $single_psot_id ); 
    $title = $post_data->post_title;
    $message_ceo = apply_filters( 'the_content', $post_data->post_content );
    $data= array();
    $data['title']= $title;
    $data['ceo_message']=$message_ceo;
    echo $data = json_encode($data);
    wp_die();
}