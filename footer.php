    </section>
    <footer class="footer" id="footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3">
    				<div class="footer__list">
    					<?php wp_nav_menu([
                'theme_location' => 'footer_menu_one',
                'container' => 'div',
                'container_class' => 'footer_menu_one',
                'menu_class' => 'footer_menu_one'
              ]); ?>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="footer__list">
    					<?php wp_nav_menu([
                'theme_location' => 'footer_menu_two',
                'container' => 'div',
                'container_class' => 'footer_menu_two',
                'menu_class' => 'footer_menu_two'
              ]); ?>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="footer__text">
    					<p>
    						Мы працюємо щоденно  з 9:00 по 21:00	
    					</p>
    					<p>
    						Київ, пр-т Академіка Глушкова, 13-Б
    					</p>
    				</div>
    				<div class="footer__phones">
    					<a href="tel:+38 (097) 95 77 557">+38 (097) 95 77 557</a>
    				</div>
    			</div>
    			<div class="col-md-2">
    				<div class="footer__social">
    					<li><a href="#"><img src="<?php bloginfo('template_url') ?>/img/social/facebook.svg" alt="Facebook"></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_url') ?>/img/social/twitter.svg" alt="Facebook"></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_url') ?>/img/social/inst.svg" alt="Facebook"></a></li>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="footer__logo">
    		<div class="container">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<div class="footer__logo-inner">
	    					<img src="<?php bloginfo('template_url') ?>/img/logo-footer.svg" alt="">
	    				</div>
	    			</div>
	    		</div>
	    	</div>
    	</div>
    	
    </footer>
    <?php wp_footer(); ?>
</body>
</html>