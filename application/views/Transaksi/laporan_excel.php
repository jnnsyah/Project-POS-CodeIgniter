<h3>Laporan Transaksi</h3>
<br>
<table border="1">
    <tr class="success">
        <th width="45">No</th>
        <th width="160">Tanggal Transaksi</th>
        <th>Operator</th>
        <th>Total Transaksi</th>
    </tr>
    <tr>
        <?php
        $no = 1;
        $total = 0;
        foreach($record->result() as $id){
            echo "<tr>
            <td>$no</td>
            <td>$id->tanggal_transaksi</td>
            <td>$id->nama_lengkap</td>
            <td>$id->total</td>
            </tr>";
            $no++;
            $total = $total+$id->total;
        }
        ?>
    
    <tr>
        <td colspan="3"><p align="center">Total</p></td>
        <td><?= $total ?></td>
    </tr>
</table>