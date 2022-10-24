<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Member Laundry</title>
</head>
<body>
<?php 
    include "header.php";
    ?>

<div class="banner-wrapper bg-light">

    <ul>
    <br>
    <h3>
    <small class="display-6">DATA MEMBER LAUNDRY</small>
    </h3>

    <br>
    <table class="table table-primary table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA MEMBER</th>
                <th>ALAMAT</th>
                <th>JENIS KELAMIN</th>
                <th>TELEPON</th>
                <th>KOTA</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($conn,"select * from member");
            $no=0;
            while($data_member=mysqli_fetch_array($qry_member)){
                $gender='';
                if ($data_member['jenis_kelamin']=='Perempuan')
                {
                    $gender='<span class="badge bg-danger">Perempuan</span>';
                }
                if ($data_member['jenis_kelamin']=='Laki-laki')
                {
                    $gender='<span class="badge bg-primary">Laki-Laki</span>';
                }
            $no++;?>
            <tr>              
            <td><?=$no?></td>
            <td><?=$data_member['nama_member']?></td>
            <td><?=$data_member['alamat']?></td>
            <td><?=$gender?></td>
            <td><?=$data_member['telepon']?></td>
            <td><?=$data_member['kota']?></td>
            <td><a href="ubah_member.php?id_member=<?=$data_member['id_member']?>" class="btn btn-warning">Ubah</a> | <a href="hapus_member.php?id_member=<?=$data_member['id_member']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td> 
            </tr>
            </ul>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href ="tambah_member.php" button class="btn btn-primary me-md-2" type="button">Tambah Member</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
