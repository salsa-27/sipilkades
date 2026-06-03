<?php
session_start();

include "./config.php";

$username = $_POST['USERNAME'];
$kode = $_POST['kode-pilih'];

$query = "SELECT * FROM users 
          WHERE username='$username' 
          AND plain_code='$kode'";

$result = $conn->query($query);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    $_SESSION['nama'] = $row['name'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['is_admin'] = $row['is_admin'];

    header("Location: halaman2.php");
    exit();

} else {

    header("Location: datasalah.php");
    exit();

}