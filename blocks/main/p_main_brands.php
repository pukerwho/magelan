<div class="p_main__brands">
	<div class="p_main__brands-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="p_main__brands-title__inner">
						<?php _e('Brands', 'magelan-theme'); ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container p_main__brands-bg">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="p_main__brands-photos">
					<?php
					$brands_photos = carbon_get_theme_option( 'crb_brands' );
					foreach ( array_slice($brands_photos, 0, 7)  as $brands_photo ): ?>
						<div class="p_main__brands-photo">
							<img src="<?php echo $brands_photo['crb_brands_img'] ?>" alt="">	
						</div>
					<?php endforeach; ?>
				</div>
				
			</div>
		</div>
	</div>
</div>