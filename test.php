<?php 
include("newone/connection.php");
$stuid='22';
$bid=2;
$rdate=date('Y-m-d');
$sql = "INSERT INTO requesttbl (StudentId, BookId,RequestedDate) VALUES ('$stuid', '$bid','$rdate')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "woorked";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
