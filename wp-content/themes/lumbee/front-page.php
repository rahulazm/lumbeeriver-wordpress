<?php get_header();?>
<div class="sub-page">
            <section class="slider">
			<?php 
			$query = new WP_Query( array( 'post_type' => 'slider' ) );
			?>
                <div class="owl-carousel main-slider">
					<?php if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php $slider_image = get_post_meta( get_the_ID(), 'slider_image_insert-image', true ); ?>
						<div alt="Slider Images" class="item slider-img" style="background-image:url(<?php echo $slider_image; ?>);"></div>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
            </section>
            <section class="services-main">
                <div class="container service-inner">
                    <div class="row">
                        <ul>
							<?php 
							if( have_rows('services_icon_repeater') ):
								while ( have_rows('services_icon_repeater') ) : the_row(); 
								$home_ser_icon = get_sub_field('home_services_icon');
								$home_ser_name = get_sub_field('home_service_name');
								$home_ser_link = get_sub_field('home_serivice_link');
								?>
								<li>
									<a href="<?php echo $home_ser_link; ?>" title="<?php echo $home_ser_name; ?>" target="_blank">
										<div class="service-icon"><img title="services logos" longdesc="Lumbee Services" src="<?php echo $home_ser_icon; ?>" alt="Services Images" title="<?php echo $home_ser_name; ?>"></div>
										<span><?php echo $home_ser_name; ?></span>
									</a>
								</li>
								<?php	
								endwhile;
							endif;
							?>
                        </ul>
                    </div>
                </div>
            </section>
			<?php $welcome_background = get_field('welcome_section_background'); ?>
            <section class="welcome" style="background-image:url(<?php echo $welcome_background; ?>">
                <div class="container inner-welcome-txt">
                    <div class="row">
                        <div class="col-md-8 pull-right">
						<?php $welcome_title = get_field('welcome_section_title'); ?>
							<?php if(!empty($welcome_title)){ ?>
                            <h2><?php echo $welcome_title; ?></h2>
							<?php } ?>
                            <?php $welcome_description = get_field('welcome_section_description'); ?>
							<?php if(!empty($welcome_description)){ ?>
								<?php echo $welcome_description; ?>
							<?php } ?>
							<?php $who_btn_text = get_field('welcome_who_we_are_text'); ?>
							<?php $who_btn_link = get_field('welcome_button_link'); ?>
							<?php if(!empty($who_btn_text)){ ?>
                            <div class="btn-wrapper">
                                <a href="<?php echo $who_btn_link; ?>" class="default-btn" title="<?php echo $who_btn_text; ?>"><?php echo $who_btn_text; ?></a>
                            </div>
							<?php } ?>
                        </div> 
                    </div>
                </div>
            </section>
			<?php $mt_back = get_field('mt_section_background'); ?>
            <section class="membership-benefits" style="background-image:url(<?php echo $mt_back; ?>);">
                <div class="container">
                    <div class="row">
						<?php $mt_title = get_field('mt_section_title'); ?>
						<?php if(!empty($mt_title)){ ?>
                        <div class="memeber-bnft">
                            <h2><?php echo $mt_title; ?></h2>
                        </div>
						<?php } ?>
						<?php 
						if( have_rows('home_mb_repeater') ):
							while ( have_rows('home_mb_repeater') ) : the_row();
								$mb_title = get_sub_field('mb_title');
								$mb_background = get_sub_field('mb_background');
								$mb_description = get_sub_field('mb_description');
								?>
								<div class="col-md-6 col-sm-6">
									<div class="member-bnft-img" style="background-image:url(<?php echo $mb_background; ?>);">
										<?php if(!empty($mb_title)){ ?>
										<h2><?php echo $mb_title; ?></h2>
										<?php } ?>
										<?php if(!empty($mb_description)){ ?>
										<div class="caption-benft">
										<?php echo $mb_description; ?>
										</div>
										<?php } ?>
									</div>
								</div>
								<?php 
							endwhile;
						endif;
						?>
                    </div>
                </div>
            </section>
        </div>

<?php get_footer(); ?>