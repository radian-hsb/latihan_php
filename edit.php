<?php 
   require 'function.php';

    $id = $_GET['id'];
    $mhs = query("SELECT * FROM data_mahasiswa WHERE id = $id")[0];
    if (isset($_POST['submit'])) 
    { 

   if (edit($_POST) > 0) {
       echo "<script>
       alert('Data berhasil diubah');
       document.location.href = 'inde.php';
       </script>";
   } else {
       echo "<script>
       alert('Data gagal diubah');
       document.location.href = 'inde.php';
       </script>";
   }
}
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1 style="text-align: center;">Edit Data</h1>
    <form action="" method="post" style="margin: 0 auto; display: flex; flex-direction: column; align-items: center; width: 50%;">
        <fieldset style="width: 100%;">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <p>
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim" required value="<?= $mhs['nim']; ?>">
    <p>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required value="<?= $mhs['nama']; ?>">
    <p>
        <label for="jenis_kelamin">Jenis Kelamin :</label>
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin"  value="laki-laki" required value="<?= $mhs['jenis_kelamin']; ?>">Laki-laki
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" required value="<?= $mhs['jenis_kelamin']; ?>">Perempuan
    <p>
        <label for="telpon">No Hp :</label>
        <input type="text" name="telpon" id="telpon" required value="<?= $mhs['telpon']; ?>">
    <p>
        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat" id="alamat" required value="<?= $mhs['alamat']; ?>">

    <p>
        <button type="submit" name="submit">Edit Data</button>
           
        </fieldset>
    </form>
    
</body>
</html>