<?php
require_once 'utils/curl.php'; 
/**Include layouts page */
include_once 'base/head.php';
include_once 'base/header.php';
/** Get Data from API */
$mitras = get_data_api('https://cms.kampungsorgum.com/api/partners?populate=*');
$homes = get_data_api('https://cms.kampungsorgum.com/api/homes?populate=*');
$managements = get_data_api('https://cms.kampungsorgum.com/api/managements?populate=*');
$products = get_data_api('https://cms.kampungsorgum.com/api/products?populate=*');
//print_r($products['attributes']['image_product']['data'][0]['attributes']['url']);
?>
<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="assets/images/loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        

        <div class="stricky-header stricked-menu main-menu main-menu__two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="main-slider main-slider__two">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
                <div class="swiper-wrapper">
                <?php foreach($homes['data'][0]['attributes']['slider_image_top']['data'] as $home):?>
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(<?= $home['attributes']['url'];?>)">
                    </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 text-center">
                                    <span class="tagline">Selamat Datang</span>
                                    <h2>Kelompok Wanita Tani <br>
                                        Bojongmangu</h2>
                                    <a href="contact.php" class=" thm-btn">Selengkapnya</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                 <?php endforeach; ?>   
                </div><!-- /.swiper-wrapper -->

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                </div><!-- /.main-slider__nav -->

            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->

        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-two__images">
                            <img src="<?= $homes['data'][0]['attributes']['service_image']['data'][0]['attributes']['url'];?>" alt="">
                        </div><!-- /.about-two__images -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-two__content">
                            <div class="block-title">
                                <!--<div class="block-title__image"></div> /.block-title__image -->
                                <p>Perkenalan Kami</p>
                                <h3>KWT Sorgum Bojongmangu</h3>
                            </div><!-- /.block-title -->
                            <div class="about-two__summery">
                                <p>Kelompok Wanita Tani Sorgum Bojongmangu, yang berbasis di desa Bojongmangu, Kabupaten Bandung, menjadi kekuatan positif dalam pengembangan pertanian lokal. Didirikan pada tahun 2020, kelompok ini mengusung misi mulia untuk meningkatkan kesejahteraan para wanita tani di wilayah tersebut. Fokus utama kelompok ini adalah pada pengembangan tanaman sorgum, yang mencakup seluruh rangkaian aktivitas, mulai dari penanaman hingga pengolahan hasil. Para anggota kelompok aktif terlibat dalam setiap tahapan proses pertanian, memperoleh pengetahuan dan keterampilan yang berharga sepanjang perjalanan.</p>
                            </div><!-- /.about-two__summery -->
                            
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-two -->

        <!-- Start Manager -->
        <section class="team-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-5">
                        <div class="team-one__content">
                            <div class="block-title">
                                <!--<div class="block-title__image"></div> /.block-title__image -->
                                <p>Tim Kami</p>
                                <h3>Petani Berpengalaman</h3>
                            </div><!-- /.block-title -->
                            <div class="team-one__summery">
                                <p>
                                “Pertanian adalah yang paling mulia dari semua alkimia; karena ia mengubah tanah, dan bahkan kotoran, menjadi emas, memberikan kepada penggarapnya hadiah tambahan berupa kesehatan.” <br> Suryono.</p>
                            </div><!-- /.team-one__summery -->

                        </div><!-- /.team-one__content -->
                    </div><!-- /.col-md-12 col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="team-one__carousel-wrap">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "slidesPerGroup": 1, "autoplay": { "delay": 5000 }, "navigation": {
            "nextEl": "#team-one__swiper-button-next",
            "prevEl": "#team-one__swiper-button-prev"
        },"breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "640": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "992": {
                "spaceBetween": 30,
                "slidesPerView": 3,
                "slidesPerGroup": 3
            },
            "1200": {
                "spaceBetween": 30,
                "slidesPerView": 3,
                "slidesPerGroup": 3
            }
        }}'>

                    <div class="swiper-wrapper">
                        <?php foreach($managements['data'] as $manager):?>
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="<?=$manager['attributes']['manager_images']['data'][0]['attributes']['url']?> " alt="Jessica Brown">
                                </div><!-- /.team-card__image -->
                                <h3><?=$manager['attributes']['manager_name'];?></h3>
                                <!-- <p>Farmer</p> -->
                            </div><!-- /.team-card -->
                        
                    </div><!-- /.swiper-wrapper -->
                    <?php endforeach; ?>
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.team-one__carousel-wrap -->
        </section><!-- /.team-one -->


        <div class="projects-one project-one__home-one">
            <div class="container">
                <div class="block-title text-center">
                    <h3>PRODUK KAMI</h3>
                </div><!-- /.block-title -->
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
            "el": "#projects-one__swiper-pagination",
            "type": "bullets",
            "clickable": true
        },
        "breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "640": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "992": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            }
        }}'>
                    <!-- Looping Data UMKM KAMI -->
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($products['data'] as $product) : ?>
                            <div class="swiper-slide">
                                <div class="projects-one__single">
                                    <img src="<?= $product['attributes']['image_product']['data'][0]['attributes']['url'] ?>" height="100%" alt="">
                                    <div class="projects-one__content">
                                        
                                           
                                        <h3><?= $product['attributes']['name_product'] ?></h3>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
                </div><!-- /.swiper-container -->
            </div><!-- /.container -->
        </div><!-- /.projects-one -->


        <div class="client-carousel  ">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                    <div class="swiper-wrapper">
                    <?php foreach($mitras['data'] as $mitra ):?>
                            <div class="swiper-slide">
                            <img src="<?=$mitra['attributes']['partner_image']['data'][0]['attributes']['url']?>" alt="">
                            </div><!-- /.swiper-slide -->
                    <?php endforeach; ?>    
                        <!-- /.swiper-slide -->
                    </div>
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->


 

        <?php include 'base/footer.php'; ?>
        
       

    </div><!-- /.page-wrapper -->

    <?php
    include_once 'base/mobile-nav-wrapper.php'; 
    include_once 'base/script.php'; ?>
</body>

</html>