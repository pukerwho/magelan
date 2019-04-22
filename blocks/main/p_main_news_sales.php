<div class="p_main__news">
	<div data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
		<div class="p_main__news-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="p_main__news-title__inner">
							<?php pll_e('News & Sales', 'magelan-theme'); ?>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="p_main__news-background"></div>
				</div>
			</div>
		</div>
		<div class="container p_main__news-bg swiper-container">
			<div class="row justify-content-center swiper-wrapper">
				<?php 
			  $custom_query_news = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 12) );
			  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
					<div class="col-md-5 offset-md-1 swiper-slide">
						<div class="p_main__news-subtitle">
							<?php the_title(); ?>
						</div>
						<div class="p_main__news-description">
							<?php echo carbon_get_the_post_meta('crb_news_description'); ?>
						</div>
						<a href="<?php echo carbon_get_the_post_meta('crb_news_link'); ?>" target="_blank">
							<div class="p_main__news-more">
								<div class="p_main__news-more__line"></div>
								<?php pll_e('Дізнатися більше', 'magelan-theme'); ?>
							</div>
						</a>
					</div>
				<?php endwhile; endif; ?>
			</div>
			<!-- Add Pagination -->
	    <div class="swiper-pagination"></div>
			<!-- <div class="row">
				<div class="col-md-12">
					<a href="/news">
						<div class="p_main__news-btn">
							<?php _e('Всі новини', 'magelan-theme'); ?>
						</div>
					</a>
				</div>
			</div> -->
		</div>
	</div>
	
</div>