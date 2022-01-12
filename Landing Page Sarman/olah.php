<?php
 
    include "koneksi.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data JoobSeeker</title>
  </head>
  <body>
        <div class="container">
            <nav class="navbar navbar-light bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand"><b>Data Identitas Pelamar</b></a>
                    <form class="d-flex">
                        <a href="logout.php"><button class="btn btn-outline btn-danger ms-2" type="button">Logout</button></a>
                    </form>
                </div>
            </nav>

            <figure class="text-center mt-5">
                <blockquote class="blockquote">
                    <p>Daftar Identitas yang Tersedia</p>
                </blockquote>
                <figcaption class="blockquote-footer mt-3">
                    JoobSeeker <cite title="Source Title"></cite>
                </figcaption>
            </figure>

            <form action="process.php" method="post">
                <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label"><b>Username</b></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label"><b>Email</b></label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kategori" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                    <div class="col-sm-10">
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jurusan" class="col-sm-2 col-form-label"><b>Jurusan</b></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="jurusan" name="jurusan">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="foto" class="col-sm-2 col-form-label"><b>Foto</b></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="foto" name="foto">
                    </div>
                </div>
                <div class="mb-5 row">
                    <button type="submit" class="btn btn-primary" name="btn">Tambah Data</button>
                </div>
            </form>
        </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>