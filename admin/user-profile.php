<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('connection/connection.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ 
   $fullname=$_SESSION['fullname'];
    $sql = "SELECT * FROM admin where FullName='$fullname'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
      // Output data of each row
      $row = $result->fetch_assoc();
      
       $username=$row["UserName"];
       $email=$row['AdminEmail'];
       $registeddate=$row['updationDate'];
      
    } else {
      echo "0 results";
    }

?>
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
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h1 class="header-line">MY PROFILE</h1>
                
                            </div>

</div>


<div class="container">           
  <table class="table">
    <thead>
      <tr>
        <th class="text"><b>FULLNAME: </b><?php echo $fullname; ?> </th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>USERNAME:</b><?php echo $username;?></td>
      </tr>
      <tr>
        <td><b>E-MAIL: <?php echo $email?></b></td>
      </tr>
      <tr>
        <td><b>REGISTED DATE: <?php echo $registeddate;?></b></td>
      </tr>
    </tbody>
  </table>
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
<?php } ?>
