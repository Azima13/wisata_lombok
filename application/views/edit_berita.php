<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      General Form Elements
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">General Elements</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Berita Wisata</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?php echo base_url() ?>Berita/update" method="POST">
            <div class="box-body">
              <div class="form-group">
                <label>ID Berita</label>
                <input type="number" class="form-control" name="id_berita" placeholder="Masukkan ID" value="<?php echo $wisata->id_berita; ?>" readonly>
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="<?php echo $wisata->username; ?>">
              </div>
              <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" value="<?php echo $wisata->judul; ?>">
              </div>
              <div class="form-group">
                <label>Deskripsi Berita</label>
                <input type="text" class="form-control" name="deskripsi_berita" placeholder="Masukkan Deskripsi" value="<?php echo $wisata->deskripsi_berita; ?>">
              </div>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->

        <!-- Form Element sizes -->

        <!-- /.box -->

      </div>
      <!--/.col (left) -->
      <!-- right column -->

      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.13
  </div>
  <strong>Copyright &copy; 2020 <a href="https://github.com/Azima13/wisata_lombok">WLK</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
