<?php

class M_nilai extends CI_Model{
    // Dashboard
    public function siswa()
	{
		return $this->db->where('diterima', 'A')->get('tabel_daftar')->result();
	}

// Entry Nilai
    public function get_nilaiBySiswa($tabel, $id_siswa)
    {
        $data = $this->db->where('id_siswa', $id_siswa)->get($tabel)->result();
        return $data;
    }

    public function get_nilaiSiswaperMapel()
    {
        $idm = $this->session->userdata('id_mapel');
        $smt = $this->session->userdata('id_semester');
        $ids = $this->session->userdata('id_siswa');
        $checknilai = array(
            'id_mapel' => $idm,
            'id_siswa' => $ids,
            'id_semester' => $smt
          );
        $data = $this->db->where($checknilai)->get('tabel_nilai')->result();
        return $data;
    }

    public function entry($idr)
    {
        $this->db->select('tabel_daftar.nama, tabel_siswa.*');
        $this->db->from('tabel_siswa');
        $this->db->join('tabel_daftar', 'tabel_daftar.id_daftar = tabel_siswa.id_daftar');
        $this->db->join('tabel_kelas', 'tabel_kelas.id_kelas = tabel_siswa.id_kelas');
        $this->db->where('tabel_siswa.id_kelas', $idr);
        $db = $this->db->get();
        return $db;
    }

    public function mapel($idm)
    {
        $this->db->select('tabel_mapel.nama_mapel, tabel_nilai.*');
        $this->db->from('tabel_nilai');
        $this->db->join('tabel_mapel', 'tabel_mapel.id_mapel = tabel_nilai.id_mapel');
        $this->db->where('tabel_nilai.id_mapel', $idm);
        $db = $this->db->get();
        return $db;
    }

	public function cek_wali()
	{
		$ses_id = $this->session->userdata('kode_guru');
		$db = $this->db->get_where('tabel_kelas', array('kode_guru' => $ses_id));
		return $db; 
	}

	public function get_kelas_raport()
	{
		$this->db->select('tabel_kelas.*, tabel_tingkat.nama_tingkat, (SELECT COUNT(*) as jml FROM tabel_siswa where id_kelas=tabel_kelas.id_kelas) as jml');
		$this->db->from('tabel_kelas');
		$this->db->join('tabel_tingkat', 'tabel_tingkat.id_tingkat = tabel_kelas.id_tingkat');
		$this->db->where('tabel_kelas.kode_guru', $this->session->userdata('kode_guru'));
		$db = $this->db->get();
		return $db;
	}

	public function entrynew($idr) 
	{	
		$this->db->select('tabel_daftar.nama, tabel_siswa.*');
		$this->db->from('tabel_siswa');
		$this->db->join('tabel_daftar', 'tabel_daftar.id_daftar = tabel_siswa.id_daftar');
		$this->db->join('tabel_kelas', 'tabel_kelas.id_kelas = tabel_siswa.id_kelas');
		$this->db->where('tabel_siswa.id_kelas', $idr);
		$db = $this->db->get();
		return $db;		
	}

    public function mapelByid($idm)
    {
        $data = $this->db->where('id_mapel', $idm)->get('tabel_mapel');
        return $data;
    }

	public function cek_nilai($ids)
	{
		$ses_ids = $this->session->userdata('id_siswa');
		$db = $this->db->get_where('tabel_nilai', array('id_siswa' => $ses_ids));
		return $db; 
	}

    public function edit_nilai($tabel, $data, $where)
    {
        $data=$this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }

    public function kelas($idr)
    {
        // $this->db->select('tabel_kelas.nama_kelas, tabel_siswa.*');
        // $this->db->from('tabel_siswa');
        // $this->db->join('tabel_kelas', 'tabel_kelas.id_kelas = tabel_siswa.id_kelas');
        // $this->db->join('tabel_kelas', 'tabel_kelas.id_kelas = tabel_siswa.id_kelas');
        // $this->db->where('tabel_siswa.id_kelas', $idr);
        // $db = $this->db->get();
        // return $db;
        $data = $this->db->where('id_kelas', $idr)->get('tabel_kelas');
        return $data;
    }

