<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->helpers('my_helper');
        // $this->load->library('excel');
        $this->load->library('form_validation');
        $this->load->library('session');
        if ($this->session->userdata('is_login')!= TRUE ) {
            redirect(base_url('Login'));
        }
    }
    public function index()
    {
        $data['diagnosa'] = $this->Main_model->get('diagnosa')->result();
        $this->load->view('diagnosa/diagnosa', $data);
    }

    public function diagnosa()
    {
        $data = [
            'judul' => 'admin',
            'page' => 'admin',
            'menu' => 'diagnosa',
            'submenu'=>'',
            'menu_submenu_admin'=>'',
            'menu_admin' => 'admin',
            'submenu_admin'=>'diagnosa'
        ];
        $data['diagnosa'] = $this->Main_model->get('diagnosa')->result();
        $this->load->view('diagnosa/diagnosa', $data);
    }



    public function aksi_tambah_diagnosa()
    {
        $data = array
        (
            'nama' => $this->input->post('name_penyakit'),
        );
        $masuk=$this->Main_model->insert_data($data, 'diagnosa');
        if($masuk)
        {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('Diagnosa/diagnosa'));
        }
        else
        {
            $this->session->set_flashdata('error', 'gagal..');
            redirect(base_url('Diagnosa/diagnosa'));
        }
    }

    // Change data
    public function edit_diagnosa($id_diagnosa)
    {
        $data = [
            'judul' => 'admin',
            'page' => 'admin',
            'menu' => 'diagnosa',
            'submenu'=>''
        ];
        $getwhere=['id'=>$id_diagnosa];
        $data['diagnosa']=$this->Main_model->getwhere($getwhere, 'diagnosa')->result();
        $this->load->view('diagnosa/edit_diagnosa', $data);
    }

    public function update_diagnosa()
    {
        $data =  [
            'nama' => $this->input->post('nama_diagnosa')
        ];
        $logged=$this->Main_model->update_data(array('id'=>$this->input->post('id')), $data, 'diagnosa');
        if($logged)
        {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('diagnosa/diagnosa'));
        }
        else
        {
            $this->session->set_flashdata('error', 'gagal..');
            redirect(base_url('Diagnosa/edit_diagnosa/'.$this->input->post('id')));
        }
    }
    
    public function hapus_diagnosa($id_diagnosa)
    {
        $hapus=$this->Main_model->delete_data( ['id'=>$id_diagnosa], 'diagnosa');
        if($hapus)
        {
            $this->session->set_flashdata('sukses', 'Berhasil..');
            redirect(base_url('Diagnosa/diagnosa'));
        }
        else
        {
            $this->session->set_flashdata('error', 'gagal..');
            redirect(base_url('Diagnosa/diagnosa'));
        }

    }
    }
