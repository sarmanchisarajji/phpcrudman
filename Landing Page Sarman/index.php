<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Sarman Landing Page</title>
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <!-- Membuat Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">JoobSeeker</a>
                <div class="collapse navbar-collapse text-left" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item text-right">
                            <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item text-right">
                            <a class="nav-link active" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row-md-6" style="margin-top: 180px;">
                <img src="gambar/logo3.png" class="rounded float-right">
                <div class="col-md-6">
                    <p class="text">
                        <b>PREPARE YOUR FUTURE</b>
                        <b>
                        <span style="color: #0b486b;">WITH US</span>
                        </b>
                    </p>
                </div>
                <div class="col-md-6" style="font-size: 18px;">
                Belum punya akun? Daftar Sekarang!
                </div>
                <div class="button">
                    <b><button type="button" class="btn btn-outline-info" style="color: black;">
                        <a href="buat.php">Daftar</a></button>
                    </b>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="row footer">
            <div class="col text-center">
              <p>&copy 2021 JoobSeeker <br>
                 All Rights Reserved by Sarman Chisara</p>
            </div>
        </div>
        <!-- endfooter -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>