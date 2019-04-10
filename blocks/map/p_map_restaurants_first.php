<?php 
$custom_query_restaurants = new WP_Query( array( 
	'post_type' => 'restaurants', 
	'orderby' => 'menu_order',
	'order' => 'ASC',
	'meta_query' => array(
		array(
			'key'     => 'crb_restaurants_floor',
			'value'   => 'restaurants_first_floor',
			'compare' => '=',
		),
	)
) );
if ($custom_query_restaurants->have_posts()) : while ($custom_query_restaurants->have_posts()) : $custom_query_restaurants->the_post(); ?>
	<a href="<?php echo get_permalink(); ?>">
		<div class="p_map__item">
			<?php 
			$single_restaurants_photos = carbon_get_the_post_meta('crb_restaurants_photos');
			foreach ( array_slice($single_restaurants_photos, 0, 1) as $single_restaurants_photo ): ?>
				<?php $photo_src = wp_get_attachment_image_src($single_restaurants_photo, 'medium'); ?>
				<div class="p_map__item-thumb">
					<img src="<?php echo $photo_src[0]; ?>"/>	
				</div>
			<?php endforeach; ?>
			<div class="p_map__item-bg">
				<div class="p_map__item-title">
					<?php the_title(); ?>
				</div>
				<div class="p_map__item-description">
					<?php echo carbon_get_the_post_meta('crb_restaurants_shortdesc'); ?>
				</div>
			</div>
		</div>
	</a>
<?php endwhile; endif; ?>