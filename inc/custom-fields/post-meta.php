<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
	Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'news' )
    ->add_fields( array(
      Field::make( 'textarea', 'crb_news_description', 'Короткое описание' ),
  ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'shops' )
    ->add_fields( array(
      Field::make( 'image', 'crb_shop_logo', 'Лого' )->set_value_type( 'url'),
      Field::make( 'media_gallery', 'crb_shop_photos', 'Галерея' )->set_type( array( 'image' ) ),
      Field::make( 'select', 'crb_shop_floor', __( 'Какой этаж?' ) )
	    ->set_options( array(
	        'shops_first_floor' => 'Первый',
	        'shops_second_floor' => 'Второй',
	        'shops_third_floor' => 'Третий',
	    ) ),
  ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'restaurants' )
    ->add_fields( array(
      Field::make( 'image', 'crb_restaurants_logo', 'Лого' )->set_value_type( 'url'),
      Field::make( 'media_gallery', 'crb_restaurants_photos', 'Галерея' )->set_type( array( 'image' ) ),
      Field::make( 'select', 'crb_restaurants_floor', __( 'Какой этаж?' ) )
	    ->set_options( array(
	        'restaurants_first_floor' => 'Первый',
	        'restaurants_second_floor' => 'Второй',
	        'restaurants_third_floor' => 'Третий',
	    ) ),
  ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'services' )
    ->add_fields( array(
      Field::make( 'image', 'crb_services_logo', 'Лого' )->set_value_type( 'url'),
      Field::make( 'media_gallery', 'crb_services_photos', 'Галерея' )->set_type( array( 'image' ) ),
      Field::make( 'select', 'crb_services_floor', __( 'Какой этаж?' ) )
	    ->set_options( array(
	        'services_first_floor' => 'Первый',
	        'services_second_floor' => 'Второй',
	        'services_third_floor' => 'Третий',
	    ) ),
  ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'entertainment' )
    ->add_fields( array(
      Field::make( 'image', 'crb_entertainment_logo', 'Лого' )->set_value_type( 'url'),
      Field::make( 'media_gallery', 'crb_entertainment_photos', 'Галерея' )->set_type( array( 'image' ) ),
      Field::make( 'select', 'crb_entertainment_floor', __( 'Какой этаж?' ) )
	    ->set_options( array(
	        'entertainment_first_floor' => 'Первый',
	        'entertainment_second_floor' => 'Второй',
	        'entertainment_third_floor' => 'Третий',
	    ) ),
  ) );
}

?>