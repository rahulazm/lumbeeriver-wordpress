<?php
/**
 * Template Name: Important Anouncements
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
            <?php if (!empty($all_pages_title_text)) { ?>
                <section class="top-banner new-banner">
                    <div class="banner-img" style="background:url('<?php echo $all_main_title_background_image; ?>');">
                        <div class="overlay"></div>
                        <div class="banner-content">
                            <h1><?php echo $all_pages_title_text; ?></h1>
                        </div>
                    </div>
                </section>
            <?php } ?>
            <section class="message-content">
                <div class="container">
                    <?php
                    $alert_message_for_text_heading = get_field('alert_message_for_text_heading');
                    $alert_image = get_field('alert_image');
                    $alert_message_last = get_field('alert_message_last');
                    
                    ?>
                    <div class="right-content">
                        <img src="<?php echo $alert_image; ?>" alt="" />
                        <?php
                        /* $args = array(
                            'type' => 'monthly',
                            'limit' => '',
                            'format' => 'html',
                            'before' => '',
                            'after' => '',
                            'show_post_count' => false,
                            'echo' => 1,
                            'order' => 'DESC',
                            'post_type' => 'post'
                        );
                        ?>
                        <ul>
                            <?php wp_get_archives($args); ?>
                        </ul><?php */ ?>
                    </div>
                    <?php if (!empty($alert_message_for_text_heading)) { ?>
                        <h2><?php echo $alert_message_for_text_heading; ?></h2>
                    <?php } ?>
                    <?php the_content(); ?>
                    <?php if (!empty($alert_message_last)) { ?>
                        <strong style="text-align:center; color:#0481B9;"><?php echo $alert_message_last; ?></strong>
                    <?php } ?>
                    
                    <div class="clearfix"></div>
                </div>
            </section>
        </div>
    <?php endwhile; ?>                 
<?php endif; ?>
<?php get_footer(); ?>