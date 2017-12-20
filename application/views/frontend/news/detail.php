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
                        <li><a href="<?php echo base_url('news'); ?>"><?php echo lang("menu_news"); ?></a></li>
                        <li class="active">
                            <?php
                            if ($siteLang == 'vietnamese') {
                                echo $item->name_vn;
                            } else if ($siteLang == 'english') {
                                echo $item->name_en != '' ? $item->name_en : $item->name_vn;
                            } else {
                                echo $item->name_de != '' ? $item->name_de : $item->name_vn;
                            }
                            ?>
                        </li>
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
                    <article class="blog-post-wrapper">
                        <div class="figure">    
                            <div class="post-thumbnail">
                                <img src="<?php echo base_url().'public/images/news/'. $item->img ; ?>" class="img-responsive " alt="">
                            </div>

                        </div>
                        <header class="entry-header clearfix">
                            <aside>
                                <div class="posted-date pull-left">
                                    <span class="day"><?php echo date('d', $item->created); ?></span>
                                    <span class="month"><?php echo toNameofMonth($item->created); ?>,</span>
                                    <span class="year"><?php echo date('Y', $item->created); ?></span>
                                </div>	
                                <div class="post-like pull-right">
                                    <a href="#"  title="Like this">
                                        <i class="fa fa-heart"></i><span><?php echo $item->readed + 50; ?></span> 
                                    </a>                    
                                </div>
                                <div class="clearfix"></div>
                            </aside>

                            <h2 class="entry-title"><a href="#" rel="">
                                    <?php
                                    if ($siteLang == 'vietnamese') {
                                        echo $item->name_vn;
                                    } else if ($siteLang == 'english') {
                                        echo $item->name_en != '' ? $item->name_en : $item->name_vn;
                                    } else {
                                        echo $item->name_de != '' ? $item->name_de : $item->name_vn;
                                    }
                                    ?>
                                </a></h2>

                            <div class="entry-meta">
                                <ul class="list-inline">
                                    <li>
                                        <span class="author">
                                            <small>By</small><a class="url" href="#"><?php echo $item->author; ?></a> 
                                        </span>
                                    </li>
                                    <li>
                                        <span class="posted-in">
                                            <small>Under</small> <a href="#">Feature</a>, <a href="#">Tag</a>, <a href="#">Concept</a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="post-category">
                                            <small>In</small><a href="#" title="">Blog</a>
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
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            <p>Efficiently deploy resource-leveling methods of empowerment through adaptive platforms. Intrinsicly exploit efficient paradigms after client-based quality vectors. Rapidiously incentivize synergistic synergy and market-driven infomediaries. Objectively fabricate superior core competencies vis-a-vis compelling infomediaries. Energistically embrace 24/7 web services after web-enabled outsourcing.</p>
                            <p>Globally promote 24/365 action items after leading-edge action items. Efficiently target intuitive models for value-added data. Dynamically negotiate principle-centered web-readiness via high standards in value. Completely pursue collaborative schemas vis-a-vis real-time meta-services. Appropriately synergize fully tested value whereas clicks-and-mortar outsourcing.</p>
                            <p>Synergistically fashion an expanded array of e-tailers before functional best practices. Compellingly evolve technically sound niches after next-generation e-markets. Energistically.</p>
                        </div><!-- .entry-content -->
                    </article><!-- /.blog-post-wrapper -->

                    <div class="social-share">
                        <ul class="list-inline social-links">
                            <!-- Facebook link-->
                            <li>Share:</li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <!-- Twitter link -->
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <!-- Google plus link -->
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <!-- Linkedin link -->
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                    <section class="pagination-wrap" style="margin-bottom: 30px; margin-top: 30px">
                        <div class="blog-pagenav">
                          
                            <nav>
                                <a class="pull-left" style="font-weight: 700;color: #606676" href="<?php echo !empty($link_prev) ? base_url('news/detail/'). $link_prev->alias : ''; ?>">Prev.</a>
                                <a class="pull-right" style="font-weight: 700;color: #606676" href="<?php echo !empty($link_prev) ? base_url('news/detail/'). $link_prev->alias : ''; ?>">Next</a>
                            </nav>
                        </div>
                        <div class="clearfix"></div>
                    </section>

                    <div class="about-author clearfix">
                        <div class="media">
                            <a class="pull-left" href="#"><img alt="Image" src="<?php echo base_url(); ?>public/frontend/img/admin.jpg"></a>
                            <div class="media-body">
                                <div class="author-info media-heading">
                                    <h3>About Author</h3>
                                    <p>Lorem ipsum dolor sit amet,nsectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.eleifend enim a feugiat.Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="comments-wrapper" style="display: none">
                        <h2>Comments</h2>
                        <ul class="media-list">
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <div class="comment-avatar">
                                            <a href="#">
                                                <img class="media-object" src="img/admin.jpg" alt="Author">
                                            </a>
                                        </div><!-- /.comment-avatar -->
                                    </div><!-- /.media-left -->

                                    <div class="media-body">
                                        <span class="comment-author"><i class="fa fa-user"></i>Author</span>
                                        <span class="comment-date"><i class="fa fa-calendar"></i>January 25, 2015</span>

                                        <div class="comment-body">Morbi aliquam pellentesque neque estibulum viverra faucibus lorem</div><!-- /.comment-body -->

                                        <span class="comments-buttons"><a href="#">Reply</a></span>
                                    </div><!-- /.media-body -->
                                </div>

                                <!-- nested-media-list-->
                                <ul class="nested-media-list">
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="comment-avatar">
                                                    <a href="#">
                                                        <img class="media-object" src="img/admin.jpg" alt="Author">
                                                    </a>
                                                </div><!-- /.comment-avatar -->
                                            </div><!-- /.media-left -->

                                            <div class="media-body">
                                                <span class="comment-author"><i class="fa fa-user"></i>Author</span>
                                                <span class="comment-date"><i class="fa fa-calendar"></i>January 25, 2015</span>

                                                <div class="comment-body">Morbi aliquam pellentesque neque estibulum viverra faucibus lorem</div><!-- /.comment-body -->

                                                <span class="comments-buttons"><a href="#">Reply</a></span>
                                            </div><!-- /.media-body -->
                                        </div>
                                        <!-- nested-media-list-->
                                        <ul class="nested-media-list">
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="comment-avatar">
                                                            <a href="#">
                                                                <img class="media-object" src="img/admin.jpg" alt="Author">
                                                            </a>
                                                        </div><!-- /.comment-avatar -->
                                                    </div><!-- /.media-left -->

                                                    <div class="media-body">
                                                        <span class="comment-author"><i class="fa fa-user"></i>Author</span>
                                                        <span class="comment-date"><i class="fa fa-calendar"></i>January 25, 2015</span>

                                                        <div class="comment-body">Morbi aliquam pellentesque neque estibulum viverra faucibus lorem</div><!-- /.comment-body -->

                                                        <span class="comments-buttons"><a href="#">Reply</a></span>
                                                    </div><!-- /.media-body -->
                                                </div>
                                            </li>
                                        </ul><!-- /.nested-media-list -->
                                    </li>
                                </ul><!-- /.nested-media-list -->
                            </li>

                        </ul>

                        <ul class="media-list">
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <div class="comment-avatar">
                                            <a href="#">
                                                <img class="media-object" src="img/admin.jpg" alt="Author">
                                            </a>
                                        </div><!-- /.comment-avatar -->
                                    </div><!-- /.media-left -->

                                    <div class="media-body">
                                        <span class="comment-author"><i class="fa fa-user"></i>Author</span>
                                        <span class="comment-date"><i class="fa fa-calendar"></i>January 25, 2015</span>

                                        <div class="comment-body">Morbi aliquam pellentesque neque estibulum viverra faucibus lorem</div><!-- /.comment-body -->

                                        <span class="comments-buttons"><a href="#">Reply</a></span>
                                    </div><!-- /.media-body -->
                                </div><!-- /.media-->
                            </li>
                        </ul>
                        <div class="comment-form">
                            <h2>Add Comment</h2>
                            <div class="comment-notes">Your email address will not be published. Required fields are marked *</div>

                            <form>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="exampleInputName2">Name (required)</label>
                                            <input type="text" class="form-control" id="exampleInputName2" placeholder="">
                                        </div>
                                    </div> <!-- /.col -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail2">E-mail (required, but will not display)</label>
                                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="">
                                        </div>
                                    </div> <!-- /.col -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputWebsite2">Website</label>
                                            <input type="url" class="form-control" id="exampleInputWebsite2" placeholder="">
                                        </div>
                                    </div> <!-- /.col -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputMessage">Message</label>
                                            <textarea class="form-control" rows="6" id="exampleInputMessage" placeholder=""></textarea>
                                        </div>
                                    </div> <!-- /.col -->
                                </div><!-- /.row -->
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Notify me of follow-up comments
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </section>

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
                                                            <h3><a href="<?php echo base_url(); ?>news/<?php echo $rp->alias; ?>">
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
                                                            <img class="img-responsive" src="<?php echo base_url(); ?>public/images/news/<?php echo $mr->img; ?>" alt="Image">
                                                        </div>

                                                        <div class="tab-post-heading">
                                                            <h3><a href="<?php echo base_url(); ?>news/<?php echo $mr->alias; ?>">
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
                                                                    <a href="#"><?php echo $mr->author; ?></a> 
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