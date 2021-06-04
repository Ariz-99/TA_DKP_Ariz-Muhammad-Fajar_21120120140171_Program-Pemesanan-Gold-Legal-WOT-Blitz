<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Terima Kasih</title>
</head>
<?php
    function hitung(){
        $tanggal= $_POST['tanggal'];
        $tanggal= date('d-m-Y', strtotime($tanggal));
        $email= $_POST['email'];
        $notelp= $_POST['notelp'];
        $jumlah= $_POST['jumlah'];
        $paket= $_POST['paket'];
        $quarter = 100000;
        $large= 150000;
        $allout= 200000;
        $total;
        $diskon;
?>

<body class="body1">
<table cellpadding="1" cellspacing="1" align="center">

<tr height="30">
    <td><?php echo '&nbsp Tanggal pemesanan';?></td>
    <td><?php echo '&nbsp : ';?></td>
    <td><?php echo '&nbsp' .$tanggal;?></td>
</tr>

<tr height="30">
    <td><?php echo '&nbsp Email Anda';?></td>
    <td><?php echo '&nbsp : ';?></td>
    <td><?php echo '&nbsp' .$email;?></td>
</tr>

<tr height="30">
    <td><?php echo '&nbsp No Telp';?></td>
    <td><?php echo '&nbsp : ';?></td>
    <td><?php echo '&nbsp' .$notelp;?></td>
</tr>

<tr height="30">
    <td><?php echo '&nbsp Paket Gold';?></td>
    <td><?php echo '&nbsp : ';?></td>
    <td><?php echo '&nbsp' .$paket;?></td>
</tr>

<tr height="30">
    <td><?php echo '&nbsp Jumlah Item';?></td>
    <td><?php echo '&nbsp : ';?></td>
    <td><?php echo '&nbsp' .$jumlah;?></td>
</tr>

<tr height="30">
    <td><?php echo '&nbsp Diskon';?></td>
    <td><?php echo '&nbsp : ';?></td>
    <td>
        <?php
        if($paket){
            if($jumlah ==""){
                echo "Silahkan isi jumlahnya terlebih dahulu";
            }
            elseif($paket == "quarter"){
                $hitung = $quarter * $jumlah;
            }
            elseif($paket == "large"){
                $hitung = $large * $jumlah;
            }
            elseif($paket == "allout"){
                $hitung = $allout * $jumlah;
            }
    
            if($hitung >= 300000){
                $diskon = 0.2 * $hitung;
                $total = $hitung - $diskon;
                echo "&nbspSelamat Anda Mendapatkan Sebesar Diskon 20%";
            }
            else{
                echo "&nbsp -";
            }
        }?>
</tr>

<tr height="30">
    <td><?php echo '&nbsp Total Harga';?></td>
    <td><?php echo '&nbsp : ';?></td>
    <td>
    <?php
    if($paket){
            if($jumlah ==""){
                echo "Silahkan isi jumlahnya terlebih dahulu";
            }
            elseif($paket == "quarter"){
                $hitung = $quarter * $jumlah;
            }
            elseif($paket == "large"){
                $hitung = $large * $jumlah;
            }
            elseif($paket == "allout"){
                $hitung = $allout * $jumlah;
            }

            if($hitung >= 300000){
                $diskon = 0.2 * $hitung;
                $total = $hitung - $diskon;
                echo "&nbsp" .$total;
            }
            else{
                echo "&nbsp" .$hitung;
            }
        }?>
</tr>
</table><br>

<a href="shop.php" class="beli">Kembali</a>
<a href="logout.php" class="keluar">Keluar</a>

<?php
    extract($_REQUEST);
    $file= fopen("struk-save.txt", "w");
    
    fwrite($file, "Tanggal : ");
    fwrite($file, $tanggal ."\n");
    fwrite($file, "Email : ");
    fwrite($file, $email ."\n");
    fwrite($file, "No Telp : ");
    fwrite($file, $notelp ."\n");
    fwrite($file, "Jumlah : ");
    fwrite($file, $jumlah ."\n");
    fwrite($file, "Paket : ");
    fwrite($file, $paket ."\n");
    if($paket){
        if($jumlah ==""){
            fwrite($file, "Silahkan isi jumlahnya terlebih dahulu");
        }
        elseif($paket == "quarter"){
            $hitung = $quarter * $jumlah;
        }
        elseif($paket == "large"){
            $hitung = $large * $jumlah;
        }
        elseif($paket == "allout"){
            $hitung = $allout * $jumlah;
        }

        if($hitung >= 300000){
            $diskon = 0.2 * $hitung;
            $total = $hitung - $diskon;
            fwrite($file, "Diskon : Selamat Anda Mendapatkan Sebesar Diskon 20%\n");
        }
        else{
            fwrite($file, "Diskon : - \n");
        }
    }
    if($paket){
        if($jumlah ==""){
            fwrite($file, "Silahkan isi jumlahnya terlebih dahulu");
        }
        elseif($paket == "quarter"){
            $hitung = $quarter * $jumlah;
        }
        elseif($paket == "large"){
            $hitung = $large * $jumlah;
        }
        elseif($paket == "allout"){
            $hitung = $allout * $jumlah;
        }

        if($hitung >= 300000){
            $diskon = 0.2 * $hitung;
            $total = $hitung - $diskon;
            fwrite($file, "Total Harga : ");
            fwrite($file, $total . "\n");
        }
        else{
            fwrite($file, "Total Harga : ");
            fwrite($file, $total . "\n");
        }
    }
    fclose($file);
?>

<?php
    }
?>

<div class="shop2">
<table  cellpadding="2" cellspacing="2" align="center">
    <th><h2>Pemesanan Anda Berhasil</h2></th>
    <tr>
        <td>
            <?php
            hitung();
            ?>
        </td>
    </tr>
</table>
</div>
</body>
</html>