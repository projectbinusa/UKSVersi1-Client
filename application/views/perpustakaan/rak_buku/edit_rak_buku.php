<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $this->load->view('perpustakaan/style/head')?>
</head>
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">
  <?php $this->load->view('perpustakaan/style/navbar')?>
  <?php $this->load->view('perpustakaan/style/sidebar')?>

  <div class="content-wrapper">
    <div class="container-fluid">
    <section class="content">
      <div class="row justify-content-center">
        <div class="mt-4 col-sm-10">
          <div class="box">
              <div class="box-header with-border">
                <center><b><h3 class="box-title">Edit Rak Buku</h3></b></center>
              </div>
              <?php foreach ($data_rak_buku as $row): ?>
             
              <form action="<?php echo base_url('Perpustakaan/update_rak_buku') ?>" method="post">
                <div class="box-body">
                <div class="form-group col-sm-12">
                  <label class="col-sm-2 control-label">ID Rak Buku</label>
                  <div class="col-sm-">
                    <input type="number" value="<?php echo $row->nama_rak_buku ?>" name="nama_rak_buku" class="form-control" placeholder="Masukan ID Rak Buku"><br>
                  </div>
                </div>
                <div class="form-group col-sm-12">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-">
                    <input type="text" value="<?php echo $row->keterangan_rak_buku ?>" name="keterangan_rak_buku" class="form-control" placeholder="Masukan Keterangan"><br>
                  </div>
                </div>
              </div>
               
                <div class="form-group col-sm-12 d-flex justify-content-between">
                  <button type="button" class="btn btn-danger" onclick="kembali()">Kembali</button>
                  <input type="hidden" value="<?php echo $row->id_rak_buku ?>" name="id_rak_buku">
                  <button type="submit" class="btn btn-primary">update</button>
                </div>
                
              </form>
            <?php endforeach;?>
           
          </div>
        </div>
      </div>
    </section>
    </div>
  </div>
<?php $this->load->view('perpustakaan/style/js')?>

<script>
  function kembali()
    {
      window.history.go(-1);
    }

</script>

</body>
</html>