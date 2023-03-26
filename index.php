<?php 
    require 'functions.php';
    $students = read('SELECT * FROM siswa');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
</head>

<body class="pt-5 ps-5">
    <h1>Data Siswa</h1>
    <a href="add.php"><button class="btn btn-primary mb-3">Tambah siswa</button></a>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>    
        <?php foreach($students as $student) :?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $student['nama']; ?></td>
                <td><?= $student['nis']; ?></td>
                <td><?= $student['jurusan']; ?></td>
                <td><?= $student['alamat']; ?></td>
                <td>
                    <a href=""><button class="btn btn-success">Ubah</button></a>
                    <a href=""><button class="btn btn-danger">hapus</button></a>
                </td>
            </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</body>

</html>