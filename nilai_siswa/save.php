<?php
if (isset($_POST['simpan'])) {
    include_once 'config.php';
    $siswa_id = $_POST['siswa_id'];
    $mapel_id = $_POST['mapel_id'];
    $guru_id = $_POST['guru_id'];
    $nilai = $_POST['nilai'];


    $sql = "INSERT INTO nilai_siswa SET siswa_id='$siswa_id', mapel_id='$mapel_id', guru_id='$guru_id', nilai='$nilai'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location: index.php?m=nilai_siswa&s=view');
    } else {
        include "index.php";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}