	public function nps($ids, $idr, $smt)
	{
		$this->db->select('tabel_mapel.nama_mapel, tabel_nilai.nar');
		$this->db->from('tabel_nilai');
		$this->db->join('tabel_mapel', 'tabel_nilai.id_mapel = tabel_mapel.id_mapel');
		$this->db->where('tabel_nilai.id_siswa', $ids);
		$this->db->where('tabel_nilai.id_kelas', $idr);
		$this->db->where('tabel_nilai.id_semester', $smt);
		$db = $this->db->get();
		return $db;
	}

	public function get_n($ids)
	{
		$this->db->select('tabel_daftar.nama');
		$this->db->from('tabel_siswa');
		$this->db->join('tabel_daftar', 'tabel_daftar.id_daftar = tabel_siswa.id_daftar');
		$this->db->where('tabel_siswa.id_siswa', $ids);
		$db = $this->db->get();
		return $db;	
	}

	public function get_r($idr)
	{
		return $this->db->get_where('tabel_kelas', array('id_kelas' => $idr));
	}

    public function semester($smt)
    {
        $data = $this->db->where('id_semester', $smt)->get('tabel_semester');
        return $data;
    }

    public function tambah_nilai($tabel, $data)
	{
		$this->db->insert($tabel, $data);
		return $this->db->insert_id();
    }
    
    public function data_nilai($ampl)
    {
        $this->db->select('tabel_kelas.nama_kelas, tabel_alokasimapel.*');
        $this->db->from('tabel_alokasimapel');
        $this->db->join('tabel_kelas', 'tabel_kelas.id_kelas = tabel_alokasimapel.id_kelas');
        $this->db->join('tabel_mapel', 'tabel_mapel.id_mapel = tabel_alokasimapel.id_mapel');
        $this->db->where('tabel_alokasimapel.id_mapel', $ampl);
        $db = $this->db->get();
        return $db;
    }

// Modul Data Siswa
    public function get_data_nilai($id_mapel, $id_kelas, $id_semester)
    {
        $multiClause = array('id_mapel' => $id_mapel,'id_kelas' => $id_kelas, 'id_semester' => $id_semester);
        $data = $this->db->where($multiClause)->get('tabel_nilai');
        return $data;
    }

    public function get_alokasimapelByIdMapel($id_mapel)
    {
        $multiClause = array('id_mapel' => $id_mapel);
        $data = $this->db->where($multiClause)->get('tabel_alokasimapel');
        return $data;
    }

    public function get_nilaiByid($id_nilai)
    {
        $data = $this->db->where('id_nilai', $id_nilai)->get('tabel_nilai');
        return $data;
    }

    public function get_mapelByid($id_mapel)
    {
        $data = $this->db->where('id_mapel', $id_mapel)->get('tabel_mapel');
        return $data;
    }

    public function get_kelasByid($id_kelas)
    {
        $data = $this->db->where('id_kelas', $id_kelas)->get('tabel_kelas');
        return $data;
    }

    public function get_semesterByid($id_semester)
    {
        $data = $this->db->where('id_semester', $id_semester)->get('tabel_semester');
        return $data;
    }

    // public function get_alokasi_mapel($kode_guru)
    // {
    //     $data = $this->db->where('id_mapel', $id_mapel)->get('tabel_alokasimapel')->result();
    //     return $data;
    // }
    
    // Akun
	public function get_userByLogin($table)
	{
		$data = $this->db->get_where('tabel_level', array('id_level' => $this->session->userdata('id_level')));
		return $data;
	}
    public function edit_data($tabel, $data, $where)
    {
        $data=$this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }
}