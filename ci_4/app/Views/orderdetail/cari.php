<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<?php
if (isset($_GET['page_page'])) {
    $page = $_GET['page_page'];
    $jumlah = 3;
    //sesuai dengan paginate
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}
?>
<div class="row">
    <div class="col-12">
        <form action="<?= base_url('admin/orderdetail/cari') ?>" method="post">
            <div class="form-group col-6 float-left">
                <label for="Kategori">Awal</label>
                <input class="form-control" type="date" name="awal" required>
            </div>

            <div class="form-group col-6 float-left">
                <label for="Keterangan">Sampai</label>
                <input class="form-control" type="date" name="sampai" required>
            </div>

            <div class="form-group ml-3">
                <input class="btn btn-primary" type="submit" name="cari" value="CARI">
            </div>
        </form>
    </div>
</div>
<div class="row">

    <div class="col">
        <h3> <?= $judul ?></h3>
    </div>
</div>

<div class="row mt-3">


    <div class="col">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Menu </th>
                <th>Tanggal Order</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            <?php $no ?>
            <?php foreach ($orderdetail as $value) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['menu'] ?></td>
                    <td><?= $value['tgl_order'] ?></td>
                    <td><?= $value['harga'] ?></td>
                    <td><?= $value['jumlah'] ?></td>
                    <td><?= $value['jumlah'] * $value['harga'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

      
    </div>
</div>


<?= $this->endSection() ?>