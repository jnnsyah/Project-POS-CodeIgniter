<?php
class Operator extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_operator');
        chek_session();
    }

    function index(){
        $data['record'] = $this->model_operator->tampilan_data()->result();
        $this->template->load('template', 'Operator/lihat_data', $data);
    }

    function tambah(){
        if(isset($_POST['submit'])) {
            //Menambahkan ke database
           $this->model_operator->tambah();
           redirect('operator');
        }else {
            $this->template->load('template','operator/form_input');
        }
    }

    function edit(){
        if (isset($_POST['submit'])) {
            // Data baru dari form input
                //Menambahkan ke database
               $this->model_operator->edit();
               redirect('operator');
            }else {
            $id = $this->uri->segment(3);
            $data['record'] = $this->model_operator->get_by_id($id)->row_array();
            $this->template->load('template', 'operator/form_edit', $data);
        }
    }

    function delete(){
        $id = $this->uri->segment(3);
        $this->model_operator->delete($id);
        redirect('operator');
    }
    
}
?>