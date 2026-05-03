
<?php
require_once 'utils/curl.php'; 
$header = get_data_api('https://cms.kampungsorgum.com/api/layout?populate=*');
// $data = json_decode($header,true);

$nohp_desaumkm = $header['data']['attributes']['telephone'];
$nohp_desaumkm = str_replace("08", "+628", $nohp_desaumkm);

// print_r($data);
?>

<header class="main-header main-header__two">
            <nav class="main-menu main-menu__two">
                <div class="container">
                    <div class="logo-box">
                        <a href="index.php" aria-label="logo image"><img src="<?=$header['data']['attributes']['logo_header']['data']['attributes']['url'];?>" width="70" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->

                    <ul class="main-menu__list">
                        <li>
                            <a href="index.php">Beranda</a>
                        </li>
                        <li>
                            <a href="services.php?id=1">Layanan</a>
                        </li>
                        <li>
                            <a href="products.php">Produk</a>
                        </li>
                        <li>
                            <a href="contact.php">Tentang Kami</a>
                        </li>
                    </ul>
                    <!-- /.main-menu__list -->
                    <div class="main-header__info">
                        <a href="https://wa.me/<?= $nohp_desaumkm ?>" class="main-header__info-phone">
                            <i class="agrikon-icon-phone-call"></i>
                            <span class="main-header__info-phone-content">
                                <span class="main-header__info-phone-text"></span>
                                <span class="main-header__info-phone-title">Hubungi Kami</span>
                            </span><!-- /.main-header__info-phone-content -->
                        </a><!-- /.main-header__info-phone -->
                    </div><!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->