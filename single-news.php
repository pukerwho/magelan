<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="p_single">
		<div class="container">
			<div class="row p_single-news__row">
				<div class="col-md-5">
					<div class="p_single-news__img">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">	
					</div>
				</div>
				<div class="col-md-6">
					<div class="p_single-news__content">
						<div class="p_single-news__title">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="p_single-news__text">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section id="p_main_brands">
			<?php get_template_part('blocks/main/p_main_brands', 'magelan-theme'); ?>
		</section>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>