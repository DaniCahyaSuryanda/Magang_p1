<?php
    require '../../conn.php';
    require '../functions.php';


    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM guru WHERE
                nip_guru LIKE '%$keyword%' OR
                nama_guru LIKE '%$keyword%' OR
                tmpt_lahir LIKE '%$keyword%' OR
                tgl_lahir LIKE '%$keyword%' OR
                jk LIKE '%$keyword%' OR
                agama LIKE '%$keyword%' OR
                alamat LIKE '%$keyword%' OR
                no_telepon LIKE '%$keyword%'
              ";
    $teachers = query1($query)

?>

<div class="container">
  <div class="row">
   <div class="col-sm-12 ">
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <td scope="col">Id</td>
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


