<?php
/**
 * Template Name: CEO Message
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
                    $ceo_message_for_text_heading = get_field('ceo_message_for_text_heading');
                    $ceo_image = get_field('ceo_image');
                    $ceo_message_last = get_field('ceo_message_last');
                    $ceo_signature_image = get_field('ceo_signature_image');
                    $last_ceo_name = get_field('last_ceo_name');
                    ?>
                    <div class="right-content">
                        <img src="<?php echo $ceo_image; ?>" alt="StevenCHunt.png" />
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
                    <?php if (!empty($ceo_message_for_text_heading)) { ?>
                        <h2><?php echo $ceo_message_for_text_heading; ?></h2>
                    <?php } ?>
                    <?php the_content(); ?>
                    <?php if (!empty($ceo_message_last)) { ?>
                        <strong style="text-align:center; color:#0481B9;"><?php echo $ceo_message_last; ?></strong>
                    <?php } ?>
                    <?php if (!empty($ceo_signature_image)) { ?>
                        <img style="margin-top:25px;" src="<?php echo $ceo_signature_image; ?>" alt="SHunt_sign.png" />
                    <?php } ?>
                    <?php if (!empty($last_ceo_name)) { ?>
                        <strong><?php echo $last_ceo_name; ?></strong>
                    <?php } ?>
                    <div class="clearfix"></div>
                </div>
            </section>
        </div>
    <?php endwhile; ?>                 
<?php endif; ?>
<?php get_footer(); ?>