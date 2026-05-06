<!DOCTYPE html>
<html>
<head>
<title>Deskripsi Kandidat</title>
<style>

body{
    font-family: Arial, sans-serif;
    background: #f5f5f5;
    margin:0;
}

.container{
    display:flex;
}

.sidebar{
    width:220px;
    background:#3f5d7d;
    color:white;
    height:100vh;
    padding:20px;
}

.sidebar h3{
    font-size:14px;
    margin-bottom:30px;
}

.menu{
    margin-top:40px;
}

.menu a{
    display:block;
    color:white;
    text-decoration:none;
    margin:15px 0;
}

.main{
    flex:1;
    background:#E8F2F8;
    padding:40px;
}

.title{
    text-align:center;
    font-size:28px;
    font-weight:bold;
    margin-bottom:30px;
}

.card{
    background:white;
    border-radius:12px;
    padding:30px;
    width:800px;
    margin:auto;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
    border:1px solid #ccc;
}

.content{
    display:flex;
    gap:30px;
    align-items:flex-start;
}

.photo img{
    width:200px;
    height:100%;
    object-fit:cover;
    border-radius:10px;
}

.info h2{
    margin-bottom:5px;
}

.info p{
    margin-top:0;
    font-size:14px;
    color:gray;
}

hr{
    margin:15px 0;
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
    margin: 0 10px;
    font-weight:bold;
}

.vote{
    background:#4a5d73;
    color:white;
}

.back{
    background:#4a5d73;
    color:white;
}

</style>
</head>

<body>

<div class="container">

<div class="sidebar">

<h3>SISTEM PEMILIHAN<br>KEPALA DESA</h3>

<div class="menu">
<a href="#">VOTING</a>
<a href="#">HASIL VOTING</a>
</div>

</div>

<div class="main">

<div class="title">
DESKRIPSI KANDIDAT 2
</div>

<div class="card">

<div class="content">

<div class="photo">
<img src="bagas.jpeg">
</div>

<div class="info">

<h2>BAGAS</h2>
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

<div class="button-area">
<button class="vote">Vote Sekarang</button>
<button class="back">Kembali</button>
</div>

</div>

</div>

</div>

</div>

</div>

</body>
</html>