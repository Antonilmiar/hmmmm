<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/datatables/dataTables.bootstrap.css">

<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Daftar Pengajuan Proposal Lomba
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Pengajuan</a></li>
            <li class="active">Logbook Pengajuan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                      <a href="<?php echo base_url('proposal/upload_proposal') ?>">
                        <button type="button" class="btn btn-default">
                          <span class="fa fa-plus"></span> Tambah Proposal 
                        </button>
                      </a>
                  </div>
                  <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th align="center" style="width: 10px">No</th>
                                <th align="center">Nama Event</th>
                                <th align="center">Tanggal Pengajuan</th>
                                <th align="center">Status</th>
                                <th align="center" style="width: 80px">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>qwerty</td>
                                  <td>qwerty</td>
                                  <td>
                                    <span class="label label-danger">Ditolak</span>
                                  </td>
                                  <td>
                                    <a href="<?php echo base_url('proposal/detail_tim') ?>">
                                      <button class="btn btn-info pull-leftt">Detail Tim</button>
                                    </a>
                                  </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable({
            "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true

        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });

      <!-- alert sukses tidak -->
      <?php
      if($this->session->flashdata('status') !== null){
          echo '<script type="text/javascript">';
          if ($this->session->flashdata('status')) {
              echo 'alert("Upload proposal berhasil")';
          } else {
              echo 'alert("Upload proposal gagal")';
          }
          echo '</script>';
      }
      ?>
    </script>