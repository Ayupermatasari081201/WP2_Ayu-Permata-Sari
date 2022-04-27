<?php
class quiz extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-quiz');
    }
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'kelas' => $this->input->post('kelas'),
            'universitas' => $this->input->post('universitas'),
            'tanggal_lahir' =>$this->input->post('tanggal_lahir'),
            'alamat' =>$this->input->post('alamat'),
        ];
        
        $this->load->view('view-data-quiz', $data);

    }
}