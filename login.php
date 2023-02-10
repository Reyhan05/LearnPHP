<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    // memanggil config database
    require_once 'koneksi.php';

    // jika button submit di klik
    if (isset($_POST['submit'])){
       $email = strip_tags($_POST['email']);
       $password = strip_tags($_POST['password']);
    }

    // membuat validasi
    if (empty($email) || empty($password)){
        echo 'data harus di isi !';
    } elseif (count((array) $connect->query('select email from users where email = "'.$email.'"')->fetch_array()) == 0){
        echo 'email tidak terdaftar !';
    } else {
        $user = $connect->query('select email, password from users')->fetch_assoc();
        // jika usernya ada 
        if (password_verify($password, $user['password'])){
            $_SESSION['is_login'] = true;
            $_SESSION['nama'] = $user['nama'];
            header('location: halaman1.php');
        } else {
            echo 'password salah COK !';
        }
    }

    ?>
    <!-- method post untuk mengirim data -->
    <form method="post">
        <input type="email" name="email" placeholder="Masukan Email.."/>
        <br/>
        <input type="password" name="password" placeholder="Masukan Password.."/>
        <br/>
        <button type="submit" name="submit">Login</button>
    </form> 
</body>
</html>