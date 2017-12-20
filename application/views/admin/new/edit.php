<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Quản lý tin tức</a></li>
        <li class="active">Cập nhật</li>
    </ol>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cập nhật tin tức</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/news/edit/'). $item->id ; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <?php if ($this->session->flashdata('exist_name')) { ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                        <?php echo $this->session->flashdata('exist_name'); ?>
                                    </div>
                                <?php } ?>
                            </div>



                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1">Tiêu đề</label>
                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tab1default" data-toggle="tab">Tiếng việt</a></li>
                                                    <li><a href="#tab2default" data-toggle="tab">Tiếng anh</a></li>
                                                    <li><a href="#tab3default" data-toggle="tab">Tiếng đức</a></li>
                                                </ul>
                                            </div>
                                            <div class="panel-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="tab1default">
                                                        <input type="text" name="name_vn" class="form-control" id="exampleInputEmail1" value=" <?php echo $item->name_vn; ?>" placeholder="Nhập tên đề tin">
                                                    </div>
                                                    <div class="tab-pane fade" id="tab2default">
                                                        <input type="text" name="name_en" class="form-control" id="exampleInputEmail1" value=" <?php echo $item->name_en; ?>" placeholder="Nhập tên đề tin">
                                                    </div>
                                                    <div class="tab-pane fade" id="tab3default">
                                                        <input type="text" name="name_de" class="form-control" id="exampleInputEmail1"  value=" <?php echo $item->name_de; ?>" placeholder="Nhập tên đề tin">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>  
                                    </div>  
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row" >
                                    <div class="col-md-6">
                                        <div class="col-md-6">
                                            <label>Hiển thị</label>
                                            <select name="status" class="form-control">
                                                <option value="1" <?php echo ($item->status == 1) ? 'selected="selected"' : '' ?>> Hiển thị</option>
                                                <option value="0" <?php echo ($item->status == 0) ? 'selected="selected"' : '' ?>> Không hiển thị</option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Danh mục tin tức</label>
                                        <select name="category" class="form-control">
                                            <?php
                                            if (!empty($categories)) {
                                                foreach ($categories as $ct) {
                                                    ?>
                                                    <option value="<?php echo $ct->id; ?>" <?php echo ($item->category_id == $ct->id) ? 'selected="selected"' : '' ?>> <?php echo $ct->name_vn; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row" >
                                    <div class="col-md-6">
                                        <label for="exampleInputFile">Ảnh đại điện</label>
                                        <input type="file" name="img">
                                        <p class="help-block">750 x 471 px.</p>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Tác giả</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-money"></i>
                                            </div>
                                            <input type="text" class="form-control" id="author" name="author"><br>
                                        </div>
                                    </div>
                                </div>
                            </div>  


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1">Mô tả tin tức</label>
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
                                                                <h3 class="box-title">Mô tả tin tức tiếng việt
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

                                                                <textarea class="textarea" name="desc_vn" placeholder="Viết mô tả tin tức"
                                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                              <?php echo $item->desc_vn; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tabdesc2">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Mô tả tin tức tiếng anh
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

                                                                <textarea class="textarea" name="desc_en" placeholder="Viết mô tả tin tức"
                                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                              <?php echo $item->desc_en; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tabdesc3">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Mô tả tin tức tiếng đức
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

                                                                <textarea class="textarea" name="desc_de" placeholder="Viết mô tả tin tức"
                                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                              <?php echo $item->desc_de; ?>
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
                                        <label for="exampleInputEmail1">Nội dung tin tức</label>
                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tabcontent1" data-toggle="tab">Tiếng việt</a></li>
                                                    <li><a href="#tabcontent2" data-toggle="tab">Tiếng anh</a></li>
                                                    <li><a href="#tabcontent3" data-toggle="tab">Tiếng đức</a></li>
                                                </ul>
                                            </div>
                                            <div class="panel-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="tabcontent1">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Nội dung tiếng việt
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

                                                                <textarea class="textarea" name="desc_vn" placeholder="Nội dung tin tức"
                                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                              <?php echo $item->content_vn; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tabcontent2">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Nội dung tiếng anh
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

                                                                <textarea class="textarea" name="desc_en" placeholder="Nội dung tin tức"
                                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                              <?php echo $item->content_en; ?>
                                                                </textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tabcontent3">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Nội dung tiếng đức
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

                                                                <textarea class="textarea" name="desc_de" placeholder="Nội dung tin tức"
                                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                              <?php echo $item->content_de; ?>
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

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
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

<!-- InputMask -->

<script src="<?php echo base_url(); ?>public/admin/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>public/admin/plugins/input-mask/jquery.inputmask.numeric.extensions.js"></script>
<script src="<?php echo base_url(); ?>public/admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>public/admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="<?php echo base_url(); ?>public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>public/admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})

        $('#price').inputmask('decimal', {
            radixPoint: ".",
            groupSeparator: ",",
            digits: 2,
            autoGroup: true,
            prefix: 'VNĐ', //No Space, this will truncate the first character
            rightAlign: false

        });

        //Colorpicker
        $('#color').colorpicker()

        $("#cancel").click(function () {
            window.location.href = '<?php echo base_url(); ?>admin/news/index';
            return false;
        });
    })
</script>
