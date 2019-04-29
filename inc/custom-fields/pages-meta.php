<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
  Container::make( 'post_meta', 'Home' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_main.php' )
    ->add_fields( array(
      Field::make( 'textarea', 'crb_home_about_description','Текст ПРО ТРЦ' ),
      Field::make( 'image', 'crb_home_about_photo', 'Фото ТРЦ' )->set_value_type( 'url'),
      Field::make( 'textarea', 'crb_home_shops_description','Текст Магазини' ),
      Field::make( 'image', 'crb_home_shops_photo', 'Фото Магазини' )->set_value_type( 'url'),
      Field::make( 'textarea', 'crb_home_entertainment_description','Текст Розваги' ),
      Field::make( 'image', 'crb_home_entertainment_photo', 'Фото Розваги' )->set_value_type( 'url'),
      Field::make( 'textarea', 'crb_home_restaurants_description','Текст Ресторани' ),
      Field::make( 'image', 'crb_home_restaurants_photo', 'Фото Ресторани' )->set_value_type( 'url'),
      Field::make( 'textarea', 'crb_home_services_description','Текст Послуги' ),
      Field::make( 'image', 'crb_home_services_photo', 'Фото Послуги' )->set_value_type( 'url'),
    ) );
  Container::make( 'post_meta', 'About' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_about.php' )
    ->add_fields( array(
    	Field::make( 'media_gallery', 'crb_about_photos', 'Фото для Слайдера' )->set_type( array( 'image' ) )
    ) );
  Container::make( 'post_meta', 'Entertainment' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_entertainment.php' )
    ->add_fields( array(
      Field::make( 'media_gallery', 'crb_entertainment_slider_photos', 'Фото для Слайдера' )->set_type( array( 'image' ) )
    ) );
  Container::make( 'post_meta', 'Restaurants' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_restaurants.php' )
    ->add_fields( array(
      Field::make( 'media_gallery', 'crb_restaurants_slider_photos', 'Фото для Слайдера' )->set_type( array( 'image' ) )
    ) );
  Container::make( 'post_meta', 'Services' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_services.php' )
    ->add_fields( array(
      Field::make( 'media_gallery', 'crb_services_slider_photos', 'Фото для Слайдера' )->set_type( array( 'image' ) )
    ) );
  Container::make( 'post_meta', 'Shops' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_shops.php' )
    ->add_fields( array(
      Field::make( 'media_gallery', 'crb_shops_slider_photos', 'Фото для Слайдера' )->set_type( array( 'image' ) )
    ) );
  Container::make( 'post_meta', 'Contact' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_contact.php' )
    ->add_fields( array(
    	Field::make( 'rich_text', 'crb_feedback_time', 'Часи роботи' ),
    	Field::make( 'complex', 'crb_feedback_contacts', 'Зворотній звязок: контакти' )
          ->set_layout( 'tabbed-horizontal')
          ->add_fields( array(
            Field::make( 'text', 'crb_feedback_contacts_position','Посада' ),
            Field::make( 'complex', 'crb_feedback_contacts__phones', 'Номера телефону' )
		          ->set_layout( 'tabbed-horizontal')
		          ->add_fields( array(
		              Field::make( 'text', 'crb_feedback_contacts__phone', 'Номер телефону' ),
		        ) ),
        ) ),
      Field::make( 'complex', 'crb_arenda_contacts', 'Оренда: контакти' )
          ->set_layout( 'tabbed-horizontal')
          ->add_fields( array(
            Field::make( 'text', 'crb_arenda_contacts_name','Имя' ),
            Field::make( 'text', 'crb_arenda_contacts_position','Посада' ),
            Field::make( 'text', 'crb_arenda_contacts_phone','Телефон' ),
            Field::make( 'text', 'crb_arenda_contacts_email','Email' ),
        ) ),
      Field::make( 'textarea', 'crb_contacts_map', 'Google Map (Iframe)' ),
    ) );
}

?>