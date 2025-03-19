<?php 
  require 'function.php';
    $data_mahasiswa = mysqli_query($conn, "SELECT * FROM data_mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($data_mahasiswa as $row )   : {
        } ?>
            
        
           
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['jenis_kelamin']; ?></td>
            <td><?= $row['telpon']; ?></td>
            <td ><?= $row['alamat']; ?></td>
            <td>
                <a href="">Edit</a> |
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin ingin menghapus data?');">Hapus</a>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
        

    </table>
</body>
</html>