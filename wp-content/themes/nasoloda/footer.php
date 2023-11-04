<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			<!-- #main -->
		<!-- </div> -->
    <!-- #primary -->
	<!-- </div> -->
  <!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="contacts" class="footer footer-bg">
      <div class="footer__top">
        <div class="footer__top-description">
          <span class="footer__top-stick"></span>
          <div class="footer__top-content">
            <strong class="footer__top-title"
              >Залиште заявку і отримаєте ексклюзивні умови на регіони і каталог
              з цінами</strong
            >
            <p class="footer__top-desc">
              На ваш email ми відправимо комерційну пропозицію, а після , наш
              менеджер звяжеться з вами для уточнення деталей.
            </p>
          </div>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="9e65295" title="footer-form" html_class="get-conditions-form"]') ; ?>

        <!-- <form class="get-conditions-form" action="">
          <div class="get-conditions-form__field-list">
            <div class="get-conditions-form__field">
              <label for="name" class="get-conditions-form__label"
                >Ваше ім’я</label
              >
              <input
                class="get-conditions-form__input"
                type="text"
                name="name"
                placeholder="Олександр"
              />
            </div>

            <div class="get-conditions-form__field">
              <label for="phone" class="get-conditions-form__label"
                >Ваш телефон</label
              >
              <input
                class="get-conditions-form__input"
                type="tel"
                name="phone"
                placeholder="+38 ( )"
              />
            </div>

            <div
              class="get-conditions-form__field get-conditions-form__field--big"
            >
              <label for="email" class="get-conditions-form__label"
                >ВАШ EMAIL</label
              >
              <input
                class="get-conditions-form__input"
                type="email"
                name="email"
                placeholder="Email"
              />
            </div>
          </div>

          <button class="get-conditions-form__button click">
            ОТРИМАТИ УМОВИ
          </button>
        </form> -->
      </div>

      <span class="divider"></span>

      <div class="footer__bottom">
        <ul class="footer__list">
          <li class="footer__item">
            <strong class="footer__title">ПРО КОМПАНІЮ</strong>

            <div class="footer__element-list">
            <a class="footer__element click" href="#about">Про нас</a>
                    <a class="footer__element click" href="#assortment">Асортимент</a>
                    <a id="open-get-catalog-footer" class="footer__element click" href="#">Каталог</a>
                    <a class="footer__element click" href="#contacts">Контакти</a>
            </div>
          </li>

          <li class="footer__item">
            <strong class="footer__title">ПРОДУКЦІЯ</strong>

            <div class="footer__element-list">
              <a class="footer__element click" href="#">Торти</a>
              <a class="footer__element click" href="#">Тістечка</a>
              <a class="footer__element click" href="#">Чізкейки</a>
            </div>
          </li>

          <li class="footer__item">
            <strong class="footer__title">АДРЕСА оФІСУ</strong>

            <div class="footer__element-list">
              <a
                class="footer__element"
                target="_blank"
                href="https://www.google.com/maps/place/%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%9A%D1%83%D1%80%D1%87%D0%B0%D1%82%D0%BE%D0%B2%D0%B0,+6%2F5,+%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B8%D0%B9,+%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+29000/@49.4390069,26.9516829,17z/data=!3m1!4b1!4m6!3m5!1s0x473206d84e41648b:0xa15241f5669d5d9e!8m2!3d49.4390069!4d26.9516829!16s%2Fg%2F1tg9rg37?entry=ttu"
                >29000 Україна,<br />Курчатова, 6/5, Хмельницький</a
              >
            </div>
          </li>

          <li class="footer__item">
            <strong class="footer__title">КОНТАКТИ ОФІСУ</strong>

            <div class="footer__element-list">
              <a class="footer__element click" href="tel:+380800214345"
                >0 800 21 43 45
              </a>
              <a
                class="footer__element click"
                href="mailto:sales@nasoloda.com.ua"
                >sales@nasoloda.com.ua</a
              >
            </div>

            <div class="networks networks--footer">
              <a
                class="click"
                target="_blank"
                href="https://www.google.com/maps/place/%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%9A%D1%83%D1%80%D1%87%D0%B0%D1%82%D0%BE%D0%B2%D0%B0,+6%2F5,+%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B8%D0%B9,+%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+29000/@49.4390069,26.9516829,17z/data=!3m1!4b1!4m6!3m5!1s0x473206d84e41648b:0xa15241f5669d5d9e!8m2!3d49.4390069!4d26.9516829!16s%2Fg%2F1tg9rg37?entry=ttu"
                ><img src="/wp-content/themes/nasoloda/svg/location-white.svg" alt="location"
              /></a>
              <a
                class="click"
                href="https://www.facebook.com/tmnasoloda"
                target="_blank"
                ><img src="/wp-content/themes/nasoloda/svg/facebook-white.svg" alt="facebook"
              /></a>
              <a
                class="click"
                href="https://www.instagram.com/nasoloda_tm/"
                target="_blank"
                ><img src="/wp-content/themes/nasoloda/svg/instagram-white.svg" alt="instagram"
              /></a>
              <a
                class="click"
                href="https://www.tiktok.com/@nasoloda_tm?_t=8eWtMqba2cP&_r=1"
                target="_blank"
                ><img src="/wp-content/themes/nasoloda/svg/tiktok-white.svg" alt="tiktok"
              /></a>
            </div>
          </li>

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

        <div class="footer__copyright">
          <span
            ><img
              class="footer__copyright-img"
              src="/wp-content/themes/nasoloda/svg/copyright.svg"
              alt="c" /><img
              class="footer__copyright-img--mob"
              src="/wp-content/themes/nasoloda/svg/copyright-mob.svg"
              alt="c"
          /></span>
          <span>2023 НАСОЛОДА. УСІ ПРАВА ЗАХИЩЕНІ</span>
        </div>
      </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

<!-- <script src="/wp-content/themes/nasoloda/js/index.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
</html>
