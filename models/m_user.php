<?php

include_once 'm_koneksi.php';

class user
{


    function  tampil_data()
    {
        //instansiasi objek atau membuat objek
        $conn = new koneksi();

        //perintah untuk menampilkan semua data dari tabel user 
        $sql = "SELECT * FROM user";

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
}
