<!DOCTYPE html>
<?php
    require_once 'koneksi.php';
    // Untuk mengirim data ke table user
    if (isset($_POST['submit'])){
        $username = strip_tags($_POST['username']);
        $email = strip_tags($_POST['email']);
        $nama = strip_tags($_POST['nama']);
        $password = strip_tags($_POST['password']);

        // membuat sebuah validasi
        if (empty($username) || empty($nama) || empty($password)){
            echo 'Data harus di isi semua!!!';
            // jika data yang dimasukan lebih dari 1 atau ada persamaan 
        } elseif (count(array) $connect->query('select username from users where username = "'.$username.'"')->fetch_array()) > 1 {
            echo 'Data sudah ada !';
        } else {
            // jika data yang dimasukan benar
            $input = $connect->query('insert into users (username, email, nama, password) values ('.$username.','.$email.','.$nama.','.password_hash($password, PASSWORD_BCRYPT).')');
            if ($input){
                echo 'Berhasil';
            } else {
                echo 'Gagal';
            }
        }
    }
?>
<body>
<form method="post">
    <input type="text" name="username" autocomplete="off" placeholder="Masukan Username..."/>
    <br/>
    <input type="email" name="email" autocomplete="off" placeholder="Masukan Email..."/>
    <br/>
    <input type="text" name="nama" autocomplete="off" placeholder="Masukan Nama Lengkap..."/>
    <br/>
    <input type="password" name="password" autocomplete="off" placeholder="Masukan Password..."/>
    <br/>
    <button type="submit" name="submit">Register</button>
</form>
</body>