<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Trang dịch vụ</a></li>
        <li class="active">Quản lý nội dung trang dịch vụ</li>
    </ol>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <button type="submit" class="btn btn-info">Click vào đây để cập nhật thông tin trang dịch vụ</button>
                    </div>
                    <!-- /.box-header -->

                    <!-- /.box -->
                </div>
                <!--/.col (left) -->

                <?php if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php } ?>  

                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php } ?>  

            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>public/admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

        $("#cancel").click(function () {
            window.location.href = '<?php echo base_url(); ?>admin/services/manage/1';
            return false;
        });

        $('.btn-info').click(function () {
            window.location.href = '<?php echo base_url(); ?>admin/services/manage/1';
            return false;
        });

    })
</script>




