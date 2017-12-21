
<!-- cta start -->
<section class="cta-section">
    <div class="container text-center">
        <a data-toggle="modal" data-target="#quoteModal" href="#" class="btn btn-primary quote-btn"><?php echo lang('form_get_a_quote'); ?></a>

        <!-- Modal -->
        <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="quoteModalLabel"><?php echo lang('form_request_a_rate'); ?></h4>
                    </div>
                    <div class="modal-body">
                        <form id="contactFormGetQuote" action="<?php echo base_url('contact/register_contact'); ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"><?php echo lang('form_name'); ?></label>
                                        <input id="name" name="name" type="text" class="form-control"  required="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone"><?php echo lang('form_phonenumber'); ?></label>
                                        <input id="phone" name="phone" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email"><?php echo lang('form_email_addresse'); ?></label>
                                        <input id="email" name="email" type="email" class="form-control" required="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject"><?php echo lang('form_subject'); ?></label>
                                        <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="">
                                    </div>
                                </div>
                            </div>

                           
                            <div class="form-group text-area">
                                <label for="message"><?php echo lang('form_content_email'); ?></label>
                                <textarea id="message" name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary"><?php echo lang('form_send_email'); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container -->
</section><!-- /.cta-section -->
<!-- cta end -->

<script>
    $(function () {
        $('#contactFormGetQuote').submit(function (event) {
            event.preventDefault();
            var r = confirm('<?php echo lang("contact_are_you_sure_to_send"); ?>');
            if (r == true) {
                var form = $('#contactFormGetQuote');
                $.ajax
                        ({
                            url: form.attr("action"),
                            data: form.serialize(),
                            type: "POST",
                            success: function (result) {
                                obj = jQuery.parseJSON(result);
                                if (obj.msg == 'success') {
                                    $(".btn-primary").notify("<?php echo lang("contact_send_success"); ?>", {position: "right", className: 'success', });
                                    $('#contactFormGetQuote')[0].reset();
                                } else {
                                    $(".btn-primary").notify("<?php echo lang("contact_send_fail"); ?>", {position: "right", className: 'error', });
                                }
                            }
                        });
            } else {

            }
            return false;
        });
    })

</script>