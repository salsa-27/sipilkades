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
    $_SESSION['is_admin'] = $row['is_admin'];

    // cek admin atau voter
    if ($row['is_admin'] == 1) {

        header("Location: halaman2.php");

    } else {

        header("Location: datasalah.php");

    }

    exit();

} else {

    header("Location: datasalah.php");
    exit();

}