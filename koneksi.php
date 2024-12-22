<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "rivertubing";

// Buat koneksi
$db = new mysqli($servername, $username, $password, $database);

// if($db->connect_error){
//     echo'gagal';
// }else{
//     echo 'berhasil';
// }

// Periksa koneksi
// if ($conn->connect_error) {
//     die("Koneksi gagal: " . $conn->connect_error);
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nama = htmlspecialchars($_POST['nama']);
//     $telepon = htmlspecialchars($_POST['telepon']);
//     $tanggal_pemesanan = htmlspecialchars($_POST['tanggal_pemesanan']);
//     $jumlah_orang = htmlspecialchars($_POST['jumlah_orang']);
//     $paket = htmlspecialchars($_POST['paket']);

//     // Query untuk menyimpan data
//     $sql = "INSERT INTO pemesanan (nama, telepon, tanggal_pemesanan, jumlah_orang, paket) 
//             VALUES ('$nama', '$telepon', '$tanggal', '$jumlah_orang', '$paket'";

// if ($conn->query($sql) === TRUE) {
//     // Redirect ke pemesanan.html setelah sukses
//     header("Location: pemesanan.html");
//     exit();
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// }

// $conn->close();
?>