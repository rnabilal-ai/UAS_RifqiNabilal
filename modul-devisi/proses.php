<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_devisi = $_POST['id'];
$devisi = $_POST['devisi'];


#3. menulis query
$simpan = "INSERT INTO devisi (id_devisi,nama_devisi) VALUES ('$id_devisi',
'$devisi')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);


#5. mengalihkan halaman
// header("location:index.php");
?>
