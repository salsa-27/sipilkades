<?php
session_start();
include "config.php";

if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    header("Location: halaman2.php");
    exit();
}

// Total semua suara
$total_result = mysqli_query($conn, "SELECT COUNT(*) as total FROM votes");
$total_data = mysqli_fetch_assoc($total_result);
$total = $total_data['total'];

// Suara Agus
$agus_result = mysqli_query($conn, "SELECT COUNT(*) as total FROM votes WHERE option_id = 1");
$agus_data = mysqli_fetch_assoc($agus_result);
$suara_agus = $agus_data['total'];

// Suara Bagas
$bagas_result = mysqli_query($conn, "SELECT COUNT(*) as total FROM votes WHERE option_id = 2");
$bagas_data = mysqli_fetch_assoc($bagas_result);
$suara_bagas = $bagas_data['total'];

// Suara Jamal
$jamal_result = mysqli_query($conn, "SELECT COUNT(*) as total FROM votes WHERE option_id = 3");
$jamal_data = mysqli_fetch_assoc($jamal_result);
$suara_jamal = $jamal_data['total'];

// Persentase
$persen_agus = ($total > 0) ? round(($suara_agus / $total) * 100) : 0;
$persen_bagas = ($total > 0) ? round(($suara_bagas / $total) * 100) : 0;
$persen_jamal = ($total > 0) ? round(($suara_jamal / $total) * 100) : 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Hasil Voting</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #aebbc7;
    display: flex;
  }

  .sidebar{
    width:220px;
    height:100vh;
    background:#2F4156;
    color:white;
    position:fixed;
    display:flex;
    flex-direction:column;
    gap:2px;
  }

  .logo{
    display:flex;
    gap:12px;
    padding:12px;
    border-bottom:1px solid #567C8D;
    background:#C8D9E6;
  }

  .logo img{
    width:70px;
  }

  .judul h2{
    font-size:14px;
    line-height:16px;
    margin:0;
    color:#2F4156;
    position:relative;
    top:14px;
  }

  .menu{
    padding:22px 22px;
    cursor:pointer;
    display:flex;
    align-items:center;
    gap:14px;
    color:#C8D9E6;
    font-size:18px;
    font-weight:500;
    transition:0.3s;
  }

  .menu:first-of-type{
    margin-top:30px;
  }

  .menu:hover{
    background:#567C8D;
    color:white;
  }

  .logout{
    margin-top:auto;
    padding:20px;
    display:flex;
    align-items:center;
    gap:14px;
    cursor:pointer;
    color:#F5EFEB;
    font-size:18px;
    font-weight:500;
  }

  .logout:hover{
    background:#567C8D;
    color:white;
  }

  .main {
    margin-left:220px;
    width:100%;
    padding:40px;
    box-sizing:border-box;
  }

  h1 {
    text-align:center;
    color:#2c3e50;
    font-size:48px;
    margin-bottom:50px;
    letter-spacing:2px;
  }

  .cards {
    display:flex;
    justify-content:center;
    gap:40px;
    flex-wrap:wrap;
  }

  .card {
    background-color:#fff;
    width:280px;
    padding:30px 20px;
    border-radius:30px;
    text-align:center;
    box-shadow:0 10px 20px rgba(0,0,0,0.1);
    box-sizing:border-box;
  }

  .card img {
    width:180px;
    height:180px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:20px;
  }

  .name {
    font-weight:bold;
    font-size:24px;
    color:#567C8D;
    margin-bottom:20px;
    padding-bottom:15px;
    border-bottom:2px solid #aebbc7;
  }

  .percentage {
    font-weight:bold;
    font-size:32px;
    margin:0;
    color:#000;
  }

  .vote-count {
    font-size:20px;
    font-weight:bold;
    color:#000;
    margin-top:5px;
  }
</style>
</head>
<body>

<div class="sidebar">

    <div class="logo">
        <img src="logo pilkades.png">

        <div class="judul">
            <h2>SISTEM</h2>
            <h2>PEMILIHAN</h2>
            <h2>KEPALA DESA</h2>
        </div>
    </div>

    <div class="menu" onclick="location.href='halaman3.php'">
        <span>Voting</span>
    </div>

    <div class="menu" onclick="location.href='hasil-voting.php'">
        <span>Hasil Voting</span>
    </div>

    <div class="logout" onclick="location.href='halaman1.php'">
        <span>Log Out</span>
    </div>

</div>

<div class="main">
  <h1>HASIL VOTING</h1>

 <div class="cards">

    <div class="card">
      <img src="agus.jpeg" alt="Agus"/>
      <div class="name">AGUS</div>
      <p class="percentage"><?php echo $persen_agus; ?>%</p>
      <p class="vote-count"><?php echo $suara_agus; ?> Votes</p>
    </div>

    <div class="card">
      <img src="bagas.jpeg" alt="Bagas"/>
      <div class="name">BAGAS</div>
      <p class="percentage"><?php echo $persen_bagas; ?>%</p>
      <p class="vote-count"><?php echo $suara_bagas; ?> Votes</p>
    </div>

    <div class="card">
      <img src="jamals.png" alt="Jamal"/>
      <div class="name">JAMAL</div>
      <p class="percentage"><?php echo $persen_jamal; ?>%</p>
      <p class="vote-count"><?php echo $suara_jamal; ?> Votes</p>
    </div>

</div>
  </div>
</div>

</body>
</html>