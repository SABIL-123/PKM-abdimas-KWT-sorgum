<?php
require_once'utils/curl.php'; 
include_once"base/head.php";
include_once"base/header.php";
$layouts = get_data_api('https://cms.kampungsorgum.com/api/layout?populate=*');
$homes = get_data_api('https://cms.kampungsorgum.com/api/homes?populate=*');
?>

<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="assets/images/loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

    <div class="stricky-header stricked-menu main-menu main-menu__two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('<?= $homes['data'][0]['attributes']['slider_image_top']['data'][0]['attributes']['url'] ?>');"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Tentang Kami</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                        <div class="contact-one__content">
                            <div class="block-title">
                                <!-- <div class="block-title__image"></div>/.block-title__image -->
                                <!-- <p>Hubungi Kami</p> -->
                                <h3>Hubungi Kami</h3>
                            </div><!-- /.block-title -->
                            <div class="contact-one__summery">
                                <p>Anda dapat menghubungi kami melalui formulir pada halaman ini untuk pertanyaan lebih lanjut atau kerjasama. 
                                    Kami juga tersedia melalui email melalui telepon. Kami senang mendengar dari Anda dan siap membantu dengan segala kebutuhan atau pertanyaan yang Anda miliki.
                                </p>
                            </div><!-- /.contact-one__summery -->
                            <div class="contact-one__social">
                                <a href="<?= $layouts['data']['attributes']['socialmedia_1']; ?>"><i class="fab fa-facebook-square"></i></a>
                                <a href="<?= $layouts['data']['attributes']['socialmedia_2']; ?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-sm-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
                        <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn">Send a Message</button><!-- /.thm-btn -->
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-sm-12 col-md-6 col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        <section class="contact-infos">
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="row no-gutters">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-infos__single">
                                <h3>Tentang Kami</h3>
                                <p><?= $layouts['data']['attributes']['description'];?></p>
                            </div><!-- /.contact-infos__single -->
                        </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-infos__single">
                                <h3>Alamat Kami</h3>
                                <p><?= $layouts['data']['attributes']['alamat'];?></p>
                            </div><!-- /.contact-infos__single -->
                        </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-infos__single">
                                <h3>Hubungi Kami</h3>
                                <p><a href="mailto:needhelp@company.com"><?= $layouts['data']['attributes']['email'];?></a> <br>
                                    <a href="tel:666-888-0000"><?= $layouts['data']['attributes']['telephone'];?></a>
                                </p>
                            </div><!-- /.contact-infos__single -->
                        </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.contact-infos -->

        <div class="google-map__home-two">
            <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31679.557177965722!2d107.56617439490628!3d-7.015792501079468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ebc4a7b21951%3A0x401e8f1fc28c6b0!2sPameungpeuk%2C%20Kec.%20Pameungpeuk%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1702190815243!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" class="map__home-two" allowfullscreen></iframe>
        </div><!-- /.google-map -->
        <?php include 'base/footer.php'; ?>
    </div><!-- /.page-wrapper -->
    <?php
    include_once 'base/mobile-nav-wrapper.php'; 
    include_once 'base/script.php'; ?>

</body>

</html>