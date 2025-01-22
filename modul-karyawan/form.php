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
                    <h3 class="float-start">Form Karyawan</h3>
                    
                </div>
                <div class="card-body">
                <form action="proses.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Posisi</label>
                        <select name="posisi" class="form-control" id="">
                            <option value="">-pilih-</option>
                            <option value="Senior">Stuf Senior</option>
                            <option value="Junior">Stuf Junior</option>
                        </select>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Devisi</label>
                        <select name="devisi" class="form-control" id="">
                            <option value="">-pilih-</option>
                            <option value="Konsumsi">Konsumsi</option>
                            <option value="Pemasaran">Pemasaran</option>
                            <option value="Produksi">Produksi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Foto</label>
                        <input type="file" name="name" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
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