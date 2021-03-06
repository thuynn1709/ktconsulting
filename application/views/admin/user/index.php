<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content">
      <!-- /.row -->
      <div class="row">
        <form action="<?php echo site_url('admin/user/index');?>" method = "post">
            <div class="col-xs-12">
                    <div class="col-xs-3">
                        <button style="width: 150px; margin-top: 25px;" id="add_new" type="button" class="btn btn-block btn-primary">Thêm mới</button>  
                    </div>
                    
                    <div class="col-xs-3">
                       
                    </div>
                    <div class="col-xs-3">
                        <label>Group</label> 
                        <select class="form-control">
                            <option value="0">Admin</option>
                            <option value="1">Mode</option>
                            <option value="2">User</option>
                      </select>
                    </div>
                    <div class="col-xs-3">
                        <label>Tên người dùng</label> 
                        <div class="input-group">
                            <input type="text" name="search" value="<?php echo $search; ?>" class="form-control pull-right" placeholder="Search">
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
                <h3 class="box-title">Danh sách user</h3>
                <div class="box-tools"></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Fullname</th>
                  <th>Phone</th>
                  <th>Nhóm</th>
                  <th>Action</th>
                </tr>
                
                <?php 
                    if (!empty($results)) {
                        $stt = 1;
                      
                        foreach ($results as $rs) {
                    ?> 
                    <tr>
                      <td><?php echo $stt; ?></td>
                      <td><?php echo $rs->email; ?></td>
                      <td><?php echo $rs->fullname; ?></td>
                      <td><?php echo $rs->phone; ?></td>
                      <?php 
                        if ($rs->group == 0) {
                        ?> 
                      <td>Admin</td>
                        <?php } else if ($rs->group == 1) {  ?> 
                      <td>Mode</td>
                      <?php }else { ?> 
                      <td>User</td>  
                      <?php } ?> 
                      <td>
                        <div class="btn-group">
                            <button type="button" ref="<?php echo base_url('admin/user/edit/'). $rs->id ; ?>" class="btn btn-info">Sửa</button>
                            <button type="button" ref="<?php echo base_url('admin/user/delete/'). $rs->id ; ?>" class="btn btn-warning">Xóa</button>
                        </div>  
                        
                      </td>
                    </tr>
                        <?php 
                        $stt += 1;
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
        console.log( "ready!" );
        $('#add_new').click(function() {
            window.location.href = '<?php echo base_url(); ?>admin/user/add';
            return false;
        });
        
        $('.btn-info').click(function() {      
            var url = $(this).attr('ref');          
            window.location.href = url;
            return false;
        });
        
        $('.btn-warning').click(function() {
            var r = confirm("Chắc chắn xóa !");
            if (r == true) {
                
                txt = "You pressed OK!";
                var url = $(this).attr('ref');
                window.location.href = url;
            } else {
                txt = "You pressed Cancel!";
            }
           
            return false;
        });
    });
    

</script>


