<?php

function tampil_namajenjang_byid($id)
{
 $ci =& get_instance();
 $ci->load->database();
 $result = $ci->db->where('id_jenjang',$id)->get('tabel_jenjang');
  foreach ($result->result() as $c) {
  $stmt= $c->nama_jenjang;
  return $stmt;
  }
}

function tampil_tahunangkatan_byid($id)
{
 $ci =& get_instance();
 $ci->load->database();
 $result = $ci->db->where('id_angkatan',$id)->get('tabel_tahunajaran');
  foreach ($result->result() as $c) {
  $stmt= $c->kd_angkatan;
  return $stmt;
  }
}

function tampil_mapelById($id)
{
 $ci =& get_instance();
 $ci->load->database();
 $result = $ci->db->where('id_mapel',$id)->get('tabel_mapel');
  foreach ($result->result() as $c) {
  $stmt= $c->nama_mapel;
  return $stmt;
  }
}

function tampil_jenismapelById($id)
{
 $ci =& get_instance();
 $ci->load->database();
 $result = $ci->db->where('id_jenismapel',$id)->get('tabel_jenismapel');
  foreach ($result->result() as $c) {
  $stmt= $c->nama_jenismapel;
  return $stmt;
  }
}

function tampil_kelasById($id)
{
 $ci =& get_instance();
 $ci->load->database();
 $result = $ci->db->where('id_kelas',$id)->get('tabel_kelas');
  foreach ($result->result() as $c) {
  $stmt= $c->nama_kelas;
  return $stmt;
  }
}

function tampil_guruById($id)
{
 $ci =& get_instance();
 $ci->load->database();
 $result = $ci->db->where('kode_guru',$id)->get('tabel_guru');
  foreach ($result->result() as $c) {
  $stmt= $c->nama_guru;
  return $stmt;
  }
}

function tampil_rombel_byid($id)
{
 $ci =& get_instance();
 $ci->load->database();
 $result = $ci->db->where('id_rombel',$id)->get('tabel_rombel');
  foreach ($result->result() as $c) {
  $stmt= $c->nama_rombel;
  return $stmt;
  }
}

function tampil_nama_siswa_byid($id)
{
 $ci =& get_instance();
 $ci->load->database();
 $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
  foreach ($result->result() as $c) {
  $stmt= $c->nama;
  return $stmt;
  }
}

// Seleksi Pendaftaran Siswa & Pembagian Kelas
  function tampil_noReg_byIdDaftar($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->no_reg;
    return $stmt;
    }
  }
  function tampil_nama_byIdDaftar($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->nama;
    return $stmt;
    }
  }
  function tampil_namaJenjang_byIdDaftar($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->id_jenjang;
    return $stmt;
    }
  }
  function tampil_tahunajaran_byIdDaftar($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->id_angkatan;
    return $stmt;
    }
  }
  function tampil_jekel_byIdDaftar($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->jekel;
    return $stmt;
    }
  }
  function tampil_tempatlahir_byIdDaftar($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->tempat_lahir;
    return $stmt;
    }
  }
  function tampil_tanggallahir_byIdDaftar($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->tgl_lahir;
    return $stmt;
    }
  }
  function tampil_alamattinggal_byIdDaftar($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->alamat_tinggal;
    return $stmt;
    }
  }

// Data Siswa
  function tampil_jekel_siswa_byid($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->jekel;
    return $stmt;
    }
  }
  function tampil_tempat_lahir_siswa_byid($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->tempat_lahir;
    return $stmt;
    }
  }
  function tampil_tanggal_lahir_siswa_byid($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->tgl_lahir;
    return $stmt;
    }
  }
  function tampil_alamat_siswa_byid($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->alamat_tinggal;
    return $stmt;
    }
  }
  function tampil_agama_siswa_byid($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->agama;
    return $stmt;
    }
  }
  function tampil_wn_siswa_byid($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->wn;
    return $stmt;
    }
  }
  function tampil_nisn_siswa_byid($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->nisn;
    return $stmt;
    }
  }
  function tampil_telepon_siswa_byid($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->telepon;
    return $stmt;
    }
  }
  function tampil_anak_ke_siswa_byid($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->anak_ke;
    return $stmt;
    }
  }
  function tampil_sdr_kandung_siswa_byid($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->sdr_kandung;
    return $stmt;
    }
  }
  function tampil_sdr_angkat_siswa_byid($id)
  {
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('id_daftar',$id)->get('tabel_daftar');
    foreach ($result->result() as $c) {
    $stmt= $c->sdr_angkat;
    return $stmt;
    }
  }
?>
