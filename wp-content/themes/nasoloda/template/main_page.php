<?php
/*
Template Name: Головна сторінка
*/

get_header(); 
$custom_fields = get_post_custom(get_the_ID()); 

$slider_home_query_args = [
    'post_type' => 'slider_home',
    'post_status' => 'publish',
    'posts_per_page' => 100,
    /*orderby' => 'meta_value_num',
    'order' => 'DESC',
    'meta_query' => [
        'key' => 'program_id',
        'value' => 5317,
        'compare' => 'LIKE'

           ],*/

];
$like_prod_query_args = [
    'post_type' => 'like_prod',
    'post_status' => 'publish',
    'posts_per_page' => 4,
];

$slider_homes = get_posts($slider_home_query_args);
$like_prods = get_posts($like_prod_query_args);


 $slides = get_field( 'slides' );
 $likes = get_field( 'likes' );

/*echo "<pre>";
 print_r($likes);
 echo "</pre>";*/
// echo "<pre>";
// print_r($custom_fields['desert_1_make_1'][0]);
// print_r($custom_fields['desert_1_text_1'][0]);
// echo "</pre>";

$ar_clases = [
    0 => [
        'class_bg' => 'swiper__product--bg',
        'class_content' => 'slide__content product',
        'class_title' => 'product__title',
        'class_amount' => 'product__amount',
        'class_description' => 'product__desc',
    ],
    1 => [
        'class_bg' => 'swiper__certificate--bg',
        'class_content' => 'slide__content product',
        'class_title' => 'product__title white',
        'class_amount' => 'product__amount',
        'class_description' => 'product__desc white',
    ],
    2 => [
        'class_bg' => 'swiper__factory--bg',
        'class_content' => 'slide__content company',
        'class_title' => 'product__title',
        'class_amount' => 'product__amount brown',
        'class_description' => 'product__desc',
    ],
    3 => [
        'class_bg' => 'swiper__sweets--bg',
        'class_content' => 'slide__content product',
        'class_title' => 'product__title',
        'class_amount' => 'product__amount',
        'class_description' => 'product__desc brown',
    ],
    4 => [
        'class_bg' => 'swiper__product--bg',
        'class_content' => 'slide__content',
        'class_title' => 'product__title',
        'class_amount' => 'product__amount',
        'class_description' => 'product__desc',
    ],
];

