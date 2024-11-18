<h3>Data Barang</h3>

<?php
echo anchor('barang/tambah', 'Tambah Data', array('class'=>'btn btn-primary btn-sm'));

?>
<br><br>

<table class="table table-border">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Nama Kategori</th>
        <th>Harga</th>
        <th colspan="2" >Operasi</th>
    </tr>
    
    <?php
    $no = 1;
    foreach($record as $r){
        echo "<tr>
        <td>$no</td>
        <td>$r->nama_barang</td>
        <td>$r->nama_kategori</td>
        <td>$r->harga</td>
        <td width='10px'>". anchor('barang/edit/'.$r->barang_id, 'Edit') ."</td>
        <td width='10px'>". anchor('barang/delete/'.$r->barang_id, 'Delete', ['onclick' => "return confirm('Apakah Anda yakin ingin menghapus data ini?')"]) ."</td>
        </tr>" ;
        $no++;
    }

    ?>
    
        

</table>