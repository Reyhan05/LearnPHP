<?php
// isi detail database
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'sekolah';

// cek koneksi ke database
$connect = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($connect->errno){
    echo $connect->error;
    exit;
}
?>