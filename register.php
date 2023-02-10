<!DOCTYPE html>
<?php
    // Untuk mengirim data ke table user
    if (isset($_POST['submit'])){
        $username = strip_tags($_POST['username']);
        $email = strip_tags($_POST['email']);
        $nama = strip_tags($_POST['nama']);
        $password = strip_tags($_POST['password']);

        
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