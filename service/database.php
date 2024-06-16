

<?php
$servername = "localhost"; // Ubah sesuai dengan konfigurasi server Anda
$username = "root"; // Ubah sesuai dengan username database Anda
$password = ""; // Ubah sesuai dengan password database Anda
$dbname = "dbadboostify"; // Ubah sesuai dengan nama database Anda

// Membuat koneksi
$db = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
