`<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$Host = 'localhost';
$User= 'root';
$Password = '';
$Database = 'modul4_jurnal';
$connect = mysqli_connect($Host, $User, $Password, $Database);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// 
?>