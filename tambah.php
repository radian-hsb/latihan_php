<?php 
   require 'function.php';
    if (isset($_POST['submit'])) 
    { 

   if (tambah($_POST) > 0) {
       echo "<script>
       alert('Data berhasil ditambahkan');
       document.location.href = 'inde.php';
       </script>";
   } else {
       echo "<script>
       alert('Data gagal ditambahkan');
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
    <title>Tambah Data</title>
</head>
<body>
    <h1 style="text-align: center;">Tambah Data</h1>
    <form action="" method="post" style="margin: 0 auto; display: flex; flex-direction: column; align-items: center; width: 50%;">
        <fieldset style="width: 100%;">
    <p>
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim" required>
    <p>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required>
    <p>
        <label for="jenis_kelamin">Jenis Kelamin :</label>
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin"  value="laki-laki" required>Laki-laki
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" required>Perempuan
    <p>
        <label for="telpon">No Hp :</label>
        <input type="text" name="telpon" id="telpon" required>
    <p>
        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat" id="alamat" required>

    <p>
        <button type="submit" name="submit">Tambah Data</button>
           
        </fieldset>
    </form>
    
</body>
</html>