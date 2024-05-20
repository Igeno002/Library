<?php
@session_start();
error_reporting(0);
include("connection/connection.php");
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
    $id=$_SESSION['StuId'];
    $name=$_SESSION['FullName'];
    //for send messages
    $_SESSION['$studentid']=$id;

    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | User Dash Board</title>
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
<div class="content-wrapper">
        <div class="container">
                <div class="row pad-botm">
                    <div class="col-md-12">
                        <h4 class="header-line"><?php echo $name; ?> |  | INBOX</h4>
                        
                    </div>
                </div>
                     
        <div class="row">

        <?php
            $sql = "SELECT * FROM messagestbl";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // Fetch and output data row by row
                while($row = $result->fetch_assoc())
                {
                    ?>
                        <div class="panel panel-borderless col-md-12" >
                        <div class="panel-body">          
                            <table class="table table-bordered" style="border-color:black">
                                <tbody>
                                <tr >
                                    <td>
                                        <!----------------------send part-------------panel--->

                                    
                                        <div class="panel panel-default col-md-6 " style="  box-shadow: 5px 5px 3px #888888;">
                                            <div class="panel-body">
                                            <table class="table-borderless">
                                                    <tr>
                                                    <td rowspan="0" class="col-md-2">
                                                        <img src="assets/img/22.jpg" alt="Avatar" class="avatar" style="width: 100%; border-radius: 50%;">
                                                    </td>
                                                        
                                                    </tr>

                                                    <tr>
                                                        <td><?php echo $row['Content']?>
                                            
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                </td>
                                </tr>

                                
                                <tr>
                                <td>
                                    <!----------------------reply part-------------panel--->
                                    <div class="panel panel-default col-md-6 col-lg-offset-6"  style="  box-shadow: 5px 5px 3px #888823;">
                                        <div class="panel-body">
                                            <table class="tabl">
                                                    <tr>
                                                        <td rowspan="0" class="col-md-2">
                                                        <img src="assets/img/22.jpg" alt="Avatar" class="avatar" style="width: 100%; border-radius: 50%;">
                                                        </td>
                                                        
                                                    </tr>

                                                    <tr>
                                                        <td>Hy I want your Help are ready
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>


                                    </td>

                                </tr>
                                

                                </tbody>
                            </table>
                

                        </div>
                </div>
 
                    <?php
                    
                }
            }
            
            // Close the connection
            $conn->close();
       ?>
                        


   
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
