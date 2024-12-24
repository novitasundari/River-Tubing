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
            background: url('images/bkk.png') no-repeat center center;
background-size: cover; /* Menjadikan gambar menyesuaikan ukuran */
        }

        .form-container {
            width: 60%; /* Lebar form diperkecil */
            max-width: 400px; /* Maksimal lebar form */ 
            margin: 40px auto;
            padding: 20px;
            background-color: #bcbdb6d5;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }

        .form-container h2 {
            text-align: center;
            font-size: 1.8em;
            color: #555;
            margin-bottom: 15px;
        }

        .form-container label {
            font-size: 1em;
            color: #555;
        }

        .form-container input, .form-container select, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: #fafafa;
            font-size: 0.9em;
            transition: all 0.3s ease;
        }

        .form-container input:focus, .form-container select:focus, .form-container textarea:focus {
            border-color: #d9ff02;
            outline: none;
            background-color: #ffffff;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(to right, #709912, #d9ff02);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.3s ease;
            display: block;
            text-align: center; /* Memastikan tombol berada di tengah */
            margin-top: 10px; /* Menambahkan spasi di atas tombol */
        }

        .form-container button:hover {
            background: linear-gradient(to right, #709912, #709912);
        }

        .form-container textarea {
            resize: vertical;
        }

        /* Responsive untuk layar kecil */
        @media (max-width: 768px) {
            .form-container {
                width: 90%;
                margin: 20px auto;
                padding: 15px;
            }

            .form-container h2 {
                font-size: 1.5em;
            }
        }

        .footer {
            background: #fcfafa;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 20px 5px;
            font-size: 0.9em;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.5);
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: flex-end;
            padding: 10px 20px;
            z-index: 1000;
        }

        .navbar a {
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 1.2em;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php">Beranda</a>
        <a href="destinasi.php">Destinasi</a>
        <a href="pemesanan.php">Pemesanan</a>
        <a href="daftar_pemesanan.php">Daftar Pemesanan</a> 
    </div>
    
    

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

    <div class="footer">
        <br><img src="images/images.jpg" alt="Logo" style="width:100px; height: auto;"><br>
    </div>
</body>
</html>
