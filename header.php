<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://fonts.googleapis.com/css?family=Varela+Round&amp;subset=hebrew,latin-ext,vietnamese" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="navigation" role="banner">
    <div class="container">
      <div class="navigation-wrapper">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="marcofabrika logo">
        </a>
        <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
        <nav role="navigation">
          <ul id="js-navigation-menu" class="navigation-menu show">
            <li class="nav-link"><a href="<?php echo esc_url( home_url() ); ?>#about">About</a></li>
            <li class="nav-link"><a href="<?php echo esc_url( home_url() ); ?>#contact">Contact</a></li>
            <li class="nav-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>