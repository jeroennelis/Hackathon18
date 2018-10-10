<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>hackaton 18</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <script src="<?php echo base_url(); ?>assets/js/login.js"></script>

    <!-- Bootstrap 4 & custom Css-->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootStrap4/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet/less" type="text/css"
          href="<?php echo base_url(); ?>assets/bootStrap4/css/login.less"/>
    
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/icon.png">

<!-- Page Content -->
<!-- title-->

<body>
<div class="container">
    
    <div class="wrapper">
        <form class="form-signin" action="<?php echo base_url(); ?>index.php/user/login" method='post'>       
          <h2 class="form-signin-heading"><?php echo lang('login_message')?></h2>
          <input type="text" class="form-control" name="username" placeholder="<?php echo lang('login_username')?>" required="" autofocus="" name="username"/>
          <input type="password" class="form-control" name="password" placeholder="<?php echo lang('login_password')?>" required=""/>      
          
          <button class="btn btn-lg btn-primary btn-block" type="button, submit"><?php echo lang('login_login')?></button>   
        </form>
    </div>
    
    <div>
        <a href="<?php echo base_url(); ?>index.php/user/SetDutch">NL</a>
        <a href="<?php echo base_url(); ?>index.php/user/SetEnglish">ENG</a>
    </div>
    
</div>
</body>

<!-- Bootstrap 4 core JavaScript & Less compiler cdn-->
<script src="<?php echo base_url(); ?>assets/bootStrap4/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootStrap4/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>



</html>

