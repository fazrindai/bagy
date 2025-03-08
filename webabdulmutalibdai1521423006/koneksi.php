<?php
$user = "root"; // atau sesuai username MySQL anda
$pass = ""; // kosong jika tidak ada password (XAMPP default)
$host = "localhost";
$dbname = "db_toko";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_toko", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>