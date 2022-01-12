<?php

    include "koneksi.php";
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username'");
        $data = mysqli_fetch_array($query);

        if(mysqli_num_rows($query) == 1){
            if(password_verify($password, $data['password'])){
                //Login Berhasil!
                session_start();
                $_SESSION['login'] = true;
                header('location:crud.php');
            }else{
                //Password Salah!
                header('location:login.php?pesan=Password salah!');
            }
        }else{
            //Username salah!
            header('location:login.php?pesan=Username salah!');
        }
    }
?>