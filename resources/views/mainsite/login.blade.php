<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lina - Creative vCard, Resume, CV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/jquery.animatedheadline.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/materialize.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/skins/magenta.css')}}"/>

    <!-- Template JS Files -->
    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>

</head>

<body class="dark">
    <!-- Preloader Start -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <div id="bl-main" class="bl-main">
            <section>
				<!-- Contact Title Starts -->
                <div class="bl-box valign-wrapper">
                    <div class="page-title center-align">
                        <span class="title-bg">User</span>
                        <h2 class="center-align">
                            <span data-hover="Sign">Sign </span>
                            <span data-hover="In">In</span>
                        </h2>
                    </div>
                </div>
				<!-- Contact Title Ends -->
                <!-- Expanded Contact Starts -->
                <div class="bl-content">
                    <!-- Main Heading Starts -->
                    <div class="container page-title center-align">
                        <h2 class="center-align">
                            <span data-hover="Sign">Sign </span>
                            <span data-hover="In">In</span>
                        </h2>
						<span class="title-bg">User</span>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="container">
                        <!-- Divider Starts -->
                        <div class="divider center-align">
                            <span class="outer-line"></span>
                            <span class="fa fa-envelope-open" aria-hidden="true"></span>
                            <span class="outer-line"></span>
                        </div>
                        <!-- Divider Ends -->
                        <div class="row contact">
							<!-- Contact Infos Starts -->
                            <div class="col s12 m5 l3 xl3 leftside">
								<!-- Contacts Starts -->
                                <h6 class="font-weight-500 uppercase">Phone</h6>
                                <span class="font-weight-400 second-font"><i class="fa fa-phone"></i> +34 62 11 84 01</span>
								<h6 class="font-weight-500 uppercase">Email</h6>
								<span class="font-weight-400 second-font"><i class="fa fa-envelope"></i> you@youwebsite.com</span>
								<h6 class="font-weight-500 uppercase">Address</h6>
								<span class="font-weight-400 second-font"><i class="fa fa-home"></i>  Madrid, Spain</span><br>
								<span class="font-weight-400 second-font">123 Disney Street, Madrid</span>
								<!-- Contacts Ends -->
								<!-- Social Media Profiles Starts -->
                                <h6 class="font-weight-500 uppercase">Social Profiles</h6>
                                <div class="social">
                                    <ul class="list-inline social social-intro center-align p-none">
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
								<!-- Social Media Profiles Ends -->
                            </div>
							<!-- Contact Infos Ends -->
							<!-- Contact Form Starts -->
                            <div class="col s12 m7 l9 xl9 rightside">
								<h6 class="uppercase m-none">Feel free to drop me a line</h6>
								<div class="row">
									<p class="col s12 m12 l7 xl7 second-font">
										If you have any suggestion, project or even you want to say Hello.. please fill out the form below and I will reply you shortly.
									</p>
								</div>
                                <form class="contactform" method="post" action="">
                                    <!-- Name Field Starts -->
                                    <div class="input-field second-font">
                                        <i class="fa fa-user prefix"></i>
                                        <input id="nisn" name="nisn" type="text" class="validate" required>
                                        <label class="font-weight-400" for="nisn">Your nisn</label>
                                    </div>
                                    <!-- Name Field Ends -->
									<!-- Submit Form Button Starts -->
                                    <div class="col s12 m12 l4 xl4 submit-form">
                                        <button class="btn font-weight-500" type="submit" name="send">
											Sign In
										</button>
                                    </div>
                                    <!-- Submit Form Button Ends -->
                                    <div class="col s12 m12 l8 xl8 form-message">
                                        <span class="output_message center-align font-weight-500 uppercase"></span>
                                    </div>
                                </form>
                            </div>
                            <!-- Contact Form Ends -->
                        </div>
                    </div>
                </div>
                <!-- Expanded Contact Ends -->
                <img alt="close" src="{{ url('../assets/images/close-button.png') }}" class="bl-icon-close" />
            </section>
        </div>
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animatedheadline.js') }}"></script>
    <script src="{{ asset('assets/js/boxlayout.js') }}"></script>
    <script src="{{ asset('assets/js/materialize.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>