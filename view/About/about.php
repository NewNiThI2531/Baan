<?php

$detail = [];
$sql = "SELECT * FROM about WHERE A_type IN (1,2) AND A_status='0'";
$query = $conn->query($sql);

while ($about = $query->fetch_assoc()) {
    $detail[] = $about;
}

?>

<div class="aboutbg">

    <div class="bgboardA">
        <div class="container">
            <div class="row clearfixA">
                <?php
                foreach ($detail as $key => $about1) {
                    if ($about1['A_type'] == '1') { ?>
                        <!--Content Column A -->
                        <div class="content-column col-md-6 col-sm-12 col-xs-12 boardcolumnA">
                            <div class="inner-columnA">
                                <div class="sec-titleA">
                                    <div class="name-aboutA">
                                        <?php echo $about1['A_titletext']; ?>
                                    </div>
                                </div>
                                <div class="text-aboutA">
                                    <?php echo $about1['A_subtext']; ?>
                                </div>
                                <div class="contact-tellA">
                                    <i class="fa-solid fa-phone">&nbsp; &nbsp;</i>
                                    <span class="call-numberA">
                                        <?php echo $about1['A_contact']; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--Image Column A -->
                        <div class="image-column col-md-6 col-sm-12 col-xs-12 p-0 boardimageA">
                            <div class="BGimageA" 
                                style="background-image: url(<?php echo $about1['A_image']; ?>);">
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- -------------------------- -->

    <div class="bgboardB">
        <div class="container">
            <div class="row clearfixB">
                <?php
                foreach ($detail as $key => $about1) {
                    if ($about1['A_type'] == '2') { ?>
                        <!--Content Column B -->
                        <div class="content-column col-md-6 col-sm-12 col-xs-12 boardcolumnB">
                            <div class="inner-columnB">
                                <div class="sec-titleB">
                                    <div class="name-aboutB">
                                        <?php echo $about1['A_titletext']; ?>
                                    </div>
                                </div>
                                <div class="text-aboutB">
                                    <?php echo $about1['A_subtext']; ?>
                                </div>
                                <div class="contact-tellB">
                                    <i class="fa-solid fa-phone">&nbsp; &nbsp;</i>
                                    <span class="call-numberB">
                                        <?php echo $about1['A_contact']; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--Image Column B -->
                        <div class="image-column col-md-6 col-sm-12 col-xs-12 p-0 boardimageB">
                            <div class="BGimageB" 
                                style="background-image: url(<?php echo $about1['A_image']; ?>);">
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

</div>