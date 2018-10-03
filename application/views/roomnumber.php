<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TeamBeer!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <!-- Bootstrap 4 & custom Css-->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootStrap4/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet/less" type="text/css"
          href="<?php echo base_url(); ?>assets/bootStrap4/css/elderlyStyle.less"/>

    <!-- styles for this specific page (bg image) -->
    <link rel="stylesheet/less" type="text/css"
          href="<?php echo base_url(); ?>assets/bootStrap4/css/loginEldStyle.less"/>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-inverse fixed-top">
    <div class="container">
        <div class="navbar-brand">Grace Age</div>
    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="col-lg-12 text-left">
            <h1 class="mt-5 pageTitle"> <?php echo lang("roomnumber_message"); ?></h1>
        </div>
    </div>

    <form action="<?php echo base_url(); ?>index.php/resident/login" method='post'>
        <div class="warning" id="placeholder"> <?php echo lang('roomnumber_warning')?></div>

        <div class="row">
            <div class="col-md-4 ">
                <input type="number" name="number">

            </div>
        </div>
        <div class="row " style="margin-top: 50px;">
            <div class="col-md-4">
                <button type="button, submit" class="btn btn-primary confirmButton">
                    Bevestig
                </button>
            </div>
        </div>
    </form>


    <!-- Bootstrap4 core JavaScript & less compiler cdn link -->
    <script src="<?php echo base_url(); ?>assets/bootStrap4/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootStrap4/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/roomnumber.js"></script>

</div>
<script>
    var roomNumber = "<?php echo $_SESSION['room_number'] ?>";
    console.log(roomNumber);
    if (roomNumber == -1) {
        setWarning();
    }
</script>

</body>
</html>