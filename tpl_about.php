<?php
/*
Template Name: Про нас
*/
?>

<?php get_header(); ?>

<div class="p_about">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="heroslider">
			<!-- Swiper -->
		  <div class="swiper-container swiper-about">
		    <div class="swiper-wrapper">
		    	<?php 
					$about_sliders = carbon_get_the_post_meta('crb_about_photos');
					foreach ( $about_sliders as $about_slider ): ?>
						<?php $photo_src = wp_get_attachment_image_src($about_slider, 'large'); ?>
						<div class="swiper-slide">
							<img src="<?php echo $photo_src[0]; ?>"/>
						</div>
					<?php endforeach; ?>
		    </div>
		    <!-- Add Pagination -->
		    <div class="swiper-pagination"></div>
		  </div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="p_about__title">
						<h1><?php the_title(); ?></h1>	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class="p_about__content">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-md-3 offset-md-2">
					<div class="p_about__logo">
						<img src="<?php bloginfo('template_url') ?>/img/logo-footer.svg" alt="">
					</div>
				</div>
				<div class="p-relative">
					<div class="long-services-bubbles-block">
						<div class="long-services-bubbles"></div>
					</div>	
				</div>
			</div>
		</div>
	<?php endwhile; else: ?>
		<p><?php _e('Ничего не найдено'); ?></p>
	<?php endif; ?>
</div>

<section id="p_main_news_sales">
	<?php get_template_part('blocks/main/p_main_news_sales', 'magelan-theme'); ?>
</section>

<section id="p_main_brands">
	<?php get_template_part('blocks/main/p_main_brands', 'magelan-theme'); ?>
</section>

<?php get_footer(); ?>