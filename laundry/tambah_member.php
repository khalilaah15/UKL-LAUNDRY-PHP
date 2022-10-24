<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Member</title>
</head>
<body>
<?php 
    include "header.php";
    ?>
    <br>
    <ul>
    <h3>
    <small class="display-6">PERUBAHAN DATA MEMBER LAUNDRY</small>
    </h3>
    <form action="proses_tambah_member.php" method="post">
        <br>
        <ul>
            <ul>
    <div class="row mb-3">
    <label name="nama_member" class="col-sm-2 col-form-label">Nama Member</label>
    <div class="col-sm-10">
    <input type="text" name="nama_member" value=   "  "class="form-control">
    </div>
  </div>

  <div class="row mb-3">
    <label name="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
    <input type="text" name="alamat" value=   "  "class="form-control">
    </div>
  </div>

  <div class="row mb-3">
    <label name="telepon" class="col-sm-2 col-form-label">Telepon</label>
    <div class="col-sm-10">
    <input type="text" name="telepon" value=   "  "class="form-control">
    </div>
  </div>

  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Kota</label>
    <div class="col-sm-10">
    <input type="text" name="kota" class="form-control">
    </div>
  </div>

  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
    <div class="col-sm-10">
    <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-Laki">Laki-Laki</option>
        </div>
    </div>
  </fieldset>      
  
        <input type="submit" name="simpan" value="Tambah User" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
