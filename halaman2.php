<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Akun</title>

    <style>
       
        body {
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 900px;
        }

        .container {
            background: white;
            width: 450px;
            padding: 30px;
            border-radius: 20px;
            border: 2px solid #2F4156;
            text-align: center;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .welcome {
            font-weight: 600;
            color: #2f3e4e;
            margin-bottom: 2px;
        }

        h1 {
            font-size: 28px;
            color: #2f3e4e;
            margin-bottom: 10px;
            margin-top :0;

        }

        p {
            font-size: 20px;
            color: #5f6c7b;
            margin-bottom: 10px;
            margin-top: 0;
            
        }

        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 25px;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .button {
            padding: 10px 25px;
            border-radius: 20px;
            border: none;
            font-weight: bold;
            width: 150px;
        }

        .konfir {
            background-color: #2f3e4e;
            color: white;
        }

        .batal {
            background-color: #d9e1e8;
            color: #2f3e4e;
        }

       
    </style>
</head>
<body>

    <div class="container">
        <h3 class="welcome">Selamat Datang, Irene Alesya!</h3>
        <h1>Konfirmasi akun Anda!</h1>
        <p>
            Yakin ingin mengkonfirmasi akun ini? Mohon
            pastikan data Anda sudah benar.
        </p>

        <div class="profile">
            <img src="fotoooo.jpeg" alt="Foto Profil">
        </div>

        <div class="button-group">
            <button class="button konfir">KONFIRMASI</button>
            <button class="button batal">BATAL</button>
        </div>
    </div>

</body>
</html>


