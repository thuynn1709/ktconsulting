<div id="main-carousel" class="carousel slide hero-slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#main-carousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <?php
        if (!empty($slidebar)) {
            $stt = 0;
            $CI = &get_instance();
            $siteLang = $CI->session->userdata('site_lang');
            foreach ($slidebar as $rs) {
                ?> 
                <div class="item <?php echo $stt == 0 ?  'active' : ''; ?>  ">
                    <img src="<?php echo base_url(); ?>public/images/slidebar/<?php echo $rs->img; ?>" alt="KT Consulting & Services BERLIN">
                    <!--Slide Image-->

                    <div class="container">
                        <div class="carousel-caption">
                            <small class="animated fadeIn"><?php echo lang('home_call_to_us'); ?></small>
                            <div class="phone animated lightSpeedIn">030-57794047</div>
                            <h1 class="animated lightSpeedIn">
                                <?php
                                if ($siteLang == 'vietnamese') {
                                    echo $rs->title_vn;
                                } else if ($siteLang == 'english') {
                                    echo $rs->title_en != '' ? $rs->title_en : $rs->title_vn;
                                } else {
                                    echo $rs->title_de != '' ? $rs->title_de : $rs->title_vn;
                                }
                                ?>

                            </h1>

                            <p class="lead animated lightSpeedIn">
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
                            <?php
                            if ( $rs->link != '') {
                                ?>
                                <a class="btn btn-primary animated lightSpeedIn" href="<?php echo $rs->link; ?>"><?php echo lang('home_read_more'); ?> </a>
                                <?php
                            }
                            ?>

                        </div>
                        <!--.carousel-caption-->
                    </div>
                    <!--.container-->
                </div>
                <!--.item-->

                <?php
                $stt += 1;
            }
        }
        ?> 


    </div>
    <!--.carousel-inner-->

    <!-- Controls -->
    <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #main-carousel-->


<!-- services start -->
<section class="service-home section-padding">
    <div class="container text-center">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section-title"><?php echo lang('home_service'); ?></h2>
                <span class="section-sub"></span>
            </div>
        </div> <!-- /.row -->

        <div class="row content-row">
            <div class="col-sm-4">
                <div class="service">
                    <div class="service-thumb-home">
                        <a href="#"><img src="<?php echo base_url(); ?>public/frontend/img/trans.jpg" alt=""></a>
                    </div>

                    <h3><?php echo lang('home_consulting'); ?></h3>
                    <p><?php echo lang('home_consulting_detail'); ?></p>
                    <a class="readmore" href="<?php echo base_url('services/consulting'); ?>"><?php echo lang('home_read_more'); ?> &nbsp;<i class="fa fa-angle-right"></i> </a>
                </div>
            </div><!-- /.col-sm-4 -->

            <div class="col-sm-4">
                <div class="service">
                    <div class="service-thumb-home">
                        <a href="#"><img src="<?php echo base_url(); ?>public/frontend/img/moving.jpg" alt=""></a>
                    </div>
                    <h3><?php echo lang('home_import_export'); ?></h3>
                    <p><?php echo lang('home_import_export_detail'); ?></p>
                    <a class="readmore" href="<?php echo base_url('services/import_export'); ?>"><?php echo lang('home_read_more'); ?> &nbsp;<i class="fa fa-angle-right"></i> </a>
                </div>

            </div><!-- /.col-sm-4 -->

            <div class="col-sm-4">
                <div class="service">
                    <div class="service-thumb-home">
                        <a href="#"><img src="<?php echo base_url(); ?>public/frontend/img/shipping.jpg" alt=""></a>
                    </div>
                    <h3><?php echo lang('home_logistics'); ?></h3>
                    <p><?php echo lang('home_logistics_detail'); ?></p>
                    <a class="readmore" href="<?php echo base_url('services/logistics'); ?>"><?php echo lang('home_read_more'); ?> &nbsp;<i class="fa fa-angle-right"></i> </a>
                </div>
            </div><!-- /.col-sm-4 -->
        </div> <!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- services end -->

<!-- featuer-section start -->
<section class="feature-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-xs-12">
                <h2><?php echo lang('home_welcome'); ?></h2>

                <?php echo lang('home_welcome_content'); ?>

                <a href="#" class="btn btn-primary">View Details</a>
            </div>

        </div>
    </div>
</section>
<!-- featuer-section end -->

