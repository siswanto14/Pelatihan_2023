<?php
require 'connectdb.php';

$id = $_GET['id'];

$mahasiswa = query(" Select * From mahasiswa where id = $id");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Detail</title>
</head>
<body>
    <ul>
        <li><img src="img/<?php echo $mahasiswa['gambar'];?>" alt="" width="60"></li>
        <li><?php echo $mahasiswa['nama'];?></li>
        <li><?php echo $mahasiswa['nim'];?></li>
        <li><?php echo $mahasiswa['email'];?></li>
        <li><?php echo $mahasiswa['jurusan'];?></li>
        <li><a href="mhs.php">Kembali</a></li>
    </ul>
</body>
</html>