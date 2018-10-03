<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TeamBeer!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootStrap4/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet/less" type="text/css"
          href="<?php echo base_url(); ?>assets/bootStrap4/css/elderlyStyle.less"/>

</head>
<!-- TitleBar -->
<body>
<div class="container" id="content" style="padding-top: 0">
    <nav class="navbar navbar-expand-lg navbar-inverse fixed-top">
        <div class="container">
            <div class="navbar-brand"><?php echo lang("showanswers_summary"); ?></div>
        </div>
    </nav>

    <?php

    function answerValueToText($value)
    {
        if ($_SESSION['language'] == "Nederlands") {
            if ($value == 1) {
                return "NOOIT";
            } else if ($value == 2) {
                return "ZELDEN";
            } else if ($value == 3) {
                return "SOMS";
            } else if ($value == 4) {
                return "MEESTAL";
            } else if ($value == 5) {
                return "ALTIJD";
            } else {
                return "does not exist";
            }
        } else {
            if ($value == 1) {
                return "NEVER";
            } else if ($value == 2) {
                return "RARELY";
            } else if ($value == 3) {
                return "SOMETIMES";
            } else if ($value == 4) {
                return "OFTEN";
            } else if ($value == 5) {
                return "ALWAYS";
            } else {
                return "does not exist";
            }
        }

    }

    for ($i = 0; $i < sizeof($_SESSION['allanswers']); $i++) {
        $answer_text = answerValueToText($_SESSION['allanswers'][$i]);
        echo
            '<div class="row">' .
            '<div class="col-sm-12">' .
            '<h1 class="mt-5 question"> ' . $_SESSION['qestionIDs'][$i][1] . '</h1>' .
            '</div></div>' .
            '<div class="row">' .
            '<div class="col-sm-3">' .
            '<h2 class="answer"> ' . lang("showanswers_answer") . ' : ' . $answer_text . '</h2>' .
            '</div>' .
            '<div class="col-sm-9">' .
            '<a class="btn allCatBtn changeAnswerBtn" role="button" onclick="changeAnswer(' . $i . ')" >' . lang("showanswers_change") . '</a>' .
            '</div>' .
            '</div>';
    }
    ?>

    <footer>
        <div class="row">
            <div class="col-sm-4">
                <a class="btn btn-primary confirmButton answerButton"
                   onclick="addAnswers('<?php echo lang("showanswers_message"); ?>')" role="button"
                ><?php echo lang("showanswers_send"); ?></a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-primary confirmButton answerButton"
                   onclick="addAnswersAnonymously('<?php echo lang("showanswers_messageAnonymously"); ?>')"
                   role="button"
                ><?php echo lang("showanswers_send_anonomous"); ?></a>
            </div>
        </div>
    </footer>
</div>


<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <p id="placeholder"></p>
        <a class="btn btn-primary confirmButton answerButton"
           onclick="window.location.href='<?php echo base_url(); ?>index.php/resident/loadResidentInfo'" role="button"
           style="margin:auto; display:block">
            <?php echo lang("showanswers_confirm"); ?>
        </a>
    </div>

</div>
</body>

<!--  <button onclick="window.location.href='categories'">submit</button>-->


<!-- Bootstrap 4 core JavaScript & Less compiler cdn-->
<script src="<?php echo base_url(); ?>assets/bootStrap4/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootStrap4/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/showAnswers.js"></script>
</html>



