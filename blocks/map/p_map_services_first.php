<?php 
$custom_query_services = new WP_Query( array( 
	'post_type' => 'services', 
	'orderby' => 'menu_order',
	'order' => 'ASC',
	'meta_query' => array(
		array(
			'key'     => 'crb_services_floor',
			'value'   => 'services_first_floor',
			'compare' => '=',
		),
	)
) );
if ($custom_query_services->have_posts()) : while ($custom_query_services->have_posts()) : $custom_query_services->the_post(); ?>
	<a href="<?php echo get_permalink(); ?>">
		<div class="p_map__item">
			<?php 
			$single_services_photos = carbon_get_the_post_meta('crb_services_photos');
			foreach ( array_slice($single_services_photos, 0, 1) as $single_services_photo ): ?>
				<?php $photo_src = wp_get_attachment_image_src($single_services_photo, 'medium'); ?>
				<div class="p_map__item-thumb">
					<img src="<?php echo $photo_src[0]; ?>"/>	
				</div>
			<?php endforeach; ?>
			<div class="p_map__item-bg">
				<div class="p_map__item-title">
					<?php the_title(); ?>
				</div>
				<div class="p_map__item-description">
					В витрине кофейни-кондитерской представлены пирожные, чизкейки, макароны, кексы, эклеры, сладкие рулеты, мармелад, конфеты.
				</div>
			</div>
		</div>
	</a>
<?php endwhile; endif; ?>