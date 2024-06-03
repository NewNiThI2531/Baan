<?php

$detail = [];
$sql = "SELECT * FROM gallery WHERE G_type IN (1,2) AND ID_gallery=$id AND G_status='0'";
$query = $conn->query($sql);

while ($galleryA = $query->fetch_assoc()) {
    $detail[] = $galleryA;
}

?>

<?php
foreach ($detail as $key => $gallery1) {
    if ($gallery1['G_type'] == '1') { ?>

        <section class="gallerybg topimg" style="background-image: url(../webSite/image/275616_0_0.jpg);">
            <div class="bgcol">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
                            <h2 class="Headtext">
                                <?php echo $gallery1['G_titletext']; ?>
                            </h2>
                            <p class="Subtext">
                                <?php echo $gallery1['G_subtext']; ?>
                            </p>
                            <hr class="w-50 mx-auto mb-0 text-secondary">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
?>


<?php
foreach ($detail as $key => $galleryA) {
    if ($galleryA['G_type'] == '2') { ?>
        <section class="container">
            <p class="namehome">
                <?php echo $galleryA['G_titletext']; ?>
            </p>
        </section>

        <section class="imgall">
            <div class="imgviewgall" style="background-image: url(<?php echo $galleryA['G_image']; ?>);"></div>
        </section>

        <section class="container topdetailimg">
            <p class="detailimg">
                <?php echo $galleryA['G_ContetnA']; ?>
            </p>
        </section>

        <section class="container imgall">

            <div class="col-lg-6 col-md-6 col-12 covcol">
                <div class="imgbg" style="background-image: url(<?php echo $galleryA['G_imageA']; ?>);">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 covcol">
                <div class="imgbg" style="background-image: url(<?php echo $galleryA['G_imageB']; ?>);">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 covcol">
                <div class="imgbg" style="background-image: url(<?php echo $galleryA['G_imageC']; ?>);">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 covcol">
                <div class="imgbg" style="background-image: url(<?php echo $galleryA['G_imageD']; ?>);">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 covcol">
                <div class="imgbg" style="background-image: url(<?php echo $galleryA['G_imageE']; ?>);">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 covcol">
                <div class="imgbg" style="background-image: url(<?php echo $galleryA['G_imageF']; ?>);">
                </div>
            </div>

        </section>
        <?php
    }
}
?>