<div class="p_main__news">
	<div class="p_main__news-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="p_main__news-title__inner">
						<?php _e('News & Sales', 'magelan-theme'); ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container p_main__news-bg">
		<div class="row justify-content-center">
			<?php 
		  $custom_query_news = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 2) );
		  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
				<div class="col-md-5 offset-md-1">
					<div class="p_main__news-subtitle">
						<?php the_title(); ?>
					</div>
					<div class="p_main__news-description">
						<?php echo carbon_get_the_post_meta('crb_news_description'); ?>
					</div>
					<a href="<?php echo get_the_permalink(); ?>">
						<div class="p_main__news-more">
							<div class="p_main__news-more__line"></div>
							<?php _e('Дізнатися більше', 'magelan-theme'); ?>
						</div>
					</a>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<a href="/news">
					<div class="p_main__news-btn">
						<?php _e('Всі новини', 'magelan-theme'); ?>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>