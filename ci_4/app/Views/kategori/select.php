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

    <div class="col-4">
        <a class="btn btn-primary" href="<?= base_url('/admin/kategori/create') ?>" role="button">Tambah Data</a>
    </div>
    <div class="col">
        <h3> <?= $judul ?></h3>
    </div>
</div>

<div class="row mt-3">


    <div class="col">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>keterangan</th>
                <th>Aksi</th>
            </tr>
            <?php $no ?>
            <?php foreach ($kategori as $keyfarrel => $value) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['kategori'] ?></td>
                    <td><?= $value['keterangan'] ?></td>
                    <td> <a href="<?= base_url() ?>/admin/kategori/delete/<?= $value['id_kategori'] ?>"><img src="<?= base_url('/icon/trash.svg') ?>"></a>
                        <a href="<?= base_url() ?>/admin/kategori/find/<?= $value['id_kategori'] ?>"><img src="<?= base_url('/icon/pencil.svg') ?>"></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <?= $pager->links('page', 'bootstrap') ?>
    </div>
</div>


<?= $this->endSection() ?>