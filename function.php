<?php
      // Membuat koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "db_latihan");

        // Membuat query
        function query($query) {
            global $conn;
            $result = mysqli_query($conn, $query);
            $rows = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            return $rows;
        }

function tambah($data) {
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $telpon = htmlspecialchars($data["telpon"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $query = "INSERT INTO data_mahasiswa VALUES ('', '$nim', '$nama', '$jenis_kelamin', '$telpon', '$alamat')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM data_mahasiswa WHERE id =$id");
    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;
    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $telpon = htmlspecialchars($data["telpon"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $query = "UPDATE data_mahasiswa SET nim = '$nim', nama = '$nama', jenis_kelamin = '$jenis_kelamin', telpon = '$telpon', alamat = '$alamat' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>
