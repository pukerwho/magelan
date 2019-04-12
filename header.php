<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <?php if( is_page_template( 'tpl_main.php' )): ?>
  <header id="header" class="header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header__row">
            <div class="header__logo">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_url') ?>/img/mainlogo.svg" alt="Магелан">
              </a>
            </div>
            <div class="header__menu">
              <div class="header__lang">
                РУС
              </div>
              <?php wp_nav_menu([
                'theme_location' => 'head_menu',
                'container' => 'nav',
                'container_class' => 'head_menu',
                'menu_id' => 'head_menu',
                'menu_class' => 'd-flex'
              ]); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <header class="header header-in">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header__row">
            <div class="header__logo">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_url') ?>/img/logo-small.svg" alt="Магелан">
              </a>
            </div>
            <div class="header__menu">
              <div class="header__lang">
                РУС
              </div>
              <?php wp_nav_menu([
                'theme_location' => 'head_menu',
                'container' => 'nav',
                'container_class' => 'head_menu',
                'menu_id' => 'head_menu',
                'menu_class' => 'd-flex'
              ]); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <? else: ?>
    <header class="header header-in">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header__row">
              <div class="header__logo">
                <a href="<?php echo home_url(); ?>">
                  <img src="<?php bloginfo('template_url') ?>/img/logo-small.svg" alt="Магелан">
                </a>
              </div>
              <div class="header__menu">
                <div class="header__lang">
                  РУС
                </div>
                <?php wp_nav_menu([
                  'theme_location' => 'head_menu',
                  'container' => 'nav',
                  'container_class' => 'head_menu',
                  'menu_id' => 'head_menu',
                  'menu_class' => 'd-flex'
                ]); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  <?php endif ?>
  <section id="content" role="main">