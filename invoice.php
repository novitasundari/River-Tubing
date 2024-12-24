<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pemesanan</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('images/bkk.png') no-repeat center center;
background-size: cover; /* Menjadikan gambar menyesuaikan ukuran */
            position: relative; /* Agar tombol panah bisa diposisikan relatif terhadap body */
        }

        .form-container {
            width: 80%; /* Lebar kontainer lebih besar */
            margin: 40px auto;
            padding: 30px;
            background-color: #bcbdb6d5;
            border-radius: 15px; /* Membuat sudut lebih bulat */
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1); /* Memberikan bayangan yang lebih halus */
            border: 1px solid #ddd; /* Border tipis untuk elemen */
        }

        .form-container h2 {
            text-align: center;
            font-size: 2em; /* Ukuran font lebih besar */
            color: #555; /* Warna hijau pada judul */
            margin-bottom: 20px;
        }

        .form-container label {
            font-size: 1.1em;
            color: #555;
        }

        .form-container input, .form-container select, .form-container textarea {
            width: 100%;
            padding: 12px;
            margin: 15px 0;
            border-radius: 10px; /* Sudut lebih bulat */
            border: 1px solid #ccc;
            background-color: #fafafa;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        .form-container input:focus, .form-container select:focus, .form-container textarea:focus {
            border-color: #d9ff02; /* Fokus pada input dengan border hijau */
            outline: none;
            background-color: #ffffff;
        }

        .form-container button {
            width: auto; /* Lebar otomatis sesuai konten */
            padding: 10px 20px; /* Padding lebih kecil */
            background: linear-gradient(to right, #709912, #d9ff02); /* Gradasi warna pada tombol */
            color: white;
            border: none;
            border-radius: 10px; /* Sudut tombol lebih kecil */
            font-size: 1em; /* Ukuran font lebih kecil */
            cursor: pointer;
            transition: background 0.3s ease;
            margin-bottom: 10px; /* Spasi antar tombol */
        }

        .form-container button:hover {
            background: linear-gradient(to right, #709912, #709912); /* Efek hover pada tombol */
        }

        /* Tombol kembali dengan tanda panah */
        .back-button {
            position: absolute; /* Posisi tombol di luar tabel */
            left: 20px; /* Jarak dari kiri */
            top: 50px; /* Jarak dari atas */
            width: 50px; /* Ukuran tombol */
            height: 50px; /* Ukuran tombol */
            background-color: #709912; 
            color: #edf7b5;
            border: none;
            border-radius: 50%; /* Membuat tombol bulat */
            font-size: 2em; /* Ukuran font lebih besar */
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .back-button:hover {
            background-color: #d9ff02; /* Efek hover pada tombol */
        }

        .form-container textarea {
            resize: vertical;
        }

        /* Responsive untuk layar kecil */
        @media (max-width: 768px) {
            .form-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<!-- Tombol Kembali ke Beranda dengan simbol panah -->
<button class="back-button d-print-none" onclick="window.location.href='index.php';">←</button>
<?php
include 'koneksi.php';

$id_pemesanan = htmlentities($_GET['id']);

$sql = "SELECT * FROM pemesanan where id = '$id_pemesanan'";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada';
}else {
    $detail = mysqli_fetch_row($query);
?>
<div class="form-container">
    <h2>Invoice Pemesanan #<?= $detail[0]?></h2>
    <form>
        <label for="nama">Nama Lengkap: </label>
        <p><?= $detail[1]?></p>

        <label for="telepon">Telephone: </label>
        <p><?= $detail[2]?></p>

        <label for="tanggal_pemesanan">Tanggal Pemesanan: </label>
        <p><?= $detail[3]?></p>

        <label for="jumlah_orang">Jumlah Orang</label>
        <p><?= $detail[4]?></p>

        <label for="paket">Paket</label>
        <p><?= $detail[5]?></p>

        <button class="d-print-none" type="submit" onclick="window.print()">Cetak Invoice</button>
    </form>
</div> <?php } ?>

</body>
</html>
