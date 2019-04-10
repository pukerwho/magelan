<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
  Container::make( 'post_meta', 'About' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_about.php' )
    ->add_fields( array(
    	Field::make( 'media_gallery', 'crb_about_photos', 'Фото для Слайдера' )->set_type( array( 'image' ) )
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