<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
    <?php $this->load->view('style/head')?>
</head>

<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
    <div class="wrapper">
        <?php $this->load->view('style/navbar')?>
        <?php $this->load->view('style/sidebar')?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <section class="content">
                    <div class="row px-3 py-2">
                        <div class="col-sm-12">
                            <div class="box">
                                <div class="header p-2 text-light rounded-top d-flex justify-content-center"
                                    style="background-color:#4ADE80">
                                    <div class="d-flex align-items-center">
                                        <div style="font-size: 2rem">Edit Data Guru</div>
                                    </div>

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body shadow px-3 py-1 mb-5 bg-white rounded">
                                    <?php foreach ($daf_guru as $datas): ?>
                                    <section class="content bg-white p-2 rounded">
                                        <form action="<?php echo base_url('dataguru/ubah_guru') ?>"
                                            enctype="multipart/form-data" method="post">
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label class="control-label">Nama</label>
                                                        <input type="text" value="<?php echo $datas->nama_guru ?>"
                                                            name="nama_guru" class="form-control" required=""
                                                            placeholder="Masukan Nama">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label class="control-label">Tempat Lahir</label>
                                                        <input type="text" value="<?php echo $datas->tempat_lahir ?>"
                                                            name="tempat_lahir" class="form-control" required=""
                                                            placeholder="Masukan Tempat Lahir">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6 mb-0">
                                                        <label class="control-label">Foto Profil</label>
                                                        <div class="custom-file mb-3">
                                                            <input type="file" class="custom-file-input" id="customFile" required=""
                                                                name="foto">
                                                            <label class="custom-file-label" for="customFile">Pilih
                                                                File</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label class="control-label">Tanggal Lahir</label>
                                                        <input type="date" value="<?php echo $datas->tanggal_lahir ?>"
                                                            name="tanggal_lahir" class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label class="control-label">Alamat</label>
                                                    <input type="text" value="<?php echo $datas->alamat ?>"
                                                        name="alamat" class="form-control" placeholder="Masukan Alamat" required="">
                                                </div>
                                                <div class="form-group col-6">
                                                    <label class="control-label">No. Telepon Orang Tua/Wali</label>
                                                    <input type="number" value="<?php echo $datas->no_telepon ?>"
                                                        name="no_telepon_wali" class="form-control" required=""
                                                        placeholder="Masukan No Telepon">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-4">
                                                    <label class="control-label">Tinggi Badan (TB)</label>
                                                    <input type="number" value="<?php echo $datas->TB ?>" name="TB" required=""
                                                        class="form-control" placeholder="Masukan Tinggi Badan (*cm)">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label class="control-label">Berat Badan (BB)</label>
                                                    <input type="number" value="<?php echo $datas->BB ?>" name="BB" required=""
                                                        class="form-control" placeholder="Masukan Tinggi Badan (*kg)">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label class="control-label">Gol Darah</label>
                                                    <input type="text" value="<?php echo $datas->gol_darah ?>"
                                                        name="gol_darah" class="form-control" required=""
                                                        placeholder="Masukan Golongan Darah">
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="form-group col-sm-6">
                                                    <label class="control-label">Riwayat Penyakit</label>
                                                    <input type="text" value="<?php echo $datas->riwayat_penyakit ?>"
                                                        name="riwayat_penyakit" class="form-control" required=""
                                                        placeholder="Masukan Riwayat Penyakit">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label class="control-label">Alergi</label>
                                                    <input type="text" value="<?php echo $datas->alergi ?>"
                                                        name="alergi" class="form-control" required="" placeholder="Masukan Alergi">
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 d-flex justify-content-between">
                                                <button type="button" class="btn btn-danger text-bold mr-2"
                                                    onclick="kembali()" data-dismiss="modal"><span
                                                        class="p-3">Batal</span></button>
                                                <input type="hidden" value="<?php echo $datas->id ?>" name="id">
                                                <button type="submit"
                                                    class="btn btn-success text-bold"><span
                                                        class="p-3">Update</span></button>
                                            </div>
                                        </form>
                                    </section>
                                    <?php endforeach;?>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php $this->load->view('style/js')?>
</body>
<script>
function kembali() {
    window.history.go(-1);
}

$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

</html>