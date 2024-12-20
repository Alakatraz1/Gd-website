<!DOCTYPE php>
<php lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content>
        <meta name="keywords" content>

        <title>G.D. Goenka Public School</title>

        <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <style>
        body {
            overflow-y: hidden;
        }
    </style>

    <body>

        <?php include("includes/preloader.php") ?>


        <?php include("includes/navbar.php") ?>



        <div class="search-popup">
            <button class="close-search"><span class="far fa-times"></span></button>
            <form action="application-form.php#">
                <div class="form-group">
                    <input type="search" name="search-field" placeholder="Search Here..." required>
                    <button type="submit"><i class="far fa-search"></i></button>
                </div>
            </form>
        </div>
        <style>

            @keyframes panBackground {
                0% {
                    background-position: center top;
                }

                25% {
                    background-position: right center;
                }

                50% {
                    background-position: center bottom;
                }

                75% {
                    background-position: left center;
                }

                100% {
                    background-position: center top;
                }
            }

            .site-breadcrumb {
                background-size: cover;
                animation: panBackground 12s linear infinite;
            }
        </style>
        </style>

        <main class="main">

            <div class="site-breadcrumb" style="background: url(assets/home/alltop.webp)">
                <div class="container">
                    <h2 class="breadcrumb-title">Online Registration Form</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Online Registration Form</li>
                    </ul>
                </div>
            </div>

            <div class="team-area pt-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class="site-heading text-center" id="who">
                                <span class="site-title-tagline" style="display:none"><i
                                        class="far fa-book-open-reader"></i> Registration Form</span>
                                <h2 class="site-title" id="intro">Registration <span>Form</span></h2>
                                <p style="text-align:justify">Thank you for your interest in G.D. Goenka Public School,
                                    Bareilly! To make the admission process smooth and convenient, we offer an Online
                                    Registration Form for all prospective students. This form allows you to express your
                                    interest and provide basic information, and our admissions team will contact you
                                    with further details. We’ve kept the form simple to ensure a quick and easy
                                    experience for parents.
                                </p>



                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="application pt-50 pb-120">
                <div class="container">
                    <div class="application-form">
                        <h3>Online Registration Form</h3>
                        <form action="submittion_forum.php" method="post">
                            <div class="row">
                                <h5 class="mb-3">Basic Information</h5>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Student's Name</label>
                                        <input type="text" class="form-control" name="firstname"
                                            placeholder="Your First Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Date Of Birth</label>
                                        <input type="date" class="form-control" name="dob" required>
                                    </div>
                                </div>
                                <style>
                                    .scrollable-dropdown {
                                        max-height: 100px;
                                        /* Adjust the height as needed */
                                        overflow-y: auto;
                                    }
                                </style>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Class Applying For</label>
                                        <select class="form-select scrollable-dropdown" name="program">
                                            <option value>Choose Program Type</option>
                                            <option value="1">NURSERY</option>
                                            <option value="2">LKG</option>
                                            <option value="3">UKG</option>
                                            <option value="1">CLASS 1</option>
                                            <option value="1">CLASS 2</option>
                                            <option value="1">CLASS 3</option>
                                            <option value="1">CLASS 4</option>
                                            <option value="1">CLASS 5</option>
                                            <option value="1">CLASS 6</option>
                                            <option value="1">CLASS 7</option>
                                            <option value="1">CLASS 8</option>
                                            <option value="1">CLASS 9</option>
                                            <option value="1">CLASS 10</option>
                                            <option value="1">CLASS 11</option>
                                            <option value="1">CLASS 12</option>
                                        </select>
                                    </div>
                                </div>

                                <h5 class="mt-4 mb-3">Personal Information</h5>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Parent/Guardian Name</label>
                                        <input type="text" class="form-control" name="fathername"
                                            placeholder="Parent/Guardian Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input type="tel" class="form-control" name="number"
                                            placeholder="Your Contact Number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your Email Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Current School (if applicable)</label>
                                        <input type="text" class="form-control" name="CurrentSchool"
                                            placeholder="Current School">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>City/Location</label>
                                        <input type="text" class="form-control" name="address"
                                            placeholder="Your Present Address" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Any Specific Queries</label>
                                        <input type="text" class="form-control" name="query"
                                            placeholder="Any Specific Queries">
                                    </div>
                                </div>
                                <div
                                    style="display:flex;justify-content:center;align-items:center;flex-direction:column;">
                                    <div style="margin-bottom:10px">
                                        <div class="g-recaptcha"
                                            data-sitekey="6Ld1-XIqAAAAACtCCX4E5zrktzKmnTc_DR9T4CAJ"></div>
                                    </div>

                                    <div class="col-lg-12"
                                        style="display:flex;justify-content:center;align-items:center;">
                                        <button type="submit" class="theme-btn">Submit <i
                                                class="fas fa-arrow-right-long"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </main>
        <?php include('includes/footer.php') ?>



        <a href="application-form.php#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>


        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/js/jquery-3.7.1.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/jquery.appear.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/counter-up.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</php>