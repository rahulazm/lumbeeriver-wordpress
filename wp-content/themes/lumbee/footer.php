<footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="footer-main">
                            <div class="col-md-3 text-center">
                                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_field('footer_logo_1','option'); ?>" alt="Lumbee River Emc" /></a>
                            </div>
                            <div class="col-md-9">
                                <div class="main-links">
                                    <?php wp_nav_menu( array( 'theme_location'  => 'footer_navigation1','container'=> false ) ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="footer-content text-center">
                                <p><?php echo get_field('footer_short_intro','option'); ?></p>
                                <a href="<?php echo get_field('footer_powered_by_link','option'); ?>"><img src="<?php echo get_field('footer_logo_2','option'); ?>" alt="Lumbee River EMC"/></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-details">
                                <ul>
                                    <li><em><img src="<?php echo get_template_directory_uri(); ?>/images/Call.png" alt="call"/></em><span><a href="tel:<?php echo get_field('footer_contact_no_1','option'); ?>"><?php echo get_field('footer_contact_no_1','option'); ?></a></span></li>
                                    <li><em><img src="<?php echo get_template_directory_uri(); ?>/images/Fax.png" alt="Fax"/></em><span><a href="tel:<?php echo get_field('footer_contact_no_2','option'); ?>"><?php echo get_field('footer_contact_no_2','option'); ?></a></span></li>
                                    <li><em><img src="<?php echo get_template_directory_uri(); ?>/images/Email.png" alt="Email"/></em><span><a href="mailto:<?php echo get_field('footer_email_id','option'); ?>"><?php echo get_field('footer_email_id','option'); ?></a></span></li>
                                    <li><em><img src="<?php echo get_template_directory_uri(); ?>/images/GPS.png" alt="GPS"/></em><span><?php echo get_field('footer_address','option'); ?></span></li>
                                </ul>
                                <div class="social-icon">
                                    <ul>
                                    <?php 
										if( have_rows('social_media_repeter','option') ):
											while ( have_rows('social_media_repeter','option') ) : the_row();
												$s_class = get_sub_field('media_icon_class','option');
												$s_link = get_sub_field('social_media_link','option');
												?>
												<li><a href="<?php echo $s_link; ?>" target="_blank"><em class="<?php echo $s_class ?>"></em></a></li>
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
            </div>
            <div class="footer-link">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php wp_nav_menu( array( 'theme_location'  => 'footer_navigation2','container'=> false ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright pull-left">
                                <?php echo get_field('copiright_text','option'); ?>
                            </div>
                            <div class="design-by pull-right">
                                <?php echo get_field('design_by_text','option'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
         <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> 
        <script src = "<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js" type = "text/javascript" ></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

            });

            window.onload = function(){
               setInterval(function(){
                    $('<a href="#" class="close-modal" onclick="hide();">×</a>').appendTo('#popup');
                    if($('#popup').is(':hidden'))
                        $('#popup').show();
                   //alert("Hello");
               }, 10000);
            };

           function hide(){
                $('#popup').hide();
            }
          
        </script>
		
<?php wp_footer(); ?>

    </body>
</html>