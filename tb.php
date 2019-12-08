<?php
include 'dbconnection.php';

try {
   
    // sql to create table
    $sql = "CREATE TABLE registered (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
	password VARCHAR(30),
    email VARCHAR(50)
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "registered created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>


