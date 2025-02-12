<?php

include_once 'm_koneksi.php';

class user
{


    function  tampil_data()
    {
        //instansiasi objek atau membuat objek
        $conn = new koneksi();

        //perintah untuk menampilkan semua data dari tabel user 
        $sql = "SELECT * FROM user ORDER BY id_user DESC";

        $query = mysqli_query($conn->koneksi, $sql);

        if ($query->num_rows > 0) {
            while ($data = mysqli_fetch_object($query)) {
                $result[] = $data;
            }

            return $result;
        } else {
            echo "Tidak ada data pada tabel";
        }
    }

    function tambah($id, $username, $email, $pass, $nama, $alamat, $jk, $tempat, $tanggal)
    {

        $conn = new koneksi();

        $sql = "INSERT INTO user VALUES ('$id', '$username', '$email', '$pass', '$nama', '$alamat', '$jk', '$tempat', '$tanggal','')";

        $query = mysqli_query($conn->koneksi, $sql);

        if ($query) {
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/dashboard.php'</script>";
        } else {
            echo "<script>alert('Data Gagal Ditambahkan');window.location='../views/form.php'</script>";
        }
    }
}
