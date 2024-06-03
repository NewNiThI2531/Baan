<?php

$detail = [];
$sql = "SELECT * FROM gallery WHERE G_type IN (1,2) AND G_status='0'";
$query = $conn->query($sql);

while ($gallery = $query->fetch_assoc()) {
  $detail[] = $gallery;
}

?>

<section class="py-5 py-xl-6 gallerybg">

  <div class="container mb-5 mb-md-6">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
        <?php
        foreach ($detail as $key => $gallery1) {
          if ($gallery1['G_type'] == '1') { ?>
            <h2 class="Headtext">
              <?php echo $gallery1['G_titletext']; ?>
            </h2>
            <p class="Subtext">
              <?php echo $gallery1['G_subtext']; ?>
            </p>
            <hr class="w-100 mx-auto mb-0 bottomline">
            <?php
          }
        }
        ?>
      </div>
    </div>
  </div>


  <?php
  foreach ($detail as $key => $gallery2) {
    if ($gallery2['G_type'] == '2') { ?>
      <div class="container overflow-hidden">

        <div class="row gy-3 g-md-3 hcf-isotope-grid manonryTag" data-masonry="{&quot;percentPosition&quot;: true }">

          <div class="col-6 col-md-4 col-lg-4 hcf-isotope-item">
            <a class="hcf-masonry-card rounded rounded-4" href="?page=detail&id<?php echo $gallery2['ID_gallery'] ?>">
              <?php
              foreach ($detail as $key => $gallery2) {
                if ($gallery2['G_type'] == '2') { ?>
                  <img class="card-img img-fluid" loading="lazy" src="<?php echo $gallery2['G_image']; ?>" alt="">
                  <div class="card-overlay d-flex flex-column justify-content-center bg-dark p-4" style="--bs-bg-opacity: .5;">
                    <h3 class="card-title titlegallerycard mb-1">
                      <?php echo $gallery2['G_titletext']; ?>
                    </h3>
                  </div>
                  <?php
                }
              }
              ?>
            </a>
          </div>

        </div>
      </div>

      <?php
    }
  }
  ?>

</section>