
<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Add Author</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wra
    <div class="content-wrapper">
<div class="container">
    <div class="row pad-botm">
        <div class="col-md-12">
        <h1 class="header-line">ADD NEW ADMIN</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                ADD NEW ADMIN HERE
                </div>
                <div class="panel-body text-center">
                    <!----------------------ADD ADMIN FORM--------------------------------->
                    <form role="form" method="POST" action="createadmin.php">
                        <div class="form-group">
                            <label>FULLNAME</label>
                            <input class="form-control" type="text" name="fullname" autocomplete="off"  required />
                            <label>USERNAME</label>
                            <input class="form-control" type="text" name="username" autocomplete="off"  required />
                            <label>E-MAIL</label>
                            <input class="form-control" type="email" name="email" autocomplete="off"  required />
                            <label>NEW PASSWORD</label>
                            <input class="form-control" type="password" name="newpassword" autocomplete="off"  required />
                             <label>CONFIRM PASSWORD</label>
                            <input class="form-control" type="password" name="confpassword" autocomplete="off"  required />
                            <p>
                            <?php 

                                if(isset($_SESSION['newpassword']))
                                {
                                    ?>
                                    <p style="color:red">Password Don't Match</p>
                                    <?php
                                }
                             ?>
                                 
                             </p>

                        </div>

                        <button type="submit" name="SUBMIT" class="btn btn-info col-md-6 col-md-offset-3">SUBMIT </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
     <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>

