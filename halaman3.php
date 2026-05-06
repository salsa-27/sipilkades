<!DOCTYPE html>
<html lang="id">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css"/>
<title>Sistem Pemilihan Kepala Desa</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Roboto', sans-serif;
    background: rgba(200, 217, 230, 0.75);
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

.main{
    margin-left:220px;
    padding:40px;
}

.main h1{
    text-align:center;
    margin-bottom:40px;
    font-size:50px;
    color:#2F4156;
}

.kandidat{
    display:flex;
    justify-content:center;
    gap:50px;
}

.box{
    background:#F5EFEB;
    width:230px;
    height:330px;
    padding:20px;
    text-align:center;
    border-radius:12px;
    box-shadow:0 6px 15px rgba(0,0,0,0.1);
    transition:0.3s;
}

.box:hover{
    transform:translateY(-5px);
}

.box h3{
    font-size:16px;
    color:#2F4156;
}

.foto{
    font-size:70px;
    margin:25px 0;
    color:#567C8D;
}

/* 🔥 tombol detail versi link */
.btn{
    display:block;
    margin:60px auto 0;
    background:#2F4156;
    color:white;
    text-decoration:none;
    padding:10px 25px;
    border-radius:20px;
    text-align:center;
    width:fit-content;
    transition:0.3s;
    font-size:14px;
}

.btn:hover{
    background:#567C8D;
}

.cara{
    margin:50px auto;
    background:#F5EFEB;
    padding:25px;
    border-radius:15px;
    width:800px;
    height:200px;
    box-shadow:0 6px 15px rgba(0,0,0,0.1);
}

.cara h3{
    margin-bottom:12px;
    color:#2F4156;
    font-size:36px;
}

.cara ol{
    margin-left:20px;
    color:#2F4156;
    font-size:20px;
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

    <div class="menu">
        <span>Voting</span>
    </div>

    <div class="menu">
        <span>Hasil Voting</span>
    </div>

    <div class="logout">
        <span>Log Out</span>
    </div>

</div>

<div class="main">

    <h1>DAFTAR KANDIDAT</h1>

    <div class="kandidat">

        <div class="box">
            <h3>KANDIDAT 1</h3>
            <div class="foto">
                <i class="hgi hgi-stroke hgi-user"></i>
            </div>
            <a href="halaman5.html" class="btn">DETAIL</a>
        </div>

        <div class="box">
            <h3>KANDIDAT 2</h3>
            <div class="foto">
                <i class="hgi hgi-stroke hgi-user"></i>
            </div>
            <a href="halaman5.html" class="btn">DETAIL</a>
        </div>

        <div class="box">
            <h3>KANDIDAT 3</h3>
            <div class="foto">
                <i class="hgi hgi-stroke hgi-user"></i>
            </div>
            <a href="halaman5.html" class="btn">DETAIL</a>
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