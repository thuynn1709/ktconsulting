<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <form action="<?php echo site_url('admin/news/index');?>" method = "post">
            <div class="col-xs-12">
                    <div class="col-xs-3">
                        <button style="width: 150px; margin-top: 25px;" id="add_new" type="button" class="btn btn-block btn-primary">Thêm mới</button>  
                    </div>
                    <div class="col-xs-3">
                        
                    </div>
                    <div class="col-xs-3">
                        <label>Mục tin tức</label> 
                        <select name="category" class="form-control">
                            <option value=""> Chọn mục tin tức</option>
                            <?php 
                            if (!empty($category)){
                               foreach ($category as $ct) {                  
                           ?>
                                   <option value="<?php echo $ct->id; ?>"> <?php echo $ct->name_vn; ?></option>
                            <?php                      
                               }                        
                           }                
                           ?>
                         </select>
                    </div>
                    
                    <div class="col-xs-3">
                        <label>Tiêu đề tin tức</label> 
                        <div class="input-group">
                            <input type="text" name="search" value="<?php echo $search; ?>" class="form-control pull-right" placeholder="Tìm kiếm">
                            <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                    </div>
            </div>
        </form>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách tin tức</h3>
              <div class="box-tools">
              </div>
             
            </div>
              
            <?php if($this->session->flashdata('error')) {?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error');?>
                </div>
            <?php }?>  

            <?php if($this->session->flashdata('success')) {?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success');?>
                </div>
            <?php }?>    
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Tiêu đề</th>
                  <th>Ngày tạo</th>
                  <th>Trạng thái</th>
                  <th>Action</th>
                </tr>
                
                <?php 
                    if (!empty($results)) {
                        $offset = $offset + 1;
                      
                        foreach ($results as $rs) {
                    ?> 
                    <tr>
                      <td><?php echo $offset; ?></td>
                      <td><?php echo $rs->name_vn; ?></td>
                      <td><?php echo toDatetime($rs->created); ?></td>
                      <?php 
                        if ($rs->status == 1) {
                        ?> 
                      <td><span class="label label-success">Hiển thị</span></td>
                        <?php } else {  ?> 
                      <td><span class="label label-danger">Không hiển thị</span></td>
                      <?php } ?> 
                      <td>
                        <div class="btn-group">
                            <button type="button" data-value="<?php echo $rs->id; ?>" class="btn btn-info">Sửa</button>
                            <button type="button" data-value="<?php echo $rs->id; ?>" class="btn btn-warning">Xóa</button>
                        </div>  
                        
                      </td>
                    </tr>
                        <?php 
                        $offset += 1;
                        }
                    }?> 
              </table>
            </div>
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <?php echo $links; ?>
              </ul>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    
  </div>

<script type="text/javascript">
    $( document ).ready(function() {
       
        $('#add_new').click(function() {
            window.location.href = '<?php echo base_url(); ?>admin/news/add';
            return false;
        });
        
        $('.btn-info').click(function() {
            var id = $(this).attr('data-value');
            window.location.href = '<?php echo base_url(); ?>admin/news/edit/' + id;
            return false;
        });
        
        $('.btn-warning').click(function() {
           
            var r = confirm("Chắc chắn xóa !");
            if (r == true) {
                var id = $(this).attr('data-value');
                window.location.href = '<?php echo base_url(); ?>admin/news/delete/' + id;
                return false;
            } else {
                txt = "Bạn đã hủy xóa!";
            }
           
            return false;
        });
    });
    

</script>


