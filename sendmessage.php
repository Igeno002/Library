<?php
include("newone/connection.php");
session_start();
if(isset($_POST["submit"]))
{
    
    $message=$_POST['message'];
    $title='hello iam isaac';
    $duration= date('Y-m-d');
    $studentid=$_SESSION['$studentid'];

if(empty($message))
{
    echo "<script>
    alert('Fill form');
    window.location.href = 'dashboard.php';
</script>";
}
else
   {
    $sql="INSERT INTO messagestbl(StudentId,Title, Content,Duration) VALUES('$studentid', '$title', '$message', '$duration')";

    // Execute SQL statement
             if ($conn->query($sql) === TRUE)
              {
                include("chatingpage.php");
               
               } 
             else 
             {
               echo "Error: " . $sql . "<br>" . $conn->error;
             }
 
   }

   
}
?>