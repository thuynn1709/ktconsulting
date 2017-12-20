<section class="page-title-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header-wrap">
                    <div class="page-header">
                        <h1><?php echo lang("blog_news"); ?></h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('home'); ?>"><?php echo lang("menu_home"); ?></a></li>
                        <li class="active"><?php echo lang("blog_news"); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog-section -->
<section class="blog-section section-content">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- posts-container -->
            <div class="posts-container">
                <div class="col-md-8 col-sm-8">
                    <?php
                    if (!empty($results)) {
                        $CI = &get_instance();
                        $siteLang = $CI->session->userdata('site_lang');
                        foreach ($results as $rs) {
                            ?> 
                            <article class="blog-post-wrapper">
                                <div class="figure sticky-post">    
                                    <div class="post-thumbnail">
                                        <img src="<?php echo base_url(); ?>public/images/news/<?php echo $rs->img; ?>" class="img-responsive " alt="">
                                        <div class="blog-post-overlay"></div>
                                        <a class="img-link" href="<?php echo base_url(); ?>public/images/news/<?php echo $rs->img; ?>"><small>
                                                <img src="<?php echo base_url(); ?>public/frontend/img/zoomin.png" alt="zoom"></small>
                                        </a>
                                    </div>

                                </div>
                                <header class="entry-header clearfix">
                                    <aside>
                                        <div class="posted-date pull-left">
                                            <span class="day"><?php echo date('d', $rs->created); ?></span>
                                            <span class="month"><?php echo toNameofMonth($rs->created); ?>,</span>
                                            <span class="year"><?php echo date('Y', $rs->created); ?></span>
                                        </div>	
                                        <div class="post-like pull-right">
                                            <a href="#"  title="Like this">
                                                <i class="fa fa-heart"></i><span><?php echo $rs->readed + 50; ?></span> 
                                            </a>                    
                                        </div>
                                        <div class="clearfix"></div>
                                    </aside>

                                    <h2 class="entry-title">
                                        <a href="<?php echo base_url(); ?>news/detail/<?php echo $rs->alias; ?>" rel="">
                                            <?php
                                            if ($siteLang == 'vietnamese') {
                                                echo $rs->name_vn;
                                            } else if ($siteLang == 'english') {
                                                echo $rs->name_en != '' ? $rs->name_en : $rs->name_vn;
                                            } else {
                                                echo $rs->name_de != '' ? $rs->name_de : $rs->name_vn;
                                            }
                                            ?>
                                        </a></h2>

                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li>
                                                <span class="author">
                                                    <small>By</small><a class="url" href="#"><?php echo $rs->author; ?></a> 
                                                </span>
                                            </li>
                                            <li>
                                                <span class="posted-in">
                                                    <small>Under</small> <a href="#">Feature</a>, <a href="#">Tag</a>, <a href="#">Concept</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="post-category">
                                                    <small>In</small><a href="<?php echo base_url('news/category/') . $rs->pcalias; ?>" title="">
                                                        <?php
                                                        if ($siteLang == 'vietnamese') {
                                                            echo $rs->pcname_vn;
                                                        } else if ($siteLang == 'english') {
                                                            echo $rs->pcname_en != '' ? $rs->pcname_en : $rs->pcname_vn;
                                                        } else {
                                                            echo $rs->pcname_de != '' ? $rs->pcname_de : $rs->pcname_vn;
                                                        }
                                                        ?>
                                                    </a>
                                                </span>
                                            </li>
                                            <li style="display: none">
                                                <span class="post-comments-number">
                                                    <a href="#" title="">1 Comments</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->



                                <div class="entry-content">
                                    <p>
                                        <?php
                                        if ($siteLang == 'vietnamese') {
                                            echo $rs->desc_vn;
                                        } else if ($siteLang == 'english') {
                                            echo $rs->desc_en != '' ? $rs->desc_en : $rs->desc_vn;
                                        } else {
                                            echo $rs->desc_de != '' ? $rs->desc_de : $rs->desc_vn;
                                        }
                                        ?>
                                    </p>
                                </div><!-- .entry-content -->


                                <footer class="entry-footer"> 
                                    <hr>
                                    <a href="<?php echo base_url(); ?>news/detail/<?php echo $rs->alias; ?>" class="btn btn-primary btn-sm readmore"><?php echo lang("blog_continue_reading"); ?></a>
                                </footer>
                            </article><!-- /.blog-post-wrapper -->
                            </tr>
                            <?php
                        }
                    }
                    ?> 


                    <!-- PAGINATION -->
                    <section class="pagination-wrap">
                        <div class="blog-pagination">
                            <ul class="pagination text-center">
                                <?php echo $links; ?>
                            </ul>
                        </div>	
                    </section>					   

                    <!-- END PAGINATION -->
                    <div class="clearfix"></div>

                </div> <!-- /col-md-8 -->


                <div class="col-md-4 col-sm-4">
                    <div class="sidebar-wrapper right-sidebar">

                        <aside class="widget widget_search">
                            <form role="search" method="get" class="search-form">
                                <label>
                                    <span class="screen-reader-text"><?php echo lang('blog_search') ?>:</span>
                                    <input type="search" class="form-control search-field" placeholder="<?php echo lang('blog_search') ?>" value="" name="s" title="<?php echo lang('blog_search') ?>:">
                                </label>
                                <button type="submit">Go<i class="fa fa-angle-right"></i></button>
                            </form>
                        </aside>


                        <aside class=" widget widget_recent_entries">
                            <div class="sidebar-tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#recent-post" role="tab" data-toggle="tab"><?php echo lang('blog_recent_post'); ?></a></li>
                                    <li><a href="#most-read" role="tab" data-toggle="tab"><?php echo lang('blog_most_read'); ?></a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="recent-post">

                                        <ul class="tab-recent-post">
                                            <?php
                                            if (!empty($recent_post)) {
                                                $CI = &get_instance();
                                                $siteLang = $CI->session->userdata('site_lang');
                                                foreach ($recent_post as $rp) {
                                                    ?> 
                                                    <li>
                                                        <div class="tab-post-thumb">
                                                            <img class="img-responsive" src="<?php echo base_url(); ?>public/images/news/<?php echo $rp->img; ?>" alt="Image">
                                                        </div>

                                                        <div class="tab-post-heading">
                                                            <h3><a href="<?php echo base_url(); ?>news/detail/<?php echo $rp->alias; ?>">
                                                                    <?php
                                                                    if ($siteLang == 'vietnamese') {
                                                                        echo $rp->name_vn;
                                                                    } else if ($siteLang == 'english') {
                                                                        echo $rp->name_en != '' ? $rp->name_en : $rp->name_vn;
                                                                    } else {
                                                                        echo $rp->name_de != '' ? $rp->name_de : $rp->name_vn;
                                                                    }
                                                                    ?>
                                                                </a></h3>
                                                            <div class="entry-meta">
                                                                <span class="author">
                                                                    <a href="#"><?php echo $rp->author; ?></a> 
                                                                </span>
                                                                <span class="post-date"> <?php echo toNameofMonth($rp->created); ?> <?php echo date('d', $rp->created); ?>, <?php echo date('Y', $rp->created); ?></span>
                                                            </div><!-- .entry-meta -->
                                                        </div>
                                                    </li>

                                                    <?php
                                                }
                                            }
                                            ?> 

                                        </ul>

                                    </div> <!-- /recent post tab -->

                                    <div class="tab-pane fade" id="most-read">
                                        <ul class="tab-most-read">
                                            <?php
                                            if (!empty($most_read)) {
                                                $CI = &get_instance();
                                                $siteLang = $CI->session->userdata('site_lang');
                                                foreach ($most_read as $mr) {
                                                    ?> 
                                                    <li>
                                                        <div class="tab-post-thumb">
                                                            <img class="img-responsive" src="<?php echo base_url(); ?>public/images/news/<?php echo $rs->img; ?>" alt="Image">
                                                        </div>

                                                        <div class="tab-post-heading">
                                                            <h3><a href="<?php echo base_url(); ?>news/detail/<?php echo $rp->alias; ?>">
                                                                    <?php
                                                                    if ($siteLang == 'vietnamese') {
                                                                        echo $mr->name_vn;
                                                                    } else if ($siteLang == 'english') {
                                                                        echo $mr->name_en != '' ? $mr->name_en : $mr->name_vn;
                                                                    } else {
                                                                        echo $mr->name_de != '' ? $mr->name_de : $mr->name_vn;
                                                                    }
                                                                    ?>
                                                                </a></h3>
                                                            <div class="entry-meta">
                                                                <span class="author">
                                                                    <a href="#"><?php echo $rs->author; ?></a> 
                                                                </span>
                                                                <span class="post-date"> <?php echo toNameofMonth($mr->created); ?> <?php echo date('d', $mr->created); ?>, <?php echo date('Y', $mr->created); ?></span>
                                                            </div><!-- .entry-meta -->
                                                        </div>
                                                    </li>

                                                    <?php
                                                }
                                            }
                                            ?> 

                                        </ul>
                                    </div><!-- /most read tab -->
                                </div>

                            </div><!-- /tab-wrap -->

                        </aside>
                        <aside class="widget widget_categories">
                            <h2 class="widget-title"><?php echo lang("blog_categories"); ?></h2>	

                            <ul>
                                <?php
                                if (!empty($categories)) {
                                    $CI = &get_instance();
                                    $siteLang = $CI->session->userdata('site_lang');

                                    foreach ($categories as $ct) {
                                        ?> 
                                        <li><a href="<?php echo base_url('news/category/') . $ct->alias; ?>">
                                                <?php
                                                if ($siteLang == 'vietnamese') {
                                                    echo $ct->name_vn;
                                                } else if ($siteLang == 'english') {
                                                    echo $ct->name_en != '' ? $ct->name_en : $ct->name_vn;
                                                } else {
                                                    echo $ct->name_de != '' ? $ct->name_de : $ct->name_vn;
                                                }
                                                ?>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                }
                                ?> 
                            </ul>
                        </aside>
                        <aside class="widget widget_archive" style="display: none;">
                            <h2 class="widget-title"> Archived</h2>
                            <ul>
                                <li><a href="#">August 2014</a>&nbsp;(3)</li>
                                <li><a href="#">January 2014</a>&nbsp;(1)</li>
                                <li><a href="#">March 2012 </a>&nbsp;(5)</li>
                                <li><a href="#">January 2012</a>&nbsp;(3)</li>
                                <li><a href="#">March 2011</a>&nbsp;(2)</li>
                                <li><a href="#">October 2010 </a>&nbsp;(2)</li>
                            </ul>
                        </aside>
                        <aside class="widget widget_tag_cloud" style="display: none;">
                            <h2 class="widget-title">Tag Cloud</h2>
                            <ul>
                                <li><a href="#">Custom</a></li>
                                <li><a href="#">Graphic</a></li>
                            </ul>
                        </aside>


                    </div><!-- /.sidebar -->

                </div><!-- /.col -->
            </div> <!-- /posts-container -->
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /blog-section -->