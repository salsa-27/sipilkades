<?php
session_start();

include "./config.php";

$username = $_POST['NIK'];
$kode = $_POST['kode-pilih'];

$query = "SELECT * FROM users 
          WHERE username='$username' 
          AND plain_code='$kode'";

$result = $conn->query($query);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    $_SESSION['nama'] = $row['name'];
    $_SESSION['username'] = $row['username'];

    header("Location: halaman2.php");
    exit();

} else {

    header("Location: datasalah.php");
    exit();

}