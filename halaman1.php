<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pemilihan Kepala Desa - Limpung</title>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #c8d9e6; 
            min-height: 50vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #2F4156; 
            color: white;
            padding: 10px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-placeholder {
            width: 28pxpx;
            height: 28px;
            border-radius: 50%;
        }

        .header-text h1 {
            font-size: 14px;
            text-transform: uppercase;
        }

        .header-text p {
            font-size: 11px;
            opacity: 0.8;
        }

        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            gap: 50px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .content-left {
            flex: 1;
            max-width: 500px;
        }

        .illustration {
            width: 200px;
            height: auto;
            margin-bottom: 20px;
        }

        .content-left h2 {
            color: #2c3e50;
            font-size: 32px;
            margin-bottom: 5px;
        }

        .period {
            font-weight: 700;
            color: #34495e;
            margin-bottom: 10px;
        }

        .description {
            color: #7f8c8d;
            font-size: 16px;
            line-height: 1.5;
        }


        .login-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            width: 400px;
        }

        .login-card h2 {
            text-align: center;
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 5px;
        }

        .login-card p {
            text-align: center;
            color: #7f8c8d;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 12px 20px;
            border: 1.5px solid #d1d8e0;
            border-radius: 25px;
            background-color: #f1f2f6;
            outline: none;
            transition: 0.3s;
        }

        .form-group input:focus {
            border-color: #1e3a5f;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #000;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s;
        }

        .btn-login:hover {
            background-color: #333;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #9b59b6;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            main {
                flex-direction: column;
                text-align: center;
            }
            .login-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo-section">
    <div class="logo-placeholder">
        <img src="logo pilkades.png" alt="" width="60">
    </div>
    <div class="header-text">
        <h1>Desa Limpung</h1>
        <p>DESA LIMPUNG</p>
    </div>
</div>
        </div>
        <div style="font-size: 12px; text-align: right;">
            <strong>SISTEM PEMILIHAN KEPALA DESA</strong>
        </div>
    </header>

    <main>
          <div class="logo-placeholder">
        <img src="logo pilkades.png" alt="" width="60">
    </div>
    <div class="header-text">
        <h1>Desa Limpung</h1>
        <p>DESA LIMPUNG</p>
    </div>
</div>
            
            <h2>Pemilihan Kepala Desa Limpung</h2>
            <p class="period">PERIODE 2026-2027</p>
            <p class="description">Proses pemungutan suara yang transparan, jujur, dan bertanggung jawab.</p>
        </section>

        <section class="login-card">
            <h2>Halaman Login</h2>
            <p>Silahkan masukkan data yang sesuai!</p>

            <form>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" id="nik" placeholder="Masukkan NIK">
                </div>
                <div class="form-group">
                    <label for="kode">Kode Pilih</label>
                    <input type="password" id="kode" placeholder="Masukkan kode pilih">
                </div>
                <button type="submit" class="btn-login">Login</button>
            </form>
        </section>
    </main>
</body>
</html>