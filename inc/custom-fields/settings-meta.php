<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( __('Общие настройки'), array(
        
    ) )
    ->add_tab( __('Бренды'), array(
        Field::make( 'complex', 'crb_brands', 'Бренды' )
            ->set_layout( 'tabbed-horizontal')
            ->add_fields( array(
                Field::make( 'image', 'crb_brands_img', 'Логотип' )->set_value_type( 'url'),
        ) ),
    ) )
    ->add_tab( __('Магазины'), array(
        Field::make( 'complex', 'crb_shops', 'Слайдер' )
            ->set_layout( 'tabbed-horizontal')
            ->add_fields( array(
                Field::make( 'image', 'crb_shops_img', 'Фото в слайдере' )->set_value_type( 'url'),
        ) ),
    ) )
    ->add_tab( __('Ресторани'), array(
        Field::make( 'complex', 'crb_restaurants', 'Слайдер' )
            ->set_layout( 'tabbed-horizontal')
            ->add_fields( array(
                Field::make( 'image', 'crb_restaurants_img', 'Фото в слайдере' )->set_value_type( 'url'),
        ) ),
    ) )
    ->add_tab( __('Розваги'), array(
        Field::make( 'complex', 'crb_entertainment', 'Слайдер' )
            ->set_layout( 'tabbed-horizontal')
            ->add_fields( array(
                Field::make( 'image', 'crb_entertainment_img', 'Фото в слайдере' )->set_value_type( 'url'),
        ) ),
    ) )
    ->add_tab( __('Послуги'), array(
        Field::make( 'complex', 'crb_services', 'Слайдер' )
            ->set_layout( 'tabbed-horizontal')
            ->add_fields( array(
                Field::make( 'image', 'crb_services_img', 'Фото в слайдере' )->set_value_type( 'url'),
        ) ),
    ) );
}

?>