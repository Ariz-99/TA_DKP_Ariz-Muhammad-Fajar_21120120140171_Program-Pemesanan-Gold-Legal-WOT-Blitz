<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Selamat Datang</title>
</head>
<body class="body1">
    <h1>Pemesanan Gold Legal WOT Blitz</h1>
    <div class="regis2">
        <?php
        class reg {
            private $nama;
            private $ign;
                    
            public function __construct($nama, $ign) {
                $this->nama = $nama;
                $this->ign = $ign;
            }

            public function setNama($namaBaru) {
                $this->nama = $namaBaru;
            }

            public function setIgn($ignBaru) {
                $this->ign = $ignBaru;
            }

            public function getNama() {
                return $this->nama;
            }

            public function getIgn() {
                return $this->ign;
            }
        }

        $data = new reg("","");
        if (isset($_POST['data'])) {
        $data->setNama($_POST['nama']);
        $data->setIgn($_POST['ign']);
        echo "Selamat Datang " . $data->getNama() . " di Program Pembelian Gold Legal WOT Blitz<br>"; 
        echo " dengan IGN " . $data->getIgn();
        }
        ?>
    </div>
    
    <div class="shop">
        <form action="hasil.php" method="post">
        <table  cellpadding="0" cellspacing="0" align="center">
            <tr>
                <th><div class="regis2-3"><h2>Form Pemesanan</h2></th></div>
            </tr>
                <table cellpadding="6" cellspacing="6" align="center">
                <tr height="40">
                    <td width="200" valign="center">Tanggal Pemesanan</td>
                    <td width="10" valign="center"> : </td>
                    <td><input type="date" name="tanggal"></td>
                </tr>

                <tr height="30">
                    <td width="200" valign="center">Email Anda</td>
                    <td width="10" valign="center"> : </td>
                    <td><input type="email" name="email" size="20" autocomplete="off"></td>
                </tr>

                <tr height="30">
                    <td width="200" valign="center">No Telp</td>
                    <td width="10" valign="center"> : </td>
                    <td><input type="text" name="notelp" size="20" autocomplete="off"></td>
                </tr>

                <tr height="30">
                    <td width="200" valign="center">Paket Gold</td>
                    <td width="10" valign="center"> : </td>
                    <td>
                        <select name="paket">
                            <option value="quarter" name="quarter">Quartermaster's </option>
                            <option value="large" name="large">Large Researcher's</option>
                            <option value="allout" name="allout">All-Out Gold</option>
                        </select>
                    </td>    
                </tr>

                <tr height="30">
                    <td width="100" valign="center">Jumlah Item</td>
                    <td width="10" valign="center"> : </td>
                    <td><input type="number" name="jumlah" size="10" autocomplete="off">  Jumlah</td>
                </tr>

                <tr>
                    <td><input type="submit" name="hitung" value="Enter"></td>
                </tr>
                </table>
        </table>
        </form>
    </div>
</body>
</html>
        
    
            
            

    