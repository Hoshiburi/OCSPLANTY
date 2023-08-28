<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <div id="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	  	<img src="<?php echo get_site_url() . '/wp-content/themes/beans-1.5.1/OSCPlanty/images/Logo.png'; ?>" alt="Logo">
      </a>
    </div>
    <nav class="menu_nav">
      <?php
        $menu_args = array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'main-menu',
        );
        wp_nav_menu( $menu_args );
      ?>
    </nav>
  </header>
