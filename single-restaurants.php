<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="p_single">
		<div class="heroslider">
			<!-- Swiper -->
		  <div class="swiper-container swiper-single">
		    <div class="swiper-wrapper">
		    	<?php 
					$single_restaurants_photos = carbon_get_the_post_meta('crb_restaurants_photos');
					foreach ( $single_restaurants_photos as $single_restaurants_photo ): ?>
						<?php $photo_src = wp_get_attachment_image_src($single_restaurants_photo, 'large'); ?>
						<div class="swiper-slide">
							<img src="<?php echo $photo_src[0]; ?>"/>
						</div>
					<?php endforeach; ?>
		    </div>
		    <!-- Add Pagination -->
		    <div class="swiper-pagination"></div>
		  </div>
		</div>
		<div class="single-inner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="/restaurants">
							<div class="single-inner__back">
								<div class="single-inner__back-img">
									<img src="<?php bloginfo('template_url') ?>/img/back.svg" height="21px" alt="">
								</div>
								<div class="single-inner__back-text">
									<?php pll_e('Назад до списку ресторанів'); ?>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="single-inner__title">
							<h1><?php the_title(); ?></h1>	
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="single-inner__content">
							<?php the_content(); ?>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>