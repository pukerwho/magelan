<div class="p_main__welcome">
	<div class="p_main__welcome-bg"></div>
	<div class="p-relative">
		<div class="p_main__welcome-birds">
			<img src="<?php bloginfo('template_url') ?>/img/birds.png" alt="">
		</div>	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="p main__welcome-showtitle">
					<div class="p_main__welcome-title">
						<?php _e('Магелан', 'magelan-theme'); ?>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="p_main__welcome-social">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="p_main__welcome-social__content">
						<div>
							Ми в соц. мережах:
						</div>
						<div class="p_main__welcome-social__content-links">
							<?php if(carbon_get_theme_option('crb_facebook')): ?>
								<li><a href="<?php echo carbon_get_theme_option('crb_facebook') ?>"><img src="<?php bloginfo('template_url') ?>/img/social/facebook.svg" alt="Facebook"></a></li>
							<?php endif ?>
							<?php if(carbon_get_theme_option('crb_instagram')): ?>
								<li><a href="<?php echo carbon_get_theme_option('crb_instagram') ?>"><img src="<?php bloginfo('template_url') ?>/img/social/inst.svg" alt="Instagram"></a></li>
							<?php endif ?>
							<?php if(carbon_get_theme_option('crb_twitter')): ?>
								<li><a href="<?php echo carbon_get_theme_option('crb_twitter') ?>"><img src="<?php bloginfo('template_url') ?>/img/social/twitter.svg" alt="Twitter"></a></li>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>