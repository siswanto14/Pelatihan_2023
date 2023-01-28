<?php

require 'connectdb.php';

if (isset($_POST['tambah'])){
    if(tambah($_POST)>0){
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'mhs.php';
        </script>
        ";
    }
    else{
        echo "Data Gagal ditambahkan";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data </title>
</head>
<body>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">
                    NIM :
                    <input type="text" name="nim" id="nim" required autofocus>
                </label>
            </li>
            <li>
                <label for="nama">
                    Nama :
                    <input type="text" name="nama" id="nama" required>
                </label>
            </li>
            <li>
                <label for="email">
                    Email :
                    <input type="email" name="email" id="email" required>
                </label>
            </li>
            <li>
                <label for="jurusan">
                    Jurusan :
                    <input type="text" name="jurusan" id="jurusan" required>
                </label>
            </li>
            <li>
                <label for="gambar">
                    Gambar :
                    <input type="text" name="gambar" id="gambar" required>
                </label>
            </li>
            <input type="submit" value="Simpan" name="tambah">
        </ul>
    </form>
</body>
</html>