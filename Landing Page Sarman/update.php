<?php

    include "koneksi.php";
    if(isset($_POST['btn'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $kategori = $_POST['kategori'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $foto = $_POST['foto'];

        $query = "UPDATE tb_rekrut SET username='$username',
        email='$email',kategori='$kategori',
        jurusan='$jurusan',foto='$foto' WHERE id='$id'";

        $sql = mysqli_query($koneksi, $query);
        if($sql){
            echo "
            <script>
                alert('Data berhasil diupdate!');
                window.location.href='crud.php';
            </script>
        ";
        }
    }

?>