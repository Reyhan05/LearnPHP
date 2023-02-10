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