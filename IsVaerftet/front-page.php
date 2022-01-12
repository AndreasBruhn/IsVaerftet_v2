<!-- Variables -->
<?php
$hero = get_field('hero_section');
$sectionTwo = get_field('section_two');
$sectionThree = get_field('section_three');
$gallery = get_field('swiper_images');
$instagram_gallery = get_field('instagram_gallery');
$instagram_link = get_field('instagram_link');
$instagram_button = get_field('instagram_button_text');
?>

<?php
get_header(); ?>

<!-- Hero -->
<div class="bg-white-light-cream">
  <section class="container-xl overflow-hidden position-relative z-index-1 ">
    <div class="row height-100p">
      <div class="col-lg-6 p-4 d-flex justify-content-center align-items-center" data-aos="fade-right" data-aos-duration="2000">
        <div class="max-width-500px">
          <h1 class="h1"><?php echo $hero['title']; ?></h1>
          <h2 class="h2 margin-neg-top-rem1"><?php echo $hero['sub_title']; ?></h2>
          <p class="p my-2">
            <?php echo $hero['text']; ?>
          </p>

          <?php if ($hero['link']) : ?>

            <a href="<?php echo $hero['link']; ?>"><button class="border-lg-rounded border-transparent padding-x-1rem padding-y-2rem bg-yellow box-shadow-s">
                <div class="shake"><i class="fas fa-map-pin margin-right-10px"></i><?php echo $hero['button_text']; ?></div>
              </button></a>

          <?php endif; ?>

        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-down" data-aos-duration="2000">
        <div class="img-container">
          <img class="border-sm-rounded img-fluid" src="<?php echo $hero['image']['url']; ?>" alt="is hero"></img>
        </div>
        <div class="tk-blob img-container-blob" style="--fill: #ffcfd3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 317.5 353.7">
            <path d="M291.8 55.3c30.4 39.9 30.7 102 17 160.4-13.8 58.3-41.6 112.9-84 130.9s-99.3-.6-137-30C50.2 287.1 32 246.9 17 200.5 2.1 154.1-9.6 101.4 11.5 63.6 32.6 25.8 86.6 2.8 143.8.2c57.2-2.6 117.6 15.2 148 55.1z">
            </path>
          </svg>
        </div>
      </div>
    </div>
  </section>
</div>


