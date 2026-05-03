<?php
require_once'utils/curl.php';

include_once 'base/head.php';
include_once 'base/header.php';
$products = get_data_api('https://cms.kampungsorgum.com/api/products?populate=*');
$homes = get_data_api('https://cms.kampungsorgum.com/api/homes?populate=*');
// print_r($products['data'][0]['attributes']['image_product']['data'][0]['attributes']['url']);
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
            <div class="page-header__bg" style="background-image: url(<?= $homes['data'][0]['attributes']['slider_image_top']['data'][0]['attributes']['url'] ?>;)"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Produk</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <div class="projects-one">
            <div class="container">
                <div class="row">
                    <?php foreach($products['data'] as $product):?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="projects-one__single">
                            <img src="<?= $product['attributes']['image_product']['data'][0]['attributes']['url'];?>" alt="">
                            <div class="projects-one__content">
                                <h3><?= $product['attributes']['name_product'];?></h3>
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.col-sm-12 -->
                    <?php endforeach; ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.projects-one -->


        <?php include_once "base/footer.php" ?>

    </div><!-- /.page-wrapper -->

    <?php
    include_once 'base/mobile-nav-wrapper.php';
    include_once 'base/script.php'; ?>
</body>

</html>