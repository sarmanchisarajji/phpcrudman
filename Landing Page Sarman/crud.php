<?php
 
    include "koneksi.php";

    session_start();
    if(!$_SESSION['login']){
        header('location:login.php');
        exit;
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD JoobSeeker</title>
  </head>
  <body>
        <div class="container">
            <nav class="navbar navbar-light bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand"><b>Data Rekrutmen</b></a>
                    <form class="d-flex">
                        <a href="logout.php"><button class="btn btn-outline btn-danger ms-2" type="button">Logout</button></a>
                    </form>
                </div>
            </nav>

            <figure class="text-center mt-5">
                <blockquote class="blockquote">
                    <p>Daftar Data Yang Telah di Inputkan</p>
                </blockquote>
                <figcaption class="blockquote-footer mt-3">
                    JoobSeeker <cite title="Source Title"></cite>
                </figcaption>
            </figure>
            <a href="olah.php"><button type="button" class="btn btn-info mb-3" style="float: right;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg> Tambah</button>
            </a>
            <table class="table table-hover table-warning table-bordered align-middle">
                <thead class="text-center">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $query= "SELECT * FROM tb_rekrut";
                    $sql= mysqli_query($koneksi,$query);
                    $no=1;
                    while($data = mysqli_fetch_array($sql)){
                    ?>
                        <tr>
                        <th scope="row"><?php echo $no;?></th>
                        <td><?php echo $data ['id']?></td>
                        <td><?php echo $data ['username']?></td>
                        <td><?php echo $data ['email']?></td>
                        <td><?php echo $data ['kategori']?></td>
                        <td><?php echo $data ['jurusan']?></td>
                        <td><?php echo $data ['foto']?></td>
                        <td><a href="edit.php?id=<?php echo $data ['id'];?>"><div class="button btn-outline-primary mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </div> 
                            </a> 
                            <a href="hapus.php?id=<?php echo $data ['id'];?>"><div class="button btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                </svg>
                            </div>
                        </td>
                        </tr>
                    <?php
                        $no++;
                    } ?>
                </tbody>
            </table>
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