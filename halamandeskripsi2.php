<!DOCTYPE html>
<html>
<head>
<title>Deskripsi Kandidat</title>

<style>

body{
    font-family: Arial, sans-serif;
    background:#f5f5f5;
    margin:0;
}

.container{
    display:flex;
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
    padding:22px;
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

.main-content{
    flex:1;
    margin-left:220px;
    background:#E8F2F8;
    min-height:100vh;
    padding:40px;
}

.title{
    text-align:center;
    font-size:28px;
    font-weight:bold;
    color:#2F4156;
    margin-bottom:30px;
}

.main{
    display:flex;
    justify-content:center;
}

.card{
    background:white;
    border-radius:12px;
    padding:25px;
    width:100%;
    max-width:900px;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
    border:1px solid #ccc;
}

.content{
    display:flex;
    gap:30px;
    align-items:flex-start;
}

.photo img{
    width:230px;
    border-radius:10px;
    object-fit:cover;
}

.info{
    flex:1;
}

.info h2{
    margin-top:0;
    margin-bottom:5px;
    font-size:28px;
}

.info p{
    margin-top:0;
    font-size:14px;
    color:black;
}

hr{
    margin:15px 0;
}

.info h3{
    font-size:20px;
    margin-bottom:10px;
}

ol{
    padding-left:20px;
}

ol li{
    margin-bottom:8px;
    font-size:16px;
}

.button-area{
    margin-top:25px;
    text-align:center;
}

button{
    padding:10px 20px;
    border:none;
    border-radius:8px;
    cursor:pointer;
    margin:0 10px;
    font-weight:bold;
    font-size:15px;
}

.vote{
    background:#4A5D73;
    color:white;
}

.back{
    background:#4A5D73;
    color:white;
}

button:hover{
    opacity:0.9;
}

</style>
</head>

<body>

<div class="container">

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

    <div class="main-content">

        <div class="title">
            DESKRIPSI KANDIDAT 2
        </div>

        <div class="main">

            <div class="card">

                <div class="content">

                    <div class="photo">
                        <img src="agus.jpeg">
                    </div>

                    <div class="info">

                        <h2>AGUS</h2>
                        <p>Calon Kepala Desa 2026-2031</p>

                        <hr>

                        <h3>Visi:</h3>

                        <p>
                        Mewujudkan desa yang maju, mandiri, sejahtera, dan harmonis
                        melalui pelayanan yang adil, transparan, dan berkelanjutan.
                        </p>

                        <h3>Misi:</h3>

                        <ol>
                            <li>Meningkatkan pelayanan publik yang cepat dan transparan.</li>
                            <li>Mengembangkan potensi desa dan ekonomi masyarakat.</li>
                            <li>Membangun infrastruktur desa secara merata.</li>
                            <li>Meningkatkan kesejahteraan dan partisipasi masyarakat.</li>
                            <li>Menjaga keamanan, budaya, dan kerukunan warga.</li>
                        </ol>

                        <a href="konfirmasi.php?option=2">
                            <button class="vote">Vote Sekarang</button>
                        </a>

                            <a href="halaman3.php">
                                <button class="back">Kembali</button>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>