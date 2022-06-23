<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col">
        <h3><?= $judul ?></h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <p>Pelanggan : <?= $order[0]['pelanggan'] ?></p>
    </div>
    <div class="col">
        <p>Tanggal Order : <?= date("d-m-Y", strtotime($order[0]['tgl_order'])) ?></p>
    </div>
    <div class="col">
        <p>Total : <b> <?= number_format($order[0]['total']) ?> </b> </p>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <?php
        if (!empty(session()->getFlashdata('info'))) {
            echo '<div class="alert alert-danger" role="alert">';
            echo session()->getFlashdata('info');
            echo '</div>';
        }
        ?>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <form action="<?= base_url('admin/order/update') ?>" method="post">
            <div class="form-group">
                <label for="Kategori">BAYAR</label>
                <input class="form-control" type="number" name="bayar" required>
            </div>


            <input class="form-control" type="hidden" value="<?= $order[0]['total'] ?>" name="total" required>
            <input class="form-control" type="hidden" value="<?= $order[0]['id_order'] ?>" name="id_order" required>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="simpan" value="SIMPAN">
            </div>
    </div>


    </form>

</div>
<div class="row">
    <div class="col">
        <h2>Rincian Order</h2>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($detail as $value) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['menu'] ?></td>
                    <td><?= $value['hargajual'] ?></td>
                    <td><?= $value['jumlah'] ?></td>
                    <td><?= $value['jumlah'] * $value['hargajual']; ?></td>


                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>




<?= $this->endSection() ?>