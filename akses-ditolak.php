<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses Ditolak</title>

    <style>
        body {
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

  
        .container {
            background: white;
            width: 450px;
            padding: 30px;
            border-radius: 20px;
            border: 2px solid #2F4156;
            text-align: center;
            position: relative;
        }

       
        .icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 15px;
            background: #e8eef6;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .icon img {
            width: 50px;
        }

        h2 {
            margin: 10px 0;
            color: #2F4156;
        }

        p {
            font-size: 15px;
            color: #333;
            margin-bottom: 25px;
        }

        .button {
            padding: 10px 25px;
            border-radius: 20px;
            border: none;
            font-weight: bold;
            cursor: pointer;
            background-color: #2f3e4e;
            color: white;
        }

        .button:hover {
            opacity: 0.9;
        }

        .badge {
            font-size: 12px;
            background: #e9eef5;
            display: inline-block;
            padding: 5px 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            color: #2F4156;
        }
    </style>
</head>

<body>

<div class="container">


    <div class="icon">
        <img src="denied.png" alt="lock">
    </div>

    <h2>Akses Ditolak</h2>

    <p>
        Anda tidak memiliki akses untuk halaman ini. <br>
        Hanya Administrator yang dapat mengakses.
    </p>

    <button class="button" onclick="history.back()">
        KEMBALI
    </button>

</div>

</body>
</html>