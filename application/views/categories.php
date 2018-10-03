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
<nav class="navbar navbar-expand-lg navbar-inverse fixed-top">
    <div class="container">
        <div class="navbar-brand"><?php echo lang("category_title"); ?> </div>
        <div class="btn btn-primary backBtn" style="margin-left:55px;"
             onclick="window.location.href='<?php echo base_url(); ?>index.php/resident/loadResidentInfo'"><?php echo lang("category_back"); ?></div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-sm-4 text-left">
            <h1 class="mt-5 pageTitle"><?php echo lang("category_instruction"); ?></h1>
        </div>
    </div>

    <div class="row categoriesRow">
        <div class="col-lg-2 col-sm-4 col-12">
            <div class="card iconCard" onclick="chooseCategory('Alle vragen')">
                <div class="card-block">
                    <div class="card-title1"><span><b><?php echo lang("category_all"); ?> </b></span></div>
                </div>
                <div class="card-block">
                    <div class="icon"> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-12">
            <div class="card iconCard <?php
            if ($_SESSION['answerable'][1] == FALSE) {
                echo ' cardGray';
            }
            ?>
                                                 " <?php
            if ($_SESSION['answerable'][1] == TRUE) {
                $function = "'Privacy'";
                echo
                    'onclick="chooseCategory(' . $function . ')"';
            }
            ?>>
                <div class="card-block">
                    <div class="card-title1"><span><?php echo lang("category_privacy"); ?></span></div>
                </div>
                <div class="card-block">
                    <div class="card-block icon"> 餕</div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-sm-4 col-12">
            <div class="card iconCard<?php
            if ($_SESSION['answerable'][2] == FALSE) {
                echo ' cardGray';
            }
            ?> " <?php
            if ($_SESSION['answerable'][2] == TRUE) {
                $function = "'Eten/Maaltijden'";
                echo
                    'onclick="chooseCategory(' . $function . ')"';
            }
            ?>>
                <div class="card-block">
                    <div class="card-title1"><span><?php echo lang("category_meals"); ?></span></div>
                </div>
                <div class="card-block">
                    <div class="icon"> 餘</div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-sm-4  col-12">
            <div class="card iconCard<?php
            if ($_SESSION['answerable'][3] == FALSE) {
                echo ' cardGray';
            }
            ?>"<?php
            if ($_SESSION['answerable'][3] == TRUE) {
                $function = "'Veiligheid'";
                echo
                    'onclick="chooseCategory(' . $function . ')"';
            }
            ?>>
                <div class="card-block">
                    <div class="card-title1"><span><?php echo lang("category_safety"); ?></span></div>
                </div>
                <div class="card-block">
                    <div class="icon"> 餓</div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-12">
            <div class="card iconCard<?php
            if ($_SESSION['answerable'][4] == FALSE) {
                echo ' cardGray';
            }
            ?>"<?php
            if ($_SESSION['answerable'][4] == TRUE) {
                $function = "'Welzijn'";
                echo
                    'onclick="chooseCategory(' . $function . ')"';
            }
            ?>>
                <div class="card-block">
                    <div class="card-title1"><span><?php echo lang("category_wellbeing"); ?></span></div>
                </div>
                <div class="card-block">
                    <div class="icon"> 餑</div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-12">
            <div class="card iconCard<?php
            if ($_SESSION['answerable'][11] == FALSE) {
                echo ' cardGray';
            }
            ?>"<?php
            if ($_SESSION['answerable'][11] == TRUE) {
                $function = "'Autonomie'";
                echo
                    'onclick="chooseCategory(' . $function . ')"';
            }
            ?>>
                <div class="card-block">
                    <div class="card-title1"><span><?php echo lang("category_autonomy"); ?></span></div>
                </div>
                <div class="card-block">
                    <div class="icon"> </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row2 ">
        <div class="col-lg-2 col-sm-4 col-12">
            <div class="card iconCard<?php
            if ($_SESSION['answerable'][12] == FALSE) {
                echo ' cardGray';
            }
            ?>"<?php
            if ($_SESSION['answerable'][12] == TRUE) {
                $function = "'Respect'";
                echo
                    'onclick="chooseCategory(' . $function . ')"';
            }
            ?>>
                <div class="card-block">
                    <div class="card-title1"><span><?php echo lang("category_respect"); ?></span></div>
                </div>
                <div class="card-block">
                    <div class="icon"> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-12">
            <div class="card iconCard<?php
            if ($_SESSION['answerable'][13] == FALSE) {
                echo ' cardGray';
            }
            ?>"<?php
            if ($_SESSION['answerable'][13] == TRUE) {
                $function = "'Reactie medewerkers'";
                echo
                    'onclick="chooseCategory(' . $function . ')"';
            }
            ?>>
                <div class="card-block">
                    <div class="card-title1"><span><?php echo lang("category_reactions_staff"); ?></span></div>
                </div>
                <div class="card-block">
                    <div class="card-block icon"> 餖</div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-sm-4 col-12">
            <div class="card iconCard<?php
            if ($_SESSION['answerable'][14] == FALSE) {
                echo ' cardGray';
            }
            ?>"<?php
            if ($_SESSION['answerable'][14] == TRUE) {
                $function = "'Band met medewerkers'";
                echo
                    'onclick="chooseCategory(' . $function . ')"';
            }
            ?>>
                <div class="card-block">
                    <div class="card-title1"><span><?php echo lang("category_relations_staff"); ?></span></div>
                </div>
                <div class="card-block">
                    <div class="card-block icon"> </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-sm-4 col-12">
            <div class="card iconCard<?php
            if ($_SESSION['answerable'][6] == FALSE) {
                echo ' cardGray';
            }
            ?>"<?php
            if ($_SESSION['answerable'][6] == TRUE) {
                $function = "'Activiteiten'";
                echo
                    'onclick="chooseCategory(' . $function . ')"';
            }
            ?>>
                <div class="card-block">
                    <div class="card-title1"><span><?php echo lang("category_activities"); ?></span></div>
                </div>
                <div class="card-block">
                    <div class="icon"> 餔</div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-sm-4  col-12">
            <div class="card iconCard<?php
            if ($_SESSION['answerable'][7] == FALSE) {
                echo ' cardGray';
            }
            ?>"<?php
            if ($_SESSION['answerable'][7] == TRUE) {
                $function = "'Vrienden'";
                echo
                    'onclick="chooseCategory(' . $function . ')"';
            }
            ?>>
                <div class="card-block">
                    <div class="card-title1"><span><?php echo lang("category_friends"); ?></span></div>
                </div>
                <div class="card-block">
                    <div class="icon"> 餗</div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-12">
            <div class="card iconCard<?php
            if ($_SESSION['answerable'][8] == FALSE) {
                echo ' cardGray';
            }
            ?>" <?php
            if ($_SESSION['answerable'][8] == TRUE) {
                $function = "'Info'";
                echo
                    'onclick="chooseCategory(' . $function . ')"';
            }
            ?>>
                <div class="card-block">
                    <div class="card-title1"><span><?php echo lang("category_information"); ?></span></div>
                </div>
                <div class="card-block">
                    <div class="icon"> 餒</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap4 core JavaScript & less compiler cdn link -->
<script src="<?php echo base_url(); ?>assets/bootStrap4/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootStrap4/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/categories.js"></script>
</body>
</html>