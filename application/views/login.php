<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet/less" type="text/css"
          href="<?php echo base_url(); ?>assets/bootStrap4/css/elderlyStyle.less"/>


</head>


<!-- TitleBar -->
<nav class="navbar navbar-expand-lg navbar-inverse fixed-top">
    <div class="container">
        <div class="navbar-brand offset-sm-2"><?php echo $_SESSION['room_number'] ?></div>
    </div>
</nav>

<!-- Page Content -->
<!-- title-->
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2 text-left">
            <h1 class="mt-5 pageTitle"> <?php echo lang("login_choose");?> </h1>
        </div>
    </div>

    <!-- cards -->
    <div class="row" id="placeholder">

    </div>

    <!-- button -->
    <div class="row grapeBtnRow">
        <div class="col-sm-5 offset-sm-2">
            <a class="btn btn-primary confirmButton notMeButton" href="index" role="button"><?php echo lang("login_button");?></a>
        </div>
    </div>
</div>

<?php
$i = 0;
$room_info = $_SESSION['room_info'];
$size = sizeof($room_info);
$photos = array("", "");
$ids = array(0, 0);
$names = array("", "");
for ($i = 0; $i < sizeof($room_info); $i++) {
    $ids[$i] = $room_info[$i][0];
    $photos[$i] = $room_info[$i][1];
    $names[$i] = $room_info[$i][2];
}
?>
<script>
    if (<?php echo sizeof($room_info) ?> <
    1
    )
    {
        console.log("0 residents");
    }
    else
    if (<?php echo sizeof($room_info) ?> >
    1
    )
    {
        var photo1 = <?php echo "'$photos[0]'";?>;
        var photo2 = <?php echo "'$photos[1]'";?>;
        var id1 = <?php echo "'$ids[0]'";?>;
        var id2 = <?php echo "'$ids[1]'";?>;
        var name1 = <?php echo "'$names[0]'";?>;
        var name2 = <?php echo "'$names[1]'";?>;
        addPictures(photo1, id1, name1, photo2, id2, name2);

    }
    else
    {
        var photo = <?php echo "'$photos[0]'";?>;
        var id = <?php echo "'$ids[0]'";?>;
        var name = <?php echo "'$names[0]'";?>;
        addPicture(photo, id, name);
    }
</script>

<!-- Bootstrap 4 core JavaScript & Less compiler cdn-->
<script src="<?php echo base_url(); ?>assets/bootStrap4/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootStrap4/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>



</html>

