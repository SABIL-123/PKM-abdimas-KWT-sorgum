<?php
require_once'utils/curl.php'; 
include_once 'base/head.php';
include_once 'base/header.php';
//Get Data From API
$id = $_GET['id'];
$services = get_data_api('https://cms.kampungsorgum.com/api/activities/'.$id.'?populate=*');
$data = get_data_api('https://cms.kampungsorgum.com/api/activities?populate=*');
$homes = get_data_api('https://cms.kampungsorgum.com/api/homes?populate=*');
if($services['data'] == null){
    header('Location: index.php');
    exit();
}
// print_r($services);


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
                <h2>Layanan</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->


        <section class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-sidebar">
                            <div class="service-sidebar__links">
                            <?php foreach($data['data'] as $d): ?>
                                <ul>
                                    <li><a href="services.php?id=<?= $d['id'];?>"><?= $d['attributes']['title_activity'];?></a></li>
                                </ul>
                                <?php endforeach; ?>
                            </div><!-- /.service-sidebar__links -->
                        </div><!-- /.service-sidebar -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-8">
                        <img src="<?= $services['data']['attributes']['image_activity']['data'][0]['attributes']['url'];?>" alt="">
                        <h2><?= $services['data']['attributes']['title_activity']; ?></h2>
                        <div class="special-box"><p><?= $services['data']['attributes']['description_activity']; ?></p></div><!-- /.special-box -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details -->

        <?php include_once"base/footer.php"?>
    </div><!-- /.page-wrapper -->


    <?php
    include_once 'base/mobile-nav-wrapper.php'; 
    include_once 'base/script.php'; ?>
</body>

</html>