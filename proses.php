<?php
include 'koneksi.php';

if(isset($_POST['nama'])){
    //eksekusi simpan
    //echo '<pre>';
    //var_dump($_POST);
    
    //definisikan setiap variabel
    $nama = htmlentities($_POST['nama']);
	$telepon = htmlentities($_POST['telepon']);
	$tanggal = htmlentities($_POST['tanggal']);
	$jumlah_orang = htmlentities($_POST['jumlah_orang']);
	$paket = htmlentities($_POST['paket']);
	
	
	$sql = "INSERT INTO pemesanan (`nama_lengkap`, `telepon`, `tanggal_pemesanan`, `jumlah_orang`, `paket`) value ('$nama','$telepon','$tanggal','$jumlah_orang','$paket')";
	$query = mysqli_query($db,$sql);
	if($query){ 
        $id_pemesanan = mysqli_insert_id($db);
	    header('Location: invoice.php?id='.$id_pemesanan);
	    // $id_pemesanan = mysqli_insert_id($db);
	    // header('Location: ../index.php?aksi=detail&id_pemesanan='.$id_pemesanan);
	    //echo $id_pemesanan;
	}else{ echo 0; }
}else{
    //muncul pesan error
    echo 'Ngapain?';
}
?>