<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistem Pemilihan Kepala Desa - Limpung</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}
body{
    background-color:#C8D9E6;
    min-height:100vh;
}
header{
    background-color:#2F4156;
    color:white;
    padding:12px 5%;
    display:flex;
    justify-content:space-between;
    align-items:center;
}
.logo-section{
    display:flex;
    align-items:center;
    gap:12px;
}
.logo-section img{
    width:50px;
}
.header-text h1{
    font-size:18px;
    text-transform:uppercase;
    line-height:20px;
}
.header-text p{
    font-size:12px;
    color:#D9E4EC;
}
.header-right{
    display:flex;
    align-items:center;
    gap:10px;
}
.header-right img{
    width:50px;
}
.header-right h2{
    font-size:14px;
    line-height:18px;
}
main{
    flex:1;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:40px;
}
.container{
    width:100%;
    max-width:1200px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:60px;
}
.content-left{
    flex:1;
}
.content-left img{
    width:100%;
    max-width:420px;
    margin-bottom:25px;
}
.content-left h2{
    color:#2F4156;
    font-size:50px;
    line-height:58px;
    margin-bottom:10px;
}
.period{
    font-size:24px;
    font-weight:700;
    color:#34495e;
    margin-bottom:12px;
}
.description{
    color:#5C6773;
    font-size:22px;
    line-height:34px;
    max-width:520px;
}
.login-card{
    background:white;
    padding:45px;
    border-radius:25px;
    box-shadow:0 10px 30px rgba(0,0,0,0.12);
    width:430px;
}
.login-card h2{
    text-align:center;
    color:#2F4156;
    font-size:42px;
    margin-bottom:5px;
}
.login-card p{
    text-align:center;
    color:#7f8c8d;
    font-size:15px;
    margin-bottom:35px;
}
.form-group{
    margin-bottom:22px;
}
.form-group label{
    display:block;
    margin-bottom:10px;
    font-size:18px;
    font-weight:500;
    color:#2F4156;
}
.form-group input{
    width:100%;
    padding:15px 20px;
    border:2px solid #506680;
    border-radius:30px;
    outline:none;
    font-size:15px;
}
.form-group input:focus{
    border-color:#2F4156;
}
.btn-login{
    width:100%;
    padding:15px;
    background:black;
    color:white;
    border:none;
    border-radius:30px;
    font-size:20px;
    font-weight:600;
    cursor:pointer;
    margin-top:10px;
    transition:0.3s;
}
.btn-login:hover{
    background:#222;
}
@media(max-width:900px){
    .container{
        flex-direction:column;
        text-align:center;
    }
    .description{
        margin:auto;
    }
    .login-card{
        width:100%;
        max-width:430px;
    }
    .content-left h2{
        font-size:40px;
        line-height:48px;
    }
}
</style>
</head>
<body>
<header>
    <div class="logo-section">
        <img src="logo limpung.png">
        <div class="header-text">
            <h1>Desa Limpung</h1>
            <p>DESA LIMPUNG</p>
        </div>
    </div>
    <div class="header-right">
        <img src="logo pilkades.png">
        <h2>
            SISTEM PEMILIHAN<br>
            KEPALA DESA
        </h2>
    </div>
</header>

<main>

<div class="container">

    <section class="content-left">

        <img src="logo voting.png">

        <h2>Pemilihan Kepala Desa Limpung</h2>

        <p class="period">PERIODE 2026-2027</p>

        <p class="description">
            Proses pemungutan suara yang transparan,
            jujur, dan bertanggung jawab.
        </p>

    </section>

    <section class="login-card">

        <h2>Halaman Login</h2>

        <p>Silahkan masukkan data yang sesuai!</p>

        <form action="aksi-login.php" method="POST">

            <div class="form-group">
                <label>NIK</label>
                <input type="text" id="NIK" name="NIK" placeholder="Masukkan NIK">
            </div>
            <div class="form-group">
                <label>Kode Pilih</label>
                <input type="password" id="kode-pilih" name="kode-pilih" placeholder="Masukkan kode pilih">
            </div>
            <button type="submit" class="btn-login">
                Login
            </button>

        </form>

    </section>

</div>

</main>

</body>
</html>