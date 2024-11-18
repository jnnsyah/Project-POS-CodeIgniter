<h3>Tambah Data Barang</h3>
<?= form_open('barang/tambah') ?>
<table class="table table-border">
    <tr>
        <td width="150">Nama Barang</td>
        <td><input type="text" name="barang" placeholder="barang"></td>
    </tr>
    <tr>
        <td>Kategori</td>
        <td><select name="kategori">
            <?php
            foreach ($kategori as $id){
                echo "<option value='$id->kategori_id'>$id->nama_kategori</option>";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input type="text" name="harga" placeholder="harga"></td>
    </tr>
    <tr>
        <td colspan="2">
            <button class="btn btn-primary btn-sm" type="submit" name="submit">Tambah Data</button>
            <?= anchor('kategori', 'Kembali', array('class'=>'btn btn-danger btn-sm')) ?>
        </td>
    </tr>
</table>