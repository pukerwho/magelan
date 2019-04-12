<?php
/*
Template Name: Контакти
*/
?>

<?php get_header(); ?>

<div class="p_contact">
	<div class="inner-bg"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="p_contact__title">
					<h1><?php _e('Контакти', 'magelan-theme'); ?></h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="p_contact__description" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
					<?php _e('Маєш питання, потрібна додаткова інформація або у тебе є корисна порада чи пропозиція?', 'magelan-theme'); ?>
				</div>
			</div>
		</div>
		<div class="row p_contact__feedback-row">
			<div class="col-md-4">
				<div class="p_contact__upline"></div>
				<div class="p_contact__feedback-text" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000" data-aos-delay="500">
					<?php echo carbon_get_the_post_meta('crb_feedback_time') ?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="p_contact__feedback-grid" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000" data-aos-delay="750">
					<?php 
					$feedback_contacts = carbon_get_the_post_meta( 'crb_feedback_contacts' );
					foreach ( $feedback_contacts as $feedback_contact ): ?>
						<div class="p_contact__feedback-item">
							<div class="p_contact__feedback-item__position">
								<?php echo $feedback_contact['crb_feedback_contacts_position'] ?>
							</div>
							<?php foreach ( $feedback_contact['crb_feedback_contacts__phones'] as $feedback_phone ): ?>
								<div class="p_contact__feedback-item__phones">
									<?php echo $feedback_phone['crb_feedback_contacts__phone'] ?>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="p_contact__map" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2000" data-aos-delay="550">
					<?php echo carbon_get_the_post_meta('crb_contacts_map') ?>
					<div class="p_contact__map-box">
						<?php _e('03187, Україна<br>м.Київ, пр. Академіка Глушкова 13-Б', 'magelan-theme'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="p_contact__description" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
					<?php _e('Для отримання додаткової інформації щодо оренди просимо зв`язатися:', 'magelan-theme'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p-relative">
					<div class="long-services-bubbles-block">
						<div class="long-services-bubbles"></div>
					</div>	
				</div>
			</div>
		</div>
		<div class="row p_contact__arenda-row">
			<?php 
			$arenda_contacts = carbon_get_the_post_meta( 'crb_arenda_contacts' );
			foreach ( $arenda_contacts as $arenda_contact ): ?>
			<div class="col-md-4">
				<div class="p_contact__arenda-item" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1200" data-aos-delay="550">
					<div class="p_contact__arenda-name">
						<?php echo $arenda_contact['crb_arenda_contacts_name'] ?>
					</div>
					<div class="p_contact__arenda-position">
						<?php echo $arenda_contact['crb_arenda_contacts_position'] ?>
					</div>
					<div class="p_contact__arenda-phone">
						<?php echo $arenda_contact['crb_arenda_contacts_phone'] ?>
					</div>
					<div class="p_contact__arenda-email">
						<?php echo $arenda_contact['crb_arenda_contacts_email'] ?>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p-relative">
					<div class="short-services-bubbles-block">
						<div class="short-services-bubbles"></div>
					</div>	
				</div>
			</div>
		</div>
		<div class="row p_contact__bottom">
			<div class="col-md-5">
				<div data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1200">
					<div class="p_contact__description">
						<?php _e('Якщо вас зацікавила оренда торгових площ в ТРЦ МАГЕЛАН, надішліть інформацію про Вас.', 'magelan-theme'); ?>
					</div>
					<div class="p_contact__bottom-lead">
						<?php _e('Ми обов`язково розглянемо її та зв`яжемося з Вами.', 'magelan-theme'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-5 offset-md-2" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1200" data-aos-delay="750">
				<?php echo do_shortcode('[contact-form-7 id="28" title="Контакти - Форма"]') ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p-relative">
					<div class="long-map-bubbles-block">
						<div class="long-map-bubbles"></div>
					</div>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p-relative">
					<div class="short-map-bubbles-block">
						<div class="short-map-bubbles"></div>
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