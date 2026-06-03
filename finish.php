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
            width: 440px;
            padding: 30px;
            border-radius: 20px;
            border: 2px solid #2F4156;
            text-align: center;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .icon {
            font-size: 80px;
            color: black;
            padding: 15px;
            display: inline-block;
            margin-bottom: 15px;
            height: 50px;
        }

        h1 {
            font-size: 22px;
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

        
    </style>
</head>
<body>

    <div class="container">
      <div class="icon">
    <i class="hgi hgi-stroke hgi-checkmark-circle-01"></i>
</div>
        <h1>Terima Kasih Telah Berpartisipasi!</h1>
        <p>
           Suara Anda telah berhasil direkam.Terima kasih telah 
           berpartisipasi dalam proses pemungutan suara.
        </p>

        <div class="button-group">
             <a href="halaman1.php">
            <button class="button konfir">KEMBALI</button>
        </div>
    </div>

</body>
</html>