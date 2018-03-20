<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 <div id="header">
     <img src="<?php bloginfo('template_directory'); ?>/images/logo.gif" alt="">
  </div>

   <?php
      $defaults = array(
        'theme_location'  => 'main-menu',
        'menu'            => '',
        'container'       => 'nav',
        'container_class' => '',
        'container_id'    => 'navigation',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
      );

      wp_nav_menu( $defaults );
   ?>
