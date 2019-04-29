<div class="p_main__about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 d-flex justify-content-center">
				<div class="p_main__about-content p_main__block-content">
					<div class="p_main__about-img p_main__block-img" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
						<img src="<?php echo carbon_get_the_post_meta('crb_home_about_photo') ?>" alt="Про ТРЦ">
					</div>
					<div class="p_main__about-info" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1500">
						<div class="p_main__about-title p_main__block-title" data-scroll>
							<?php pll_e('Про ТРЦ'); ?>
						</div>
						<div class="p_main__about-line"></div>
						<div class="p_main__about-text">
							<?php echo carbon_get_the_post_meta('crb_home_about_description') ?>
						</div>
						<a href="<?php echo get_page_url('tpl_about') ?>">
							<div class="p_main__more">
								<?php pll_e('Детальнiше'); ?>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>