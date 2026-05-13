<?php

include "./config.php";

// ambil data dari form (sesuai name di HTML kamu)
$nik = $_POST['NIK'];
$password = $_POST['kode-pilih'];

// echo $nik;
// echo $password;
// exit();

// echo $nik;
// echo $password;

$query = "SELECT * FROM users WHERE username ='".$_POST['NIK']."'";
$result = $conn->query($query);
// exit();

// echo $result->num_rows;
// exit();
// ambil data
$row = $result->fetch_assoc();
// exit();

// cek apakah email ditemukan
if ($result->num_rows == 0) {

  header("location:index.php");
  exit(); // langsung akhiri eksekusi tanpa harus lanjut ke bawah
} else {
  if ($_POST['inputan_password'] == $row['password']) {
    // echo "Anda berhasil login";
    header("location:halaman2.php");
  } else {
    // echo "Password anda salah";
    header("location:dataasalah.php");
  }
}