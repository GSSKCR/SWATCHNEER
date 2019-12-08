<?php
include 'dbconnection.php';
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t5"];
try {
    
    $sql = "INSERT INTO registered (firstname, lastname,password, email)
    VALUES ('$a', '$b', '$c','$d')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "registered successfully";
	include 'booking.php';
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

