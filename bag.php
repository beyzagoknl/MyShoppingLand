<?php
$servername = "localhost";
$database = "veritabaniadi";
$username = "kullaniciadi";
$password = "sifre";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " .
        mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>