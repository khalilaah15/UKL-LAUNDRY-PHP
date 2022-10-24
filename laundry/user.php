<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>User Laundry</title>
</head>
<body>
<?php 
    include "header.php";
    ?>

<div class="banner-wrapper bg-light">

    <ul>
    <br>
    <h3>
    <small class="display-6">DATA USER LAUNDRY</small>
    </h3>

    <br>
    <table class="table table-primary table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA USER</th>
                <th>USERNAME</th>
                <th>DIVISI</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_user=mysqli_query($conn,"select * from user");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
                $role='';
                if ($data_user['role']=='admin')
                {
                    $role='<span class="badge bg-danger">Admin</span>';
                }
                else if ($data_user['role']=='kasir')
                {
                    $role='<span class="badge bg-primary">Kasir</span>
                    ';
                }
                else if ($data_user['role']=='owner')
                {
                    $role='<span class="badge bg-success">Owner</span>
                    ';
                }
            $no++;?>
            <tr>              
            <td><?=$no?></td>
            <td><?=$data_user['nama_user']?></td>
            <td><?=$data_user['username']?></td>
            <td><?=$role?></td>
            <td><a href="ubah_user.php?id_user=<?=$data_user['id_user']?>" class="btn btn-warning">Ubah</a> | <a href="hapus_user.php?id_user=<?=$data_user['id_user']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td> 
            </tr>
            </ul>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href ="tambah_user.php" button class="btn btn-primary me-md-2" type="button">Tambah User</button>
</body>
</html>
