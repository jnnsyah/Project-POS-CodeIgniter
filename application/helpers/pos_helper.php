<?php

function chek_login(){
    $ci = &get_instance();
    $session = $ci->session->userdata('status_login');
    if($session == 'oke') {
        redirect('kategori');
    }
}

function chek_session(){
    $ci = &get_instance();
    $session = $ci->session->userdata('status_login');
    if($session != 'oke') {
        redirect('auth/login');
    }
}
?>