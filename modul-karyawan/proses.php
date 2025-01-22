<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nama_karyawan = $_POST['nama'];
$posisi = $_POST['posisi'];
$devisi = $_POST['devisi'];
$foto = $_POST['name'];


#3. menulis query
$simpan = "INSERT INTO karyawans (nama_karyawan,posisi,devisi_id,foto_karyawan) VALUES ('$nama_karyawan',
'$posisi','$devisi','$name')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);


#5. mengalihkan halaman
// header("location:index.php");
?>
