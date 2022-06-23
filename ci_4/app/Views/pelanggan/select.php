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


    <div class="col">
        <h3> <?= $judul ?></h3>
    </div>
</div>

<div class="row mt-3">


    <div class="col">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Email</th>
                <th>Aksi</th>
                <th>Status</th>
            </tr>
            <?php $no ?>
            <?php foreach ($pelanggan as $keyfarrel => $value) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['pelanggan'] ?></td>
                    <td><?= $value['alamat'] ?></td>
                    <td><?= $value['telp'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td> 
                        <a href="<?= base_url() ?>/admin/pelanggan/delete/<?= $value['id_pelanggan'] ?>"><img src="<?= base_url('/icon/trash.svg') ?>"></a>
                    </td>
                    <?php
                    if ($value['aktif']==1) {
                        $aktif="AKTIF";
                    } else {
                        $aktif="NON-AKTIF";
                    }
                    
                    ?>
                    <td> 
                        <a href="<?= base_url() ?>/admin/pelanggan/update/<?= $value['id_pelanggan'] ?>/<?= $value['aktif'] ?>"><?= $aktif?></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <?= $pager->links('page', 'bootstrap') ?>
    </div>
</div>


<?= $this->endSection() ?>