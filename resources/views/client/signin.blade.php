<!-- start header -->
<title>Sign In</title>
@include('partials.header_web')
<!-- end header -->

<!-- content -->
<html>
    <body>
    <h2 style="text-align: center">Login with Social Media or Manually</h2>
        <div class="container col-lg-12 ">

            <form action="/action_page.php">

                <div class="row">
                    <div class="col-md-8 form_center">

                        <div class="vl">


                        </div>

                        <div class="col">
                            <a href="#" class="fb btn">
                                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                            </a>
                            <a href="#" class="twitter btn">
                                <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                            </a>
                            <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                                </i> Login with Google+
                            </a>

                        </div>

                        <div class="col">
                            <div class="hide-md-lg">
                                <p>Or sign in manually:</p>
                            </div>

                            <input type="text" name="username" placeholder="Username" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <input type="submit" value="Login">
                        </div>

                    </div>

                </div>
            </form>
        </div>

        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="#" style="color:#666" class="btn">Sign up</a>
                </div>
                <div class="col">
                    <a href="#" style="color:#666" class="btn">Forgot password?</a>
                </div>
            </div>
        </div>
    </body>
</html>
<!-- content -->

<!-- start footer -->


@include('partials.footer_web')
<!-- end footer -->
