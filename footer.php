    </section>
    <footer class="footer" id="footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1200">
    				<div class="footer__list">
    					<?php wp_nav_menu([
                'theme_location' => 'footer_menu_one',
                'container' => 'div',
                'container_class' => 'footer_menu_one',
                'menu_class' => 'footer_menu_one'
              ]); ?>
    				</div>
    			</div>
    			<div class="col-md-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1300">
    				<div class="footer__list">
    					<?php wp_nav_menu([
                'theme_location' => 'footer_menu_two',
                'container' => 'div',
                'container_class' => 'footer_menu_two',
                'menu_class' => 'footer_menu_two'
              ]); ?>
    				</div>
    			</div>
    			<div class="col-md-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1400">
    				<div class="footer__text">
    					<p>
    						<?php pll_e('Мы працюємо щоденно  з 9:00 по 21:00') ?>	
    					</p>
    					<p>
    						<?php pll_e('Київ, пр-т Академіка Глушкова, 13-Б') ?>
    					</p>
    				</div>
    				<div class="footer__phones">
    					<a href="tel:<?php echo carbon_get_theme_option('footer_phone') ?>"><?php echo carbon_get_theme_option('footer_phone') ?></a>
    				</div>
    			</div>
    			<div class="col-md-2" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1500">
    				<div class="footer__social">
                        <?php if(carbon_get_theme_option('crb_facebook')): ?>
                            <li><a href="c"><img src="<?php bloginfo('template_url') ?>/img/social/facebook.svg" alt="Facebook"></a></li>
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
    	<!-- <div class="footer__logo">
    		<div class="container">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<div class="footer__logo-inner">
	    					<img src="<?php bloginfo('template_url') ?>/img/logo-footer.svg" alt="">
	    				</div>
	    			</div>
	    		</div>
	    	</div>
    	</div> -->
    </footer>
    <?php if( is_page_template( 'tpl_map.php' )): ?>
        <div class="callback__modal">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="callback__box">
                            <div class="callback__close">
                                <img src="<?php bloginfo('template_url') ?>/img/close.svg" alt="" width="14px">
                            </div>
                            <div class="callback__title">
                                <?php pll_e('Форма зворотнього зв’язку') ?>
                            </div>
                            <div class="callback__line"></div>
                            <div class="callback__form">
                                <?php echo do_shortcode('[contact-form-7 id="28" title="Контакти - Форма"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal__bg"></div>
    <?php endif ?>
    <?php wp_footer(); ?>
</body>
</html>