
<?php
require_once 'utils/curl.php'; 
$layouts = get_data_api('https://cms.kampungsorgum.com/api/layout?populate=*');
$nohp_desaumkm = $header['data']['attributes']['telephone'];
$nohp_desaumkm = str_replace("08", "+628", $nohp_desaumkm);
$services = get_data_api('https://cms.kampungsorgum.com/api/activities?populate=*');
// print_r($url);
?>

<footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-widget">
                            <a href="index.php" class="footer-widget__Logo">
                                <img src="<?= $layouts['data']['attributes']['logo_footer']['data']['attributes']['url']; ?>" width="153" alt="">
                            </a>
                            <p><?= $layouts['data']['attributes']['description'] ?></p>
                            <!-- <form action="#" data-url="YOUR_MAILCHIMP_URL" class="mc-form">
                                <input type="email" name="EMAIL" placeholder="Email Address">
                                <button type="submit"><i class="agrikon-icon-right-arrow"></i></button>
                            </form>/.mc-form -->
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                            <!-- <div class="footer__social">
                                <a href="#" class="fab fa-facebook-square"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-pinterest-p"></a>
                                <a href="#" class="fab fa-instagram"></a>
                            </div>/.topbar__social -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget footer-widget__links-widget">
                            <h3 class="footer-widget__title">Layanan</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                            <?php foreach($services['data'] as $service):?>
                                <li><a class="" href="services.php?id=<?= $services['id'];?>"><?= $service['attributes']['title_activity'];?></a></li>
                                <?php endforeach; ?>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <h3 class="footer-widget__title">Hubungi Kami</h3><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__contact">
                            <li>
                                <i class="agrikon-icon-telephone"></i>
                                <a href="https://wa.me/<?= $nohp_desaumkm ?>"><?= $layouts['data']['attributes']['telephone'];?></a>
                            </li>
                            <li>
                                <i class="agrikon-icon-email"></i>
                                <a href="<?= $layouts['data']['attributes']['email'];?>"><?= $layouts['data']['attributes']['email'];?></a>
                            </li>
                            <li>
                                <i class="agrikon-icon-pin"></i>
                                <a href=""><?= $layouts['data']['attributes']['alamat'];?></a>
                            </li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
</footer><!-- /.site-footer -->
<div class="bottom-footer">
            <div class="container">
                <p>© Copyright 2023 by Ko+Lab</p>
            </div><!-- /.container -->
</div><!-- /.bottom-footer -->