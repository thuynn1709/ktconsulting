<section class="page-title-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header-wrap">
                    <div class="page-header">
                        <h1><?php echo lang("blog_news"); ?></h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="#"><?php echo lang("menu_home"); ?></a></li>
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
                                        <i class="fa fa-heart"></i><span><?php echo $rs->readed; ?></span> 
                                    </a>                    
                                </div>
                                <div class="clearfix"></div>
                            </aside>

                            <h2 class="entry-title">
                                <a href="blog-single.html" rel="">
                                    <?php echo $rs->name_vn; ?>
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
                                            <small>In</small><a href="#" title=""><?php echo $rs->pcname; ?></a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="post-comments-number">
                                            <a href="#" title="">1 Comments</a>
                                        </span>
                                    </li>
                                </ul>
                            </div><!-- .entry-meta -->
                        </header><!-- .entry-header -->



                        <div class="entry-content">
                            <p>
                                <?php echo $rs->desc_vn; ?>
                            </p>
                        </div><!-- .entry-content -->


                        <footer class="entry-footer"> 
                            <hr>
                            <a href="<?php echo base_url(); ?>news/<?php echo $rs->alias; ?>" class="btn btn-primary btn-sm readmore"><?php echo lang("blog_continue_reading"); ?></a>
                        </footer>
                    </article><!-- /.blog-post-wrapper -->
                    </tr>
                        <?php 
                        }
                    }?> 

                    
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
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="form-control search-field" placeholder="Search" value="" name="s" title="Search for:">
                                </label>
                                <button type="submit">Go<i class="fa fa-angle-right"></i></button>
                            </form>
                        </aside>


                        <aside class=" widget widget_recent_entries">
                            <div class="sidebar-tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#recent-post" role="tab" data-toggle="tab">Recent Post</a></li>
                                    <li><a href="#most-read" role="tab" data-toggle="tab">Most Read</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="recent-post">

                                        <ul class="tab-recent-post">
                                            <li>
                                                <div class="tab-post-thumb">
                                                    <img class="img-responsive" src="<?php echo base_url(); ?>public/frontend/img/blog/blog-1.jpg" alt="Image">
                                                </div>

                                                <div class="tab-post-heading">
                                                    <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                    <div class="entry-meta">
                                                        <span class="author">
                                                            <a href="#">Admin</a> 
                                                        </span>
                                                        <span class="post-date"> Aug 12, 2014</span>
                                                    </div><!-- .entry-meta -->
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tab-post-thumb">
                                                    <img class="img-responsive" src="<?php echo base_url(); ?>public/frontend/img/blog/blog-2.jpg" alt="Image">
                                                </div>

                                                <div class="tab-post-heading">
                                                    <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                    <div class="entry-meta">
                                                        <span class="author">
                                                            <a href="#">Admin</a> 
                                                        </span>
                                                        <span class="post-date"> Aug 12, 2014</span>
                                                    </div><!-- .entry-meta -->
                                                </div>
                                            </li>

                                        </ul>

                                    </div> <!-- /recent post tab -->

                                    <div class="tab-pane fade" id="most-read">
                                        <ul class="tab-most-read">
                                            <li>
                                                <div class="tab-post-thumb">
                                                    <img class="img-responsive" src="<?php echo base_url(); ?>public/frontend/img/blog/blog-3.jpg" alt="Image">
                                                </div>

                                                <div class="tab-post-heading">
                                                    <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                    <div class="entry-meta">
                                                        <span class="author">
                                                            <a href="#">Admin</a> 
                                                        </span>
                                                        <span class="post-date">Aug 12, 2014</span>
                                                    </div><!-- .entry-meta -->
                                                </div>
                                            </li>

                                            <li>
                                                <div class="tab-post-thumb">
                                                    <img class="img-responsive" src="<?php echo base_url(); ?>public/frontend/img/blog/blog-1.jpg" alt="Image">
                                                </div>

                                                <div class="tab-post-heading">
                                                    <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                    <div class="entry-meta">
                                                        <span class="author">
                                                            <a href="#">Admin</a> 
                                                        </span>
                                                        <span class="post-date">Aug 12, 2014</span>
                                                    </div><!-- .entry-meta -->
                                                </div>
                                            </li>

                                            <li>
                                                <div class="tab-post-thumb">
                                                    <img class="img-responsive" src="<?php echo base_url(); ?>public/frontend/img/blog/blog-2.jpg" alt="Image">
                                                </div>

                                                <div class="tab-post-heading">
                                                    <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                    <div class="entry-meta">
                                                        <span class="author">
                                                            <a href="#">Admin</a> 
                                                        </span>
                                                        <span class="post-date">Aug 12, 2014</span>
                                                    </div><!-- .entry-meta -->
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- /most read tab -->
                                </div>

                            </div><!-- /tab-wrap -->

                        </aside>
                        <aside class="widget widget_categories">
                            <h2 class="widget-title"><?php echo lang("blog_categories"); ?></h2>	

                            <ul>
                                <li><a href="#">Inspiration</a></li>
                                <li><a href="#">Life Style</a></li>
                                <li><a href="#">My Events</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget_archive">
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
                        <aside class="widget widget_tag_cloud">
                            <h2 class="widget-title">Tag Cloud</h2>
                            <ul>
                                <li><a href="#">Custom</a></li>
                                <li><a href="#">Graphic</a></li>
                            </ul>
                        </aside>

                        <aside class="widget widget_twitter_feed">
                            <h2 class="widget-title"><i class="fa fa-twitter"></i>Twitter Feed</h2>
                            <div id="sidebarTwitterWidget">

                                <div class="twitter-widget"></div>
                            </div>
                        </aside>

                        <aside class="widget widget_flicker_photo">
                            <h2 class="widget-title">Flicker Photo</h2>
                            <ul id="photoStream"></ul>
                        </aside>
                    </div><!-- /.sidebar -->

                </div><!-- /.col -->
            </div> <!-- /posts-container -->
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /blog-section -->