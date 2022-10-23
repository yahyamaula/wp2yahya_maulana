<?php
class materi6 extends CI_Controller
{
    public function index()
    {
        $this->load->view('viewform');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required|min_length[2]',
            [
                'required' => "nama Matakuliah Harus diisi",
                'min_lenght' => "nama terlalu pendek"
            ]
        );


        if ($this->form_validation->run() != true) {
            $this->load->view('viewform');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggal' => $this->input->post('tanggal'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'jnk' => $this->input->post('jnk'),
                'agama' => $this->input->post('agama'),
            ];
            $this->load->view('viewdata', $data);
        }
    }
}