<main class="">
  <!-- Specialiteter -->
  <div class="bg-white-cream">
    <div class="spacer"><svg id="visual" viewBox="0 0 2600 100" width="2600" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
        <rect x="0" y="0" width="2600" height="100" fill="#F0ECDC"></rect>
        <path d="M0 33L25.5 38.2C51 43.3 102 53.7 153 52.3C204 51 255 38 306 31.3C357 24.7 408 24.3 459 23.2C510 22 561 20 612 20.8C663 21.7 714 25.3 765 33.3C816 41.3 867 53.7 918 60.7C969 67.7 1020 69.3 1071 68.7C1122 68 1173 65 1223.8 60.8C1274.7 56.7 1325.3 51.3 1376.2 51.7C1427 52 1478 58 1529 53.8C1580 49.7 1631 35.3 1682 34.2C1733 33 1784 45 1835 45C1886 45 1937 33 1988 26C2039 19 2090 17 2141 24.5C2192 32 2243 49 2294 51C2345 53 2396 40 2447 31.5C2498 23 2549 19 2574.5 17L2600 15L2600 0L2574.5 0C2549 0 2498 0 2447 0C2396 0 2345 0 2294 0C2243 0 2192 0 2141 0C2090 0 2039 0 1988 0C1937 0 1886 0 1835 0C1784 0 1733 0 1682 0C1631 0 1580 0 1529 0C1478 0 1427 0 1376.2 0C1325.3 0 1274.7 0 1223.8 0C1173 0 1122 0 1071 0C1020 0 969 0 918 0C867 0 816 0 765 0C714 0 663 0 612 0C561 0 510 0 459 0C408 0 357 0 306 0C255 0 204 0 153 0C102 0 51 0 25.5 0L0 0Z" fill="#F8F7F0" stroke-linecap="round" stroke-linejoin="miter"></path>
      </svg></div>
    <section class="container-xxl justify-content-center">
      <div class="
				row
        d-flex
				justify-content-center
				align-items-center
				">
        <div class="col-lg-6 section1 d-flex align-items-center my-3" data-aos="fade-up"  data-aos-duration="2000">
          <div class="max-width-500px mx-auto">
            <img class="img-fluid border-sm-rounded" src="<?php echo $sectionTwo['image']['url']; ?>" alt="is hero" />
          </div>
        </div>

        <div class="col-lg-6 d-flex justify-content-center p-4 align-items-center" data-aos="fade-left" data-aos-duration="2000">
          <div class="max-width-500px">
            <h1 class="h1 mt-2 mb-2"><?php echo $sectionTwo['title']; ?></h1>
            <p class="p">
              <?php echo $hero['text']; ?>
            </p>


            <?php if ($sectionTwo['link']) : ?>

              <a class="span" href="<?php echo $sectionTwo['link']; ?>"><button class="border-lg-rounded border-transparent padding-x-1rem padding-y-2rem bg-yellow box-shadow-s">
                  <div class="shake"><i class="fas fa-gift me-2"></i><?php echo $sectionTwo['button_text']; ?></div>
                </button></a>

            <?php endif; ?>

          </div>
        </div>
        <div class="grid my-4 grid-col-1 bg-white-cream ">
          <div class="margin-center-items padding-rem3 ">
            <img class="img-fluid" src='<?php echo $sectionTwo['brand_image']['url']; ?>' alt="" />
          </div>
        </div>
    </section>
  </div>

  <!-- Swiper -->
  <div class="bg-white-light-cream reveal" data-aos="fade-up" data-aos-duration="2000">
    <section class="container-xxl swiper-section p-3">
      <div class="swiper mySwiper visit-down">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src='<?php echo $gallery['image_1']['url']; ?>' alt="ryaa is" />
          </div>
          <div class="swiper-slide">
            <img src='<?php echo $gallery['image_2']['url']; ?>' alt="ryaa is" />
          </div>
          <div class="swiper-slide">
            <img src='<?php echo $gallery['image_3']['url']; ?>' alt="ryaa is" />
          </div>
          <div class="swiper-slide">
            <img src='<?php echo $gallery['image_4']['url']; ?>' alt="ryaa is" />
          </div>
          <div class="swiper-slide">
            <img src='<?php echo $gallery['image_5']['url']; ?>' alt="ryaa is" />
          </div>
          <div class="swiper-slide">
            <img src='<?php echo $gallery['image_6']['url']; ?>' alt="ryaa is" />
          </div>
          <div class="swiper-slide">
            <img src='<?php echo $gallery['image_7']['url']; ?>' alt="ryaa is" />
          </div>
          <div class="swiper-slide">
            <img src='<?php echo $gallery['image_8']['url']; ?>' alt="ryaa is" />
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
  </div>

  
  <div class="spacer" data-aos="fade-right" data-aos-duration="2000"><svg id="visual" viewBox="0 0 2600 100" width="2600" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
      <rect x="0" y="0" width="2600" height="100" fill="#59A59E"></rect>
      <path d="M0 57L39.3 58.5C78.7 60 157.3 63 236.2 56.5C315 50 394 34 472.8 35.7C551.7 37.3 630.3 56.7 709 57.3C787.7 58 866.3 40 945.2 40.2C1024 40.3 1103 58.7 1181.8 68.3C1260.7 78 1339.3 79 1418.2 76.7C1497 74.3 1576 68.7 1654.8 58C1733.7 47.3 1812.3 31.7 1891 26.3C1969.7 21 2048.3 26 2127.2 30.7C2206 35.3 2285 39.7 2363.8 43.8C2442.7 48 2521.3 52 2560.7 54L2600 56L2600 0L2560.7 0C2521.3 0 2442.7 0 2363.8 0C2285 0 2206 0 2127.2 0C2048.3 0 1969.7 0 1891 0C1812.3 0 1733.7 0 1654.8 0C1576 0 1497 0 1418.2 0C1339.3 0 1260.7 0 1181.8 0C1103 0 1024 0 945.2 0C866.3 0 787.7 0 709 0C630.3 0 551.7 0 472.8 0C394 0 315 0 236.2 0C157.3 0 78.7 0 39.3 0L0 0Z" fill="#F8F7F0" stroke-linecap="round" stroke-linejoin="miter"></path>
    </svg></div>

  <!-- Besøg Cafe -->
  <div class="bg-turkish-dark d-flex justify-content-center align-items-center" data-aos="fade-right" data-aos-duration="2000">
    <section class="container-xxl bg-turkish-dark row">
      <div class="col-lg-6 d-flex order-2 align-items-center my-4 reveal">
        <div class="max-width-500px text-white">
          <h1 class="h1"><?php echo $sectionThree['title']; ?></h1>
          <p class="p"><?php echo $sectionThree['text']; ?></p>

          <?php if ($sectionThree['link']) : ?>

            <a href="<?php echo $sectionThree['link']; ?>"><button class="border-lg-rounded border-transparent padding-x-1rem padding-y-2rem bg-yellow box-shadow-s">
                <div class="shake"><i class="fas fa-home me-2"></i>Se
                  mere</div>
              </button></a>

          <?php endif; ?>

        </div>
      </div>
      <div class="
      d-flex
      order-1 
      col-lg-6
					">
        <div class="max-width-500px d-flex
						justify-content-center
						align-items-center my-4 reveal">
          <img class="img-fluid border-sm-rounded" src="<?php echo $sectionThree['image']['url']; ?>" alt="is hero" />
        </div>
      </div>
    </section>
  </div>
  <div class="spacer" data-aos="fade-right" data-aos-duration="2000"><svg id="visual" viewBox="0 0 2600 100" width="2600" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
      <rect x="0" y="0" width="2600" height="100" fill="#F8F7F0"></rect>
      <path d="M0 57L39.3 58.5C78.7 60 157.3 63 236.2 56.5C315 50 394 34 472.8 35.7C551.7 37.3 630.3 56.7 709 57.3C787.7 58 866.3 40 945.2 40.2C1024 40.3 1103 58.7 1181.8 68.3C1260.7 78 1339.3 79 1418.2 76.7C1497 74.3 1576 68.7 1654.8 58C1733.7 47.3 1812.3 31.7 1891 26.3C1969.7 21 2048.3 26 2127.2 30.7C2206 35.3 2285 39.7 2363.8 43.8C2442.7 48 2521.3 52 2560.7 54L2600 56L2600 0L2560.7 0C2521.3 0 2442.7 0 2363.8 0C2285 0 2206 0 2127.2 0C2048.3 0 1969.7 0 1891 0C1812.3 0 1733.7 0 1654.8 0C1576 0 1497 0 1418.2 0C1339.3 0 1260.7 0 1181.8 0C1103 0 1024 0 945.2 0C866.3 0 787.7 0 709 0C630.3 0 551.7 0 472.8 0C394 0 315 0 236.2 0C157.3 0 78.7 0 39.3 0L0 0Z" fill="#59A59E" stroke-linecap="round" stroke-linejoin="miter"></path>
    </svg></div>

  <!-- Instagram Grid -->
  <div class="bg-white-light-cream" data-aos="fade-up" data-aos-duration="2000">
    <section class="container-xl d-flex flex-column align-items-center padding-rem2">
      <h1 class="h1 p-3">Følg med når der sker nye ting i butikken</h1>
      <h2 class="h2 my-3"><a href="#" class="grey-100 text-decoration-none">@isvaerftet_</a></h2>

      <div class="grid grid-col-3 grid-gap-1rem reveal">
        <div class="grid-item">
          <img src='<?php echo $instagram_gallery['image_1']['url']; ?>' alt="instagram post" />
        </div>
        <div class="grid-item">
          <img src='<?php echo $instagram_gallery['image_2']['url']; ?>' alt="instagram post" />
        </div>
        <div class="grid-item">
          <img src='<?php echo $instagram_gallery['image_3']['url']; ?>' alt="instagram post" />
        </div>
        <div class="grid-item">
          <img src='<?php echo $instagram_gallery['image_4']['url']; ?>' alt="instagram post" />
        </div>
        <div class="grid-item">
          <img src='<?php echo $instagram_gallery['image_5']['url']; ?>' alt="instagram post" />
        </div>
        <div class="grid-item">
          <img src='<?php echo $instagram_gallery['image_6']['url']; ?>' alt="instagram post" />
        </div>
      </div>
      <div class="grid grid-place-center margin-x-3rem">
        <?php if ($hero['link']) : ?>

          <a href="<?php the_field('instagram_link'); ?>"><button class="border-lg-rounded border-transparent padding-x-1rem padding-y-2rem bg-yellow box-shadow-s">
              <div class="shake"><i class="fas fa-hashtag me-1"></i><?php echo $instagram_button; ?></div>
            </button></a>

        <?php endif; ?>
        </button></a>
      </div>
    </section>
  </div>
