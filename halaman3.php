<!DOCTYPE html>
<html>

<head>
<title>Sistem Voting Desa</title>

<style>

body{
    font-family: Arial;
    margin:0;
    background:#cfd8e2;
}

/* Sidebar */

.sidebar{
    width:200px;
    height:100vh;
    background:#2f3e4f;
    color:white;
    position:fixed;
}

.logo{
    display:flex;
    align-items:center;
    gap:15px;
    padding:20px;
    border-bottom:1px solid #555;
}

.logo img{
    width:70px;
}

.judul h2{
    margin:0;
    font-size:16px;
    line-height:20px;
    font-weight:bold;
}


.menu{
    padding:15px;
    border-bottom:1px solid #444;
    cursor:pointer;
}

.menu:hover{
    background:#3f5166;
}

.logout{
    position:absolute;
    bottom:20px;
    left:20px;
}

/* Main */

.main{
    margin-left:200px;
    padding:30px;
}

h1{
    text-align:center;
}

/* Kandidat */

.kandidat{
    display:flex;
    justify-content:center;
    gap:30px;
    margin-top:30px;
}

.card{
    background:white;
    width:200px;
    padding:20px;
    text-align:center;
    border-radius:5px;
}

.foto{
    font-size:60px;
    margin:20px 0;
}

button{
    background:#2f3e4f;
    color:white;
    border:none;
    padding:10px 20px;
    border-radius:20px;
    cursor:pointer;
}

/* Tata cara */

.cara{
    background:white;
    margin-top:40px;
    padding:20px;
    border-radius:10px;
    width:60%;
}

</style>

</head>

<body>

<div class="sidebar">

<div class="logo">
    <img src="logo pilkades.png" alt="Logo Sipilkades">
    <div class="judul">
        <h2>SISTEM</h2>
        <h2>PEMILIHAN</h2>
        <h2>KEPALA DESA</h2>
    </div>
</div>

    <div class="menu">Voting</div>
    <div class="menu">Hasil Voting</div>

    <div class="logout">LOG OUT</div>

</div>

<div class="main">

    <h1>DAFTAR KANDIDAT</h1>

    <div class="kandidat">

        <div class="card">
            <h3>KANDIDAT 1</h3>
            <div class="foto"></div>
            <button>DETAIL</button>
        </div>

        <div class="card">
            <h3>KANDIDAT 2</h3>
            <div class="foto"></div>
            <button>DETAIL</button>
        </div>

        <div class="card">
            <h3>KANDIDAT 3</h3>
            <div class="foto"></div>
            <button>DETAIL</button>
        </div>

    </div>

    <div class="cara">

        <h3>TATA CARA VOTING</h3>

        <ol>
            <li>Klik Detail untuk melihat informasi kandidat</li>
            <li>Pilih kandidat lalu tekan tombol Vote</li>
            <li>Hasil voting dapat dilihat pada menu Hasil Voting</li>
        </ol>

    </div>

</div>

</body>
</html>