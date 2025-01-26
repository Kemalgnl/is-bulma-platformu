<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "proje2"; 

$conn = new mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
else   
{
    echo "başarılı"
}
?>
