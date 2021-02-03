<?php

$host = "192.168.0.8"; // Nama hostnya
$username = "root"; // Username
$password = "my-root"; // Password (Isi jika menggunakan password)
$database = "bank_crud"; // Nama databasenya
// Koneksi ke MySQL dengan PDO

$pdo = new mysqli($host,$username,$password,$database);


// $dns = "mysql:host=".getenv('http://ip172-18-0-12-c0daeqs34gag00ac6cgg-3306.direct.labs.play-with-docker.com/')."; dbname=".getenv('bank_crud');
// $pdo = new PDO($dns, getenv('root'), getenv('my-root'));

?>
