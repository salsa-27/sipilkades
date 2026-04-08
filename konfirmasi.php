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
            font-size: 22px;
            color: #2f3e4e;
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
        
        }

        .konfir {
            background-color: #2f3e4e;
            color: white;
        }

       
       
    </style>
</head>
<body>

    <div class="container">
        <i class="hgi hgi-stroke hgi-cancel-01 close"></i>
        <div class="icon-warning i">
        <i class="hgi hgi-stroke hgi-alert-02"></i>
        </div>
        <p>
            Apakah Anda yakin dengan pilihan anda? 
            Pilihan tidak dapat diubah.
        </p>


        <div class="button-group">
            <button class="button konfir">KONFIRMASI</button>
            
        </div>
    </div>

</body>
</html>


