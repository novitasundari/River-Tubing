<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan - River Tubing Cikadongdong</title>  
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #bcbdb6a8; /* Latar belakang lebih lembut */
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
<button class="back-button" onclick="window.location.href='index.php';">←</button>

<div class="form-container">
    <h2>Formulir Pemesanan</h2>
    <form action="proses.php" method="POST">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" required>

        <label for="telepon">Telephone</label>
        <input type="text" id="telepon" name="telepon" required>

        <label for="tanggal_pemesanan">Tanggal Pemesanan</label>
        <input type="date" id="tanggal" name="tanggal" required>

        <label for="jumlah_orang">Jumlah Orang</label>
        <input type="number" id="jumlah_orang" name="jumlah_orang" min="4" required>

        <label for="paket">Paket</label>
        <select id="paket" name="paket" required>
            <option value="reguler">Reguler</option>
            <option value="extreme">Extreme</option>
        </select>

        <button type="submit">Kirim</button>
    </form>
</div>

</body>
</html>
