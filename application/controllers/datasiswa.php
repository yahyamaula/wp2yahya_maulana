<?php
class datasiswa extends CI_Controller
{
    
    public function index()
    {
        $this->load->view('view-form-datasiswa');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama','nama siswa','required'
        