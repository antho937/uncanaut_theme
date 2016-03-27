<html>
  <head>
    <title>Tutorial theme</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  </head>
  <body>
    <div id="wrapper">
    <div id="header" style="background-image: url(<?php echo (get_theme_mod('header-bg')) ?>);">
      <div id="filtre" style="background-color: <?php echo(get_theme_mod('overlay_controller')) ?>; opacity: 0.5;"></div>
      <div class="hamburger_button">
        <div class="ham"></div>
        <div class="ham"></div>
        <div class="ham"></div>
      </div>
      
      <div id="container">
      <img src="<?php echo (get_theme_mod('logo_controller')) ?>" alt="logo de uncanaut">
      <?php
      if(get_theme_mod('header_text_control')){
        ?>
        <h1 class="header_text" style="color:<?php echo (get_theme_mod('header_text_color')) ?>;"><?php echo (get_theme_mod('header_text_control'))  ?></h1>
      <?php } ?>
      </div>

    </div>
