<?php
class Model_barang extends CI_Model{
    function tampilan_data()
    {
        $query = "SELECT b.barang_id, b.nama_barang, b.harga, kb.nama_kategori
                    FROM `barang` as b,kategori_barang as kb
                    WHERE b.kategori_id=kb.kategori_id";
        return $this->db->query($query);
    }

    function tambah($data) 
    {
        $this->db->insert('barang',$data);
    }

    function get_by_id($id) {
        $param = array('barang_id'=>$id);
        return $this->db->get_where('barang', $param);
    }

    function edit() {
        $data = array('nama_barang' => $this->input->post('nama_barang'),
                        'kategori_id' => $this->input->post('kategori_id'),
                        'harga' => $this->input->post('harga'));
        $this->db->where('barang_id', $this->input->post('id'));
        $this->db->update('barang',$data);
    }

    function delete($id){
        $this->db->where('barang_id', $id);
        $this->db->delete('barang');
    }

}
?>