<?php
$servername = "localhost";
$database = "pendaftaran";
$username = "root";
$password = "";

// Create connection
$db = mysqli_connect($servername, $username, $password, $database);
echo "";
if(!$db) {
    die("Gagal terhubung : ". mysqli_connect_error());
}
?>