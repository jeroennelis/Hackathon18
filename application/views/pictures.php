<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Team Beer!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/pictures.css" rel="stylesheet">
    <!-- Bootstrap 4 & custom Css-->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootStrap4/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet/less" type="text/css"
          href="<?php echo base_url(); ?>assets/bootStrap4/css/elderlyStyle.less"/>


</head>
<body>
<nav class="navbar navbar-inverse fixed-top">
    <div class="navbar-brand"><?php echo lang("pictures_title");?></div>
        <div class="btn btn-primary backBtn" style="margin-right: 25px;"
             onclick="window.location.href='<?php echo base_url(); ?>index.php/resident/loadResidentInfo'"><?php echo lang("pictures_back");?>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" id='paceholder'>
            <?php foreach ($_SESSION['activities'] as $activity) {
                echo
                "<a class='btn allCatBtn' style='width:100%' role='button' onclick='getPicturesForCategory($activity[0])'>   
                            $activity[1]   
                    </a>";

            }
            ?>
        </div>
        <div class="col-md-9">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php
                    $x = 1;
                    foreach ($_SESSION['pictures'] as $picturePath) {
                        echo
                        "<div class='carousel-item";
                        if ($x == 1) {
                            echo " active";
                        }
                        echo
                        "'>
                                    <img class='d-block img-fluid' src='$picturePath' alt='First slide' >
                                </div>";
                        $x++;
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
</body>

<!-- Bootstrap 4 core JavaScript & Less compiler cdn-->
<script src="<?php echo base_url(); ?>assets/bootStrap4/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootStrap4/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pictures.js"></script>
</html>