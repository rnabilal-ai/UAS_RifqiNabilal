<?php
#1. koneksi ke database
include("../koneksi.php");

#2. ambil id yang akan disunting
$id = $_GET['id'];

#3. mengambil semua record data berdasarkan id yang dipilih
$ambil = "SELECT * FROM dosens WHERE id='$id'";

#4. menjalankan query
$edit = mysqli_query($koneksi,$ambil);

#5. memisahkan record data berdasarkan kolom/field
$data = mysqli_fetch_array($edit)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php 
    include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Edit Data karyawan</h3>
                
            </div>
            <div class="card-body">
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?=$data['id']?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" value="<?=$data['Nama']?>" name="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Posisi</label>
                    <select name="jabatan" class="form-control" id="">
                        <option value="">-Pilih Jabatan-</option>
                        <option <?php echo ($data['jabatan'] == "senior") ? 'selected' : '' ?> value="senior">Full Time</option>
                        <option <?php echo ($data['jabatan'] == "junior") ? 'selected' : '' ?> value="junior">Part Time</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Devisi</label>
                    <select name="jabatan" class="form-control" id="">
                        <option value="">-Pilih Posisi-</option>
                        <option <?php echo ($data['jabatan'] == "Konsumsi") ? 'selected' : '' ?> value="konsumsi">Konsumsi</option>
                        <option <?php echo ($data['jabatan'] == "Pemasaran") ? 'selected' : '' ?> value="pemasaran">Pemasaran</option>
                        <option <?php echo ($data['jabatan'] == "Produksi") ? 'selected' : '' ?> value="Produksi">Produksi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Foto</label>
                    <input type="file" name="foto" value="<?=$data['foto']?>" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>