<?php
    include "koneksi.php";
    $qry_hapus=mysqli_query($conn,"delete from detail_transaksi");
    $qry_hapus_transaksi=mysqli_query($conn,"delete from transaksi");
    $AI_transaksi=mysqli_query($conn,"alter table transaksi auto_increment = 1");
    $AI_detail_transaksi=mysqli_query($conn,"alter table detail_transaksi auto_increment = 1");
    if($qry_hapus and $qry_hapus_transaksi and $AI_transaksi and $AI_detail_transaksi){
        echo "<script>alert('Sukses hapus transaksi');location.href='pesan.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus transaksi');location.href='transaksi.php';</script>";
    }
?>
