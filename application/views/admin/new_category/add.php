<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Quản lý danh mục tin tức</a></li>
        <li class="active">Thêm mới danh mục tin tức</li>
    </ol>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm mới danh mục tin tức</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" name="submit" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/new_category/add'); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục tin tức</label>
                                
                            </div>

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
                                            <input type="text" name="name_vn" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục">
                                        </div>
                                        <div class="tab-pane fade" id="tab2default">
                                             <input type="text" name="name_en" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục">
                                        </div>
                                        <div class="tab-pane fade" id="tab3default">
                                             <input type="text" name="name_de" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục">
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>  

                            <div class="form-group">
                                <label>Ưu tiên</label>
                                <select name="priority" class="form-control">
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                    <option value="4"> 4</option>
                                    <option value="5"> 5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Hiển thị</label>
                                <select name="status" class="form-control">
                                    <option value="1"> Hiển thị</option>
                                    <option value="0"> Không hiển thị</option> 
                                </select>


                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
