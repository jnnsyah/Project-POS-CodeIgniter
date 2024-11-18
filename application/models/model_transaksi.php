<?php
class Model_transaksi extends CI_Model{
    
    function simpan_barang(): void{
        $nama_barang = $this->input->post('barang');
        $qty         = $this->input->post('qty');
        $id_barang   = $this->db->get_where('barang', array('nama_barang'=>$nama_barang))->row_array();

        //Kalo barangnya ga ada 
        if (!$id_barang) {
            $this->session->set_userdata('error', 'Barang yang Anda masukkan tidak ada.');
            redirect('transaksi');  // Ganti dengan halaman yang sesuai
            return;
        }
        

        $data        = array('barang_id'=>$id_barang['barang_id'], 
                        'qty'=>$qty, 
                        'harga'=>$id_barang['harga'], 
                        'status'=>'0');
        $this->db->insert('transaksi_detail', $data);
    }

    function tampilan_detail_transaksi(){
        $query = "SELECT td.t_detail_id, td.harga, td.qty, b.nama_barang
                    FROM `transaksi_detail` as td,barang as b 
                    WHERE b.barang_id=td.barang_id AND status='0'";
        return $this->db->query($query);
    }

    function hapus_item($id){
        $this->db->where('t_detail_id', $id);
        $this->db->delete('transaksi_detail');
    }

    function get_operator($user) {
            $operator = $this->db->get_where('operator', array('username'=>$user))->row_array();
            return $operator['operator_id'];
        }

    function selesai_belanja($data){
        $this->db->insert('transaksi', $data);
        $last_id = $this->db->query('select transaksi_id from transaksi order by transaksi_id desc')->row_array();
        $this->db->query("update transaksi_detail set transaksi_id='".$last_id['transaksi_id']."' where status='0'");
        $this->db->query("update transaksi_detail set status='1' where status='0'");

    }

    function laporan_default() {
        $query = "SELECT t.tanggal_transaksi, o.nama_lengkap, sum(td.harga*td.qty) as total FROM transaksi as t, transaksi_detail as td, operator as o WHERE td.transaksi_id=t.transaksi_id and o.operator_id=t.operator_id group by t.transaksi_id";
        return $this->db->query($query);
    }
    
    function laporan_periode($awal, $akhir) {
        $query = "SELECT t.tanggal_transaksi, o.nama_lengkap, sum(td.harga*td.qty) as total FROM transaksi as t, transaksi_detail as td, operator as o WHERE td.transaksi_id=t.transaksi_id and o.operator_id=t.operator_id and t.tanggal_transaksi BETWEEN '".$awal."'AND '".$akhir."' group by t.transaksi_id";
        return $this->db->query($query);
    }

}
?>