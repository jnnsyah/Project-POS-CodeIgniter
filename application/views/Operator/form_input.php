<h3>Tambah Data Operator</h3>
<?= form_open('operator/tambah') ?>
<table class="table table-border">
    <tr>
        <td width="150">Nama Lengkap</td>
        <td><input type="text" name="nama" placeholder="Nama lengkap"></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input type="text" name="username" placeholder="Username"></td>
    </tr>
    <tr>
        <td>password</td>
        <td><input type="password" name="password" placeholder="Password"></td>
    </tr>
    <tr>
        <td colspan="2"><button class="btn btn-primary btn-sm" type="submit" name="submit">Tambah Data</button>
        <?= anchor('operator', 'Kembali', array('class'=>'btn btn-danger btn-sm')) ?></td>
    </tr>
</table>