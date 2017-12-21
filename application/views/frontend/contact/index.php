<section class="page-title-section">
    <div class="container">
        <div class="page-header-wrap">
            <div class="page-header">
                <h1><?php echo lang("header_contact_us"); ?></h1>
            </div>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('home'); ?>"><?php echo lang("menu_home"); ?></a></li>
                <li class="active"><?php echo lang("menu_contact"); ?></li>
            </ol>
        </div>
    </div>
</section>

<section class="contact-info-section">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title"><?php echo lang("get_in_touch"); ?></h2>
            <span class="section-sub"><?php echo lang("were_are_ready"); ?></span>
        </div>

        <div class="row content-row">

            <div class="col-md-7">
                <div class="contact-map">
                    <h3>Contact Form</h3>
                    <form id="main-contact-form" action="<?php echo base_url('contact/register_contact'); ?>" method="POST">
                        <div class="form-group">
                            <label for="name"><?php echo lang("form_name"); ?></label>
                            <input name="name" type="text" class="form-control"  required="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="email"><?php echo lang("form_email_addresse"); ?></label>
                            <input name="email" type="email" class="form-control" required="" placeholder="">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject"><?php echo lang("form_subject"); ?></label>
                                    <input name="subject" type="text" class="form-control" required="" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone"><?php echo lang("form_phonenumber"); ?></label>
                                    <input name="phone" type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-area">
                            <label for="message"><?php echo lang("form_content_email"); ?></label>
                            <textarea name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary"><?php echo lang("form_send_email"); ?></button>
                    </form>
                </div>
            </div>

            <div class="col-md-5">
                <div class="contact-info">
                    <h3><?php echo lang("head_office"); ?></h3>

                    <address>
                        <?php
                        $CI = & get_instance();
                        $siteLang = $CI->session->userdata('site_lang');
                        if ($siteLang == 'vietnamese') {
                            echo lang("street") . ' Herzberg 33-34';
                        } else {
                            echo 'Herzberg ' . lang("street") . ' 33-34';
                        }
                        ?>
                        <br> 
                        Berlin 10365 <br>
                        Tel : 030 57794047<br>
                        Email : shipping@ktconsulting.de<br>
                    </address>
                </div><!-- /.contact-info -->

                <div class="contact-map">
                    <h3><?php echo lang("contact_location_map"); ?></h3>

                    <div id="contactMap"></div>
                </div><!-- /.contact-info -->


            </div>
        </div>
    </div>
</section>
<script>
    $(function () {
        $('#main-contact-form').submit(function (event) {
            event.preventDefault();
            var r = confirm('<?php echo lang("contact_are_you_sure_to_send"); ?>');
            if (r == true) {
                var form = $('#main-contact-form');
                $.ajax
                        ({
                            url: form.attr("action"),
                            data: form.serialize(),
                            type: "POST",
                            success: function (result) {
                                obj = jQuery.parseJSON(result);
                                if (obj.msg == 'success') {
                                    $(".btn-primary").notify("<?php echo lang("contact_send_success"); ?>", {position: "right", className: 'success', });
                                    $('#main-contact-form')[0].reset();
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