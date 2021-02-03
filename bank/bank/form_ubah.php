<html>
<head>
  <title>Ubah Data</title>
</head>
<body>
  <h1>Ubah Data Nasabah</h1>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM siswa WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="proses_ubah.php?id =<?php echo $id; ?>">
    <table cellpadding="8">
      <tr>
        <td>NIK</td>
        <td><input type="text" name="id" value="<?php echo $data['id']; ?>"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>