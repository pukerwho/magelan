<?php
/*
Template Name: Магазини
*/
?>

<?php get_header(); ?>

<div class="p_shops">
	<div class="heroslider">
		<!-- Swiper -->
	  <div class="swiper-container swiper-shops">
	    <div class="swiper-wrapper">
	    	<?php 
				$services_photos = carbon_get_the_post_meta('crb_shops_slider_photos');
				foreach ( $services_photos as $services_photo ): ?>
					<?php $photo_src = wp_get_attachment_image_src($services_photo, 'large'); ?>
					<div class="swiper-slide">
						<img src="<?php echo $photo_src[0]; ?>"/>
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
						<h1><?php pll_e('Магазини'); ?></h1>	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="archive-tabs">
						<div class="archive-tab active" onclick="showContent(event, 'firstFloor')">
							<?php pll_e('I Поверх'); ?>
						</div>
						<div class="archive-tab" onclick="showContent(event, 'secondFloor')">
							<?php pll_e('II Поверх'); ?>
						</div>
						<div class="archive-tab" onclick="showContent(event, 'thirdFloor')">
							<?php pll_e('III Поверх'); ?>
						</div>
					</div>
				</div>
			</div>
			<div id="firstFloor" class="row tabcontent">
				<?php 
			  $custom_query_shops = new WP_Query( array( 
			  	'post_type' => 'shops', 
			  	'orderby' => 'menu_order',
			  	'order' => 'ASC',
			  	'meta_query' => array(
						array(
							'key'     => 'crb_shop_floor',
							'value'   => 'shops_first_floor',
							'compare' => '=',
						),
					)
			  ) );
			  if ($custom_query_shops->have_posts()) : while ($custom_query_shops->have_posts()) : $custom_query_shops->the_post(); ?>
			  	<div class="col-md-3">
			  		<div class="archive-item">
			  			<div class="archive-item__logo">
			  				<img src="<?php echo carbon_get_the_post_meta('crb_shop_logo'); ?>" alt="<?php the_title(); ?>">
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
			<div id="secondFloor" class="row tabcontent">
				<?php 
			  $custom_query_shops = new WP_Query( array( 
			  	'post_type' => 'shops', 
			  	'orderby' => 'menu_order',
			  	'order' => 'ASC',
			  	'meta_query' => array(
						array(
							'key'     => 'crb_shop_floor',
							'value'   => 'shops_second_floor',
							'compare' => '=',
						),
					)
			  ) );
			  if ($custom_query_shops->have_posts()) : while ($custom_query_shops->have_posts()) : $custom_query_shops->the_post(); ?>
			  	<div class="col-md-3">
			  		<div class="archive-item">
			  			<div class="archive-item__logo">
			  				<img src="<?php echo carbon_get_the_post_meta('crb_shop_logo'); ?>" alt="<?php the_title(); ?>">
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
			<div id="thirdFloor" class="row tabcontent">
				<?php 
			  $custom_query_shops = new WP_Query( array( 
			  	'post_type' => 'shops', 
			  	'orderby' => 'menu_order',
			  	'order' => 'ASC',
			  	'meta_query' => array(
						array(
							'key'     => 'crb_shop_floor',
							'value'   => 'shops_third_floor',
							'compare' => '=',
						),
					)
			  ) );
			  if ($custom_query_shops->have_posts()) : while ($custom_query_shops->have_posts()) : $custom_query_shops->the_post(); ?>
			  	<div class="col-md-3">
			  		<div class="archive-item">
			  			<div class="archive-item__logo">
			  				<img src="<?php echo carbon_get_the_post_meta('crb_shop_logo'); ?>" alt="<?php the_title(); ?>">
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