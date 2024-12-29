<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rivertubing</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Navbar Styling */
    .navbar {
        background-color: rgba(0, 0, 0, 0.5); /* Warna hitam dengan transparansi 50% */
        overflow: hidden;
        position: fixed; /* Agar navbar tetap di atas saat scroll */
        top: 0;
        width: 100%;
        display: flex;
        justify-content: flex-end; /* Posisikan item navbar ke sebelah kanan */
        padding: 10px 20px; /* Menambahkan padding untuk memperbaiki jarak */
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

    .header {
        background: url('images/1.jpg') no-repeat center center/cover;  
        height: 500px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .header h1 {
        font-family: 'Lora', sans-serif;
        font-size: 5em;
        margin: 0;
    }

    .header h2 {
        font-size: 3em;
        margin: 0;
    }

    .header p {
        font-size: 1.5em;
        margin: 10px 0;
    }

    /* Styling untuk Hero Section */
    .hero {
        height: 100vh; /* Full viewport height */
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background: url('images/curug.jpg') no-repeat center center/cover;
    }

    .hero h1 {
        color: white;
        font-size: 3em;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    .content {
        margin-top: 50px; /* Memberikan jarak dari navbar */
        padding: 20px;
        text-align: center;
    }

    .gallery {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
    }

    .gallery img {
        max-height: 150px; /* Tetapkan tinggi maksimum untuk konsistensi */
        height: auto;
        width: auto;
        border: 2px solid #ddd;
        border-radius: 5px;
        transition: transform 0.3s ease-in-out; /* Tambahkan transisi untuk efek zoom */
    }

    .gallery img:hover {
        border-color: #333;
        transform: scale(1.1); /* Efek zoom */
    }

    .thumbnail-gallery {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
    }

    .thumbnail-gallery img {
        max-width: 200px;
        height: auto;
        border: 2px solid #ddd;
        border-radius: 5px;
        transition: transform 0.3s ease-in-out; /* Tambahkan transisi untuk efek zoom */
    }

    .thumbnail-gallery img:hover {
        border-color: #333;
        transform: scale(1.1); /* Efek zoom */
    }

    /* Styling untuk Footer */
    footer {
        background: url('images/asli1.jpeg') no-repeat center center/cover; /* Tambahkan gambar latar */
        height: 500px; /* Tinggi footer */
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
    }

    .logo-footer img {
        max-height: 100px;
    }

    img:last-of-type {
        margin-bottom: 0;
        display: block;
    }

    section.content img:last-of-type {
        margin-bottom: -50px; 
    }
  </style>
</head>
<body>
    <!-- Navbar dengan tombol pemesanan -->
    <div class="navbar">
        <a href="index.php">Beranda</a> <!-- Mengarahkan ke index.php -->
        <a href="#destinasi">Destinasi</a>
        <a href="pemesanan.php">Pemesanan</a>
        <a href="daftar_pemesanan.php">Daftar Pemesanan</a> 
    </div>

    <section id="home" class="hero">
        <h1>Selamat Datang di River Tubing</h1>
    </section>

    <section id="destinasi" class="content">
        <h2>Wahana Air River Tubing</h2>
        <div class="gallery">
            <img src="images/atas1.jpeg" alt="Tubing 1">
            <img src="images/atas2.jpeg" alt="Tubing 2">
            <img src="images/atas3.jpeg" alt="Tubing 3">
            <img src="images/atas4.jpeg" alt="Tubing 4">
            <img src="images/atas5.jpeg" alt="Tubing 5">
        </div>
        
        <h3>Gallery</h3>
        <div class="thumbnail-gallery">
            <img src="images/bawah1.jpeg" alt="Group 1">
            <img src="images/bawah2.jpeg" alt="Group 2">
            <img src="images/bawah3.jpeg" alt="Group 3">
            <img src="images/bawah4.jpeg" alt="Group 4">
        </div>
        <img src="images/gambarbesar.jpeg" alt="Gambar besar terakhir">
        
    </section>

    <footer>
        <div>
        </div>
    </footer>
</body>
</html>
