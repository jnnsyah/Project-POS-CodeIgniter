<?php
class Kategori extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('model_kategori');
        chek_session();
    }

    function index(){
        $data['record'] = $this->model_kategori->tampilan_data()->result();
        //$this->load->view('Kategori/lihat_data', $data);
        $this->template->load('template', 'Kategori/lihat_data', $data);
    }

    function tambah(){
        if(isset($_POST['submit'])) {
            //Menambahkan ke database
           $this->model_kategori->tambah();
           redirect('kategori');
        }else {
            //$this->load->view('kategori/form_input');
            $this->template->load('template', 'Kategori/form_input');

        }
    }


    function edit(){
        if (isset($_POST['submit'])) {
            // Data baru dari form input
                //Menambahkan ke database
               $this->model_kategori->edit();
               redirect('kategori');
            }else {
            $id = $this->uri->segment(3);
            $data['record'] = $this->model_kategori->get_by_id($id)->row_array();
            $this->template->load('template', 'kategori/form_edit', $data);
        }
    }

    function delete(){
        $id = $this->uri->segment(3);
        $this->model_kategori->delete($id);
        redirect('kategori');
    }
}
