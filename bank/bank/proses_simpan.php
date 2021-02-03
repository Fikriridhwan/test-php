<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$name = $_POST['name'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO siswa(id, name) VALUES(:id,:name)");
$sql->bindParam(':id', $id);
$sql->bindParam(':name', $name);
$sql->execute(); // Eksekusi query insert
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>