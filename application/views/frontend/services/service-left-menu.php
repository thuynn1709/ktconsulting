<section class="page-title-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header-wrap">
                    <div class="page-header">
                        <h1><?php echo $title_menu ; ?></h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('home'); ?>"><?php echo lang("menu_home"); ?></a></li>
                        <li class="active"><?php echo $title_menu ; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Single-Service-Start -->
<section class="single-service-contents">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-5 col-xs-12">
                <div class="service-sidebar sidebar-wrapper">

                    <div class="widget">
                        <h2 class="widget-title"><?php echo lang('menu_services') ?></h2>
                        <ul class="service-list" style="margin: 0;padding: 0; list-style: none;">
                            
  

                            <li <?php if ($active == 'consulting') echo 'class="active"'; ?>><a href="<?php echo base_url('services/consulting'); ?>" class="icon-trucking"><?php echo lang("menu_service_consulting"); ?></a></li>
                            <li <?php if ($active == 'import_export') echo 'class="active"'; ?>><a href="<?php echo base_url('services/import_export'); ?>" class="icon-shipping"><?php echo lang("menu_service_import_export"); ?></a></li>
                            <li <?php if ($active == 'logistics') echo 'class="active"'; ?>><a href="<?php echo base_url('services/logistics'); ?>" class="icon-transportation"><?php echo lang("menu_service_logistic"); ?></a></li>
                        </ul>
                    </div><!-- /.widget -->

                    <div class="widget" style="display: none">
                        <div class="download-wrap company">
                            <a href="#">Company profile <span>Download</span><i class="fa fa-download"></i></a>
                        </div> <!-- /.download-wrap -->
                        <div class="download-wrap annual">
                            <a href="#">Annual Report <span>Download</span><i class="fa fa-download"></i></a>
                        </div> <!-- /.download-wrap -->
                        <div class="download-wrap brochure">
                            <a href="#">Corporate Brochure <span>Download</span><i class="fa fa-download"></i></a>
                        </div> <!-- /.download-wrap -->
                    </div><!-- /.widget -->   

                    <div class="widget">
                        <?php echo lang("service_open_hour"); ?>
                    </div><!-- /.widget -->                
                </div><!-- /.sidebar-wrapper -->
            </div><!-- /.col -->
<style>
ul {
    display: block;
    list-style-type: disc;
    margin-top: 1em;
    margin-bottom: 1 em;
    margin-left: 0;
    margin-right: 0;
    padding-left: 40px;
}
</style>            