<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = "DELETE FROM tb_rekrut WHERE id='$id'";
    $sql = mysqli_query($koneksi, $query);
    if($sql){
        echo "
        <script>
            alert('Data Berhasil Dihapus!');
            window.location.href='crud.php';
        </script>
    ";
    }

?>