<?php
include 'config/Connect.php';
include 'controller/controller.php';
$useragent = $_SERVER["HTTP_USER_AGENT"];
$device = 'pc';
if (stripos($useragent, "mobile") !== false) {
  $device = "mobile";
}
?>

<!DOCTYPE html>
<html lang="en">

<style>
  body {
    background: #eeeeee !important;
  }

  .indbg {
    padding-bottom: 0px;
  }

.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(../../baan/image/loading.gif) center no-repeat #fff; /* รูปloader ที่เป็น .gif  css หรืออื่นๆก็นำไปดันแปลงกันเอาครับ*/
}

</style>

<head>

  <title>BaanSuai</title>
  <!-- <link rel="icon" type="image/png" href="../../baan/image/BAANLOGO.png"/> -->
  <link rel="icon" type="image/png" sizes="16x16" href="../../baan/image/bluelogoB.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.108.0">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link href="view/Loading/load.css<?= '?v=' . $version ?>" rel="stylesheet"> -->

  <link rel="stylesheet" href="view/menu/menu.css">
  <link href="view/menu/menu.css<?= '?v=' . $version ?>" rel="stylesheet">
  <link href="view/footer/footer.css<?= '?v=' . $version ?>" rel="stylesheet">

  <link href="<?= $css[$_GET['page']] . '?v=' . $version ?>" rel="stylesheet">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
  <link rel="stylesheet" href="fancybox.css" /> -->

</head>

<body>
  <iframe src="" width="" height="" name="calldata" id="calltact" style="display:none;"></iframe>
  <iframe src="" width="" height="" name="calldata" id="calldata" style="display:none;"></iframe>

  <!-- <?php include('view/Loading/load.php') ?> -->
  <!-- <div class="se-pre-con"></div> -->

  <div class="indbg"></div>
  <?php include('view/Menu/menu.php') ?>
  <?php include $page[$_GET['page']]; ?>
  <div class="container container-custom">
  </div>
  <?php include('view/Footer/footer.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
    async></script>

  <!-- <script src="/path/to/flickity.pkgd.min.js"></script> -->

  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <script src="fancybox.umd.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/l10n/de.umd.js"></script> -->


  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->

  <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> -->
  <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script> -->

  <!-- <script src="/path/to/masonry.pkgd.min.js"></script> -->
  <!-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> -->
  <!-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script> -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  <script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function () {
      // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");;
    });
  </script>

</body>

</html>