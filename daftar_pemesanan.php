<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemesanan - River Tubing Cikadongdong</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('images/bkk.png') no-repeat center center;
background-size: cover; /* Menjadikan gambar menyesuaikan ukuran */
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            font-size: 2em;
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #709912;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #d9ff02;
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

    <div class="container">
        <h2>Daftar Pemesanan</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>Telephon</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Jumlah Orang</th>
                    <th>Paket</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "rivertubing";
                
                // Buat koneksi
                $db = new mysqli($servername, $username, $password, $database);
                // Koneksi ke database
                $conn = new mysqli('localhost', 'root', '', 'rivertubing');

                // Periksa koneksi
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Query untuk mengambil data pemesanan
                $sql = "SELECT * FROM pemesanan where is_deleted=0";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . htmlspecialchars($row['nama_lengkap']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['telepon']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['tanggal_pemesanan']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['jumlah_orang']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['paket']) . "</td>";
                        echo "<td><a href='hapus.php?id=" . urlencode($row['id']) . "'>Hapus</a></td>";
                        echo "</tr>";
                    }
                }
                 else {
                    echo "<tr><td colspan='6'>Belum ada data pemesanan</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
