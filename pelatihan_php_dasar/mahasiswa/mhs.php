<?php

require 'connectdb.php';
//Tampung ke Variabel
$mahasiswa = query("Select * From mahasiswa");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h3>Data Mahasiswa</h3>
    <a href="tambah.php">Tambah Data</a></br>
    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($mahasiswa as $mhs) :?>
        <tr>
            <td><?php echo $mhs['id'];?></td>
            <td><img src="img/<?php echo $mhs['gambar'];?>" alt="" width="60"></td>
            <td><?php echo $mhs['nim'];?></td>
            <td><?php echo $mhs['nama'];?></td>
            <td><?php echo $mhs['email'];?></td>
            <td><?php echo $mhs['jurusan'];?></td>
            <td><a href="">Edit</a> | <a href="">Hapus</a> | <a href="detail.php?id=<?php echo $mhs['id'] ;?>">Detail</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>