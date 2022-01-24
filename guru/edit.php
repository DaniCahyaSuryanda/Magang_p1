<?php
    include '../conn.php';
    include 'functions.php';

    $id = $_GET["id"];
    $guru = query1("SELECT * FROM guru WHERE id_guru = $id")[0];

    if ( isset ($_POST["edit"]) ){
        if( edit($_POST) > 0 ){
            echo "<script>
                    alert('data berhasil diedit!');
                    document.location.href = 'index.php';
                  </script>";
        }else{
            echo "<script>
                    alert('data gagal diedit!');
                    document.location.href = 'index.php';
                  </script>";   
        }
    }


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Data Guru</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center py-5">
          <div class="col-md-5">
            <div class="card">
                <div class="card-header  mb-0">
                    <h5 class="text-center">Edit Data Guru</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="jkLama" value="<?= $guru["jk"] ?>">
                        <input type="hidden" name="id" value="<?= $guru["id_guru"]; ?>">
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" name="nip" class="form-control" id="NIP" aria-describedby="emailHelp" 
                            required autocomplete="off" value="<?= $guru["nip_guru"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="namaGuru" class="form-label">Nama Guru</label>
                            <input type="text" name="namaGuru" class="form-control" id="namaGuru" 
                            required autocomplete="off" value="<?= $guru["nama_guru"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempatLahir" class="form-control" id="tempatLahir" 
                            required autocomplete="off" value="<?= $guru["tmpt_lahir"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggalLahir" class="form-control" id="tanggalLahir" 
                            required autocomplete="off" value="<?= $guru["tgl_lahir"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jk" required name="jk">
                                <option <?php if($guru["jk"] == "Laki-laki" ){
                                    echo 'selected'; } ?> value="Laki-laki">Laki-laki</option>
                                <option <?php if($guru["jk"] == "Perempuan" ){
                                    echo 'selected'; } ?> value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            
                            <select class="form-select" id="agama" required name="agama">
                                <option <?php if ($guru["agama"] == "Islam") {
                                    echo 'selected'; }?> value="islam">Islam</option>
                                <option <?php if ( $guru["agama"] == "Kristen" ){
                                    echo 'selected'; } ?> value="Kristen" >Kristen</option>
                                <option <?php if ( $guru["agama"] == "Katolik" ){
                                    echo 'selected'; } ?> value="Katolik" >Katolik</option>
                                <option <?php if ( $guru["agama"] == "Hindu" ){
                                    echo 'selected'; } ?> value="Hindu" >Hindu</option>
                                <option <?php if ( $guru["agama"] == "Buddha" ){
                                    echo 'selected'; } ?> value="Buddha" >Buddha</option>
                                <option <?php if( $guru["agama"] == "Konghucu" ){
                                    echo 'selected'; } ?> value="Konghucu" >Konghucu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" 
                            required autocomplete="off" value="<?= $guru["alamat"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="noTelepon" class="form-label">No. Telepon</label>
                            <input type="text" name="noTelepon" class="form-control" id="noTelepon" 
                            required autocomplete="off" value="<?= $guru["no_telepon"]; ?>">
                        </div>
                        <div class="d-grid gap-2 ">
                            <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>