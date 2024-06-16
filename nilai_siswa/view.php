<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data nilai</div>
                <div class="col-4">
                    <a href="?m=nilai_siswa&s=add" class="btn btn-large btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Siswa </th>
                            <th>mapel </th>
                            <th>guru </th>
                            <th>nilai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('config.php');
                        $sql = "SELECT * FROM nilai_siswa";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0 ) {
                            $no = 1;
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                    <td>'.$no.'</td>
                                    <td>'.$r['siswa_id'].'</td>
                                    <td>'.$r['mapel_id'].'</td>
                                    <td>'.$r['guru_id'].'</td>
                                    <td>'.$r['nilai'].'</td>
                                    <td>
                                        <a href="?m=nilai_siswa&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="?m=nilai_siswa&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin nilai akan dihapus?, Hapus 1 nilai akan menghapus semua data siswa di mapel tersebut\')">Hapus</a>
                                    </td>
                                </tr>';
                                $no++;
                            }
                        } else {
                            echo "<tr>
                                <td colspan='6' align='center'>Data Kosong</td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>