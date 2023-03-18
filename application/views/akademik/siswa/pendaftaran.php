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

<body class="hold-transition skin-blue sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php $this->load->view('akademik/style/navbar')?>
        <?php $this->load->view('akademik/style/sidebar')?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Pendaftaran Siswa</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('Akademik/') ?>"><?php echo $this->session->userdata('level') ?></a>
                                </li>
                                <li class="breadcrumb-item active">Pendaftaran</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid bg-white">
                    <div class="row mx-2 pt-3 d-flex justify-content-between">
                        <div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-end align-self-start">
                            <button type="button" data-toggle="modal" data-target="#modal_import_pendaftaran"
                                class="btn btn-success mr-1"><i class="fa fa-upload pr-2"></i>Upload</button>
                            <a href="<?php echo base_url('Akademik/form_pendaftaran'); ?>">
                                <button type="button" class="btn btn-success"><i
                                        class="fa fa-plus pr-2"></i>Tambah</button>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <table id="akademik-table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>No Reg</th>
                                            <th>Nama</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Jenjang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $id=0; foreach($data_siswa_daftar as $row ): $id++; ?>
                                        <tr>
                                            <td><?php
                                                 echo $id 
                                                 ?></td>
                                            <td>
                                                <img style="width: 80px; height:90px;"
                                                    src="<?php $data = $row->foto == null ? base_url('uploads/akademik/default_profile/User.png') : base_url('uploads/akademik/pendaftaran_siswa')."/".$row->foto; echo $data ?>"
                                                    alt="tidak ada foto">
                                            </td>
                                            <td><?php
                                             echo $row->no_reg 
                                             ?></td>
                                            <td class="text-truncate" style="max-width: 150px;"><?php
                                             echo $row->nama 
                                             ?></td>
                                            <td><?php
                                             echo tampil_tahunangkatan_byid($row->id_angkatan) 
                                             ?></td>
                                            <td><?php
                                             echo tampil_namajenjang_byid($row->id_jenjang) 
                                             ?></td>
                                            <td class="text-center">
                                                <a href="<?php echo base_url('Akademik/edit_pendaftaran/'.$row->id_daftar)?>"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo base_url('Akademik/detail_pendaftaran/'.$row->id_daftar)?>"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <button onClick="hapus(<?php
                                                 echo $row->id_daftar 
                                                 ?>)" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php
                                         endforeach;
                                         ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_import_pendaftaran" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="<?php echo base_url('Akademik/import_excel') ?>" enctype="multipart/form-data" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload Pendaftaran Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="box-body">
                            <p>Download template excel untuk mengisi data siswa yang akan diupload.</p>
                            <a href="<?php echo base_url('assets/sample.xlsx') ?>" class="btn btn-success">
                                <i class="fa fa-download"></i> Download Template
                            </a>
                            <br>
                            <br>
                            <div>
                                <label for="id-daftar" class="mr-3">
                                    Tahun Ajaran
                                </label>
                            </div>
                            <div>
                                <input type="text" value="<?php echo $tahun_ajaran_aktif[0]->kd_angkatan ?>"
                                    class="form-control" placeholder="Tahun Ajaran" disabled>
                                <input type="hidden" name="id_angkatan"
                                    value="<?php echo $tahun_ajaran_aktif[0]->id_angkatan ?>" class="form-control"
                                    placeholder="Tahun Ajaran">
                            </div>
                            <br>
                            <div>
                                <label for="jenjang" class="mr-3">
                                    Jenjang
                                </label>
                            </div>
                            <div>
                                <select class="form-control form-select px-2 py-1" name="id_jenjang"
                                    aria-label="Default select example">
                                    <option selected>Pilih Jenjang</option>
                                    <?php $id = 0;foreach ($data_jenjang as $row): $id++;?>
                                    <option value="<?php echo $row->id_jenjang ?>"><?php echo $row->nama_jenjang ?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <br>
                            <div>
                                <label for="id-daftar" class="mr-3">
                                    Upload
                                </label>
                            </div>
                            <div>
                                <input type="file" name="fileExcel">
                            </div>
                            <p class="mt-1">Type File Upload .*xls</p>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" onclick="kembali()"
                            data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
        </div>
        </form>
    </div>

    </div>

    <?php $this->load->view('akademik/style/js')?>
    <script>
    function hapus(id) {
        var yes = confirm('Yakin Di Hapus?');
        if (yes == true) {
            window.location.href = "<?php echo base_url('Akademik/hapus_pendaftaran/')?>" + "/" + id;
        }
    }
    </script>
</body>

</html>