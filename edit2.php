  
<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ramitoi.mysql.database.azure.com', 'praewramita@ramitoi', 'Rt0877003141', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];


$sql = "UPDATE guestbook SET Comment='$comment' WHERE Name='$name' ";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully! CONGRATULATION!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
