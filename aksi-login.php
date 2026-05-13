<?php

include "./config.php";

// ambil data dari form (sesuai name di HTML kamu)
$nik = $_POST['NIK'];
$password = $_POST['kode-pilih'];

echo $nik;
echo $password;
exit();

// query cari user
$query = "SELECT * FROM users WHERE NIK='$nik'";
$result = $conn->query($query);

// ambil data
$row = $result->fetch_assoc();

// cek apakah email ditemukan
if ($result->num_rows == 0) {

  header("location:index.php");
  exit(); // langsung akhiri eksekusi tanpa harus lanjut ke bawah
} else {
  if ($_POST['inputan_password'] == $row['password']) {
    // echo "Anda berhasil login";
    header("location:main.php");
  } else {
    // echo "Password anda salah";
    header("location:index.php");
  }
}