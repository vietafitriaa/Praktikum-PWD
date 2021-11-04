<?php
$host="localhost"; // Menentukan nama host atau alamat IP
$username="root"; // Menentukan nama pengguna MySQL
$password=""; // Menentukan kata sandi MySQL
$databasename="akademik"; // Menentukan database default yang akan digunakan
$con = @mysqli_connect($host,$username,$password,$databasename); // Membuat koneksi
// Fungsi mysqli_connect() membuka koneksi baru ke server MySQL. 
//Huruf i  adalah improved yang berarti versi update dari MySQL
if (!$con) { // Mengecek Koneksi
 echo "Error: " . mysqli_connect_error(); // Jika koneksi tidak berhasil. Muncul pesan error
exit(); // Menutup koneksi ke database
}
?>