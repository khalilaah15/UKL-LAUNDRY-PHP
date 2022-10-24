<?php
include "header.php";
?>
<br>
<ul>
    <br>
    <h3>
    <small class="display-6">DATA PESANAN LAUNDRY</small>
    </h3>
    <br>
    <br>
    <div class="row">
        <?php
        include "koneksi.php";
        $qry_paket = mysqli_query($conn, "select * from paket");
        while ($dt_paket = mysqli_fetch_array($qry_paket)) {
        ?>

            <br>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="proses_tambah_keranjang.php">
                            <h5 class="card-title"><?= $dt_paket['jenis'] ?></h5>
                            <br>
                            <tr>
                                <td>Jumlah Pesan</td>
                                <td><input type="number" name="jumlah_pesan" value="0"></td>
                            </tr>
                            <br>
                            <br>
                            <br>
                            <h6 class="card-text">Rp.<?= substr($dt_paket['harga'], 0, 500) ?></h6>
                            <br>

                            <input type="hidden" name="id_paket" value="<?= $dt_paket['id_paket'] ?>">
                            <input class="btn btn-primary" type="submit" value="Pilih">
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>


    <br>
    <hr>
    <h3>
    <small class="display-6">Pesanan Laundry</small>
    </h3>
    <br>
    <div class="row">
        <div class="col-md-8">
            <form action="histori_pembelian.php?id_paket=<?= $dt_paket['id_paket'] ?>" method="post">
                <table class="table table-secondary table-striped">
                    <thead>
                        <tr>
                            <th>Paket</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Sub Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        if (isset ($_SESSION ['cart'])){
                        foreach ($_SESSION['cart'] as $index => $value) {
                            $subtotal = $value['qty'] * $value['harga'];
                            $total += $subtotal;
                        ?>
                            <tr>
                                <td><?= $value['jenis'] ?></td>
                                <td><?= $value['harga'] ?></td>
                                <td><?= $value['qty'] ?></td>
                                <td><?= $subtotal ?></td>
                                <td><a href="hapus_jenis.php?id=<?= $index ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><strong>Hapus</strong></a></td>
                            </tr>
                        <?php
                        }
                        }
                        ?>

                        <tr>
                            <td colspan="3">Total</td>
                            <td><?= $total ?></td>
                            <td colspan="4">
                        </tr>

                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <div class="card-body">
        <form action="checkout.php" method="post">
            <div class="mb-3">
                <legend class="col-form-label col-sm-2 pt-0"> Nama Pemesan : </legend>
                <select name="id_member" class="form-control">
                    <?php
                    //get data member untuk dropdown
                    $get_member = mysqli_query($conn, "SELECT * FROM member");
                    while ($dt = mysqli_fetch_array($get_member)) {
                        echo "<option value='" . $dt['id_member'] . "'>" . $dt['nama_member'] . "</option>";
                    }
                    ?>
                </select>
                <br>
                <input class="btn btn-secondary me-md-2" type="submit" value="Checkout">
            </div>
        </form>
    </div>