<?php
Include "koneksi.php";
$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_ktg WHERE id_ktg ='$id'");

if($hapus){
    echo "<script>alert('Data berhasil dihapus!')</script>";
    header("refresh:0, kategori, kategori.php");
}else{
    echo "<script>altert('Data gagal dihapus!')</script>";
    header("refresh:0, kategori.php");
}
?>