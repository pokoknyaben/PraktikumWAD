<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];

// a. Ambil data nama mobil
$nama_mobil = $_POST ['nama_mobil'];
// b. Ambil data brand mobil
$brand_mobil = $_POST ['brand_mobil'];
// c. Ambil data warna mobil
$warna_mobil = $_POST ['warna_mobil'];
// d. Ambil data tipe mobil
$tipe_mobil = $_POST ['tipe_mobil'];
// e. Ambil data harga mobil
$harga_mobil = $_POST ['harga_mobil'];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
$query="UPDATE showroom_mobil SET nama_mobil = '$nama_mobil', brand_mobil='$brand_mobil', warna_mobil='$warna_mobil', tipe_mobil='$tipe_mobil', harga_mobil='$harga_mobil' WHERE id='$id'";
$update = mysqli_query ($connect, $query);
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

        // Eksekusi perintah SQL

        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        if($query){
            echo "<script>alert('Data telah diupdate')</script>";
            echo "<meta http-equiv='refresh' content='1 url=list_mobil.php'>";
        }
         
        else {
            echo "<script>alert('Data gagal diupdate')</script>";
            echo "<meta http-equiv='refresh' content='1 url=list_mobil.php'>";
        }
        
    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database
?>