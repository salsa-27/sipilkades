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

  .sidebar {
    width: 240px;
    background-color: #34495e;
    height: 100vh;
    position: fixed;
    display: flex;
    flex-direction: column;
    box-sizing: border-box; 
  }

  .sidebar-header {
    background-color: #c8d9e6;
    padding: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
    border-bottom: 1px solid #567C8D;
    box-sizing: border-box;
  }

  .sidebar-header img {
    width: 50px;
  }

  .sidebar-header h2 {
    font-size: 14px;
    color: #2c3e50;
    margin: 0;
  }

  .nav-links {
    padding: 20px;
    flex-grow: 1;
  }

  .nav-links a {
    display: block;
    color: #ecf0f1;
    padding: 15px 0;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
    text-transform: uppercase;
  }

  .logout {
    padding: 20px;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    text-transform: uppercase;
  }

  .main {
    margin-left: 240px;
    width: 100%; 
    padding: 40px;
    box-sizing: border-box; 
  }

  h1 {
    text-align: center;
    color: #2c3e50;
    font-size: 48px;
    margin-bottom: 50px;
    letter-spacing: 2px;
  }
  
  .cards {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
  }

  .card {
    background-color: #fff;
    width: 280px;
    padding: 30px 20px;
    border-radius: 30px;
    text-align: center;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    box-sizing: border-box; 
  }

  .card img {
    width: 180px;
    height: 180px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
  }

  .name {
    font-weight: bold;
    font-size: 24px;
    color: #567C8D;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid #aebbc7;
  }

  .percentage {
    font-weight: bold;
    font-size: 32px;
    margin: 0;
    color: #000;
  }

  .vote-count {
    font-size: 20px;
    font-weight: bold;
    color: #000;
    margin-top: 5px;
  }
</style>
</head>
<body>

<div class="sidebar">
  <div class="sidebar-header">
    <img src="logo pilkades.png" alt="Logo">
    <h2>SISTEM PEMILIHAN KEPALA DESA</h2>
  </div>
  
  <div class="nav-links">
    <a href="#">VOTING</a>
    <a href="#">HASIL VOTING</a>
  </div>

  <div class="logout">LOG OUT</div>
</div>

<div class="main">
  <h1>HASIL VOTING</h1>
  
  <div class="cards">
    <div class="card">
      <img src="agus.jpeg" alt="Agus"/>
      <div class="name">AGUS</div>
      <p class="percentage">0%</p>
      <p class="vote-count">0 Votes</p>
    </div>
    
    <div class="card">
      <img src="bagas.jpeg" alt="Bagas"/>
      <div class="name">BAGAS</div>
      <p class="percentage">0%</p>
      <p class="vote-count">0 Votes</p>
    </div>
    
    <div class="card">
      <img src="jamals.png" alt="Jamal"/>
      <div class="name">JAMAL</div>
      <p class="percentage">0%</p>
      <p class="vote-count">0 Votes</p>
    </div>
  </div>
</div>

</body>
</html>