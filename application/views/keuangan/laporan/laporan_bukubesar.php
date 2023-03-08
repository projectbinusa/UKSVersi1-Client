<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Keuangan</title>
    <?php $this->load->view('akademik/style/head') ?>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- navbar -->
        <?php $this->load->view('keuangan/style/navbar') ?>
        <!-- navbar -->
        <!-- Sidebar -->
        <?php $this->load->view('keuangan/style/sidebar') ?>
        <!-- Sidebar -->

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Laporan Buku Besar</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('Akademik/') ?>"><?php echo $this->session->userdata('level') ?></a>
                                </li>
                                <li class="breadcrumb-item active">Laporan Buku Besar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid bg-white p-1 shadow">
                    <div class="row mx-2 pt-3 d-flex justify-content-between">
                        <div class="col-2 col-sm-6 ">
                            <div class="form-group d-flex flex-row " style="width: fit-content;">
                                <div class="mt-2 mx-1">
                                    <h5>Akun</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-2 pt-2 pl-2">
                        <div class="form-group d-flex" style="width: 30%;">
                            <select name="judul_buku" class="form-control select2"
                                data-dropdown-css-class="select2-info" name="id_siswa" style="width: 100%;">
                                <option>
                                    Pilih
                                </option>
                                <?php $id = 0;foreach ($data_buku as $buku): $id++;?>
                                <option value="<?php echo $buku->judul_buku ?>"><?php echo $buku->judul_buku ?></option>
                                <?php endforeach;?>
                            </select>
                            <button type="submit" style="width: " class="ml-2 w-50 btn btn-info">Tampilkan</button>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                           Akun Kas
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <table id="datasiswa-table" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Uraian</th>
                                                <th>Kredit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    2001-03-28 11:21:28 </td>
                                                <td>
                                                    Dana Bos Seragam
                                                </td>
                                                <td>
                                                    Rp. 50.000.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> <strong> Jumlah Debet</strong></td>
                                                <td> <strong>Rp.50.000.000</strong> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-6">
                                    <table id="datasiswa-table" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Uraian</th>
                                                <th>Kredit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    2001-03-28 11:21:28 </td>
                                                <td>
                                                    Dana Bos Seragam
                                                </td>
                                                <td>
                                                    Rp. 50.000.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> <strong> Jumlah Kredit</strong></td>
                                                <td> <strong>Rp.50.000.000</strong> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            Total Debet Rp 0
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
    </div>
    <?php $this->load->view('keuangan/style/js') ?>
    <script>
    function hapus(id) {
        var yes = confirm('Yakin Di Hapus?');
        if (yes == true) {
            window.location.href = "<?php echo base_url('Akademik/hapus_guru/') ?>" + id;
        }
    }
    </script>
</body>

</html>