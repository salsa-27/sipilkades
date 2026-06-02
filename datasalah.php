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

    <div class="container">
        <div class="icon-warning i">
        <i class="hgi hgi-stroke hgi-alert-02"></i>
        </div>
        <p>Data tidak ditemukan!</p>
        <p>pastikan NIK atau kode Pilih yang kamu masukkan</p>
        <p>sudah benar</p>


        <div class="button-group">
            <a href="halaman1.php">
                <button class="button konfir">COBA LAGI</button>
            </a>
        </div>
            
    </div>

</body>
</html>