<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="/wp-content/themes/template-udigital/assets/img/favicon-icon.svg" type="image/x-icon" />

  <?php 
    wp_head();
  ?>

  <title>Home</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sl navbar-dark bg-nav-opa-blue fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <?php 
            if(function_exists('the_custom_logo')){
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo_site = wp_get_attachment_image_src($custom_logo_id); 
              }
          ?>
          <div class="row align-items-center">
              <div class="col-2">
                <img src="<?= $logo_site[0] ;?>" alt="logo" class="w-100">
              </div>
              <div class="col-4">
                <h1 class="fs-4 fw-bold"><?= get_bloginfo('name');?></h1>
              </div>
          </div>
          <div>
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
          aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php 
            wp_nav_menu( array(
              'theme_location'  => 'top-menu',
              'depth'           => 1,
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'bs-example-navbar-collapse-1',
              'menu_class'      => 'navbar-nav ms-auto mt-lg-0 mt-4',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
          ) );
          
          ?>
      </div>
    </nav>
  </header>
