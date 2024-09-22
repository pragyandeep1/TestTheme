<?php
get_header();
?>
<main class="main mt-5">
<!-- Hero Section -->
<section id="hero" class="hero section">
  <div class="container-fluid">
    <div class="row gy-4 position-relative">
      <!-- Text Section (Overlay on Image) -->
      <div class="col-lg-6 order-2 mt-5 order-lg-1 ml-5 d-flex flex-column justify-content-center position-absolute hero-text" style="z-index: 1;">
        <h1 data-aos="fade-up" class="text-white">
          <?php echo esc_html( get_theme_mod('hero_title',  __( 'Travel without limits', 'testtheme' ) ) ); ?>
        </h1>
        <p data-aos="fade-up" data-aos-delay="100" class="text-white">
          <?php echo esc_html( get_theme_mod( 'hero_subtitle', __( 'Create lifetime moments unforgottable locations around the world', 'testtheme' ) ) ); ?>
        </p>
        <button type="submit" formtarget="_blank" class="btn btn-success w-25">Choose tour</button>
      </div>

      <!-- Image Section -->
      <div class="col-lg-12 hero-img" data-aos="zoom-out">
        <img src="<?php echo esc_url( get_theme_mod( 'hero_image', get_template_directory_uri() . '/assets/img/hero-img.png' ) ); ?>" class="img-fluid w-100 animated" alt="<?php esc_attr_e( 'Hero Image', 'testtheme' ); ?>">
      </div>
    </div>
  </div>
</section><!-- /Hero Section -->

</main>
<?php
get_footer();