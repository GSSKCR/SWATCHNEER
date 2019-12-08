<?php
include 'dbconnection.php';
session_start();
$a=$_SESSION['sid'];
$b=$_POST["dno"];
try {
    $sql = "INSERT INTO booked VALUES('$a','$b')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo mysql_error();
    }
	include 'securepage.php';

$conn = null;
?>