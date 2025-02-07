<?php
// include_once __DIR__ . '../controllers/c_latihan.php';
include_once '../controllers/c_user.php';


include_once 'template/header.php';
include_once 'template/navbar.php';
?>
<br><br>
<!-- awal konten -->
<div class="container">

    <div class="row align-items-center">
        <div class="col-1">
            <!-- One of three columns -->
        </div>
        <div class="col-10">
            <center>
                <h3>Daftar User</h3>
            </center><br>
            <table class="table ">
                <thead>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Tempat Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                <tbody>

                    <?php
                    $no = 1;
                    foreach ($users as $data) :

                        $tanggal_sekarang = new DateTime();

                        $tanggal_lahir = new DateTime($data->tanggallahir_user);

                        $umur = $tanggal_sekarang->diff($tanggal_lahir);
                    ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $data->nama_user ?></td>
                            <td><?= $umur->y ?></td>
                            <td><?= $data->tempatlahir_user . ", " . date("d F Y", strtotime($data->tanggallahir_user)) ?></td>
                            <td><?= $data->alamat_user ?></td>
                            <td>
                                <center>
                                    <a href="edit.php?id=<?= $data->id_user ?>"><button type="button" class="btn btn-round btn-primary">Edit</button></a>

                                    <!-- <a href="../controllers/c_user.php?ubah=ubah&id="><button type="button" class="btn btn-round btn-primary">Edit</button></a> -->

                                    <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="../controllers/c_user.php?id=<?= $data->id_user ?>&aksi=hapus"><button type="button" name="hapus" class="btn btn-round btn-danger">Hapus</button></a>
                                </center>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        <div class="col-1">
            <!-- One of three columns -->
        </div>
    </div>

</div>
<!-- akhir content  -->
<?php include_once 'template/footer.php'; ?>