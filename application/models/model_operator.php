<?php
class model_operator extends CI_Model {


    function login ($username, $password) {
        $chek= $this->db->get_where('operator', array('username'=>$username, 'password'=> $password));
        if($chek->num_rows()>0) {
            return 1;
        } else {
            return 0;
        }
    }

    function tampilan_data(){
        return $this->db->get('operator');
    }

    function tambah() {
        $data = array('nama_lengkap' => $this->input->post('nama'),
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password'));
        $this->db->insert('operator',$data);
    }

    function get_by_id($id) {
        $param = array('operator_id'=>$id);
        return $this->db->get_where('operator', $param);
    }

    function edit() {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if(empty($password)) {
            $data = array('nama_lengkap' => $nama,
                            'username' => $username);
        }else {
            $data = array('nama_lengkap' => $nama,
                            'username' => $username,
                            'password' => $password);
        }
        $this->db->where('operator_id', $this->input->post('id'));
        $this->db->update('operator',$data);
    }

    function delete($id) {
        $this->db->where('operator_id', $id);
        $this->db->delete('operator');
    }
    
}
?>  