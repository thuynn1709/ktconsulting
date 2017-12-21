
<!-- cta start -->
<section class="cta-section">
    <div class="container text-center">
        <a data-toggle="modal" data-target="#quoteModal" href="#" class="btn btn-primary quote-btn">Get a Quote</a>

        <!-- Modal -->
        <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="quoteModalLabel">Request a rate for the shipping of your goods.</h4>
                    </div>
                    <div class="modal-body">
                        <form id="contactForm" action="sendemail.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" name="name" type="text" class="form-control"  required="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company">Company Name</label>
                                        <input id="company" name="company" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input id="phone" name="phone" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input id="email" name="email" type="email" class="form-control" required="" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City Name</label>
                                        <input id="city" name="city" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-area">
                                <label for="message">Your Message</label>
                                <textarea id="message" name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container -->
</section><!-- /.cta-section -->
<!-- cta end -->