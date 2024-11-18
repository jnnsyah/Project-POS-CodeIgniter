<h3>Update Data Kategori</h3>
<?= form_open('kategori/edit') ?>
<input type="hidden" name="id" placeholder="kategori" 
                    value="<?= $record['kategori_id']?>">
<table class="table tableborder">
    <tr>
        <td width="150">Nama Kategori</td>
        <td ><input type="text" name="kategori" placeholder="kategori" 
                    value="<?= $record['nama_kategori']?>"></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button></td>
    </tr>
</table>