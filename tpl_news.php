<?php
/*
Template Name: Новини
*/
?>

<?php get_header(); ?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.2&appId=138907523363949&autoLogAppEvents=1"></script>

<div class="p_news">
	<div class="inner-bg"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="p_news__title" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
					<h1><?php pll_e('Новини та  акції'); ?></h1>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<?php 
				global $wp_query, $wp_rewrite;  
				$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
			  $custom_query_news = new WP_Query( array( 'post_type' => 'news', 'paged' => $current, 'posts_per_page' => 10) );
			  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
					<div class="p_news__grid p_news__row">
						<div class="p_news__photo" data-aos="fade-in" data-aos-anchor-placement="center-bottom" data-aos-duration="1100" data-aos-delay="500">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">	
						</div>
						<div class="p_news__content" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000" data-aos-delay="1000">
							<div class="p_news__subtitle">
								<?php the_title(); ?>
							</div>
							<div class="p_news__description">
								<?php echo carbon_get_the_post_meta('crb_news_description'); ?>
							</div>
							<a href="<?php echo carbon_get_the_post_meta('crb_news_link'); ?>" target="_blank">
								<div class="p_main__news-more">
									<div class="p_main__news-more__line"></div>
									<?php pll_e('Дізнатися більше'); ?>
								</div>
							</a>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
			<div class="col-md-4">
				<div class="fb-page" data-href="https://www.facebook.com/magelankiev" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/magelankiev" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/magelankiev">ТРЦ &quot;Магелан&quot;</a></blockquote></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="b_pagination">
					<?php 
						$big = 999999999; // уникальное число
						echo paginate_links( array(
						'format'  => 'page/%#%',
						'current'   => $current,
						'total'   => $custom_query_news->max_num_pages,
						'prev_next' => true,
						'next_text' => (''),
						'prev_text' => ('')
						)); 
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p-relative">
					<div class="long-news-bubbles-block">
						<div class="long-news-bubbles"></div>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<section id="p_main_brands">
		<?php get_template_part('blocks/main/p_main_brands', 'magelan-theme'); ?>
	</section>	
</div>

<?php get_footer(); ?>