<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TeamBeer!</title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">
    
        <script src="<?php echo base_url(); ?>assets/js/login.js"></script>

        <!-- Bootstrap 4 & custom Css-->
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>assets/bootStrap4/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/bootStrap4/css/elderlyStyle.less" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-inverse fixed-top">
            <div class="container">
                <div class="navbar-brand offset-sm-2"><?php echo lang("profile_title");?></div>
                <div class="col-4">
                    <div class="btn btn-primary backBtn" style="margin-left: 0px;" onclick="window.location.href='<?php echo base_url(); ?>index.php/resident/loadResidentInfo'"><?php echo lang("profile_back");?></div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row" style="margin-top: 3rem;">
                <div class="col-sm-7 offset-sm-2">
                    <div class="card profileCard">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <img src="<?php echo base_url(); ?>/assets/profile_pictures/<?php  echo $_SESSION['pictureSmall'];?>" alt="ProfilePictureFromDB" class = "profilePic" >
                                </div>
                                <div class="col-sm-8">
                                    <p class="profileName"><strong><?php echo lang("profile_name");?>: <?php echo $_SESSION['firstName']; ?> <?php echo $_SESSION['lastName'];?></strong></p>
                                    <p class="profileText"><strong><?php echo lang("profile_floor");?>: </strong> <?php echo $_SESSION['floor'];?></p>
                                    <p class="profileText"><strong><?php echo lang("profile_room");?>: </strong> <?php echo $_SESSION['room_number'];?></p>
                                    <p class="profileText"><strong><?php echo lang("profile_language");?>: </strong> <?php echo $_SESSION['language'];?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    <script src="<?php echo base_url(); ?>assets/bootStrap4/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootStrap4/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
</html>

