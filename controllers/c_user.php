<?php
include_once '../models/m_user.php';

//instansiasi objek/pembuatan objek
$user = new User();





// untuk menangani error pada program 
try {
    if (!empty($_GET['aksi'])) {
        $id = $_POST['id_user'];
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $nama = $_POST['nama_user'];
        $alamat = $_POST['alamat_user'];
        $jk = $_POST['jenis_kelamin'];
        $tempat = $_POST['tempatlahir_user'];
        $tanggal = $_POST['tanggallahir_user'];

        if ($_GET['aksi'] == 'tambah') {
            $user->tambah($id, $username, $email, $pass, $nama, $alamat, $jk, $tempat, $tanggal);
        }
    } else {
        $users = $user->tampil_data();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
