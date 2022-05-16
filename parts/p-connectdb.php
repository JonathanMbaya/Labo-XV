<?php

$name = $_GET["name"];
$email = $_GET["email"];
$subject = $_GET["subject"];
$name = $_GET["message"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laboxv_db";

try{
    
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", 'root', '');

    $conn -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql ="INSERT INTO contact (name, email, subject, message) 
    VALUES ('$name', '$email', '$subject', '$mesage')";

    $conn->exec($sql);

    echo "Message envoyé";

    }

catch (PDOException $e)

    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>