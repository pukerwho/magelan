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
							<li class="active" onclick="showMapContent(event, 'restaurants_first')">
								Рестораны
							</li>
							<li onclick="showMapContent(event, 'entertainment_first')">
								Розваги
							</li>
							<li onclick="showMapContent(event, 'services_first')">
								Послуги
							</li>
							<li onclick="showMapContent(event, 'shops_first')">
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
							<li onclick="showMapContent(event, 'restaurants_second')">
								Рестораны
							</li>
							<li onclick="showMapContent(event, 'entertainment_second')">
								Розваги
							</li>
							<li onclick="showMapContent(event, 'services_second')">
								Послуги
							</li>
							<li onclick="showMapContent(event, 'shops_second')">
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
							<li onclick="showMapContent(event, 'restaurants_third')">
								Рестораны
							</li>
							<li onclick="showMapContent(event, 'entertainment_third')">
								Розваги
							</li>
							<li onclick="showMapContent(event, 'services_third')">
								Послуги
							</li>
							<li onclick="showMapContent(event, 'shops_third')">
								Магазини
							</li>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="p_map__grid">
					<!-- Restaurants -->
					<div id="restaurants_first" class="active p_map__content">
						<?php get_template_part('blocks/map/p_map_restaurants_first', 'magelan-theme') ?>
					</div>
					<div id="restaurants_second" class="p_map__content">
						<?php get_template_part('blocks/map/p_map_restaurants_second', 'magelan-theme') ?>
					</div>
					<div id="restaurants_third" class="p_map__content">
						<?php get_template_part('blocks/map/p_map_restaurants_third', 'magelan-theme') ?>
					</div>
					<!-- Entertainment -->
					<div id="entertainment_first" class="p_map__content">
						<?php get_template_part('blocks/map/p_map_entertainment_first', 'magelan-theme') ?>
					</div>
					<div id="entertainment_second" class="p_map__content">
						<?php get_template_part('blocks/map/p_map_entertainment_second', 'magelan-theme') ?>
					</div>
					<div id="entertainment_third" class="p_map__content">
						<?php get_template_part('blocks/map/p_map_entertainment_third', 'magelan-theme') ?>
					</div>
					<!-- Services -->
					<div id="services_first" class="p_map__content">
						<?php get_template_part('blocks/map/p_map_services_first', 'magelan-theme') ?>
					</div>
					<div id="services_second" class="p_map__content">
						<?php get_template_part('blocks/map/p_map_services_second', 'magelan-theme') ?>
					</div>
					<div id="services_third" class="p_map__content">
						<?php get_template_part('blocks/map/p_map_services_third', 'magelan-theme') ?>
					</div>
					<!-- Shops -->
					<div id="shops_first" class="p_map__content">
						<?php get_template_part('blocks/map/p_map_shops_first', 'magelan-theme') ?>
					</div>
					<div id="shops_second" class="p_map__content">
						<?php get_template_part('blocks/map/p_map_shops_second', 'magelan-theme') ?>
					</div>
					<div id="shops_third" class="p_map__content">
						<?php get_template_part('blocks/map/p_map_shops_third', 'magelan-theme') ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="callback">
					<?php _e('Форма зворотнього зв’язку', 'magelan-theme'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p-relative">
					<div class="long-map-bubbles-block">
						<div class="long-map-bubbles"></div>
					</div>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p-relative">
					<div class="short-map-bubbles-block">
						<div class="short-map-bubbles"></div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>