<!-- why-us-setion start -->
<section class="why-us-setion section-padding" style="display: none;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12">
                <h2 class="section-title">Why Chose Us</h2>
                <span class="section-sub">Monotonectally innovate cross-media<br> resources without seamless</span>
            </div>
        </div> <!-- /.row -->

        <div class="row content-row">
            <div class="col-md-12">
                <div class="css-tab" role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#secure" aria-controls="secure" role="tab" data-toggle="tab"><i class="flaticon-logistics15"></i> Secure</a></li>
                        <li role="presentation"><a href="#trackable" aria-controls="trackable" role="tab" data-toggle="tab"><i class="flaticon-logistics18"></i> Trackable</a></li>
                        <li role="presentation"><a href="#fast" aria-controls="fast" role="tab" data-toggle="tab"><i class="flaticon-logistics16"></i> Fast</a></li>
                        <li role="presentation"><a href="#reliable" aria-controls="reliable" role="tab" data-toggle="tab"><i class="flaticon-broken43"></i> Reliable</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active fade in" id="secure">
                            <div class="css-tab-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url(); ?>public/frontend/img/secure.png" alt="">
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6 content-text">
                                        <h3>Continually disintermediate</h3>

                                        <p>Credibly build virtual materials for fully researched paradigms. Authoritatively plagiarize long-term high-impact infomediaries with goal-oriented core competencies. Conveniently visualize process-centric applications through leading-edge testing procedures. Quickly build backend customer service for real-time metrics.</p> 

                                        <p>Efficiently transform an expanded array of methodologies rather than customized infomediaries.</p>
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.css-tab-content -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="trackable">
                            <div class="css-tab-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url(); ?>public/frontend/img/track.png" alt="">
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6 content-text">
                                        <h3>Continually disintermediate</h3>

                                        <p>Credibly build virtual materials for fully researched paradigms. Authoritatively plagiarize long-term high-impact infomediaries with goal-oriented core competencies. Conveniently visualize process-centric applications through leading-edge testing procedures. Quickly build backend customer service for real-time metrics.</p> 

                                        <p>Efficiently transform an expanded array of methodologies rather than customized infomediaries.</p>
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.css-tab-content -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="fast">
                            <div class="css-tab-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url(); ?>public/frontend/img/fast.png" alt="">
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6 content-text">
                                        <h3>Continually disintermediate</h3>

                                        <p>Credibly build virtual materials for fully researched paradigms. Authoritatively plagiarize long-term high-impact infomediaries with goal-oriented core competencies. Conveniently visualize process-centric applications through leading-edge testing procedures. Quickly build backend customer service for real-time metrics.</p> 

                                        <p>Efficiently transform an expanded array of methodologies rather than customized infomediaries.</p>
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.css-tab-content -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="reliable">
                            <div class="css-tab-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url(); ?>public/frontend/img/reliable.png" alt="">
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6 content-text">
                                        <h3>Continually disintermediate</h3>

                                        <p>Credibly build virtual materials for fully researched paradigms. Authoritatively plagiarize long-term high-impact infomediaries with goal-oriented core competencies. Conveniently visualize process-centric applications through leading-edge testing procedures. Quickly build backend customer service for real-time metrics.</p> 

                                        <p>Efficiently transform an expanded array of methodologies rather than customized infomediaries.</p>
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.css-tab-content -->
                        </div>
                    </div>
                </div><!-- /.css-tab -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

    </div><!-- /.container -->
</section>
<!-- why-us-setion end -->

<!-- testimonial-section start -->
<section class="testimonial-section section-padding" style="display: none;">
    <div class="container text-center">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section-title">We are Trusted By</h2>
                <span class="section-sub">Monotonectally innovate cross-media<br> resources without seamless</span>
            </div>
        </div> <!-- /.row -->

        <div class="row row-content">
            <div class="col-md-12">
                <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                        <li data-target="#testimonial-carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="testimonial-content">
                                <p>Progressively architect prospective imperatives through competitive communities. Professionally productize user<br> friendly networks with out-of-the-box mindshare. Energistically incubate functionalized best practices after 24/365<br> information. Dramatically restore end-to-end strategic theme areas.</p>
                                <span class="client-title">- Deanna Lewis -</span>
                            </div><!-- /.testimonial-content -->
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <p>Progressively architect prospective imperatives through competitive communities. Professionally productize user<br> friendly networks with out-of-the-box mindshare. Energistically incubate functionalized best practices after 24/365<br> information. Dramatically restore end-to-end strategic theme areas.</p>
                                <span class="client-title">- Deanna Lewis -</span>
                            </div><!-- /.testimonial-content -->
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <p>Progressively architect prospective imperatives through competitive communities. Professionally productize user<br> friendly networks with out-of-the-box mindshare. Energistically incubate functionalized best practices after 24/365<br> information. Dramatically restore end-to-end strategic theme areas.</p>
                                <span class="client-title">- Deanna Lewis -</span>
                            </div><!-- /.testimonial-content -->
                        </div>
                    </div>
                </div><!-- /.carousel -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

        <hr>

        <div class="partner-section" style="display: none;">
            <div class="row row-content">
                <div class="col-md-12">
                    <div class="owl-carousel partner-carousel">
                        <div class="item">
                            <a href="#"><img src="<?php echo base_url(); ?>public/frontend/img/partner/p1.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="<?php echo base_url(); ?>public/frontend/img/partner/p2.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="<?php echo base_url(); ?>public/frontend/img/partner/p3.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="<?php echo base_url(); ?>public/frontend/img/partner/p4.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="<?php echo base_url(); ?>public/frontend/img/partner/p5.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="<?php echo base_url(); ?>public/frontend/img/partner/p1.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="<?php echo base_url(); ?>public/frontend/img/partner/p2.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="<?php echo base_url(); ?>public/frontend/img/partner/p3.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="<?php echo base_url(); ?>public/frontend/img/partner/p4.jpg" alt=""></a>
                        </div>
                    </div>


                    <div class="partner-carousel-navigation">
                        <a class="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="next"><i class="fa fa-angle-right"></i></a>
                    </div><!-- /.partner-carousel-navigation -->


                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.partner-section -->
    </div><!-- /.container -->
</section>
<!-- testimonial-section end -->

<!-- counter start -->
<section class="counter-section" data-stellar-background-ratio="0.5" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="counter-block">
                    <span class="count-description flaticon-boat"><strong class="timer">799</strong>order delivered</span>
                </div>
            </div> 
            <div class="col-sm-4 col-xs-12">
                <div class="counter-block">
                    <span class="count-description flaticon-international"><strong class="timer">19</strong>order delivered</span>
                </div>
            </div> 
            <div class="col-sm-4 col-xs-12">
                <div class="counter-block">
                    <span class="count-description flaticon-compass"><strong class="timer">521</strong>order delivered</span>
                </div>
            </div> 
        </div> <!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.counter-section -->
<!-- counter end -->

