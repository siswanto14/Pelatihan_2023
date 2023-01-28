<?php

function koneksi(){
    //Koneksi ke database
    return mysqli_connect('localhost','root','root','mhs_2023');
}

function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result)==1){
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }   

    return $rows;
}

function tambah($data){
    $conn = koneksi();
    $nim = $data['nim'];
    $nama = $data['nama'];
    $email = $data['email'];
    $jurusan = $data['jurusan'];
    $gambar = $data['gambar'];
    $query = "insert into mahasiswa values (null, '$nama', '$nim', '$email', '$jurusan', '$gambar');";
    //var_dump($query);
    mysqli_query($conn, $query);

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}
?>