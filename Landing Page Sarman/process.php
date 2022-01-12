<?php

    include "koneksi.php";
    if(isset($_POST['btn'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $kategori = $_POST['kategori'];
        $jurusan = $_POST['jurusan'];
        $foto = $_POST['foto'];

        $query = "INSERT INTO tb_rekrut VALUES ('','$username','$email','$kategori','$jurusan','$foto')";
        $sql = mysqli_query($koneksi, $query);

        if($sql){
            echo "
            <script>
                alert('Data Berhasil Diinputkan!');
                window.location.href='crud.php';
            </script>
        ";
        }
    }

?>