<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view': default:
        include('guru_kelas/view.php');
        break;
    case 'add':
        include('guru_kelas/add.php');
        break;
    case 'save':
        include('guru_kelas/save.php');
        break;
    case 'edit':
        include('guru_kelas/edit.php');
        break;
    case 'update':
        include('guru_kelas/update.php');
        break;
    case 'delete':
        include('guru_kelas/delete.php');
        break;
}
