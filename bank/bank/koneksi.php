<?php
$host = "http://ip172-18-0-12-c0daeqs34gag00ac6cgg-3306.direct.labs.play-with-docker.com/"; // Nama hostnya
$username = "root"; // Username
$password = "my-root"; // Password (Isi jika menggunakan password)
$database = "bank_crud"; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>
