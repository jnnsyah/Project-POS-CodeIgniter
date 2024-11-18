<h3>Laporan Transaksi</h3>
<br>
<?= form_open('transaksi/laporan') ?>
<table class="table border-less" >
    <tr style="border: none;">
    <div class="col-sm-4">
        <label for="awal"> Tanggal Awal</label>
        <input type="text" name="awal" class="form-control" placeholder="YYYY-MM-DD">
    </div>
    <div class="col-sm-4">
        <label for="akhir"> Tanggal Akhir</label>
        <input type="text" name="akhir" class="form-control" placeholder="YYYY-MM-DD"> 
    </div>
    </tr>
    <tr>
        <td>
            <button type="submit" name="submit" class="btn btn-primary btn-sm">Proses</button>
        </td>
    </tr>
</table>

<table class="table table-bordered">
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