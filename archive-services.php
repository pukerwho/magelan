<?php get_header(); ?>

<div class="p_services">
	<div class="heroslider">
		<!-- Swiper -->
	  <div class="swiper-container swiper-services">
	    <div class="swiper-wrapper">
	    	<?php
				$services_photos = carbon_get_theme_option( 'crb_services' );
				foreach ( $services_photos as $services_photo ): ?>
					<div class="swiper-slide">
						<img src="<?php echo $services_photo['crb_services_img'] ?>" alt="">	
					</div>
				<?php endforeach; ?>
	    </div>
	    <!-- Add Pagination -->
	    <div class="swiper-pagination"></div>
	  </div>
	</div>
	<div class="archive-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="archive-inner__title">
						<h1><?php _e('Послуги', 'magelan-theme'); ?></h1>	
					</div>
				</div>
			</div>
			<div class="row tabcontent">
				<?php 
			  $custom_query_news = new WP_Query( array( 
			  	'post_type' => 'services', 
			  	'orderby' => 'menu_order',
			  	'order' => 'ASC',
			  ) );
			  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
			  	<div class="col-md-3">
			  		<div class="archive-item">
			  			<div class="archive-item__logo">
			  				<img src="<?php echo carbon_get_the_post_meta('crb_services_logo'); ?>" alt="<?php the_title(); ?>">
			  			</div>
			  			<a href="<?php echo get_permalink(); ?>">
				  			<div class="archive-item__title">
				  				<?php the_title(); ?>		
				  			</div>
				  		</a>
			  		</div>
			  	</div>
			  <?php endwhile; endif; ?>
			</div>
		</div>
		<section id="p_main_brands">
			<?php get_template_part('blocks/main/p_main_brands', 'magelan-theme'); ?>
		</section>		
	</div>
</div>

<?php get_footer(); ?>