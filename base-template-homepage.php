<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="wrap container" role="document">

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepage-flyer-top.png" alt="keyshot-top" id="keyshot-top"/>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepage-flyer.png" alt="keyshot" id="keyshot"/>

    <div id="leftSlider" class="roundSlideshow">
        <img src="/media/1a-2-300x200.jpg" alt="slideLeft 1"/>
        <img src="/media/1b-3-225x300.jpg" alt="slideLeft 2"/>
        <img src="/media/1f-3-300x200.jpg" alt="slideLeft 2"/>
        <img src="/media/1f-3aaaa-300x200.jpg" alt="slideLeft 2"/>
        <img src="/media/1i-300x200.jpg" alt="slideLeft 2"/>
    </div>

    <div id="rightSlider" class="roundSlideshow">
        <img src="/media/1b-4-300x200.jpg" alt="slideRight 1"/>
        <img src="/media/1c-2-300x224.jpg" alt="slideRight 2"/>
        <img src="/media/1f-3aaa-200x300.jpg" alt="slideRight 2"/>
        <img src="/media/10-300x200.jpg" alt="slideRight 2"/>
        <img src="/media/38-300x214.jpg" alt="slideRight 2"/>
    </div>

  </div><!-- /.wrap -->


  <?php get_template_part('templates/footer'); ?>

</body>
</html>
