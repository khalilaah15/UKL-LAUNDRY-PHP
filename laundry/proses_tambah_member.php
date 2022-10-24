<?php
if($_POST){
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $telepon= $_POST['telepon'];
    $kota=$_POST['kota'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    if(empty($nama_member)){
        echo "<script>alert('nama pengguna tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($telepon)){
        echo "<script>alert('telepon tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($jenis_kelamin)){
        echo "<script>alert('Gender tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama_member, alamat, telepon, kota, jenis_kelamin) value ('".$nama_member."','".$alamat."','".$telepon."', '".$kota."', '".$jenis_kelamin."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pengguna');location.href='member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pengguna');location.href='tambah_member.php';</script>";
        }
    }
}
?>
