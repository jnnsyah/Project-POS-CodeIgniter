<h3>Tambah Data Kategori</h3>
<?= form_open('kategori/tambah') ?>
<table class="table tableborder">
    <tr>
        <td width="130">Nama Kategori</td>
        <td><div class="col-sm-5"><input type="text" class="form-control" name="kategori" placeholder="kategori"></td></div>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Tambah Data</button>
    <?= anchor('kategori', 'Kembali', array('class'=>'btn btn-danger btn-sm')) ?>
    </td>
    </tr>
</table>