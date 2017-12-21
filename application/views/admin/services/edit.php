<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Trang dịch vụ</a></li>
        <li class="active">Cập nhật nội dung trang dịch vụ</li>
    </ol>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cập nhật</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/services/manage/1'); ?>">
                        <div class="box-body">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1">Dịch vụ tư vấn</label>
                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tabdesc1" data-toggle="tab">Tiếng việt</a></li>
                                                    <li><a href="#tabdesc2" data-toggle="tab">Tiếng anh</a></li>
                                                    <li><a href="#tabdesc3" data-toggle="tab">Tiếng đức</a></li>
                                                </ul>
                                            </div>
                                            <div class="panel-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="tabdesc1">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Dịch vụ tư vấn tiếng việt
                                                                    <small>Simple and fast</small>
                                                                </h3>
                                                                <!-- tools box -->
                                                                <div class="pull-right box-tools">
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                            title="Collapse">
                                                                        <i class="fa fa-minus"></i></button>
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                            title="Remove">
                                                                        <i class="fa fa-times"></i></button>
                                                                </div>
                                                                <!-- /. tools -->
                                                            </div>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad">

                                                                <textarea class="textarea" name="consulting_vn" placeholder="Viết bao nhiêu tùy theo ý thích của bạn"
                                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                    <?php echo $item->consulting_vn ; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tabdesc2">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Dịch vụ tư vấn tiếng anh
                                                                    <small>Simple and fast</small>
                                                                </h3>
                                                                <!-- tools box -->
                                                                <div class="pull-right box-tools">
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                            title="Collapse">
                                                                        <i class="fa fa-minus"></i></button>
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                            title="Remove">
                                                                        <i class="fa fa-times"></i></button>
                                                                </div>
                                                                <!-- /. tools -->
                                                            </div>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad">

                                                                <textarea class="textarea" name="consulting_en" placeholder="Viết bao nhiêu tùy theo ý thích của bạn"
                                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                              <?php echo $item->consulting_en ; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tabdesc3">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Dịch vụ tư vấn tiếng đức
                                                                    <small>Simple and fast</small>
                                                                </h3>
                                                                <!-- tools box -->
                                                                <div class="pull-right box-tools">
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                            title="Collapse">
                                                                        <i class="fa fa-minus"></i></button>
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                            title="Remove">
                                                                        <i class="fa fa-times"></i></button>
                                                                </div>
                                                                <!-- /. tools -->
                                                            </div>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad">

                                                                <textarea class="textarea" name="consulting_de" placeholder="Viết bao nhiêu tùy theo ý thích của bạn"
                                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                              <?php echo $item->consulting_de  ; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>  
                                    </div>  
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1">Dịch vụ Import-Export</label>
                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#importexport1" data-toggle="tab">Tiếng việt</a></li>
                                                    <li><a href="#importexport2" data-toggle="tab">Tiếng anh</a></li>
                                                    <li><a href="#importexport3" data-toggle="tab">Tiếng đức</a></li>
                                                </ul>
                                            </div>
                                            <div class="panel-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="importexport1">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Dịch vụ import-export tiếng việt
                                                                    <small>Simple and fast</small>
                                                                </h3>
                                                                <!-- tools box -->
                                                                <div class="pull-right box-tools">
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                            title="Collapse">
                                                                        <i class="fa fa-minus"></i></button>
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                            title="Remove">
                                                                        <i class="fa fa-times"></i></button>
                                                                </div>
                                                                <!-- /. tools -->
                                                            </div>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad">

                                                                <textarea class="textarea" name="import_export_vn" placeholder="Viết bao nhiêu tùy theo ý thích của bạn"
                                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                    <?php echo $item->import_export_vn ; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="importexport2">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Dịch vụ import-export tiếng anh
                                                                    <small>Simple and fast</small>
                                                                </h3>
                                                                <!-- tools box -->
                                                                <div class="pull-right box-tools">
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                            title="Collapse">
                                                                        <i class="fa fa-minus"></i></button>
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                            title="Remove">
                                                                        <i class="fa fa-times"></i></button>
                                                                </div>
                                                                <!-- /. tools -->
                                                            </div>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad">

                                                                <textarea class="textarea" name="import_export_en" placeholder="Viết bao nhiêu tùy theo ý thích của bạn"
                                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                              <?php echo $item->import_export_en ; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="importexport3">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Dịch vụ import-export tiếng đức
                                                                    <small>Simple and fast</small>
                                                                </h3>
                                                                <!-- tools box -->
                                                                <div class="pull-right box-tools">
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                            title="Collapse">
                                                                        <i class="fa fa-minus"></i></button>
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                            title="Remove">
                                                                        <i class="fa fa-times"></i></button>
                                                                </div>
                                                                <!-- /. tools -->
                                                            </div>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad">

                                                                <textarea class="textarea" name="import_export_de" placeholder="Viết bao nhiêu tùy theo ý thích của bạn"
                                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                              <?php echo $item->import_export_de  ; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>  
                                    </div>  
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1">Dịch vụ vận chuyển & giao nhận hàng</label>
                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#logistics1" data-toggle="tab">Tiếng việt</a></li>
                                                    <li><a href="#logistics2" data-toggle="tab">Tiếng anh</a></li>
                                                    <li><a href="#logistics3" data-toggle="tab">Tiếng đức</a></li>
                                                </ul>
                                            </div>
                                            <div class="panel-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="logistics1">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Dịch vụ vận chuyển & giao nhận hàng tiếng việt
                                                                    <small>Simple and fast</small>
                                                                </h3>
                                                                <!-- tools box -->
                                                                <div class="pull-right box-tools">
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                            title="Collapse">
                                                                        <i class="fa fa-minus"></i></button>
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                            title="Remove">
                                                                        <i class="fa fa-times"></i></button>
                                                                </div>
                                                                <!-- /. tools -->
                                                            </div>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad">

                                                                <textarea class="textarea" name="logistics_vn" placeholder="Viết bao nhiêu tùy theo ý thích của bạn"
                                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                    <?php echo $item->logistics_vn ; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="logistics2">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Dịch vụ vận chuyển & giao nhận hàng tiếng anh
                                                                    <small>Simple and fast</small>
                                                                </h3>
                                                                <!-- tools box -->
                                                                <div class="pull-right box-tools">
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                            title="Collapse">
                                                                        <i class="fa fa-minus"></i></button>
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                            title="Remove">
                                                                        <i class="fa fa-times"></i></button>
                                                                </div>
                                                                <!-- /. tools -->
                                                            </div>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad">

                                                                <textarea class="textarea" name="logistics_en" placeholder="Viết bao nhiêu tùy theo ý thích của bạn"
                                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                              <?php echo $item->logistics_en ; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="logistics3">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Dịch vụ vận chuyển & giao nhận hàng tiếng đức
                                                                    <small>Simple and fast</small>
                                                                </h3>
                                                                <!-- tools box -->
                                                                <div class="pull-right box-tools">
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                            title="Collapse">
                                                                        <i class="fa fa-minus"></i></button>
                                                                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                                                            title="Remove">
                                                                        <i class="fa fa-times"></i></button>
                                                                </div>
                                                                <!-- /. tools -->
                                                            </div>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad">

                                                                <textarea class="textarea" name="logistics_de" placeholder="Viết bao nhiêu tùy theo ý thích của bạn"
                                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                              <?php echo $item->logistics_de  ; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>  
                                    </div>  
                                </div>
                            </div>


                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                                <button type="submit" id="cancel" class="btn btn-primary">Hủy bỏ</button>
                            </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->

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
    })
</script>
