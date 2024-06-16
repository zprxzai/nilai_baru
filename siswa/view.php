<div class="row">
    <div class="col-12"></div>
    <div class="card">
        <div class="card-header row">
            <div class="card-title h3 col-8">Data siswa</div>
            <div class="col-4">
                <a href="?m=siswa&s=add" class="btn btn-large btn-primary float-end">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-stripped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama siswa</th>
                        <th title="gender">Jenis kelamin</th>
                        <th>Tempat lahir</th>
                        <th>Tanggal lahir</th>
                        <th>Kelas</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once('config.php');
                    $sql =" SELECT siswa.id, nis, nama, gender, tempat_lahir, tanggal_lahir, kelas, foto FROM siswa JOIN kelas ON kelas.id=siswa.kelas_id";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while ($r = mysqli_fetch_assoc($result)){
                            echo '<tr>
                            <td>'.$no.'</td>
                            <td>'.$r['nis'].'</td>
                            <td>'.$r['nama'].'</td>
                            <td>'.$r['gender'].'</td>
                            <td>'.$r['tempat_lahir'].'</td>
                            <td>'.date('d F Y', strtotime($r['tanggal_lahir'])).'</td>
                            <td>'.$r['kelas'].'</td>
                            <td> <img src= "siswa/foto/' . $r['foto'] .'" alt="" height=100></td>
                            <td>
                                <a href="?m=siswa&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                <a href="?m=siswa&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin siswa akan dihapus?, Hapus 1 siswa akan menghapus data siswa di kelas tersebut\')">Hapus</a>
                            </td>
                        </tr>';
                        $no++;
                    }
                } else {
                    echo "<tr>
                        <td colspan='9' align='center'>Data Kosong</td>
                        </tr>";
                }
                            
                        
                    
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
