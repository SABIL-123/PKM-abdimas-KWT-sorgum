<?php
require_once 'utils/curl.php'; 
$header = get_data_api('https://cms.kampungsorgum.com/api/layout?populate=*');
$logo = $header['data']['attributes']['logo_footer']['data']['attributes']['url'];
// print_r($url);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok Wanita Tani - Bojongmangu</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $logo; ?>"> 
    <!-- Start Icon Head -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $logo; ?>">  
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $logo; ?>"> 
    <!-- End Icon Head -->
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Agrikon HTML Template For Agriculture Farm & Farmers">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/agrikon-icons.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>