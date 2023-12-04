<!-- 
Shakira Putri Abrar
121140053
Prak Pemweb Minggu 8 -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>