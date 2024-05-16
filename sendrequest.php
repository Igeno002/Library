<?php 
session_start();
 include("newone/connection.php");
if(isset($_GET['bookid']))
{

    $stuid=$_SESSION['studentid'];
    $bid=$_GET['bookid'];
    $rdate=date('Y-m-d');




        $sql = "SELECT * FROM requesttbl where BookId='$bid'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
          // Output data of each row
          while($row = $result->fetch_assoc()) 
          {
            if($bid==$row['BookId'])
            {
                $del="DELETE FROM requesttbl where BookId='$bid'";
                if ($conn->query($del) === TRUE) {
                 $_SESSION['alert_message'] = "bookAlready Book";
                ?>
               <script>
                alert("<?php echo $_SESSION['alert_message']; ?>");
                window.location.href = "listed-books.php";
                </script>
                <?php
                } else {
                  echo '<script>alert("error");</script>';                 
                  echo "Error deleting record: " . $conn->error;
                }
            }
          }
        }
        else
        {
                
            $sql = "INSERT INTO requesttbl (StudentId, BookId,RequestedDate) VALUES ('$stuid', '$bid','$rdate')";

            // Execute the query
            if ($conn->query($sql) === TRUE) 
            {
                $_SESSION['alert_message'] = "Request Sent Wait for response";
                ?>
               <script>
                alert("<?php echo $_SESSION['alert_message']; ?>");
                window.location.href = "listed-books.php";
                </script>
                <?php
            }
             else 
             {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close the database connection
            $conn->close();
                }


}

?>

