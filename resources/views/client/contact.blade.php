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
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form method="POST" id="contactForm" action="{{url('sendemail/send')}}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="content" class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit" name="send" value="Send">Send Message</button>
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
                            <p>24 Phan Liem, Da Kao, Quan 1, Ho Chi Minh, Viet Nam</p>
                        </div>
                    </div>
                    <div class="media cont-line">
                        <div class="media-left icon-b">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                            <h4>Email</h4>
                            <a href="#">portfoliopremium@gmail.com</a><br>

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

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1298.4932636602566!2d106.69445751031638!3d10.789983380455622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cb4ba30aa5%3A0x3a0ddc230888b922!2zMjQgUGhhbiBMacOqbSwgxJBhIEthbywgUXXhuq1uIDEsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1614919280901!5m2!1svi!2s" width="2000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
    </div>
</div>




<!-- end section -->

<!-- start footer -->

@include('partials.footer_web')

<!-- end footer -->
