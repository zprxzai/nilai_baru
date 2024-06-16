<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Kelas</div>
                <div class="col-4">
                    <a href="?m=nilai_siswa&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=nilai_siswa&s=save" method="post">
                    <div class="mb-3">
                        <select name="siswa_id" class="form-control" placeholder="siswa" required>
                            <option value="">Pilih siswa</option>
                            <?php
                            include_once("config.php");
                            $sql = "SELECT * FROM siswa";
                            $result = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $r['id'] . "'>" . $r['nama'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select name="mapel_id" class="form-control" placeholder="mapel" required>
                            <option value="">Pilih mapel</option>
                            <?php
                            include_once("config.php");
                            $sql = "SELECT * FROM mapel";
                            $result = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $r['id'] . "'>" . $r['mapel'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select name="guru_id" class="form-control" placeholder="guru" required>
                            <option value="">Pilih guru</option>
                            <?php
                            include_once("config.php");
                            $sql = "SELECT * FROM guru";
                            $result = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $r['id'] . "'>" . $r['nama'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <input type="number" name="nilai" class="form-control" placeholder="nilai" required>
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--