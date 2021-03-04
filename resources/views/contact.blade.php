<!-- start header -->
<title>Contact</title>
@include('partials.header_web')
<!-- end header -->


<!-- section -->
<div class="innerpage_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact us</h2>
            </div>
        </div>
    </div>
</div>
<!-- end section -->

<!-- section -->
<div id="contact" class="contact-box">
    <div class="container">

        <div class="row">

            <div class="col-lg-7 col-sm-7 col-xs-12">
                <div class="contact-block">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-lg-5 col-sm-5 col-xs-12">
                <div class="left-contact">
                    <div class="media cont-line">
                        <div class="media-left icon-b">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                            <h4>Address</h4>
                            <p>Fleming 196 Woodside Circle Mobile, FL 36602</p>
                        </div>
                    </div>
                    <div class="media cont-line">
                        <div class="media-left icon-b">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                            <h4>Email</h4>
                            <a href="#">demoinfo@gmail.com</a><br>
                            <a href="#">demoinfo@gmail.com</a>
                        </div>
                    </div>
                    <div class="media cont-line">
                        <div class="media-left icon-b">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                            <h4>Phone Number</h4>
                            <a href="#">12345 67890</a><br>
                            <a href="#">12345 67890</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- end section -->

<!-- start footer -->

@include('partials.footer_web')

<!-- end footer -->