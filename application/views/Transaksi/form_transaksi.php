<h3>Form Transaksi</h3>
<?= form_open('transaksi') ?>

<table class="table table-bordered">
    <tr class="success"><th>Form</th></tr>
    <tr>
        <td>
            <div class="col-sm-6">
                <input list="barang" name="barang" placeholder="Masukan nama barang" class="form-control">
            </div>
            <div class="col-sm-2">
                <input type="text" name="qty" placeholder="QTY" class="form-control">
            </div>
        </td>
    </tr>

    <tr>
        <td>
            <button type="submit" name="submit" class="btn btn-default">Simpan</button>
            <?= anchor('transaksi/selesai_belanja', 'Selesai', array('class' => 'btn btn-default')) ?>
        </td>
    </tr>
</table>
<!-- <?= form_close() ?> -->
<table class="table table-bordered">
    <tr class="success">
        <th colspan="6">Detail Transaksi</th>
    </tr>
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Harga</th>
        <th>Subtotal</th>
        <th>Cancel</th>
    </tr>
    <?php
    $no = 1;
    $total =0;
    foreach($detail->result() as $id){
        echo"<tr>
                <td>$no</td>
                <td>$id->nama_barang</td>
                <td>$id->qty</td>
                <td>$id->harga</td>
                <td>".$id->qty*$id->harga."</td>
                <td>".anchor('transaksi/hapus_item/'.$id->t_detail_id.'', 'Hapus', ['onclick' => "return confirm('Apakah Anda yakin ingin menghapus data ini?')"])."</td>
            </tr>";
            $total += $id->qty*$id->harga;
    $no++;
    }
    ?>
    <tr>
        <td colspan="5"><p align="right">Total</p></td>
        <td><?= $total ?></td>
    </tr>

</table>

<?php if ($this->session->userdata('error')): ?>
    <div class="alert alert-danger">
        <?php echo $this->session->userdata('error'); ?>
    </div>
    <?php $this->session->unset_userdata('error'); ?> <!-- Menghapus setelah ditampilkan -->
<?php endif; ?>

<datalist id="barang">
    <?php foreach($barang->result() as $id) {
        echo "<option value='$id->nama_barang'></option>";
    }
    ?>
</datalist>
