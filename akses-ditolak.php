<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />
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

        .container{
            position: relative;
        }

        .close{
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 28px;
            cursor: pointer;
        }

        .icon-warning i {
            font-size: 180px;
            margin-bottom: 15px;
        }

        p {
            font-size: 17px;
            color: #232121;
            line-height: 0;
            margin-bottom: 20px;
            
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
        
        }

        .konfir {
            background-color: #2f3e4e;
            color: white;
        }

       
       
    </style>
</head>
<body>

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
            height: 900px;
        }

        .container {
            background: white;
            width: 450px;
            padding: 30px;
            border-radius: 20px;
            border: 2px solid #2F4156;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            position: relative;
        }

        .icon-warning img {
            width: 180px;
            height: auto;
            margin-bottom: 15px;
        }

        p {
            font-size: 17px;
            color: #232121;
            margin-bottom: 10px;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .button {
            padding: 10px 25px;
            border-radius: 20px;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        .konfir {
            background-color: #2f3e4e;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container">

        <div class="icon-warning">
            <img src="denied.png" alt="Akses Ditolak">
        </div>

        <p><b>Akses ditolak!</b></p>
        <p>Halaman ini khusus untuk admin.</p>

        <div class="button-group">
    <button class="button konfir" onclick="history.back()">
        KEMBALI
    </button>
</div>

    </div>

</body>
</html>