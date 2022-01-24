<?php
    include 'functions.php';
    include '../conn.php';
    if ( isset ($_POST["submit"]) ){
        if( tambah($_POST) > 0 ){
            echo "<script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                  </script>";
        }else{
            echo "<script>
                    alert('data gagal ditambahkan!');
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

    <title>Tambah Data Guru</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center py-5">
          <div class="col-md-5">
            <div class="card">
                <div class="card-header  ">
                    <h5 class="text-center">Tambah Data Guru</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST" >
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" name="nip" class="form-control" id="NIP" aria-describedby="emailHelp" 
                            required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="namaGuru" class="form-label">Nama Guru</label>
                            <input type="text" name="namaGuru" class="form-control" id="namaGuru" 
                            required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempatLahir" class="form-control" id="tempatLahir" 
                            required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggalLahir" class="form-control" id="tanggalLahir" 
                            required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <!-- <label for="jk" class="form-label" required>Jenis Kelamin</label>
                            <input type="text" name="jk" class="form-control" id="jk" required> -->
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jk" required name="jk">
                                <option selected disabled value="" >Memilih....</option>
                                <option >Laki-laki</option>
                                <option >Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-select" id="agama" required name="agama">
                                <option selected disabled value="" >Memilih....</option>
                                <option >Islam</option>
                                <option >Kristen</option>
                                <option >Katolik</option>
                                <option >Hindu</option>
                                <option >Budha</option>
                                <option >Konghucu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" 
                            required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="noTelepon" class="form-label">No. Telepon</label>
                            <input type="text" name="noTelepon" class="form-control" id="noTelepon" 
                            required autocomplete="off">
                        </div>
                        <div class="d-grid gap-2 ">
                            <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
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