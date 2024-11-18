<h3>Operator</h3>
<?= anchor('operator/tambah', 'Tambah Data', array('class'=>'btn btn-primary btn-sm')) ?>
<br><br>
<table class="table table-border">
    <tr>
        <th>No</th> 
        <th>Nama Lengkap</th> 
        <th>Username</th> 
        <th>Terakhir Login</th> 
        <th colspan="2">Operasi</th>
    </tr>
<?php
$no = 1;
foreach($record as $r){
    echo "<tr>
    <td>$no</td>
    <td>$r->nama_lengkap</td>
    <td>$r->username</td>
    <td>$r->last_login</td>
    <td>". anchor('operator/edit/'.$r->operator_id, 'Edit') ."</td>
    <td>". anchor('operator/delete/'.$r->operator_id, 'Delete', ['onclick' => "return confirm('Apakah Anda yakin ingin menghapus data ini?')"]) ."</td>
    </tr>" ;
    $no++;
}

?>
</table>