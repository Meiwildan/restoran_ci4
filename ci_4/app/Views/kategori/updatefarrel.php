<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col-6">
<?php
if (!empty(session()->getFlashdata('info'))) {
    echo '<div class="alert alert-danger" role="alert">';
echo session()->getFlashdata('info');
echo '</div>';
}

?>
</div>

<div class="col">
    <h3>UPDATE DATA</h3>
</div>

<div class="col-6">
    <form action="<?= base_url('admin/kategori/update') ?>" method="post">
        <div class="form-group">
            <label for="Kategori">Kategori</label>
            <input class="form-control" type="text" name="kategori" value="<?= $kategori['kategori'] ?>" required>
        </div>

        <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <input class="form-control" type="text" name="keterangan" value="<?= $kategori['keterangan'] ?>" required>
        </div>
        

        <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori'] ?>">
        
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="simpan" value="SIMPAN">
        </div>
    </form>
</div>

<?= $this->endSection() ?>