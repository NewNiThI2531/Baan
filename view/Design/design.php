<?php

$detail = [];
$sql = "SELECT * FROM design WHERE D_type IN (1,2,3,4,5) AND D_status='0'";
$query = $conn->query($sql);

while ($design = $query->fetch_assoc()) {
  $detail[] = $design;
}

$detailA = [];
$sql = "SELECT * FROM gallery WHERE G_type IN (2) AND G_status='0'";
$query = $conn->query($sql);

while ($gallery = $query->fetch_assoc()) {
  $detailA[] = $gallery;
}

?>

<!-- --------------------- Slide Image ------------------------ -->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    <?php
    $i = 0;
    $active = "active";
    foreach ($detail as $key => $design1) {
      if ($design1['D_type'] == '1') { ?>
        <div class="carousel-item <?= $active ?>">
          <img src="<?php echo $design1['D_image']; ?>" class="slideImg" alt="...">
        </div>
        <?php
      }
    }
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- ------------------------------------- -->


<div class="col-12 texttopgall">
  <?php
  foreach ($detail as $key => $design2) {
    if ($design2['D_type'] == '2') { ?>
      <p class="ftnamecomgall">
        <?php echo $design2['D_titletext']; ?>
      </p>&nbsp;&nbsp;
      <p class="namecomgall">
        <?php echo $design2['D_subtext']; ?>
      </p>
      <?php
    }
  }
  ?>
</div>

<div class="container">
  <p class="scnamecomgall">ตกแต่ง / ต่อเติม / Renovate บ้าน คอนโด ออฟฟิศ อาคารพาณิชย์</p>
</div>

<!-- ----------- Gallery ----- Table ------------- -->
<div class="container concolgall">
  <div class="row text-center">

    <?php
    foreach ($detailA as $key => $gallery2) {
      if ($gallery2['G_type'] == '2') { ?>

        <div class="col-lg-4 col-md-6 col-12 grid-coll concolgrid">
          <a href="?page=detail" style="text-decoration: none;" class="cacolle img-wrapper">
            <div class="inner-img" style="background-image: url(<?php echo $gallery2['G_image']; ?>);"></div>
            <div class="textincard"><?php echo $gallery2['G_titletext']; ?></div>
          </a>
        </div>

        <?php
      }
    }
    ?>

  </div>
</div>

<!-- --------------------  ----------------------- -->
<?php
foreach ($detail as $key => $design3) {
  if ($design3['D_type'] == '3') { ?>
    <div class="imgcen" style="background-image: url(<?php echo $design3['D_image']; ?>);">
    </div>
    <?php
  }
}
?>
<!-- --------------- -->

<section class="about-section">
  <div class="container">
    <div class="row clearfix">

      <!--Content Column-->
      <div class="content-column col-md-6 col-sm-12 col-xs-12">
        <div class="inner-column">
          <div class="sec-title">
            <?php
            foreach ($detail as $key => $design4) {
              if ($design4['D_type'] == '4') { ?>
                <div class="title">
                  <?php echo $design4['D_titletext']; ?>
                </div>
                <h2>
                  <?php echo $design4['D_subtext']; ?>
                </h2>
                <?php
              }
            }
            ?>
          </div>
          <?php
          foreach ($detail as $key => $design5) {
            if ($design5['D_type'] == '5') { ?>
              <div class="text">
                <?php echo $design5['D_subtext']; ?>
              </div>
              <div class="email">Request Quote: <span class="theme_color">
                  <?php echo $design5['D_titletext']; ?>
                </span></div>
              <?php
            }
          }
          ?>
        </div>
      </div>

      <!--Image Column-->
      <div class="image-column col-md-6 col-sm-12 col-xs-12">
        <div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">
          <?php
          foreach ($detail as $key => $design5) {
            if ($design5['D_type'] == '5') { ?>
              <div class="image">
                <img src="<?php echo $design5['D_image']; ?>" alt="">
              </div>
              <?php
            }
          }
          ?>
        </div>
      </div>

    </div>
  </div>
</section>




<!-- Projects Start -->
<section class="projects-section white-bg position-relative overflow-hidden">
  <h2 class="title text-center projectdesign">Projects</h2>
  <div class="container">
    <div class="row align-items-stretch overflow-hidden gy-1 gy-md-0 gx-1 gx-md-3 gx-lg-4">
      <div class="col-md-9">
        <div class="row g-1 g-md-3 g-lg-4 overflow-hidden">
          <div class="col-8">
            <div class="project-box pbox-left">
              <img src="https://www.yudiz.com/codepen/interior-design/project-01.jpg" class="img-fluid" alt="Project">
            </div>
          </div>
          <div class="col-4">
            <div class="project-box pbox-right">
              <img src="https://www.yudiz.com/codepen/interior-design/project-02.jpg" class="img-fluid" alt="Project">
            </div>
          </div>
          <div class="col-4">
            <div class="project-box pbox-left">
              <img src="https://www.yudiz.com/codepen/interior-design/project-03.jpg" class="img-fluid" alt="Project">
            </div>
          </div>
          <div class="col-8 overflow-hidden">
            <div class="project-box project-content">
              <img src="https://www.yudiz.com/codepen/interior-design/project-03.jpg" class="img-fluid" alt="Project">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="project-box big pbox-right">
          <img src="https://www.yudiz.com/codepen/interior-design/project-04.jpg" class="img-fluid" alt="Project">
        </div>
      </div>
    </div>
    <!-- row -->
  </div>
</section>
<!-- Projects End -->