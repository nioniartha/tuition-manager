<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>User Web - Tuition Manager</title>
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
                <!-- About Title Starts -->
                <div class="bl-box valign-wrapper">
                    <div class="page-title center-align">
                        <span class="title-bg">Payment</span>
                        <h2 class="center-align">
                            <span data-hover="Profile">Profile</span>
                            <span data-hover="History">History</span>
                        </h2>
                    </div>
                </div>
                <!-- About Title Ends -->
                <!-- About Expanded Starts -->
                <div class="bl-content">
                    <!-- Main Heading Starts -->
                    <div class="container page-title center-align">
                        <h2 class="center-align">
                            <span data-hover="Profile">Profile</span>
                            <span data-hover="History">History</span>
                        </h2>
                        <span class="title-bg">Payment</span>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="container infos">
						<!-- Divider Starts -->
                        <div class="divider center-align">
                            <span class="outer-line"></span>
                            <span class="fa fa-vcard" aria-hidden="true"></span>
                            <span class="outer-line"></span>
                        </div>
						<!-- Divider Ends -->
						<!-- Personal Informations Starts -->
                        <div class="row">
							<!-- Picture Starts -->
                            <div class="col s12 m5 l4 xl3 profile-picture">
								<img src="{{ url('../assets/images/photo-about.jpg') }}" class="responsive-img my-picture" alt="My Photo">
                            </div>
							<!-- Picture Ends -->
                            <div class="col s12 m7 l8 xl9 personal-info">
                                <h6 class="uppercase"><i class="fa fa-user"></i> Personal Informations</h6>
								<div class="col m12 l7 xl7 p-none">
									<p class="second-font">I'm a Freelance Web Designer & Developer based in Madrid, Spain.<br>
									I have serious passion for UI effects, animations and creating intuitive, 
									with over a decade of experience.
									</p>
								</div>
                                <div class="col s12 m12 l6 p-none">
                                    <ul class="second-font list-1">
                                        <li><span class="font-weight-600">First Name: </span>Lina</li>
                                        <li><span class="font-weight-600">Last Name: </span>Marzouki</li>
                                        <li><span class="font-weight-600">Date of birth: </span>21 june 1990 </li>
                                        <li><span class="font-weight-600">Nationality: </span>Spanish</li>
										<li><span class="font-weight-600">Freelance: </span>Available</li>
                                    </ul>
                                </div>
                                <div class="col s12 m12 l6 p-none">
                                    <ul class="second-font list-2">
                                        <li><span class="font-weight-600">Phone: </span>+34 21 18 40 10</li>
                                        <li><span class="font-weight-600">Address: </span>Madrid, Spain</li>
                                        <li><span class="font-weight-600">Email: </span>you@yourwebsite.com</li>
                                        <li><span class="font-weight-600">Spoken Langages: </span>French - German</li>
										<li><span class="font-weight-600">Skype: </span>lina.marzouki</li>
                                    </ul>
                                </div>
                                <a href="#" class="col s12 m12 l4 xl4 waves-effect waves-light btn font-weight-500">
									Download Resume <i class="fa fa-file-pdf-o"></i>
								</a>
								<a href="blog-dark.html" class="col s12 m12 l4 xl4 btn btn-blog font-weight-500">
									My Blog <i class="fa fa-edit"></i>
								</a>
                            </div>
                        </div>
						<!-- Personal Informations Ends -->
                    </div>
					<!-- Resume Starts -->
					<div class="resume-container">
                        <div class="container">
                            <div class="valign-wrapper row">
								<!-- Resume Menu Starts -->
                                <div class="resume-list col l4">
                                    <div class="resume-list-item is-active" data-index="0" id="resume-list-item-0">
                                        <div class="resume-list-item-inner">
                                            <h6 class="resume-list-item-title uppercase"><i class="fa fa-briefcase"></i> Experience</h6>
                                        </div>
                                    </div>
                                    <div class="resume-list-item" data-index="1" id="resume-list-item-1">
                                        <div class="resume-list-item-inner">
                                            <h6 class="resume-list-item-title uppercase"><i class="fa fa-graduation-cap"></i> Education</h6>
                                        </div>
                                    </div>
                                    <div class="resume-list-item" data-index="2" id="resume-list-item-2">
                                        <div class="resume-list-item-inner">
                                            <h6 class="resume-list-item-title uppercase"><i class="fa fa-star"></i> Skills</h6>
                                        </div>
                                    </div>
                                </div>
								<!-- Resume Menu Ends -->
								<!-- Resume Content Starts -->
                                <div class="col s12 m12 l8 resume-cards-container">
                                    <div class="resume-cards">
										<!-- Experience Starts -->
                                        <div class="resume-card resume-card-0" data-index="0">
											<!-- Experience Header Title Starts -->
                                            <div class="resume-card-header">
                                                <div class="resume-card-name"><i class="fa fa-briefcase"></i> Experience</div>
                                            </div>
											<!-- Experience Header Title Ends -->
											<!-- Experience Content Starts -->
                                            <div class="resume-card-body experience">
                                                <div class="resume-card-body-container second-font">
													<!-- Single Experience Starts -->
                                                    <div class="resume-content">
														<h6 class="uppercase"><span>Web Designer - </span>Envato</h6>
														<span class="date"><i class="fa fa-calendar-o"></i> 2015 - 2018</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper</p>
                                                    </div>
													<!-- Single Experience Ends -->
                                                    <span class="separator"></span>
													<!-- Single Experience Starts -->
                                                    <div class="resume-content">
														<h6 class="uppercase"><span>Web Developer - </span>Google</h6>
														<span class="date"><i class="fa fa-calendar-o"></i> 2011 - 2015</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper</p>
                                                    </div>
													<!-- Single Experience Ends -->
                                                    <span class="separator"></span>
													<!-- Single Experience Starts -->
                                                    <div class="resume-content">
														<h6 class="uppercase"><span>Community Manager - </span>Adobe</h6>
														<span class="date"><i class="fa fa-calendar-o"></i> 2007 - 2011</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper</p>
                                                    </div>
													<!-- Single Experience Ends -->
                                                </div>
                                            </div>
											<!-- Experience Content Starts -->
                                        </div>
										<!-- Experience Ends -->
										<!-- Education Starts -->
                                        <div class="resume-card resume-card-1" data-index="1">
											<!-- Education Header Title Starts -->
                                            <div class="resume-card-header">
                                                <div class="resume-card-name"><i class="fa fa-graduation-cap"></i> Education</div>
                                            </div>
											<!-- Education Header Title Starts -->
                                            <div class="resume-card-body education">
                                                <div class="resume-card-body-container second-font">
													<!-- Single Education Starts -->
                                                    <div class="resume-content">
														<h6 class="uppercase"><span>Engineering Diploma - </span>Oxford University</h6>
														<span class="date"><i class="fa fa-calendar-o"></i> 2015 - 2018</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper</p>
                                                    </div>
													<!-- Single Education Ends -->
                                                    <span class="separator"></span>
													<!-- Single Education Starts -->
                                                    <div class="resume-content">
														<h6 class="uppercase"><span>Masters Degree - </span>Paris University</h6>
														<span class="date"><i class="fa fa-calendar-o"></i> 2011 - 2015</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper</p>
                                                    </div>
													<!-- Single Education Ends -->
                                                    <span class="separator"></span>
													<!-- Single Education Starts -->
                                                    <div class="resume-content">
														<h6 class="uppercase"><span>Bachelor Degree - </span>Berlin Higher Institute</h6>
														<span class="date"><i class="fa fa-calendar-o"></i> 2007 - 2011</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper</p>
                                                    </div>
													<!-- Single Education Ends -->
                                                </div>
                                            </div>
                                        </div>
										<!-- Education Ends -->
										<!-- Skills Starts -->
                                        <div class="resume-card resume-card-2" data-index="2">
											<!-- Skills Header Title Starts -->
                                            <div class="resume-card-header">
                                                <div class="resume-card-name"><i class="fa fa-star"></i> Skills</div>
                                            </div>
											<!-- Skills Header Title Starts -->
                                            <div class="resume-card-body skills">
                                                <div class="resume-card-body-container second-font">
                                                    <div class="row">
														<!-- Skills Row Starts -->
                                                        <div class="col s6">
															<!-- Single Skills Starts -->
                                                            <div class="resume-content">
																<h6 class="uppercase">html</h6>
																<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></p>
                                                            </div>
															<!-- Single Skills Ends -->
															<!-- Single Skills Starts -->
                                                            <div class="resume-content">
																<h6 class="uppercase">javascript</h6>
																<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i></p>
                                                            </div>
															<!-- Single Skills Ends -->
															<!-- Single Skills Starts -->
                                                            <div class="resume-content">
																<h6 class="uppercase">css</h6>
																<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i></p>
                                                            </div>
															<!-- Single Skills Ends -->
															<!-- Single Skills Starts -->
                                                            <div class="resume-content">
																<h6 class="uppercase">php</h6>
																<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
                                                            </div>
															<!-- Single Skills Ends -->
															<!-- Single Skills Starts -->
                                                            <div class="resume-content">
																<h6 class="uppercase">jquery</h6>
																<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></p>
                                                            </div>
															<!-- Single Skills Ends -->
															<!-- Single Skills Starts -->
                                                            <div class="resume-content">
																<h6 class="uppercase">angular js</h6>
																<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
                                                            </div>
															<!-- Single Skills Ends -->
                                                        </div>
														<!-- Skills Row Ends -->
														<!-- Skills Row Starts -->
                                                        <div class="col s6">
															<!-- Single Skills Starts -->
                                                            <div class="resume-content">
																<h6 class="uppercase">wordpress</h6>
																<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i></p>
                                                            </div>
															<!-- Single Skills Ends -->
															<!-- Single Skills Starts -->
                                                            <div class="resume-content">
																<h6 class="uppercase">joomla</h6>
																<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i> <i class="fa fa-star-o"></i></p>
                                                            </div>
															<!-- Single Skills Ends -->
															<!-- Single Skills Starts -->
                                                            <div class="resume-content">
																<h6 class="uppercase">magento</h6>
																<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i></p>
                                                            </div>
															<!-- Single Skills Ends -->
															<!-- Single Skills Starts -->
                                                            <div class="resume-content">
																<h6 class="uppercase">drupal</h6>
																<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></p>
                                                            </div>
															<!-- Single Skills Ends -->
															<!-- Single Skills Starts -->
                                                            <div class="resume-content">
																<h6 class="uppercase">Adobe Photoshop</h6>
																<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i></p>
                                                            </div>
															<!-- Single Skills Ends -->
															<!-- Single Skills Starts -->
                                                            <div class="resume-content">
																<h6 class="uppercase">Adobe illustrator</h6>
																<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i> <i class="fa fa-star-o"></i></p>
                                                            </div>
															<!-- Single Skills Ends -->
                                                        </div>
														<!-- Skills Row Ends -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<!-- Skills Ends -->
                                    </div>
                                </div>
								<!-- Resume Content Ends -->
                            </div>
                        </div>
                    </div>
					<!-- Resume Ends -->
					<!-- Fun Facts Starts -->
                    <div class="container badges">
                        <div class="row">
                            <!-- Fact Badge Item Starts -->
                            <div class="col s12 m4 l4 center-align">
                                <h3>
                                    <i class="fa fa-suitcase"></i>
									<span class="font-weight-700">7+</span>
                                </h3>
                                <h6 class="uppercase font-weight-500">Years Experience</h6>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col s12 m4 l4 center-align">
                                <h3>
                                    <i class="fa fa-check-square"></i>
									<span class="font-weight-700">89+</span>
                                </h3>
                                <h6 class="uppercase font-weight-500">Done Projects</h6>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col s12 m4 l4 center-align">
                                 <h3>
                                    <i class="fa fa-heart"></i>
									<span class="font-weight-700">77+</span>
                                </h3>
                                <h6 class="uppercase font-weight-500">Happy customers</h6>
                            </div>
                            <!-- Fact Badge Item Ends -->
                        </div>
                    </div>
					<!-- Fun Facts Ends -->
                </div>
                <!-- End Expanded About -->
                <img alt="close" src="{{ url('../assets/images/close-button.png') }}" class="bl-icon-close" />
            </section>
            <!-- About Ends -->
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