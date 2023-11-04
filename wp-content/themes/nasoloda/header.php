<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<title>Насолода</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alumni+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    /> -->
    <link
      href="<?php echo get_template_directory_uri(); ?>/css/normalize.css"
      rel="stylesheet"
    />
    <link href="/wp-content/themes/nasoloda/css/normalize.css" rel="stylesheet" />
    <!-- <link href="/wp-content/themes/nasoloda/css/index.css" rel="stylesheet" /> -->

    <link
      href="<?php echo get_template_directory_uri(); ?>/css/index.css"
      rel="stylesheet"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

</head>

<!-- <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

    <title>Насолода</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="<?php echo get_template_directory_uri(); ?>/css/normalize.css"
      rel="stylesheet"
    />
    <link
      href="<?php echo get_template_directory_uri(); ?>/css/index.css"
      rel="stylesheet"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head> -->







<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		esc_html_e( 'Skip to content', 'twentytwentyone' );
		?>
	</a> -->

	<?php //get_template_part( 'template-parts/header/site-header' ); ?>

	<!-- <div id="content" class="site-content">
		<div id="primary" class="content-area"> -->
			<header class="header">
      <div class="container">
        <div class="heder__left">
          <button class="header__contact-us click">Зв'язатись з нами</button>
          <button class="header__lang">
            <a href="/" class="header__lang-item header__lang-ukr click">UKR</a>
            <a href="/home" class="header__lang-item header__lang-eng click">ENG</a>
          </button>
        </div>

          <div class="header__right">
            <div class="networks header__networks">
              <a
                class="click"
                href="https://www.google.com/maps/place/%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%9A%D1%83%D1%80%D1%87%D0%B0%D1%82%D0%BE%D0%B2%D0%B0,+6%2F5,+%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B8%D0%B9,+%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+29000/@49.4390069,26.9516829,17z/data=!3m1!4b1!4m6!3m5!1s0x473206d84e41648b:0xa15241f5669d5d9e!8m2!3d49.4390069!4d26.9516829!16s%2Fg%2F1tg9rg37?entry=ttu"
                target="_blank"
                ><img src="/wp-content/themes/nasoloda/svg/location.svg" alt="location"
              /></a>
              <a
                class="click"
                href="https://www.facebook.com/tmnasoloda"
                target="_blank"
                ><img src="/wp-content/themes/nasoloda/svg/facebook.svg" alt="facebook"
              /></a>
              <a
                class="click"
                href="https://www.instagram.com/nasoloda_tm/"
                target="_blank"
                ><img src="/wp-content/themes/nasoloda/svg/instagram.svg" alt="instagram"
              /></a>
              <a
                class="click"
                href="https://www.tiktok.com/@nasoloda_tm?_t=8eWtMqba2cP&_r=1"
                target="_blank"
                ><img src="/wp-content/themes/nasoloda/svg/tiktok.svg" alt="tiktok"
              /></a>
            </div>

            <button class="header__menu click">
              <img class="header__menu-img" src="/wp-content/themes/nasoloda/svg/burger.svg" alt="меню" />
            </button>
          </div>
          

        <a href="/" class="header__logo">
          <img
            class="header__logo-img"
            src="/wp-content/themes/nasoloda/img/text-logo.png"
            alt="насолода"
          />
        </a>
      </div>
    </header>
    <div class="header__menu-wrapper">
      <div class="header__menu-bottom">
        <ul class="menu__list">
          <li class="menu__item">
            <strong class="menu__title">ПРО КОМПАНІЮ</strong>

            <div class="menu__element-list">
              <a class="menu__element click" href="#about">Про нас</a>
              <a  onClick="changeIsScrolled()" class="menu__element click" href="#assortment">Асортимент</a>
              <!-- <a id="open-get-catalog-header" class="menu__element click" href="#">Каталог</a> -->
              <a  onClick="changeIsScrolled()" class="menu__element click" href="#contacts">Контакти</a>
            </div>
          </li>

          <li class="menu__item">
            <strong class="menu__title">ПРОДУКЦІЯ</strong>

            <div class="menu__element-list">
              <a class="menu__element click" href="#assortment" onclick="changeIsScrolled()">Торти</a>
              <a class="menu__element click" href="#assortment" onclick="changeIsScrolled()">Тістечка</a>
              <a class="menu__element click" href="#assortment" onclick="changeIsScrolled()">Чізкейки</a>
            </div>
          </li>

          <button class="header__contact-us-mob click">
            Зв'язатись з нами
          </button>

          <div class="networks footer__networks-mob">
            <a
              class="click"
              href="https://www.google.com/maps/place/%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%9A%D1%83%D1%80%D1%87%D0%B0%D1%82%D0%BE%D0%B2%D0%B0,+6%2F5,+%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B8%D0%B9,+%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+29000/@49.4390069,26.9516829,17z/data=!3m1!4b1!4m6!3m5!1s0x473206d84e41648b:0xa15241f5669d5d9e!8m2!3d49.4390069!4d26.9516829!16s%2Fg%2F1tg9rg37?entry=ttu"
              target="_blank"
              ><img src="/wp-content/themes/nasoloda/svg/location-white-mob.svg" alt="location"
            /></a>
            <a
              class="click"
              href="https://www.facebook.com/tmnasoloda"
              target="_blank"
              ><img src="/wp-content/themes/nasoloda/svg/facebook-white-mob.svg" alt="facebook"
            /></a>
            <a
              class="click"
              href="https://www.instagram.com/nasoloda_tm/"
              target="_blank"
              ><img src="/wp-content/themes/nasoloda/svg/instagram-white-mob.svg" alt="instagram"
            /></a>
            <a
              class="click"
              href="https://www.tiktok.com/@nasoloda_tm?_t=8eWtMqba2cP&_r=1"
              target="_blank"
              ><img src="/wp-content/themes/nasoloda/svg/tiktok-white-mob.svg" alt="tiktok"
            /></a>
          </div>
        </ul>
      </div>
    </div>
