<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$idTas = $_POST['idTas'];
$nama_tas = $_POST['nama_tas'];
$kategori = $_POST['kategori'];
$idUser = $_POST['idUser'];
$password = $_POST['password'];
$id_kantor = $_POST['id_kantor'];

// Pastikan Anda menggunakan nama tabel dan kolom yang benar
// menginput data ke database
$query = "INSERT INTO tas (idTas, nama_tas, kategori, idUser, password, id_kantor) 
          VALUES ('$idTas', '$nama_tas', '$kategori', '$idUser', '$password', '$id_kantor')";

if (mysqli_query($koneksi, $query)) {
    // Jika berhasil, alihkan ke tampil.php
    header("Location: tampil.php");
    exit();
} else {
    // Jika gagal, tampilkan error
    echo "Error: " . mysqli_error($koneksi);
}
?>
