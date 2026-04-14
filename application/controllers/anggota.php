<?php
class Anggota extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Anggota_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['anggota'] = $this->Anggota_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('anggota/tambah');
        } else {
            $data = $this->input->post();
            $data['status'] = 'Aktif';
            $this->Anggota_model->insert($data);
            redirect('anggota');
        }
    }

    public function edit($id) {
        $data['anggota'] = $this->Anggota_model->get_by_id($id);

        if ($this->input->post()) {
            $this->Anggota_model->update($id, $this->input->post());
            redirect('anggota');
        }

        $this->load->view('anggota/edit', $data);
    }

    public function hapus($id) {
        $this->Anggota_model->delete($id);
        redirect('anggota');
    }
}