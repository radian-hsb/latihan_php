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
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required>

            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>

            </li>
            <li>
                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin"  value="laki-laki" required>Laki-laki
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" required>Perempuan

            </li>
            <li>
                <label for="telpon">No Hp :</label>
                <input type="text" name="telpon" id="telpon" required>

            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" required>

            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
    
</body>
</html>