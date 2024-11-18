<h3>Kategori Barang</h3>
<?= anchor('kategori/tambah', 'Tambah Data', array('class'=>'btn btn-primary btn-sm')) ?>
<br><br>
<table class="table table-border">
    <tr><th>No</th> <th>Nama Kategori</th> <th colspan="2">Operasi</th></tr>
<?php
$no = 1;
foreach($record as $r){
    echo "<tr>
    <td width='10px'>$no</td>
    <td>$r->nama_kategori</td>
    <td width='10px'>". anchor('kategori/edit/'.$r->kategori_id, 'Edit') ."</td>
    <td width='10px'>". anchor('kategori/delete/'.$r->kategori_id, 'Delete', ['onclick' => "return confirm('Apakah Anda yakin ingin menghapus data ini?')"]) ."</td>
    </tr>" ;
    $no++;
}

?>
</table>