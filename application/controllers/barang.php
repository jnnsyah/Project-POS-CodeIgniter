<?php
class Barang extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('model_barang');
        chek_session();
    }

    function index(){
        $data['record'] = $this->model_barang->tampilan_data()->result();
        $this->template->load('template', 'Barang/lihat_data', $data);
    }

    function tambah() {
        if(isset($_POST['submit'])) {
            //Inisiasi data
            $nama = $this->input->post('barang');
            $kategori = $this->input->post('kategori');
            $harga = $this->input->post('harga');
            $data = array('nama_barang'=>$nama, 
                            'kategori_id'=>$kategori, 
                            'harga'=>$harga);
            $this->model_barang->tambah($data);
           redirect('barang');
        }else {
            $this->load->model('model_kategori');
            $data['kategori'] = $this->model_kategori->tampilan_data()->result();
            $this->template->load('template', 'Barang/form_input', $data);
        }
    }

    function edit(){
        if (isset($_POST['submit'])) {
            // Data baru dari form input
                //Menambahkan ke database
               $this->model_barang->edit();
               redirect('barang');
            }else {
                $this->load->model('model_kategori');
                $data['kategori'] = $this->model_kategori->tampilan_data()->result();
            $id = $this->uri->segment(3);
            $data['record'] = $this->model_barang->get_by_id($id)->row_array();
            $this->load->view('Barang/form_edit', $data);
        }
    }

    function delete(){
        $id = $this->uri->segment(3);
        $this->model_barang->delete($id);
        redirect('barang');
    }
}

?>