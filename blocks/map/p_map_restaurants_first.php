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