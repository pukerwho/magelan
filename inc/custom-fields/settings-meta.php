<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( __('Общие настройки'), array(
        Field::make( 'text', 'footer_phone', 'Контактний телефон (подвал)' ),
    ) )
    ->add_tab( __('Бренды'), array(
        Field::make( 'complex', 'crb_brands', 'Бренды' )
            ->set_layout( 'tabbed-horizontal')
            ->add_fields( array(
                Field::make( 'image', 'crb_brands_img', 'Логотип' )->set_value_type( 'url'),
        ) ),
    ) )
    ->add_tab( __('Соцсети'), array(
        Field::make( 'text', 'crb_facebook', 'Посилання на Facebook' ),
        Field::make( 'text', 'crb_instagram', 'Посилання на Instagram' ),
        Field::make( 'text', 'crb_twitter', 'Посилання на Twitter' ),
    ) );
}

?>