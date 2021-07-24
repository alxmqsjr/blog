<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php require get_template_directory() . '/inc/color.php'; ?>

  <?php if ( get_theme_mod( 'bb_fixed_check' ) ) {  ?>
    <style> body { padding-top: 56px !important; } </style> 
  <?php } ?>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <nav class="navbar navbar-expand-lg navbar-dark <?php if ( get_theme_mod( 'bb_fixed_check' )) { echo 'fixed-top'; } ?>">
    <div class="container">

         <?php 
            if ( has_custom_logo() ) {
              the_custom_logo(); 
            } else {
              esc_html_e( 'Seu Logotipo','bb' );
            }
          ?>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">

        <?php
          wp_nav_menu(
            array(
                'theme-location' => 'Topo',
                'fallback_cb' => false,
                'depth' => 2,
                'container' => false,
                'menu_class' => 'navbar-nav ml-auto bb-dropdown'
          ) );
        ?> 

      </div>
    </div>
  </nav>