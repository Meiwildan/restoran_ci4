<div class="form-group">
<select class="form-control" onchange="this.form.submit()" name="id_kategori" id="id_kategori">
<option value="1">Cari...</option>
<?php foreach($kategori as $keyfarrel => $value) :?>
    <option value="<?= $value['id_kategori']?>"><?= $value['kategori']?></option>
    <?php endforeach; ?>
</select>
</div>