</main>

<div class="spacer"><svg id="visual" viewBox="0 0 2600 100" width="2600" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
    <rect x="0" y="0" width="2600" height="100" fill="#59A59E"></rect>
    <path d="M0 57L39.3 58.5C78.7 60 157.3 63 236.2 56.5C315 50 394 34 472.8 35.7C551.7 37.3 630.3 56.7 709 57.3C787.7 58 866.3 40 945.2 40.2C1024 40.3 1103 58.7 1181.8 68.3C1260.7 78 1339.3 79 1418.2 76.7C1497 74.3 1576 68.7 1654.8 58C1733.7 47.3 1812.3 31.7 1891 26.3C1969.7 21 2048.3 26 2127.2 30.7C2206 35.3 2285 39.7 2363.8 43.8C2442.7 48 2521.3 52 2560.7 54L2600 56L2600 0L2560.7 0C2521.3 0 2442.7 0 2363.8 0C2285 0 2206 0 2127.2 0C2048.3 0 1969.7 0 1891 0C1812.3 0 1733.7 0 1654.8 0C1576 0 1497 0 1418.2 0C1339.3 0 1260.7 0 1181.8 0C1103 0 1024 0 945.2 0C866.3 0 787.7 0 709 0C630.3 0 551.7 0 472.8 0C394 0 315 0 236.2 0C157.3 0 78.7 0 39.3 0L0 0Z" fill="#F8F7F0" stroke-linecap="round" stroke-linejoin="miter"></path>
  </svg></div>

<?php get_footer();
?>