?>

  <section class="production">
    <div class="container">
      <div class="production__top">
        <h1 class="h1">
          <?php echo $custom_fields['production_title'][0]?>
        </h1>

        
        <div class="production__year">
          <span class="production__year-stick"></span>
          <span class="production__year-value">з 1996 року</span>
          <span class="production__year-stick"></span>
        </div>
      </div>

      <div class="production__bottom">
        <div class="product__bottom-amounts">
          <span class="production__amount">
            <?php echo $custom_fields['production_1_count'][0]?>
          </span>
          <span class="production__amount">
          <?php echo $custom_fields['production_2_count'][0]?>  
          </span>
          <span class="production__amount">
          <?php echo $custom_fields['production_3_count'][0]?>  
          </span>
        </div>
        <div class="production__bottom-descriptions">
          <p class="production__desc">
          <?php echo $custom_fields['production_1_text'][0]?>
          </p>
          <p class="production__desc">
          <?php echo $custom_fields['production_2_text'][0]?>
        </p>
          <p class="production__desc">
          <?php echo $custom_fields['production_3_text'][0]?>
          </p>
        </div>
      </div>

      <img
        class="production__cake-mob"
        src="/wp-content/themes/nasoloda/img/production-cake-mob.png"
        alt="торт"
      />
    </div>
  </section>

  <div id="about" class="swiper mySwiper process-slider">
    <div class="swiper-wrapper">

      <?php 
        $k = 0;
        foreach ($slides as $key => $slide){
          $class = $ar_clases[$k];
          if( $k==4){
              $k = 0;
          } else {
              $k++;
          }              
      ?>
          <div class="swiper-slide">
              <div class="<?=$class['class_bg'];?>">
                  <div class="container">
                  <img src="<?=$slide['image']??'';?>" />
                  <div class="<?=$class['class_content'];?>">
                      <div class="product__content">
                      <span class="<?=$class['class_amount'];?>"><?=$slide['count'];?></span>
                      <strong class="<?=$class['class_title'];?>"><?=$slide['title'];?></strong>
                      <p class="<?=$class['class_description'];?>">
                        <?=$slide['text'];?>
                      </p>
                      </div>
                      <button class="product__button click disabled">
                      ДІЗНАТИСЯ БІЛЬШЕ
                      </button>
                  </div>
                  </div>
              </div>
          </div>   
      <? } ?>

      <!-- <div class="swiper-slide">
        <div class="swiper__factory--bg">
          <div class="container">
            <img src="/wp-content/themes/nasoloda/img/company-left.png" />
            <div class="slide__content company">
              <div class="product__content">
                <span class="product__amount brown">1</span>
                <strong class="product__title">фабрика</strong>
                <p class="product__desc">
                  Виробничі потужності розташовані в Україні. Все обладнання
                  постійно оновлюється. Професійна виробнича лінія Fritch та
                  машини та ін.
                </p>
              </div>
              <button class="product__button click">ДІЗНАТИСЯ БІЛЬШЕ</button>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div class="swiper-slide">
        <div class="swiper__certificate--bg">
          <div class="container">
            <img src="/wp-content/themes/nasoloda/img/certificate-left.png" />
            <div class="slide__content product">
              <div class="product__content">
                <span class="product__amount">2</span>
                <strong class="product__title white"
                  >сертифікати якості</strong
                >
                <p class="product__desc white">
                  Виробництво сертифіковане відповідно до вимог міжнародних
                  стандартів безпеки продуктів харчування (ISO 22000:2018, ISO
                  22000:2019).
                </p>
                
              </div>
              <button class="product__button click disabled">
                ДІЗНАТИСЯ БІЛЬШЕ
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="swiper__factory--bg">
          <div class="container">
            <img src="/wp-content/themes/nasoloda/img/shop-left.png" />
            <div class="slide__content company">
              <div class="product__content">
                <span class="product__amount brown">30</span>
                <strong class="product__title">офлайн магазинів</strong>
                <p class="product__desc">
                  Увесь асортимент продукції ТМ Насолода представлений у понад
                  30-ти фірмових магазинах. Персонал магазину завжди допоможе
                  зробити вибір.
                </p>
              </div>
              <button class="product__button click disabled">
                ДІЗНАТИСЯ БІЛЬШЕ
              </button>
            </div>
          </div>
        </div>
      </div>  

      <div class="swiper-slide">
        <div class="swiper__sweets--bg">
          <div class="container">
            <img src="/wp-content/themes/nasoloda/img/sweets-left.png" />
            <div class="slide__content product">
              <div class="product__content">
                <span class="product__amount">4000</span>
                <strong class="product__title">солодощів щодня</strong>
                <p class="product__desc brown">
                  4000 солодощів щодня<br />
                  Щодня ми випікаємо та доставляємо до наших магазинів понад
                  4000 кондитерських виробів.
                </p>
              </div>
              <button class="product__button click disabled">
                ДІЗНАТИСЯ БІЛЬШЕ
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="swiper__product--bg">
          <div class="container">
            <img src="/wp-content/themes/nasoloda/img/country-left.png" />
            <div class="slide__content company">
              <div class="product__content">
                <span class="product__amount">4</span>
                <strong class="product__title">країни світу</strong>
                <p class="product__desc">
                  Понад 26 років працюємо над тим, щоб українські солодощі
                  могли скуштувати у будь-якому куточку світу. Маємо досвід
                  співпраці з ринком США, Канади, Румунії.
                </p>
              </div>
              <button class="product__button click disabled">
                ДІЗНАТИСЯ БІЛЬШЕ
              </button>
            </div>
          </div>
        </div>
      </div> -->
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <section class="like">
    <div class="container">
      <h2 class="h2"><?php echo $custom_fields['like_title'][0]?></h2>

      <div class="like__content">

          <?php
          $count = 1; 
          foreach ($likes as $key => $like){ ?>
              
              <div class="like__item">
                  <strong class="like__title">
                  <?=$like['title'];?></strong>
                  <p class="like__desc">
                  <?=$like['text'];?>
                  </p>
                  <span class="like__number"><?php echo $count++; ?></span>
              </div>
          <? } ?>

      </div>
    </div>
  </section>

  <section class="like-mob">
    <div class="like-mob__top-content">
      <h2 class="h2"><?php echo $custom_fields['like_title'][0]?></h2>

      <img class="like-mob__img" src="/wp-content/themes/nasoloda/img/like-cake-mob.png" alt="торт" />
    </div>

    <div class="swiper likeSwiper" style="height: fit-content">
      <div class="swiper-wrapper">
          <?php $count = 1; foreach ($likes as $key => $like){ ?>
              <div class="swiper-slide" style="width: fit-content">
                  <div class="swiper__buttons"></div>
                  <div class="like__item">
                  <strong class="like__title"><?php echo $like['title'] ?></strong>
                  <p class="like__desc">
                  <?php echo $like['text'] ?>
                  </p>
                  <span class="like__number"><?php echo $count++; ?></span>
                  </div>
              </div>
          <? } ?>
      </div>
      <div class="swiper-button-prev click">
        <img src="/wp-content/themes/nasoloda/svg/slider-prev.svg" alt="" />
      </div>
      <div class="swiper-button-next click">
        <img src="/wp-content/themes/nasoloda/svg/slider-next.svg" alt="" />
      </div>
    </div>
  </section>

  <section class="video-section">
    <h2 class="h2"><?php echo $custom_fields['video_title'][0]?></h2>

    <!-- <div class="video">
      <iframe
        allowfullscreen=""
        frameborder="0"
        
        src="https://www.youtube.com/embed/hiPOUKZYkAo?si=vBv0R1fO6dM-YEBb"
        
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      ></iframe>
    </div> -->

    <div class="video">
    <img class="video__preview" src="/wp-content/themes/nasoloda/img/video-preview.png" alt="прев'ю" />
    <img src="/wp-content/themes/nasoloda/svg/video-button.svg" alt="" class="video__button click" />
        <video width="1000" height="550" id="videoPlayer" controls>
            <source src="/wp-content/themes/nasoloda/img/video.mp4" type="video/mp4">
            Ваш браузер не підтримує відео тег.
        </video>
    </div>
  </section>

  <section id="assortment" class="make">
    <h2 class="h2 title--yellow">
    <?php echo $custom_fields['desert_title'][0]?>
  </h2>

    <div class="make__content">
      <div class="make__left">
        <div class="make__left-item">
        <img class="make__img--cake1" src="/wp-content/themes/nasoloda/img/make-cake1.png" alt="торт">
        <img class="make__img--cake2" src="/wp-content/themes/nasoloda/img/make-cake2.png" alt="торт">
        <img class="make__img--cake3" src="/wp-content/themes/nasoloda/img/make-cake3.png" alt="торт">
          <div class="make__left-item-content">
            <strong class="make__left-title">
            <?php echo $custom_fields['desert_1_title'][0]?>
            </strong>
            <span class="make__left-desc"><?php echo $custom_fields['desert_1_text'][0]?></span>
          </div>
          <button class="make__left-button click disabled">
            ДИВИТИСЯ БІЛЬШЕ
          </button>
        </div>

        <button class="make__button-action click">ОТРИМАТИ КАТАЛОГ</button>

        
        
      </div>

      <div class="make__right">
        <div class="make__right-item make--cheesecake">
        <img class="make__img--cheesecake" src="/wp-content/themes/nasoloda/img/cheesecake.png" alt="торт">
          <div class="make__right-item-content">
            <strong class="make__right-title"><?php echo $custom_fields['desert_2_title'][0]?></strong>
            <span class="make__right-desc"><?php echo $custom_fields['desert_2_text'][0]?></span>
          </div>
          <button class="make__right-button click disabled">
            ДИВИТИСЯ БІЛЬШЕ
          </button>
        </div>

        <div class="make__right-item make--dessert">
          <img class="make__img--dessert" src="/wp-content/themes/nasoloda/img/dessert.png" alt="торт">
          <div class="make__right-item-content">
            <strong class="make__right-title"><?php echo $custom_fields['desert_3_title'][0]?></strong>
            <span class="make__right-desc"><?php echo $custom_fields['desert_3_text'][0]?></span>
          </div>
          <button class="make__right-button click disabled">
            ДИВИТИСЯ БІЛЬШЕ
          </button>
        </div>
      </div>

      <button class="make__button-action make__button-action-mob click">
        ОТРИМАТИ КАТАЛОГ
      </button>
    </div>
  </section>

  <div class="modal__wrapper" id="sent">
    <div class="send">
      <img src="/wp-content/themes/nasoloda/svg/sent.svg" alt="відправлено" />
      <span class="send__text">відправлено</span>
    </div>
  </div>

  <div class="modal__wrapper" id="get-catalog">
    <?php echo do_shortcode('[contact-form-7 id="8da0db1" title="get-catalog-form" html_class="my-form get-catalog"]') ; ?>
    <!-- <form class="form get-catalog">
      <div class="form__heading">
        <steong class="form__title">отримати каталог</steong>
        <p class="form__desc">
          Заповніть дані і наш менеджер зателефонує вам
        </p>
      </div>
      <div class="form__field-list">
        <input
          class="form__field"
          type="text"
          placeholder="Им’я"
          name="name"
        />
        <input
          class="form__field"
          type="tel"
          placeholder="+38 ( )"
          name="phone"
        />
        <input
          class="form__field"
          type="email"
          placeholder="Email"
          name="email"
        />
      </div>
      <button class="form__button click">ВІДПРАВИТИ</button>
      <button type="button" class="form__close get-catalog__close click">
        <img class="header__menu-img" src="/wp-content/themes/nasoloda/svg/burger-close.svg" alt="меню" />
      </button>
    </form> -->
  </div>

  <div class="modal__wrapper" id="contact-us">
    <?php echo do_shortcode('[contact-form-7 id="32ecbe2" title="contact-us-form" html_class="my-form contact-us"]') ; ?>
    <!-- <form class="form contact-us">
      <div class="form__heading">
        <strong class="form__title">зв’язатися з нами</strong>
        <p class="form__desc">
          Заповніть дані і наш менеджер зателефонує вам
        </p>
      </div>
      <div class="form__field-list">
        <input
          class="form__field"
          type="text"
          placeholder="Им’я"
          name="name"
        />
        <input
          class="form__field"
          type="tel"
          placeholder="+38 ( )"
          name="phone"
        />
        <input
          class="form__field"
          type="email"
          placeholder="Email"
          name="email"
        />
        <textarea
          class="form__field form__textarea"
          name="message"
          id=""
          placeholder="Напишіть нам повідомлення"
        ></textarea>
      </div>
      <button class="form__button click">ВІДПРАВИТИ</button>
      <button type="button" class="form__close contact-us__close click">
        <img class="header__menu-img" src="/wp-content/themes/nasoloda/svg/burger-close.svg" alt="меню" />
      </button>
    </form> -->
  </div>

<?php //if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<!-- <header class="page-header alignwide">
		<h1 class="page-title"><?php //single_post_title(); ?></h1>
	</header> -->
	
	<!-- .page-header -->
<?php //endif; ?>
<?php
/*if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}*/

get_footer();
