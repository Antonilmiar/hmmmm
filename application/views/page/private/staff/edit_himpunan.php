<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/select2/select2.min.css">

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Data Himpunan
        </h1>
        <?php echo $breadcrumb ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url(); ?>himpunan/do_edit?id= <?php echo $id_him ?>">
            
            <div class="col-md-7">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Himpunan</h3>
                    </div><!-- /.box-header -->
                    
                    <div class="box-body">
                        <?php if (!empty(validation_errors())): ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                                <ul>
                                    <?php echo validation_errors('<li>', '</li>'); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label>Nama Himpunan</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Himpunan" value="<?= $nama_him ?>" name="nama" disabled>

                        </div>
                        <div class="form-group">
                            <label>Program Studi</label>
                            <input type="text" class="form-control" id="prodi" placeholder="Program Studi" value="<?= $prodi_him ?>" name="prodi" disabled>
                        </div>
                        <div class="form-group">
                            <label>Penanggung Jawab</label>
                            <select class="select2 form-control" name="penanggungjawab">
                                <option value="<?= $id_pj ?>"><?php echo $id_pj ?> - <?php echo $nama_mhs ?></option>>
                            </select>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>               
                </div><!-- /.box -->
            </div>
            </form>
        </div>
    </section>
</div>

<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/select2/select2.min.js"></script>

<!-- alert sukses tidak -->
<?php
if($this->session->flashdata('status') !== null){
    echo '<script type="text/javascript">';
    if ($this->session->flashdata('status')) {
        echo 'alert("Update data berhasil")';
    } else {
        echo 'alert("Update data gagal")';
    }
    echo '</script>';
}
?>

<script>
      $(function () {
        $(".select2").select2({
            minimumInputLength: 4,
            placeholder: 'Pilih penanggungjawab',
            allowClear: true,
            ajax: {
                url: '<?php echo base_url('himpunan/select2') ?>',
                dataType: 'json',
                type: 'GET',
                data: function (term) {
                    return {
                        q: term
                    };
                },
                processResults: function (data) {
                    return {
                        results: data.mahasiswa
                        // $.map(data.mahasiswa, function (mhs) {
                        //     return {
                        //         text: mhs.text,
                        //         id: mhs.id
                        //     }
                        // })
                    };
                },
                
            }
        });
      });
</script>