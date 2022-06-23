<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col-6">
    <?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        $error = session()->getFlashdata('info');
        foreach ($error as $farrelkey => $value) {
            echo $farrelkey."=>".$value;
            echo "</br>";
        }
        
        echo '</div>';
    }

    ?>
</div>
<div class="col">
    <h3>UPDATE DATA</h3>
</div>
<div class="col-6">
    <form action="<?= base_url('admin/menu/update') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="harga">Kategori</label>
            <select class="form-control" name="id_kategori" id="id_kategori">
                <?php foreach ($kategori as $keyfarrel => $value) : ?>
                    <option <?php if ($value['id_kategori']==$menu['id_kategori']) echo "selected"?>
                    value="<?= $value['id_kategori'] ?>"><?= $value['kategori'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="menu">Menu</label>
            <input class="form-control" type="text" value="<?= $menu['menu'] ?>" name="menu" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input class="form-control" type="text" value="<?= $menu['harga'] ?>" name="harga" required>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input class="form-control" type="file"  name="gambar">
        </div>
        <input class="form-control" type="hidden" value="<?= $menu['gambar'] ?>" name="gambar" required>
        <input class="form-control" type="hidden" value="<?= $menu['id_menu'] ?>" name="id_menu" required>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="simpan" value="SIMPAN">
        </div>
    </form>
</div>

<?= $this->endSection() ?>