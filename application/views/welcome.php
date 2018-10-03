<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TeamBeer!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <!-- bs4 and custon css -->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootStrap4/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet/less" type="text/css"
          href="<?php echo base_url(); ?>assets/bootStrap4/css/elderlyStyle.less"/>

</head>
<body>


<!-- Navigation -->
<nav class="navbar navbar-inverse fixed-top ">
    <div class="container">
        <div class="navbar-brand"><?php echo lang("welcome_title"); ?> </div>
        <div class="col-4">
            <div class="btn btn-primary backBtn" style="margin-left:55px;"
                 onclick="window.location.href='<?php echo base_url(); ?>'"><?php echo lang("welcome_logout"); ?> </div>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-left">
            <h1 class="mt-5 pageTitle"><?php echo lang("welcome_hello"); ?> <?php echo $_SESSION['firstName'] ?>
                , <?php echo lang("welcome_instruction"); ?> </h1>
        </div>
    </div>
    <div class="row categoriesRow">

        <div class="col-sm-4 col-6">
            <div class="card iconCard" onclick="window.location.href='category'">
                <div class="card-block">
                    <div class="card-title"><span><?php echo lang("welcome_questions"); ?> </span></div>
                </div>
                <div class="card-block">
                    <div class="card-block icon"><span>  </span></div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-12">
            <div class="card iconCard" onclick="window.location.href='pictures'">
                <div class="card-block">
                    <div class="card-title"><span><?php echo lang("welcome_pictures"); ?></span></div>
                </div>
                <div class="card-block">
                    <div class="icon"> </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-6">
            <div class="card picCard" onclick="window.location.href='profile'">
                <div class="card-block">
                    <div class="card-title pictureTitle"><span><?php echo lang("welcome_profile"); ?> </span></div>
                    <img class="card-img-bottom img-fluid"
                         src="<?php echo base_url(); ?>/assets/profile_pictures/<?php echo $_SESSION['pictureSmall']; ?>"
                         alt="Picture From Database">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap4 core JavaScript & less compiler cdn link -->
<script src="<?php echo base_url(); ?>assets/bootStrap4/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootStrap4/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>


</body>
</html>