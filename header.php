<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class('index-page'); ?>>
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php 
          // Check if a custom logo is set in the theme customizer
          if (has_custom_logo()) {
              the_custom_logo();
          } else {
              // Display a default logo or site title
              echo '<img src="' . get_template_directory_uri() . '/assets/img/logo.png" alt="' . get_bloginfo('name') . '" height=40 width=40>';
              // echo '<h1 class="sitename">' . get_bloginfo('name') . '</h1>';
          }
        ?>
      </a>

      <!-- Navigation Menu -->
      <nav class="navbar navbar-expand-lg navbar-light mx-auto">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo esc_url(site_url('/')); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo esc_url(site_url('/about/')); ?>">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gallery
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo esc_url(home_url('/events/')); ?>">Events</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo esc_url(site_url('/extra-curriculum/')); ?>">Extra Curricullum</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo esc_url(site_url('/special-guests/')); ?>">Special Guests</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo esc_url(site_url('/contact/')); ?>">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <?php wp_body_open(); ?>
