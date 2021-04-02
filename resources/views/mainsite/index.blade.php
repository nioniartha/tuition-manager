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
            <!-- Top Left Section Starts -->
            <section class="topleft">
                <div class="bl-box row valign-wrapper">
                    <div class="row valign-wrapper">
                        <div class="title-heading">
                            <div class="selector uppercase" id="selector">
                                <h3 class="ah-headline p-none m-none">
                                    <span class="font-weight-300">Hi There !</span>
                                    <span class="ah-words-wrapper">
										<b class="is-visible">Welcome to</b>
										<b>Tuition Manager</b>
									</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Top Left Section Ends -->
            <!-- About Section Starts -->
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
            <!-- Portfolio Starts -->
            <section class="topleft">
                <div class="bl-box row valign-wrapper">
                    <div class="row valign-wrapper">
                        <div class="title-heading">
                            <div class="selector uppercase" id="selector">
                                <h3 class="ah-headline p-none m-none">
                                    <span class="font-weight-300">Hi There !</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Portfolio Section Ends -->
            <!-- Contact Section Starts -->
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
                                <form class="contactform" method="post" action="php/process-form.php">
                                    <!-- Name Field Starts -->
                                    <div class="input-field second-font">
                                        <i class="fa fa-user prefix"></i>
                                        <input id="name" name="name" type="text" class="validate" required>
                                        <label class="font-weight-400" for="name">Your Name</label>
                                    </div>
                                    <!-- Name Field Ends -->
                                    <!-- Email Field Starts -->
                                    <div class="input-field second-font">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input id="email" type="email" name="email" class="validate" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                    <!-- Email Field Ends -->
                                    <!-- Start Message Textarea Starts -->
                                    <div class="input-field second-font">
                                        <i class="fa fa-comments prefix"></i>
                                        <textarea id="message" name="message" class="materialize-textarea" required></textarea>
                                        <label for="message">Your message</label>
                                    </div>
                                    <!-- Message Textarea Ends -->
									<!-- Submit Form Button Starts -->
                                    <div class="col s12 m12 l4 xl4 submit-form">
                                        <button class="btn font-weight-500" type="submit" name="send">
											Send Message <i class="fa fa-send"></i>
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
            <!-- Contact Section Ends -->
            <!-- Portfolio Panel Items Starts -->
            <div class="bl-panel-items" id="bl-panel-work-items">
				<!-- Project Starts -->
                <div data-panel="panel-1">
                    <div class="row">
                        <!-- Project Main Content Starts -->
                        <div class="col s12 l6 xl6">
                            <img class="responsive-img" src="{{ url('../assets/images/projects/project-1.jpg') }}" alt="project" />
                        </div>
                        <!-- Project Main Content Ends -->
                        <!-- Project Details Starts -->
                        <div class="col s12 l6 xl6">
                            <h3 class="font-weight-600 white-text uppercase">Image Project</h3>
                            <ul class="project-details white-text second-font">
                                <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Envato</span></li>
                                <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                                <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">php, html, css, javascript</span></li>
                            </ul>
                            <hr>
                            <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                            <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
                        </div>
                        <!-- Project Details Ends -->
                    </div>
                </div>
				<!-- Project Ends -->
				<!-- Project Starts -->
                <div data-panel="panel-2">
                    <div class="row">
                        <!-- Project Main Content Starts -->
                        <div class="col s12 l6 xl6">
                            <div class="carousel carousel-slider">
                                <a class="carousel-item" href="#one!"><img class="responsive-img" src="{{ url('../assets/images/projects/project-2.jpg') }} " alt="project" ></a>
                                <a class="carousel-item" href="#two!"><img class="responsive-img" src="{{ url('../assets/images/projects/project-1.jpg') }} " alt="project" ></a>
                                <a class="carousel-item" href="#three!"><img class="responsive-img" src="{{ url('../assets/images/projects/project-3.jpg') }} " alt="project" ></a>
                                <a class="carousel-item" href="#four!"><img class="responsive-img" src="{{ url('../assets/images/projects/project-4.jpg') }} " alt="project" ></a>
                            </div>
                        </div>
                        <!-- Project Main Content Ends -->
                        <!-- Project Details Starts -->
                        <div class="col s12 l6 xl6">
                            <h3 class="font-weight-600 white-text uppercase">Slider Project</h3>
                            <ul class="project-details white-text second-font">
                                <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Themeforest</span></li>
                                <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                                <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">php, html, css, javascript</span></li>
                            </ul>
                            <hr>
                            <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                            <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
                        </div>
                        <!-- Project Details Ends -->
                    </div>
                </div>
				<!-- Project Ends -->
				<!-- Project Starts -->
                <div data-panel="panel-3">
                    <div class="row">
                        <!-- Project Main Content Starts -->
                        <div class="col s12 l6 xl6">
                            <div class="videocontainer">
                                <iframe class="youtube-video" src="https://www.youtube.com/embed/7e90gBu4pas?enablejsapi=1&version=3&playerapiid=ytplayer" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- Project Main Content Ends -->
                        <!-- Project Details Starts -->
                        <div class="col s12 l6 xl6">
                            <h3 class="font-weight-600 white-text uppercase">Youtube Video</h3>
                            <ul class="project-details white-text second-font">
                                <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Photodune</span></li>
                                <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                                <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe After Effects, Adobe Audition</span></li>
                            </ul>
                            <hr>
                            <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                            <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
                        </div>
                        <!-- Project Details Ends -->
                    </div>
                </div>
				<!-- Project Ends -->
				<!-- Project Starts -->
                <div data-panel="panel-4">
                    <div class="row">
                        <!-- Project Main Content Starts -->
                        <div class="col s12 l6 xl6">
                            <video id="video" class="responsive-video" controls poster="{{ url('../assets/images/projects/video/video-poster.png') }}">
								<source src="{{ url('../assets/images/projects/video/video.mp4') }}" type="video/mp4">
							</video>
                        </div>
                        <!-- Project Main Content Ends -->
                        <!-- Project Details Starts -->
                        <div class="col s12 l6 xl6">
                            <h3 class="font-weight-600 white-text uppercase">Local Video</h3>
                            <ul class="project-details white-text second-font">
                                <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Videohive</span></li>
                                <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                                <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe After Effects, Movie Maker</span></li>
                            </ul>
                            <hr>
                            <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                            <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
                        </div>
                        <!-- Project Details Ends -->
                    </div>
                </div>
				<!-- Project Ends -->
				<!-- Project Starts -->
                <div data-panel="panel-5">
                    <div class="row">
                        <!-- Project Main Content Starts -->
                        <div class="col s12 l6 xl6">
                            <img src="{{ url('../assets/images/projects/project-5.jpg') }}" alt="project" />
                        </div>
                        <!-- Project Main Content Ends -->
                        <!-- Project Details Starts -->
                        <div class="col s12 l6 xl6">
                            <h3 class="font-weight-600 white-text uppercase">Image Project</h3>
                            <ul class="project-details white-text second-font">
                                <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Graphicriver</span></li>
                                <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                                <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe Photoshop, Gimp</span></li>
                            </ul>
                            <hr>
                            <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                            <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
                        </div>
                        <!-- Project Details Ends -->
                    </div>
                </div>
				<!-- Project Ends -->
				<!-- Project Starts -->
                <div data-panel="panel-6">
                    <div class="row">
                        <!-- Project Main Content Starts -->
                        <div class="col s12 l6 xl6">
                            <img src="{{ url('../assets/images/projects/project-6.jpg') }}" alt="project" />
                        </div>
                        <!-- Project Main Content Ends -->
                        <!-- Project Details Starts -->
                        <div class="col s12 l6 xl6">
                            <h3 class="font-weight-600 white-text uppercase">Image Project</h3>
                            <ul class="project-details white-text second-font">
                                <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Activeden</span></li>
                                <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                                <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe Flash, Paint</span></li>
                            </ul>
                            <hr>
                            <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                            <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
                        </div>
                        <!-- Project Details Ends -->
                    </div>
                </div>
				<!-- Project Ends -->
				<!-- Project Starts -->
                <div data-panel="panel-7">
                    <div class="row">
                        <!-- Project Main Content Starts -->
                        <div class="col s12 l6 xl6">
                            <img src="{{ url('../assets/images/projects/project-7.jpg') }}" alt="project" />
                        </div>
                        <!-- Project Main Content Ends -->
                        <!-- Project Details Starts -->
                        <div class="col s12 l6 xl6">
                            <h3 class="font-weight-600 white-text uppercase">Image Project</h3>
                            <ul class="project-details white-text second-font">
                                <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">3D Ocean</span></li>
                                <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                                <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">3DS Max, Adobe Photoshop</span></li>
                            </ul>
                            <hr>
                            <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                            <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
                        </div>
                        <!-- Project Details Ends -->
                    </div>
                </div>
				<!-- Project Ends -->
				<!-- Project Starts -->
                <div data-panel="panel-8">
                    <div class="row">
                        <!-- Project Main Content Starts -->
                        <div class="col s12 l6 xl6">
                            <img src="{{ url('../assets/images/projects/project-8.jpg') }}" alt="project" />
                        </div>
                        <!-- Project Main Content Ends -->
                        <!-- Project Details Starts -->
                        <div class="col s12 l6 xl6">
                            <h3 class="font-weight-600 white-text uppercase">Image Project</h3>
                            <ul class="project-details white-text second-font">
                                <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Audiojungle</span></li>
                                <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                                <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe Audition, Adobe Premiere</span></li>
                            </ul>
                            <hr>
                            <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                            <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
                        </div>
                        <!-- Project Details Ends -->
                    </div>
                </div>
				<!-- Project Ends -->
                <!-- Portfolio Navigation Starts -->
                <nav>
                    <!-- Previous Work Icon Starts -->
                    <span class="control-button bl-previous-work uppercase font-weight-700"><i class="fa fa-chevron-left"></i></span>
                    <!-- Previous Work Icon Ends -->
                    <!-- Close Work Icon Starts -->
                    <span class="control-button fa fa-close fa-2x bl-icon-close center-align" id="bl-icon-close"></span>
                    <!-- Close Work Icon Ends -->
                    <!-- Next Work Icon Starts -->
                    <span class="control-button bl-next-work uppercase font-weight-700"><i class="fa fa-chevron-right"></i></span>
                    <!-- Previous Work Icon Ends -->
                </nav>
                <!-- Portfolio Navigation Ends -->
            </div>
            <!-- Portfolio Panel Items Ends -->
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