<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Isi Data</title>
</head>
<body class="body1">
    <div class="register">
      <form action="shop.php" method="post">
        <div class="regmsg">Silahkan Isi Data di Bawah Terlebih Dahulu</div>
        <div class="box">
            <label>Nama</label><br>
            <input name="nama" placeholder="Nama Anda" class="text-1" type="text" autocomplete="off">
        </div>

        <div class="box">
            <label>In Game Name</label><br>
            <input name="ign" placeholder="IGN" class="text-1" type="text" autocomplete="off">
        </div>
        
        <button type="submit" class="regis" name="data">Enter</button>
      </form>  
    </div>
</body>
</html>
