



<!-- footer-widget-section start -->
<section class="footer-widget-section section-padding" style="">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-1 col-sm-4">
                <div class="footer-widget">
                    <h3>Place &amp; Contact</h3>

                    <address>
                        384 Maple Circle<br>
                        Simi Valley, Nevada 47424<br>

                        <!-- Google Map Modal Trigger -->
                        <button type="button" class="modal-map" data-toggle="modal" data-target="#cssMapModal">Location  Map</button>

                        <span class="tel">(554) 616-9926</span>
                    </address>


                    <!-- Modal -->
                    <div class="modal fade" id="cssMapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Our Location</h4>
                                </div>
                                <div class="modal-body">

                                    <div id="googleMap"></div>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- End Modal -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-3 col-sm-4">
                <div class="footer-widget">
                    <h3>About Transport</h3>

                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="service.html">Service</a></li>
                        <li><a href="our-people.html">Our people</a></li>
                        <li><a href="career.html">Career</a></li>
                        <li><a href="faq.html">FAQ Page</a></li>
                    </ul>
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-4 col-sm-4">
                <div class="footer-widget">
                    <h3>Stay in Touch</h3>
                    <p>Enter your email address to receive news &amp; offers from us</p>

                    <form class="newsletter-form">
                        <div class="form-group">
                            <label class="sr-only" for="InputEmail1">Email address</label>
                            <input type="email" class="form-control" id="InputEmail1" placeholder="Your email address">
                            <button type="submit" class="">Send &nbsp;<i class="fa fa-angle-right"></i></button>
                        </div>
                    </form>		        				
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.cta-section -->
<!-- footer-widget-section end -->

<!-- copyright-section start -->
<footer class="copyright-section">
    <div class="container text-center">
        <div class="footer-menu">
            <ul>
                <li><a href="#">Privacy &amp; Cookies</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Accessibility</a></li>
            </ul>
        </div>

        <div class="copyright-info">
            <span>Copyright © 2015 Unship. All Rights Reserved. Designed by <a href="https://uicookies.com">uiCookies</a><br> Proudly powered by <a href="http://www.w3schools.com/html/html5_intro.asp">HTML5</a> and <a href="getbootstrap.com">Bootstrap3</a></span>
        </div>
    </div><!-- /.container -->
</footer>
<!-- copyright-section end -->
</div> <!-- .st-content -->
</div> <!-- .st-pusher -->

<!-- OFF CANVAS MENU -->
<div class="offcanvas-menu offcanvas-effect">
    <div class="offcanvas-wrap">
        <div class="off-canvas-header">
            <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
        </div>
        <ul id ="offcanvasMenu" class="list-unstyled visible-xs visible-sm">
            <li class="<?php if ($controller == 'home') echo ' active '; ?>"><a href="<?php echo base_url('home'); ?>"><?php echo lang("menu_home"); ?><span class="sr-only">(current)</span></a></li>

            <!-- About us -->
            <li <?php if ($controller == 'about') echo 'class="active"'; ?>><a href="<?php echo base_url('about'); ?>"><?php echo lang("menu_about"); ?></a></li>
            <!-- /About us -->
            <li class="<?php if ($controller == 'services') echo ' active '; ?>">
                <a href="<?php echo base_url('services/consulting'); ?>"><?php echo lang("menu_services"); ?></a>
                <ul>
                    <li><a href="<?php echo base_url('services/consulting'); ?>"><?php echo lang("menu_service_consulting"); ?></a></li>
                    <li><a href="<?php echo base_url('services/import_export'); ?>"><?php echo lang("menu_service_import_export"); ?></a></li>
                    <li><a href="<?php echo base_url('services/logistics'); ?>"><?php echo lang("menu_service_logistic"); ?></a></li>
                </ul>

            </li>
            <li class="<?php if ($controller == 'news') echo ' active '; ?>"><a href="<?php echo base_url('news'); ?>"><?php echo lang("menu_news"); ?></a></li>
            <li class="<?php if ($controller == 'contact') echo ' active '; ?>"><a href="<?php echo base_url('contact'); ?>"><?php echo lang("menu_contact"); ?></a></li>

        </ul>
        <div class="offcanvas-widgets hidden-sm hidden-xs">
            <div id="twitterWidget">
                <h2>Tweeter feed</h2>				    	
                <div class="twitter-widget"></div>
            </div>
            <div class="newsletter-widget">
                <h2>Stay in Touch</h2>
                <p>Enter your email address to receive news &amp; offers from us</p>

                <form class="newsletter-form">
                    <div class="form-group">
                        <label class="sr-only" for="InputEmail1">Email address</label>
                        <input type="email" class="form-control" id="InputEmail2" placeholder="Your email address">
                        <button type="submit" class="btn">Send &nbsp;<i class="fa fa-angle-right"></i></button>
                    </div>
                </form>		

            </div><!-- newsletter-widget -->
        </div>

    </div>
</div><!-- .offcanvas-menu -->
</div><!-- /st-container -->




<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>




</body>



</html>