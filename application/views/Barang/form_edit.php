<h3>Update Data Kategori</h3>
<?= form_open('barang/edit') ?>
<input type="hidden" name="id" placeholder="kategori" 
                    value="<?= $record['barang_id']?>">
<table>
    <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="nama_barang" placeholder="Nama Barang" 
                    value="<?= $record['nama_barang']?>"></td>
    </tr>
    <tr>
        <td>Kategori</td>
        <td><select name="kategori_id">
            <?php
            foreach ($kategori as $k){
                //echo "<option value='$id->kategori_id'>". $id->nama_kategori. "</option>";
                echo "<option value='$k->kategori_id'";
                echo ($record['kategori_id'] == $k->kategori_id) ? ' selected' : '';
                echo ">$k->nama_kategori</option>";
                
                
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input type="text" name="harga" placeholder="harga" 
                    value="<?= $record['harga']?>"></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" name="submit">Update</button></td>
    </tr>
</table>