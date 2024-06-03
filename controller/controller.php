<?php
$version = time();
// $version = 1;

if(!isset($_GET['page']) || $_GET['page'] == ""){
  $_GET['page'] = "design";
}else {
  $_GET['page'] = $_GET['page'];
}

$page = array(
  'loading' => 'view/Loading/load.php',

  'design' => 'view/Design/design.php',
  'gallery' => 'view/Gallery/gallery.php',
  'footer' => 'view/Footer/footer.php',
  'about' => 'view/About/about.php',
  'contact' => 'view/Contact/contact.php',
  'detail' => 'view/Detail/detail.php'

);
// echo $page [$_GET['page']];
$js = array(
  'loading' => 'view/Loading/load.css',
  
  'design' => 'view/Design/design.js',
  'gallery' => 'view/Gallery/gallery.js',
  'footer' => 'view/Footer/footer.js',
  'about' => 'view/About/about.js',
  'contact' => 'view/Contact/contact.js',
  'detail' => 'view/Detail/detail.js'

);

$css = array(
  'loading' => 'view/Loading/load.css',

  'design' => 'view/Design/design.css',
  'gallery' => 'view/Gallery/gallery.css',
  'footer' => 'view/Footer/footer.css',
  'about' => 'view/About/about.css',
  'contact' => 'view/Contact/contact.css',
  'detail' => 'view/Detail/detail.css'
);