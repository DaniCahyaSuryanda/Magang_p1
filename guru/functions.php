<?php
    

function query1($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;

    $nip = htmlspecialchars($data["nip"]);
    $namaGuru = htmlspecialchars($data["namaGuru"]);
    $tmptLahir = htmlspecialchars($data["tempatLahir"]);
    $tanggalLahir = htmlspecialchars($data["tanggalLahir"]);
    $jk = $data["jk"];
    $agama = htmlspecialchars($data["agama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $noTelepon = htmlspecialchars($data["noTelepon"]);

    $query = "INSERT INTO guru 
                VALUES
             ('', '$nip', '$namaGuru', '$tmptLahir', '$tanggalLahir', '$jk', '$agama', '$alamat', '$noTelepon')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM guru WHERE id_guru = $id");
    return mysqli_affected_rows($conn);
}

function edit ($data){
    global $conn;

    $id = $data["id"];
    // $jkLama = $data["jk"];
    $nip = htmlspecialchars($data["nip"]);
    $namaGuru = htmlspecialchars($data["namaGuru"]);
    $tmptLahir = htmlspecialchars($data["tempatLahir"]);
    $tanggalLahir = htmlspecialchars($data["tanggalLahir"]);
    $jk = $data["jk"];
    $agama = $data["agama"];
    $alamat = htmlspecialchars($data["alamat"]);
    $noTelepon = htmlspecialchars($data["noTelepon"]);

    // if ( !isset ( $data["jk"] ) ){
    //     $jk = $jkLama;
    // }else{
    //     $jk = $data["jk"];
    // }

    $query = "UPDATE guru SET
                nip_guru = '$nip',
                nama_guru = '$namaGuru',
                tmpt_lahir = '$tmptLahir',
                tgl_lahir = '$tanggalLahir',
                jk = '$jk',
                agama = '$agama',
                alamat = '$alamat',
                no_telepon = '$noTelepon'
              WHERE id_guru = $id
             ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){

    $keyword = "SELECT * FROM guru WHERE
                nip_guru LIKE '%$keyword%' OR
                nama_guru LIKE '%$keyword%' OR
                tmpt_lahir LIKE '%$keyword%' OR
                tgl_lahir LIKE '%$keyword%' OR
                jk LIKE '%$keyword%' OR
                agama LIKE '%$keyword%' OR
                alamat LIKE '%$keyword%' OR
                no_telepon LIKE '%$keyword%'
             ";
    return query1($keyword);
}



?>