<?php

function is_logged_in() {
    $ci = get_instance();
    // jika tidak ditemukan session yang sesuia maka di tolak

    if ( !$ci->session->userdata('username') ) {
        redirect('login');
    }
    
}