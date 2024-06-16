<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view': default:
        include('view.php');
        break;
    case 'add':
        include('guru_mapel/add.php');
        break;
    case 'save':
        include('guru_mapel/save.php');
        break;
    case 'edit':
        include('guru_mapel/edit.php');
        break;
    case 'update':
        include('guru_mapel/update.php');
        break;
    case 'delete':
        include('guru_mapel/delete.php');
        break;
}
