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
	<a href="<?php echo get_permalink(); ?>">
		<div class="p_map__item">
			<?php 
			$single_shops_photos = carbon_get_the_post_meta('crb_shop_photos');
			foreach ( array_slice($single_shops_photos, 0, 1) as $single_shops_photo ): ?>
				<?php $photo_src = wp_get_attachment_image_src($single_shops_photo, 'medium'); ?>
				<div class="p_map__item-thumb">
					<img src="<?php echo $photo_src[0]; ?>"/>	
				</div>
			<?php endforeach; ?>
			<div class="p_map__item-bg">
				<div class="p_map__item-title">
					<?php the_title(); ?>
				</div>
				<div class="p_map__item-description">
					<?php echo carbon_get_the_post_meta('crb_shop_shortdesc'); ?>
				</div>
			</div>
		</div>
	</a>
<?php endwhile; endif; ?>