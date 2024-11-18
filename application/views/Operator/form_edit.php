<h3>Update Data Kategori</h3>
<?= form_open('operator/edit') ?>
<input type="hidden" name="id" placeholder="kategori" 
                    value="<?= $record['operator_id']?>">
<table class="table table-border">
    <tr>
        <td width="150">Nama Lengkap</td>
        <td><input type="text" name="nama" placeholder="Nama Lengkap" 
                    value="<?= $record['nama_lengkap']?>"></td>
    </tr>
    <tr>
        <td>username</td>
        <td><input type="text" name="username" placeholder="username" 
                    value="<?= $record['username']?>"></td>
    </tr>
    <tr>
        <td>password</td>
        <td><input type="password" name="password" placeholder="password" ></td>
    </tr>
    <tr>
        <td colspan="2"><button class="btn btn-primary btn-sm" type="submit" name="submit">Update</button>
        <?= anchor('operator', 'kembali', array('class'=>'btn btn-danger btn-sm')) ?></td>
    </tr>
</table>