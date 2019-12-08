<?php
include 'dbconnection.php';
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t5"];
$e=$_POST["t6"];
try {
    
    $sql = "INSERT INTO registered (firstname, lastname,password, email,mobno)
    VALUES ('$a', '$b', '$c','$d','$e')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

