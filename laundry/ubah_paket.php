<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "header.php";
    include "koneksi.php";
    $qry_get_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
    $dt_paket=mysqli_fetch_array($qry_get_paket);
    ?>
    <br>
    <ul>
    <h3>
    <small class="display-6">PERUBAHAN DATA PAKET LAUNDRY</small>
    </h3>
    <br>
    <form action="proses_ubah_paket.php" method="post">
        <input type="hidden" name="id_paket" value= "<?=$dt_paket['id_paket']?>">
        
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
    <label name="harga" class="col-sm-2 col-form-label">Harga :</label>
    <div class="col-sm-10">
    <input type="text" name="harga" value=   "  "class="form-control">
    </div>
  </div>
  
<br>
<br>
<input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
</ul>
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
