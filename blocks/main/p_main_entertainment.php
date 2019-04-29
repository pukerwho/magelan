<div class="p_main__entertainment">
	<div class="container">
		<div class="row">
			<div class="col-md-12 d-flex justify-content-center">
				<div class="p_main__entertainment-content p_main__block-content">
					<div class="p_main__entertainment-img p_main__block-img" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
						<img src="<?php echo carbon_get_the_post_meta('crb_home_entertainment_photo') ?>" alt="Розваги">
					</div>
					<div class="p_main__entertainment-info" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1500">
						<div class="p_main__entertainment-title p_main__block-title">
							<?php pll_e('Розваги'); ?>
						</div>
						<div class="p_main__block-line"></div>
						<div class="p_main__entertainment-text p_main__block-text">
							<?php echo carbon_get_the_post_meta('crb_home_entertainment_description') ?>
						</div>
						<a href="<?php echo get_page_url('tpl_entertainment') ?>">
							<div class="p_main__more">
								<?php pll_e('Детальнiше'); ?>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p-relative">
					<div class="entertainment-bubbles-block">
						<div class="entertainment-bubbles"></div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>