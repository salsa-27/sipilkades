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
    background:#cfd8e2;
}

.sidebar{
    width:220px;
    height:100vh;
    background:#2f3e4f;
    color:white;
    position:fixed;
    display:flex;
    flex-direction:column;
}

.logo{
    display:flex;
    gap:12px;
    padding:20px;
    border-bottom:1px solid #4d5e72;
    background-color:#C8D9E6;
}

.logo img{
    width:70px;
}

.judul h2{
    font-size:14px;
    line-height:18px;
}

.menu{
    padding:15px 20px;
    cursor:pointer;
}

.menu:hover{
    background:#3e5166;
}

.logout{
    margin-top:auto;
    padding:20px;
    display:flex;
    align-items:center;
    gap:8px;
    cursor:pointer;
}

.main{
    margin-left:220px;
    padding:40px;
}

.main h1{
    text-align:center;
    margin-bottom:30px;
    color:#2f3e4f;
}

h1{
    text-align:center;
    font-size:42px;
    color:#2F4156;
}

.kandidat{
    display:flex;
    justify-content:center;
    gap:50px;
}

.box{
    background:white;
    width:200px;
    height:300px;
    padding:20px;
    text-align:center;
    border-radius:8px;
    box-shadow:0 3px 8px rgba(0,0,0,0.1);
}

.box h3{
    font-size:14px;
    color:#2f3e4f;
}

.foto{
    font-size:60px;
    margin:20px 0;
    color:#2f3e4f;
}

button{
    background:#2f3e4f;
    color:white;
    border:none;
    padding:8px 22px;
    border-radius:20px;
    cursor:pointer;
}

button:hover{
    background:#1f2c3a;
}


.cara{
    margin:40px auto;
    background:white;
    padding:25px;
    border-radius:10px;
    width:600px;
    box-shadow:0 3px 8px rgba(0,0,0,0.1);
}

.cara h3{
    margin-bottom:10px;
    color:#2f3e4f;
}

.cara ol{
    margin-left:20px;
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

    <div class="menu">Voting</div>
    <div class="menu">Hasil Voting</div>

    <div class="logout">
        <i class="hgi hgi-stroke hgi-logout-02"></i>
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

            <button>DETAIL</button>

        </div>


        <div class="box">

            <h3>KANDIDAT 2</h3>

            <div class="foto">
                <i class="hgi hgi-stroke hgi-user"></i>
            </div>

            <button>DETAIL</button>

        </div>


        <div class="box">

            <h3>KANDIDAT 3</h3>

            <div class="foto">
                <i class="hgi hgi-stroke hgi-user"></i>
            </div>

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