<?php

$detail = [];
$sql = "SELECT * FROM contact WHERE C_type IN (1) AND C_status='0'";
$query = $conn->query($sql);

while ($contact = $query->fetch_assoc()) {
    $detail[] = $contact;
}

?>

<?php
foreach ($detail as $key => $contact) {
    if ($contact['C_type'] == '1') { ?>
        <div class="container" style="margin-block-start: 80px;">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-12 col-sm-12 cardlogobgA">
                    <img src="<?php echo $contact['C_image']; ?>" alt="" class="cardlogo">
                </div>

                <div class="col-12 col-lg-6 col-md-12 col-sm-12 cardlogobgB">

                    <p class="comname"><?php echo $contact['C_titletext']; ?></p>
                    <div class="covercall">Tell :
                        <a href="" class="callcon"><?php echo $contact['C_contact']; ?></a>
                    </div>
                    <div class="coverface">Facebook :
                        <a href="<?php echo $contact['C_linkA']; ?>" class="facecon"><?php echo $contact['C_socialA']; ?></a>
                    </div>
                    <div class="coverline">Line :
                        <a href="<?php echo $contact['C_linkB']; ?>" class="linecon"><?php echo $contact['C_socialB']; ?></a>
                    </div>

                    <div class="qrconcover">
                        <img class="qricon" src="<?php echo $contact['C_qrA']; ?>" alt="">
                        <img class="qricon" src="<?php echo $contact['C_qrB']; ?>" alt="">
                    </div>

                </div>

            </div>
        </div>
        <?php
    }
}
?>