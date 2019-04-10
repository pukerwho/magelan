<?php
/*
Template Name: Головна
*/
?>

<?php get_header(); ?>

<section id="p_main_welcome">
	<?php get_template_part('blocks/main/p_main_welcome', 'magelan-theme'); ?>
</section>
<section id="p_main_about">
	<?php get_template_part('blocks/main/p_main_about', 'magelan-theme'); ?>
</section>
<section id="p_main_shops">
	<?php get_template_part('blocks/main/p_main_shops', 'magelan-theme'); ?>
</section>
<section id="p_main_news_sales">
	<?php get_template_part('blocks/main/p_main_news_sales', 'magelan-theme'); ?>
</section>
<section id="p_main_entertainment">
	<?php get_template_part('blocks/main/p_main_entertainment', 'magelan-theme'); ?>
</section>
<section id="p_main_restaurants">
	<?php get_template_part('blocks/main/p_main_restaurants', 'magelan-theme'); ?>
</section>
<section id="p_main_services">
	<?php get_template_part('blocks/main/p_main_services', 'magelan-theme'); ?>
</section>
<section id="p_main_brands">
	<?php get_template_part('blocks/main/p_main_brands', 'magelan-theme'); ?>
</section>

<?php get_footer(); ?>