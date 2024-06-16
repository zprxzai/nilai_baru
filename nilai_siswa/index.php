<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view': default:
        include('nilai_siswa/view.php');
        break;
    case 'add':
        include('nilai_siswa/add.php');
        break;
    case 'save':
        include('nilai_siswa/save.php');
        break;
    case 'edit':
        include('nilai_siswa/edit.php');
        break;
    case 'update':
        include('nilai_siswa/update.php');
        break;
    case 'delete':
        include('nilai_siswa/delete.php');
        break;
}
