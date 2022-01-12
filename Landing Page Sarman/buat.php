<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/login.css">
    <title>Buat Akun</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center theme-colors-dark">
                        <p>Mulai Karirmu,</p>
                        <p>Ayo, Daftar JoobSeeker!</p>
                    </div>
                    <form action="" method="post">
                        <div class="card-body">
                            <label for="username" class="form-label"><h5>Username</h5></label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="username" name="username" 
                                required placeholder="Masukan Username" aria-describedby="basic-addon3">
                            </div>
                            <label for="password" class="form-label"><h5>Password</h5></label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                                </svg>
                                </span>
                                <input type="password" class="form-control" id="password" name="password" 
                                required placeholder="Masukan Kata Sandi" aria-describedby="basic-addon3">
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="btn btn-primary" name="buat">Register</button>
                            </div>
                            <div class="text-center">
                                Sudah punya akun JoobSeeker? <a href="login.php">Masuk</a>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>

<?php
    
    include "koneksi.php";
    if(isset($_POST ['buat'])){
        $username = $_POST['username'];
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

        $query = mysqli_query($koneksi,"INSERT INTO tb_user VALUES ('$username','$password')");

        if($query){
            echo "
                <script>
                    alert ('Daftar akun Success!');
                    window.location.href='login.php';
                </script>
            ";
        }

    }

?>