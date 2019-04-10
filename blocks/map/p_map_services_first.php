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
	<div class="p_map__item">
		<img src="<?php echo carbon_get_the_post_meta('crb_restaurants_logo'); ?>" alt="<?php the_title(); ?>">
		<div class="p_map__item-bg">
			<div class="p_map__item-title">
				<?php the_title(); ?>
			</div>
			<div class="p_map__item-description">
				В витрине кофейни-кондитерской представлены пирожные, чизкейки, макароны, кексы, эклеры, сладкие рулеты, мармелад, конфеты.
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>