<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 PHP</title>

    <!-- Bagian CSS untuk styling tampilan HTML -->
    <style>
        body {
            background-color: navy;
            color: white;
            margin: 50px;
            padding: 10px;
        }

        h1 {
            text-align: center;
        }

        summary {
            font-size : 24px;
            font-weight: bold;
        }

        details{
            font-size : 18px;}

        table {
            border-collapse: collapse;
            margin: auto;
            font-family: Arial, sans-serif;
            font-size: 18px;
            table-layout: fixed;
            text-align: center; 
            border-style: solid;
            border-color: maroon;
            background-color: #FFFAFA;
            color: black;
        }

        td {
            padding: 10px;
            border: 1px solid black;
            width: 10%;
        }

        thead{
            background-color: gold;
        }

        th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <!-- Bagian Header judul hanya pakai tag HTML -->
    <h1 align='center'>TABEL PENERAPAN INHERITANCE<br>DENGAN STUDI KASUS BANGUN DATAR<br>MENGGUNAKAN PHP</h1>
    <hr color='white'>

    <!-- Bagian tampilan soal hanya pakai tag HTML-->
    <details>
        <summary>Soal</summary>
            <ol type = '1'>
                <li>Buatlah file Abstract.php dengan class Bentuk2D sebagai induk kelas dengan member class:</li>
                <ul>
                    <li>fungsi luasBidang();</li>
                    <li>fungsi KelilingBidang();</li>
                </ul>
                <br>
                <li>Buatlah class-class keturunan:</li>
                <ul>
                    <li>Lingkaran (Lingkaran.php)</li>
                    <ol type='square'>
                        <ul>
                            <li>variable : jari2</li>
                            <li>method : namaBidang(), luasBidang(), kelilingBidang()</li>
                        </ul>
                    </ol>
                    <li>PersegiPanjang (PersegiPanjang.php)</li>
                    <ol type='square'>
                        <ul>
                            <li>variable : panjang, lebar</li>
                            <li>method : namaBidang(), luasBidang(), kelilingBidang()</li>
                        </ul>
                    </ol>
                    <li>Segitiga (Segitiga.php)</li>
                    <ol type='square'>
                        <ul>
                            <li>variable : alas, tinggi</li>
                            <li>method : namaBidang(), luasBidang(), kelilingBidang()</li>
                        </ul>
                </ul>
                <br>
                <li>Cetaklah kedalam file ObjectBentuk2D.php dan gunakan tag table untuk merapikan tampilan</li>
            </ol>
    </details>
    <hr color='white'>

    <br>

    <!-- Bagian tampilan table-->
    <table>
        <thead>
            <tr>
                <th colspan="4" style="font-size: 32px; background-color: #F0E68C;">TABEL BANGUN DATAR DENGAN PENERAPAN INHERITANCE PHP</th>
            </tr>
            <tr>
                <th>Nama Bidang</th>
                <th>Variable</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>

            <?php

                require_once 'Lingkaran.php';
                require_once 'PersegiPanjang.php';
                require_once 'Segitiga.php';
                
                // Lingkaran
                $lingkaran = new Lingkaran();
                $lingkaran->jari2 = 7; // memberikan nilai jari2
                // Menampilkan hasil
                echo 
                "<tr>
                    <td>" . $lingkaran->namaBidang() . "</td> 
                    <td>" . "Jari-Jari = ".$lingkaran->jari2 . " cm" . "</td>
                    <td>" . number_format($lingkaran->luasBidang(), 2, '.', '') . " cm<sup>2</sup>" . "</td>
                    <td>" . number_format($lingkaran->kelilingBidang(), 2,'.', '') . " cm" . "</td>  
                </tr>";

                // Persegi Panjang
                $persegiPanjang = new PersegiPanjang();
                $persegiPanjang->panjang = 6; // memberikan nilai panjang
                $persegiPanjang->lebar = 4; // memberikan nilai lebar
                // Menampilkan hasil
                echo 
                "<tr>
                    <td>" . $persegiPanjang->namaBidang() . "</td>
                    <td>" . "Panjang = ".$persegiPanjang->panjang." cm <br>  Lebar = ".$persegiPanjang->lebar." cm" . "</td>
                    <td>" . $persegiPanjang->luasBidang() . " cm<sup>2</sup>" . "</td>
                    <td>" . $persegiPanjang->kelilingBidang() . " cm" . "</td>
                </tr>";

                // Segitiga
                $segitiga = new Segitiga();
                $segitiga->alas = 8; // memberikan nilai alas
                $segitiga->tinggi = 4; // memberikan nilai tinggi
                // Menampilkan hasil
                echo 
                "<tr>
                    <td>" . $segitiga->namaBidang() . "</td>
                    <td>" . "Alas = ".$segitiga->alas." cm <br> Tinggi = ".$segitiga->tinggi." cm" . "</td>
                    <td>" . $segitiga->luasBidang() . " cm<sup>2</sup>" . "</td>
                    <td>" . $segitiga->kelilingBidang() . " cm" . "</td>
                </tr>";
            ?>
        </tbody>
    </table>
</body>
</html>