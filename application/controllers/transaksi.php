<?php
class Transaksi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_transaksi');
        $this->load->model('model_barang');
        chek_session();
    }

    function index(){
        if(isset($_POST['submit'])) 
        {
            $this->model_transaksi->simpan_barang();
            redirect('transaksi');
        }else {
            $data['barang'] = $this->model_barang->tampilan_data();
            $data['detail'] = $this->model_transaksi->tampilan_detail_transaksi();
            $this->template->load('template', 'Transaksi/form_transaksi', $data);
        }
    }


    function hapus_item(){
        $id = $this->uri->segment(3);
        $this->model_transaksi->hapus_item($id);
        redirect('transaksi');
    }

    function selesai_belanja(){
        $tanggal = date('Y-m-d');
        $user = $this->session->userdata('username');
        $id_op = $this->model_transaksi->get_operator($user);
        $data = array('operator_id'=>$id_op, 'tanggal_transaksi'=>$tanggal);
        $this->model_transaksi->selesai_belanja($data);
        redirect('transaksi');
    }

    function laporan() {
        if(isset($_POST['submit']))
        {
            $awal = $this->input->post('awal');
            $akhir = $this->input->post('akhir');
            $data['record'] = $this->model_transaksi->laporan_periode($awal, $akhir);
            $this->template->load('template', 'transaksi/laporan', $data);
        }else{
            $data['record'] = $this->model_transaksi->laporan_default();
            $this->template->load('template', 'transaksi/laporan', $data);
        }
    }


    function excel(){
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=laporan_transaksi.xls");
        $data['record'] = $this->model_transaksi->laporan_default();
        $this->load->view('transaksi/laporan_excel', $data);
    }
}