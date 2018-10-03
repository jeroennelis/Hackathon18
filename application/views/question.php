<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TeamBeer!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <!--
      <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
      -->
    <!-- bs4 and custon css -->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootStrap4/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet/less" type="text/css"
          href="<?php echo base_url(); ?>assets/bootStrap4/css/elderlyStyle.less"/>

</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-inverse fixed-top">
    <div class="container">
        <div class="navbar-brand"><?php echo lang("question_category");?>: <?php echo $_SESSION['questionCategory']?></div>
    </div>
</nav>
<!--body -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="mt-5 pageTitle">
                <small>
                    <?php echo lang("question_question");?>
                    <?php echo $_SESSION['qID'] + 1 ?>
                    <?php echo lang("question_of");?>
                    <?php echo $_SESSION['arraylength'] ?>:
                </small>
                 <?php echo $_SESSION['questionTest'] ?>.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-4">
            <div class="card iconCard"  id="never" onclick="never()">
                    <div class="card-block">
                        <div class="card-title" id ="neverText"><span><?php echo lang("question_never");?></span></div>
                        <div class="card-block icon" id="neverIcon"><span> 餃</span></div>
                    </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4">
            <div class="card iconCard"  id="notOften" onclick="notOften()">
                    <div class="card-block">
                        <div class="card-title" id="notOftenText"><span><?php echo lang("question_rarely");?></span></div>
                        <div class="icon" id="notOftenIcon"> 餄</div>
                    </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4">
            <div class="card iconCard"  id="sometimes" onclick="sometimes()">
                    <div class="card-block">
                        <div class="card-title" id="sometimesText"><span><?php echo lang("question_sometimes");?></span></div>
                        <div class="icon" id="sometimesIcon"> 餁</div>
                    </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 offset-lg-0 offset-md-2">
            <div class="card iconCard"  id="often" onclick="often()">
                    <div class="card-block">
                        <div class="card-title" id="oftenText"><span><?php echo lang("question_often");?></span></div>
                        <div class="icon" id="oftenIcon"> 餅</div>
                    </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-4">
            <div class="card iconCard"  id="always" onclick="always()">
                    <div class="card-block" id="alwaysTextAndIcon">
                        <div class="card-title" id="alwaysText"><span><?php echo lang("question_always");?></span></div>
                        <div class="card-block icon" id="alwaysIcon"><span> 餂 </span></div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row grapeBtnRow">
        <div class="offset-md-4" id="placeholder"></div>
        <button class="btn btn-primary nextBtn" id="nextButton"
                onclick="window.location.href='addAnswer'"><?php echo lang("question_next"); ?></button>
    </div>
</div>

<!-- Bootstrap4 core JavaScript & less compiler cdn link -->
<script src="<?php echo base_url(); ?>assets/bootStrap4/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootStrap4/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/question.js"></script>
</body>
</html>