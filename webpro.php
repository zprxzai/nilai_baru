<?php
$module = (isset($_GET['m'])) ? $_GET['m'] : 'home';
switch ($module) {
    case 'home':
    default:
        include('home.php');
        break;
    case 'kelas':
        include('kelas/index.php');
        break;
    case 'siswa':
        include('siswa/index.php');
        break;
    case 'mapel':
        include('mapel/index.php');
        break;
    case 'guru':
        include('guru/index.php');
        break;
    case 'nilai_siswa':
        include('nilai_siswa/index.php');
        break;
    case 'guru_kelas':
        include('guru_kelas/index.php');
        break;
    case 'guru_mapel':
        include('guru_mapel/index.php');
        break;
}
