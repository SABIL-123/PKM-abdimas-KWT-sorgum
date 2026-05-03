
<?php
require_once 'utils/curl.php'; 
$header = get_data_api('https://cms.kampungsorgum.com/api/layout?populate=*');
// $data = json_decode($header,true);

$nohp_desaumkm = $header['data']['attributes']['telephone'];
$nohp_desaumkm = str_replace("08", "+628", $nohp_desaumkm);

// print_r($data);
?>
<div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="<?=$header['data']['attributes']['logo_footer']['data']['attributes']['url'];?>" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->