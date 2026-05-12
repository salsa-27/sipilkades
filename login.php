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
    background-color: #d0d7dc; 
  }

  .sidebar {
    width: 200px;
    background-color: #2c3e50;
    height: 100vh;
    padding: 20px;
    box-sizing: border-box;
    position: fixed;
  }

  .sidebar h2 {
    color: #fff;
    margin-bottom: 30px;
    font-size: 16px;
  }

  .sidebar a {
    display: block;
    color: #ecf0f1;
    padding: 10px 0;
    text-decoration: none;
    font-weight: bold;
  }

  .main {
    margin-left: 200px;
    padding: 20px;
  }

  h1 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 30px;
  }
 
  .cards {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
  }

  .card {
    background-color: #fff;
    width: 200px;
    padding: 10px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }

  .card img {
    width: 100px;
    height: 100px;
    border-radius: 50px;
    object-fit: cover;
    margin-bottom: 30px;
    margin-top: 20px;
  }

  .name {
  font-weight: bold;
  font-size: 20px;
  margin-bottom: 150px;
  border-bottom: 1px solid #000;
  padding-bottom: 5px;
}

  .vote {
    font-weight: bold;
    font-size: 25px;
    margin-bottom: 20px;
    margin-top: 10px;
  }

  .percentage {
    font-size: 14px;
    color: #555;
  }

 
  .logout {
    position: absolute;
    bottom: 20px;
    width: 160px;
    padding: 10px;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    cursor: pointer;
  }

</style>
</head>
<body>

<div class="sidebar">
  <h2>SISTEM PEMILIHAN KEPALA DESA</h2>
  <a href="#">VOTING</a>
  <a href="#">HASIL VOTING</a>
  <div class="logout">LOG OUT</div>
</div>

<div class="main">
  <h1>HASIL VOTING</h1>
  <div class="cards">
    
    <div class="card img">
      <img src="agus.jpeg" alt= "Agus"/>
      <div class="name">AGUS</div>
      <div class="vote">0% <br> 0 Votes</div>
    </div>
    
    <div class="card img">
      <img src="bagas.jpeg" alt="Bagas"/>
      <div class="name">BAGAS</div>
      <div class="vote">0% <br> 0 Votes</div>
    </div>
    
    <div class="card img">
      <img src="jamals.png" alt="Jamal"/>
      <div class="name">JAMAL</div>
      <div class="vote">0% <br> 0 Votes</div>
    </div>
  </div>
</div>
</body>
</html>