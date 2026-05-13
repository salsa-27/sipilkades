<?php

include "./config.php";

// ambil data dari form (sesuai name di HTML kamu)
$nik = $_POST['NIK'];
$password = $_POST['kode-pilih'];

echo $nik;
echo $password;


// query cari user
$query = "SELECT * FROM users WHERE username='$nik'";
$result = $conn->query($query);
echo $result;
exit();

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