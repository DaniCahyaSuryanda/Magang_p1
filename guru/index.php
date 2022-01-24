<?php 
  session_start();
  include '../conn.php';
  include 'functions.php';
  include '../layout/header.php';
  
  //cek session
  // if ( !isset($_SESSION["login"]) ){
  //   header("Location: login.php");
  //   exit;
  // }

  //pagination
  //konfigurasi
    //data di DBMS memilki index awal 0.
  $jumlahDataPerHalaman = 2;
  //jumlahData adalah jumlah data yang ada di DBMS yang dihitung menggunakan fungsi count()
  $jumlahData = count(query1("SELECT * FROM guru"));
  //jumlahHalaman untuk menentukan jumlah halaman yang akan ada sesuai $jumlahDataPerHalaman / $jumlahData
  //ceil() digunakan untuk membulatkan bilangannya, jika seandainya 
  // jumlahData / jumlahDataPerHalaman menghasilkan nilai pecahan maka akan dibulatkan ke atas
  $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

  // if ( isset($_GET["halaman"]) ) {
  //   $halamanAktif = $_GET["halaman"];
  // }else{
  //   $halamanAktif = 1;
  // }
  //halamanAktif untuk menentukan sekarang kita berada di halaman keberapa.
  //halamanAktif menggunakan fungsi pengulangan ternary
  $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
  //awalData digunakan untuk manampilkan datanya sesuai dengan index-nya halamanAktif 
  $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
  
  
  $teachers = query1("SELECT * FROM guru LIMIT $awalData, $jumlahDataPerHalaman");

  if( isset($_POST["cari"]) ){
    $teachers = cari($_POST["keyword"]);
  }

?>
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Selamat Datang</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Di menu Guru</p>
    </div>
</div>
<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
  </head>
  <body>

    <!-- link tambah  -->
    <div class="tambah">
      <div class="container">
        <div class="row">
            <div class="col-sm-12 text-left">
                <a href="tambah.php" class="btn btn-primary">+Guru</a>
                <!-- <hr> -->
            </div>
        </div>
      </div>
    </div>
    <!-- akhir link tambah -->
<hr>

<div class="container">
  <div class="row"> 
    <!-- pagination -->
    <div class="col-sm-8">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item ">
              <?php if ( $halamanAktif > 1 ) : ?>
                <a class="page-link" href="?halaman=<?= $halamanAktif -1; ?>" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              <?php endif; ?>
            </li>
            
            <li class="page-item">
              <?php if ( $halamanAktif < $jumlahHalaman ) : ?>
                <a class="page-link" href="?halaman=<?= $halamanAktif +1; ?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              <?php endif; ?>
            </li>
          </ul>
        </nav>
      </div>
    <!-- akhir pagination -->
<!-- search -->
    <div class="col-sm-2 offset-sm-2">
    
      <form action="" method="POST" class="row g-3">
        <div class="col-auto">
          <input type="text" name="keyword" id="keyword" class="form-control" autocomplete="off" autofocus>
        </div>
        <!-- <div class="col-auto">
          <button type="submit" name="cari" id="tombol-cari" class="btn btn-primary mb-3"><i class="bi bi-search"></i></button>
        </div> -->
      </form>

    </div>
  </div>
</div>
<!-- search -->


<!-- tabel -->

<div id="pembungkus">
<div class="container">
  <div class="row">
   <div class="col-sm-12 ">
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <td scope="col">No</td>
                <th scope="col">NIP</th>
                <th scope="col">Nama Guru</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No. Telpon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach( $teachers as $teacher ) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $teacher["nip_guru"]; ?></td>
                <td><?= $teacher["nama_guru"]; ?></td>
                <td><?= $teacher["tmpt_lahir"]; ?></td>
                <td><?= $teacher["tgl_lahir"]; ?></td>
                <td><?= $teacher["jk"]; ?></td>
                <td><?= $teacher["agama"]; ?></td>
                <td><?= $teacher["alamat"]; ?></td>
                <td> +62 <?= $teacher["no_telepon"]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $teacher["id_guru"]; ?>"><i class="bi bi-pencil-square btn btn-outline-success btn-sm" 
                      role="button"></i></a> 
                    <a href="hapus.php?id=<?= $teacher["id_guru"]; ?>" 
                      onclick="return confirm('Apakah Anda yakin akan menghapus data ini');"><i class="bi bi-trash btn btn-outline-danger btn-sm" 
                        role="button">
                    </i></a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
   </div> 
  </div>
</div>
</div>

<!-- akhir tabel -->

<!-- pagination -->

<div class="container">
  <div class="row">
    <div class="col-sm-12">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <?php for ($i=1; $i <= $jumlahHalaman; $i++) : ?>
          <?php if( $i == $halamanAktif ) : ?>
           <li class="page-item active"><a class="page-link " href="?halaman=<?= $i; ?>"> <?= $i; ?> </a></li>
          <?php else : ?>
            <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>"> <?= $i; ?> </a></li>
          <?php endif; ?>
        <?php endfor; ?>
      </ul>
    </nav>
    </div>
  </div>
</div>

<!-- pagination -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="js/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>