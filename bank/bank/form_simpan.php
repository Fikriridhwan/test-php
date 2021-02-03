<html>
<head>
  <title>Tambah Data</title>
</head>
<body>
  <h1>Tambah Data Nasabah</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>NIK</td>
        <td><input type="text" name="id"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="name"></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>