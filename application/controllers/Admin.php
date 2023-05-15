<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->helpers('my_helper');
        // $this->load->library('excel');
        $this->load->library('form_validation');
        $this->load->library('session');
        if ($this->session->userdata('is_login')!=TRUE) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['guru']=$this->Main_model->total('pasien_status', 'Guru', 'periksa');
        $data['siswa']=$this->Main_model->total('pasien_status', 'Siswa', 'periksa');
        $data['karyawan']=$this->Main_model->total('pasien_status', 'Karyawan', 'periksa');
        for ($i = 1; $i <= 12; $i++) {
            $date = sprintf(date('Y') . "-%02d", $i);
            $graph_data[$i]['bulan'] = date("F", strtotime($date));
            $graph_data[$i]['guru'] = $this->Main_model->get_graph($date, 'Guru')->num_rows();
            $graph_data[$i]['siswa'] = $this->Main_model->get_graph($date, 'Siswa')->num_rows();
            $graph_data[$i]['karyawan'] = $this->Main_model->get_graph($date, 'Karyawan')->num_rows();
        }
    
        $data['graph_data'] = $graph_data;
        $data['periksa']=$this->Main_model->get('periksa')->result();
        $this->load->view('dashboard/dashboard', $data);
    }
}