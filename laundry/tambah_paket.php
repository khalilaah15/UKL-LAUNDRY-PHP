<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Paket</title>
</head>
<body>
<?php 
    include "header.php";
    ?>
    <br>
    <ul>
    <h3>
    <small class="display-6">TAMBAH PAKET LAUNDRY</small>
    </h3>
    <form action="proses_tambah_paket.php" method="post">
        <br>
        <ul>
            <ul>
            <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0"> Jenis Paket : </legend>
            <div class="col-sm-10">
             <select name="jenis" class="form-control">
            <option></option>
            <option value="Kiloan">Kiloan</option>
            <option value="Selimut">Selimut</option>
            <option value="Bed Cover">Bed Cover</option>
            <option value="Kaos">Kaos</option>
            </select>
                </div>
                </fieldset>

        <div class="row mb-3">
    <label name="deskripsi" class="col-sm-2 col-form-label">Deskripsi :</label>
    <div class="col-sm-10">
    <input type="text" name="deskripsi" value=   "  "class="form-control">
    </div>
  </div>

  <div class="row mb-3">
    <label name="harga" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10">
    <input type="text" name="harga" value=   "  "class="form-control">
    </div>
  </div>    
  
        <input type="submit" name="simpan" value="Tambah Paket" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
