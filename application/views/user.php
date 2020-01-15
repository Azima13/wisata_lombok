<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Tables
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="fa fa-close"></i>
              </button>
              <span style="text-align:left;"><?php echo $this->session->flashdata('success'); ?></span>
            </div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-error">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="fa fa-close"></i>
              </button>
              <span style="text-align:left;"><?php echo $this->session->flashdata('error'); ?></span>
            </div>
            <?php } ?>
            <h3 class="box-title">Data Berita</h3>
            <div class="box-body">
            <div class="pull-right">
              <a href="<?php echo base_url()?>User/tambah_user" class="btn btn-primary"><i class="mdi mid-plus-circle mr-2 fa fa-plus"></i>Tambah User</a>
            </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID User</th>
                <th>Nama User</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($wisata ->result_array() as $data) {
                 ?>
              <tr>
                <td><?php echo $data['id_user']; ?></td>
                <td><?php echo $data['nama_user']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><span data-toggle="tooltip" data-original-title="Edit Data" style="font-size:10;"><a class="btn btn-warning" href="<?php echo base_url()?>User/edit_user/<?php echo $data['id_user']; ?>"><i class="fa fa-edit"></i></a></span>
                    <span data-toggle="tooltip" data-original-title="Hapus Data" style="font-size:10;"><a class="btn btn-danger" href="<?php echo base_url()?>User/delete/<?php echo $data['id_user']; ?>"><i class="fa fa-trash-o"></i></a></span>
                </td>
              </tr>
            <?php } ?>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
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
  <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">WLK</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
