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
    
    <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);

    *, *::before, *::after {
    box-sizing: border-box;
    }
    
    .options {
        display: grid;
        grid-template-rows: 100px 100px 100px;
        grid-template-columns: 200px 200px 200px;
    }
    .option {
        margin : 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .basicBox, .swiggleBox, .checkBox {
    width: 130px;
    height: 65px;
    margin: 15px auto;
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    font-size: 1.15rem;
    line-height: 65px;
    text-transform: uppercase;
    text-align: center;
    position: relative;
    }

    .red {
    color: #dc4343;
    fill: none;
    stroke: #dc4343;
    stroke-width: 1;
    }

    svg {
    position: absolute;
    top: 0;
    left: 0;
    }
    svg rect, svg path, svg polyline {
    fill: none;
    stroke: #fff;
    stroke-width: 1;
    }

    .basicBox:hover svg rect, .swiggleBox:hover svg path, .checkBox:hover svg polyline {
    stroke: #fff;
    }

    #basicBoxHover:hover svg rect {
    stroke: #dc4343;
    }

    /* Basic Box */
    svg rect {
    stroke-dasharray: 400, 0;
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    -ms-transition: all 0.8s ease-in-out;
    -o-transition: all 0.8s ease-in-out;
    }
    .basicBox:hover svg rect {
    stroke-width: 3;
    stroke-dasharray: 35, 245;
    stroke-dashoffset: 38;
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    -ms-transition: all 0.8s ease-in-out;
    -o-transition: all 0.8s ease-in-out;
    }

    /* Swiggle Box */
    svg path {
    stroke-dasharray: 265, 0;
    -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -ms-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    }
    .swiggleBox:hover svg path {
    stroke-width: 3;
    stroke-dasharray: 0, 350;
    stroke-dashoffset: 20;
    -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -ms-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    }

    /* Check Box */
    .checkBox {
    /* Add Padding Left To Center Text */
    }
    .checkBox svg {
    /* Presentation Purposes */
    margin-left: -10px;
    }
    .checkBox svg rect, .checkBox svg polyline {
    fill: none;
    stroke: #fff;
    stroke-width: 1;
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    -ms-transition: all 0.8s ease-in-out;
    -o-transition: all 0.8s ease-in-out;
    }
    .checkBox:hover svg rect {
    stroke-width: 2;
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    -ms-transition: all 0.8s ease-in-out;
    -o-transition: all 0.8s ease-in-out;
    }
    .checkBox:hover svg polyline {
    stroke-width: 2;
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    -ms-transition: all 0.8s ease-in-out;
    -o-transition: all 0.8s ease-in-out;
    }
    .checkBox svg .button {
    stroke-dasharray: 400px, 0;
    }
    .checkBox:hover svg .button {
    stroke-dasharray: 0, 400px;
    stroke-dashoffset: 33px;
    }
    /* Check Mark Effect */
    .box, .checkMark {
    opacity: 0;
    }
    .checkBox:hover .box {
    -webkit-animation: boxDisplay 0.2s forwards;
    -moz-animation: boxDisplay 0.2s forwards;
    -ms-animation: boxDisplay 0.2s forwards;
    -o-animation: boxDisplay 0.2s forwards;
    animation: boxDisplay 0.2s forwards;
    -webkit-animation-delay: 0.65s;
    -moz-animation-delay: 0.65s;
    -ms-animation-delay: 0.65s;
    -o-animation-delay: 0.65s;
    animation-delay: 0.65s;
    }
    .checkBox:hover .checkMark {
    -webkit-animation: checkDisplay 0.2s forwards;
    -moz-animation: checkDisplay 0.2s forwards;
    -ms-animation: checkDisplay 0.2s forwards;
    -o-animation: checkDisplay 0.2s forwards;
    animation: checkDisplay 0.2s forwards;
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    -ms-animation-delay: 1s;
    -o-animation-delay: 1s;
    animation-delay: 1s;
    }
    /* Check Box Display */
    @-webkit-keyframes boxDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @-moz-keyframes boxDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @-ms-keyframes boxDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @-o-keyframes boxDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @keyframes boxDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    /* Check Mark Display */
    @-webkit-keyframes checkDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @-moz-keyframes checkDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @-ms-keyframes checkDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @-o-keyframes checkDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }
    @keyframes checkDisplay {
    0% { opacity: 0; }
    100% { opacity: 1; }
    }

    </style>

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
								<img src="{{ url('../assets/images/userinfo.png') }}" class="responsive-img" alt="My Photo">
                            </div>
							<!-- Picture Ends -->
                            <div class="col s12 m7 l8 xl9 personal-info">
                                <h6 class="uppercase"><i class="fa fa-user"></i> Personal Informations</h6>
                                <div class="col s12 m12 l6 p-none">
                                    <ul class="second-font list-1">
                                        <li><span class="font-weight-600">Nisn : </span>Lina</li>
                                        <li><span class="font-weight-600">Full Name : </span>Marzouki</li>
                                        <li><span class="font-weight-600">Number Phone: </span>21 june 1990 </li>
                                        <li><span class="font-weight-600">Address : </span>Spanish</li>
                                    </ul>
                                </div>
                                <div class="col s12 m12 l6 p-none">
                                    <ul class="second-font list-2">
                                        <li><span class="font-weight-600">Class : </span>+34 21 18 40 10</li>
                                        <li><span class="font-weight-600">Vocational : </span>Madrid, Spain</li>
                                        <li><span class="font-weight-600">School Year : </span>you@yourwebsite.com</li>
                                        <li><span class="font-weight-600">Tuition Nominal : </span>French - German</li>
                                    </ul>
                                </div>
                                <a href="{{ action('MainLoginController@logout') }}" class="col s12 m12 l4 xl4 btn btn-blog font-weight-500" onclick="return confirm('Are you sure to logout?')">
									Sign Out <i class="fa fa-power-off"></i>
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
                                            <h6 class="resume-list-item-title uppercase"><i class="fa fa-graduation-cap"></i> First Year</h6>
                                        </div>
                                    </div>
                                    <div class="resume-list-item" data-index="1" id="resume-list-item-1">
                                        <div class="resume-list-item-inner">
                                            <h6 class="resume-list-item-title uppercase"><i class="fa fa-graduation-cap"></i> Second Year</h6>
                                        </div>
                                    </div>
                                    <div class="resume-list-item" data-index="2" id="resume-list-item-2">
                                        <div class="resume-list-item-inner">
                                            <h6 class="resume-list-item-title uppercase"><i class="fa fa-graduation-cap"></i> Third Year</h6>
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
                                                <div class="resume-card-name"><i class="fa fa-graduation-cap"></i> First Year</div>
                                            </div>
											<!-- Experience Header Title Ends -->
											<!-- Experience Content Starts -->
                                            <div class="resume-card-body experience">
                                                <div class="resume-card-body-container second-font">
													<!-- Single Experience Starts -->
                                                    <div class="resume-content">
                                                        <?php
                                                            $months = array(7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec', 1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun',);
                                                        ?>
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-4 col-sm-2">
                                                                    <div class="options">
                                                                        @foreach($months as $month)
                                                                            <label class="option">
                                                                                <div class="basicBox">
                                                                                {{$month}}
                                                                                <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect x='0' y='0' fill='none' width='130' height='65'/>
                                                                                </svg>
                                                                                </div>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
											<!-- Experience Content Starts -->
                                        </div>
										<!-- Experience Ends -->
										<!-- Education Starts -->
                                        <div class="resume-card resume-card-1" data-index="1">
											<!-- Education Header Title Starts -->
                                            <div class="resume-card-header">
                                                <div class="resume-card-name"><i class="fa fa-graduation-cap"></i> Second Year</div>
                                            </div>
											<!-- Education Header Title Starts -->
                                            <div class="resume-card-body education">
                                                <div class="resume-card-body-container second-font">
													<!-- Single Education Starts -->
                                                   <div class="resume-content">
                                                        <?php
                                                            $months = array(7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec', 1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun',);
                                                        ?>
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-4 col-sm-2">
                                                                    <div class="options">
                                                                        @foreach($months as $month)
                                                                            <label class="option">
                                                                                <div class="basicBox">
                                                                                {{$month}}
                                                                                <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect x='0' y='0' fill='none' width='130' height='65'/>
                                                                                </svg>
                                                                                </div>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
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
                                                <div class="resume-card-name"><i class="fa fa-graduation-cap"></i> Third Year</div>
                                            </div>
											<!-- Skills Header Title Starts -->
                                            <div class="resume-card-body skills">
                                                <div class="resume-card-body-container second-font">
                                                <div class="resume-content">
                                                        <?php
                                                            $months = array(7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec', 1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun',);
                                                        ?>
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-4 col-sm-2">
                                                                    <div class="options">
                                                                        @foreach($months as $month)
                                                                            <label class="option">
                                                                                <div class="basicBox">
                                                                                {{$month}}
                                                                                <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect x='0' y='0' fill='none' width='130' height='65'/>
                                                                                </svg>
                                                                                </div>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
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
                                    <i class="fa fa-graduation-cap"></i>
									<span class="font-weight-700">2020 - 2021</span>
                                </h3>
                                <h6 class="uppercase font-weight-500">School Year</h6>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col s12 m4 l4 center-align">
                                <h3>
                                    <i class="fa fa-minus-square"></i>
									<span class="font-weight-700">-1</span>
                                </h3>
                                <h6 class="uppercase font-weight-500">Late Payment</h6>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col s12 m4 l4 center-align">
                                 <h3>
                                    <i class="fa fa-check-square"></i>
									<span class="font-weight-700">10</span>
                                </h3>
                                <h6 class="uppercase font-weight-500">Done</h6>
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