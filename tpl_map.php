<?php
/*
Template Name: Карта
*/
?>

<?php get_header(); ?>

<div class="p_map">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="p_map__title">
					<h1><?php _e('Карта ТРЦ', 'magelan-theme'); ?></h1>	
				</div>
			</div>
		</div>
		<div class="row p_map__row">
			<div class="col-md-4">
				<div class="p_map__nav">
					<div class="p_map__nav-floor">
						<div class="p_map__nav-heading p_map__nav-floor-open">
							<div class="p_map__nav-subtitle">
								I Поверх
							</div>
							<div class="p_map__nav-arrow">
								<img src="<?php bloginfo('template_url') ?>/img/back.svg" alt="">
							</div>	
						</div>
						<div class="p_map__nav-list">
							<li class="active">
								Рестораны
							</li>
							<li>
								Розваги
							</li>
							<li>
								Послуги
							</li>
							<li>
								Магазини
							</li>
						</div>
					</div>
					<div class="p_map__nav-floor">
						<div class="p_map__nav-heading">
							<div class="p_map__nav-subtitle">
								II  Поверх
							</div>
							<div class="p_map__nav-arrow">
								<img src="<?php bloginfo('template_url') ?>/img/back.svg" alt="">
							</div>	
						</div>
						<div class="p_map__nav-list">
							<li class="active">
								Рестораны
							</li>
							<li>
								Розваги
							</li>
							<li>
								Послуги
							</li>
							<li>
								Магазини
							</li>
						</div>
					</div>
					<div class="p_map__nav-floor">
						<div class="p_map__nav-heading">
							<div class="p_map__nav-subtitle">
								III  Поверх
							</div>
							<div class="p_map__nav-arrow">
								<img src="<?php bloginfo('template_url') ?>/img/back.svg" alt="">
							</div>	
						</div>
						<div class="p_map__nav-list">
							<li class="active">
								Рестораны
							</li>
							<li>
								Розваги
							</li>
							<li>
								Послуги
							</li>
							<li>
								Магазини
							</li>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="p_map__grid">
					<?php 
				  $custom_query_news = new WP_Query( array( 
				  	'post_type' => 'restaurants', 
				  	'orderby' => 'menu_order',
				  	'order' => 'ASC',
				  ) );
				  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
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
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>