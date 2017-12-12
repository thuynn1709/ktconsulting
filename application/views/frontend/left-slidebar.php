<section>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Danh mục sản phẩm</h2>
                <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                    <?php 
                    if (!empty($product_in_category)){
                       foreach ($product_in_category as $pc) {                  
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordian" href="#<?php echo str_replace('&','-',$pc['alias']); ?>">
                                    <?php 
                                    if (!empty($pc['details'])){
                                    ?>
                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                    <?php                      
                                    }                
                                    ?>
                                    <?php echo $pc['name']; ?>
                                </a>
                            </h4>
                        </div>
                        <?php 
                        if (!empty($pc['details'])){
                        ?>
                        <div id="<?php echo str_replace('&','-',$pc['alias']); ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <?php 
                                    foreach ($pc['details'] as $dl) {                  
                                    ?>
                                    <li><a href="#"><?php echo $dl->name; ?> </a></li>
                                    <?php                      
                                    }                
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <?php                      
                        }                
                        ?>
                    </div>
                    
                    <?php                      
                        }                        
                    }                
                    ?>
                </div><!--/category-products-->

                <div class="brands_products"><!--brands_products-->
                    <h2>Thương hiệu</h2>
                    <div class="brands-name">
                        <ul class="nav nav-pills nav-stacked">
                            
                            <?php 
                            if (!empty($markens)){
                               foreach ($markens as $ct) {                  
                            ?>
                                <li><a href="#"> <span class="pull-right">(<?php echo $ct->total; ?>)</span><?php echo $ct->name; ?></a></li>
                            <?php                      
                               }                        
                            }                
                            ?>
                        </ul>
                    </div>
                </div><!--/brands_products-->

                <div class="price-range"><!--price-range-->
                    <h2>Price Range</h2>
                    <div class="well text-center">
                        <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                        <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                    </div>
                </div><!--/price-range-->

                <div class="shipping text-center"><!--shipping-->
                    <img src="<?php echo base_url(); ?>public/frontend/images/home/shipping.jpg" alt="" />
                </div><!--/shipping-->

            </div>
        </div>

