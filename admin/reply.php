<?php
 if (isset($_POST["repy"])) 
 {
   $reply=$_POST['reply'];
   $replyDate=Date('Y-m-d');
   $sid=$_SESSION['studentid'];
     $sql="UPDATE  messagestbl SET replycontent='$reply' varifitication='$replyDate' WHERE ";
     if($sql==true)
     {
        echo "<script>alert('Message sent')</script>";
     }
    # code...
 }
?>