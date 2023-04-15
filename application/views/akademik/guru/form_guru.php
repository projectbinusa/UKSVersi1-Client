<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Akademik</title>
    <?php $this->load->view('akademik/style/head')?>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('akademik/style/navbar')?>
        <?php $this->load->view('akademik/style/sidebar')?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Form Guru</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('Akademik/') ?>"><?php echo $this->session->userdata('level') ?></a>
                                </li>
                                <li class="breadcrumb-item active"><a href="<?php echo base_url('Akademik/guru') ?>">Guru</a></li>
                                <li class="breadcrumb-item active">Form Guru</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid bg-white py-4">
                    <form action="<?php echo base_url('Akademik/tambah_guru') ?>" enctype="multipart/form-data"
                        method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Nama Guru</label>
                                    <div class="">
                                        <input type="hidden" name="kode_guru" value="<?php echo $acak?>">
                                        <input type="text" name="nama_guru" class="form-control"
                                            placeholder="Masukan Nama guru">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">No HP</label>
                                    <div class="">
                                        <input type="text" name="no_hp" class="form-control"
                                            placeholder="Masukan No HP">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">No SK</label>
                                    <div class="">
                                        <input type="text" name="no_sk" class="form-control"
                                            placeholder="Masukan No SK">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Jenis Kelamin</label>
                                    <div class="d-flex">
                                        <div class="form-check mr-3">
                                            <input class="form-check-input" value="L" type="radio" name="jekel"
                                                id="laki">
                                            <label class="form-check-label" for="laki">
                                                Laki-Laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" value="P" type="radio" name="jekel"
                                                id="perempuan">
                                            <label class="form-check-label" for="perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Alamat</label>
                                    <div class="">
                                        <textarea name="alamat" class="form-control" cols="88" rows="2" placeholder="Masukan Alamat"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">NIP/Y</label>
                                    <div class="">
                                        <input type="text" name="nip" class="form-control"
                                            placeholder="Masukan NIP/Y">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">NIK</label>
                                    <div class="">
                                        <input type="text" name="nik" class="form-control"
                                            placeholder="Masukan NIK">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Tanggal SK</label>
                                    <div class="">
                                        <input type="date" name="tgl_sk" class="form-control"
                                            placeholder="Masukan Tanggal SK">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">TMT</label>
                                    <div class="">
                                        <input type="date" name="tmt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Jabatan</label>
                                    <div class="">
                                        <select name="" class="form-control select2">
                                            <option>Pilih Jabatan</option>
                                            <option value="TU">TU</option>
                                            <option value="Kesiswaan">Kesiswaan</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <div class="">
                                <button type="submit" class="btn btn-success" style="width: 150px; margin-right: 12px;">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <?php $this->load->view('akademik/style/js')?>
</body>

</html>