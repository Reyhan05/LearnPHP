<!DOCTYPE html>
<?php
    require_once 'koneksi.php';
    //untuk mengirim data ke table users
    if (isset($_POST['submit'])){
       $username = strip_tags($_POST['username']);
       $email = strip_tags($_POST['email']);
       $nama = strip_tags($_POST['nama']);
       $password = strip_tags($_POST['password']);

       //membuat sebuah validasi
       if (empty($username) || empty($email) || empty($nama) || empty($password)) {
         echo '';
         //jika data yang dimasukkan lebih dari 1 atau ada persamaan request
       } elseif (count((array) $connect->query('select username from users where username = "'.$username.'"')->fetch_array()) > 1){
        echo 'data sudah ada !';
        //input data ke database
       } else {
        $hashing = md5($password);
        $input = $connect->query("insert into users(nama,username,email,password) values ('$nama','$username','$email','$hashing')");
        if ($input){
            echo 'sukses';
            header('location: login.php');
        } else {
            echo 'gagal maning';
        }
       }
    }
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body>
    <style>
        .gradient-custom-3 {
            /* fallback for old browsers */
            background: #84fab0;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
        }

        .gradient-custom-4 {
            /* fallback for old browsers */
            background: #84fab0;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
        }
    </style>
    <section>
        <section class="vh-100 bg-image"
            style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                    <form method="post">
                                        <div class="form-outline mb-4">
                                            <input class="form-control form-control-lg" type="text" name="username"
                                                autocomplete="off" placeholder="isi username.." />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                autocomplete="off" placeholder="isi email.." />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input class="form-control form-control-lg" type="text" name="nama"
                                                autocomplete="off" placeholder="isi nama lengkap.." />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                autocomplete="off" placeholder="isi password.." />
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3cg" />
                                            <label class="form-check-label" for="form2Example3g">
                                                I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                        service</u></a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <button type="submit" name="submit"
                                                class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                        </div>

                                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                                href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>