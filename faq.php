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

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>

    <body>

        <?php include('includes/preloader.php') ?>

        <?php include('includes/navbar.php') ?>



        <div class="search-popup">
            <button class="close-search"><span class="far fa-times"></span></button>
            <form action="faq.php#">
                <div class="form-group">
                    <input type="search" name="search-field" placeholder="Search Here..." required>
                    <button type="submit"><i class="far fa-search"></i></button>
                </div>
            </form>
        </div>

        <main class="main">

            <div class="site-breadcrumb" style="background: url(assets/home/alltop.webp)">
                <div class="container">
                    <h2 class="breadcrumb-title">Faq's</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Faq's</li>
                    </ul>
                </div>
            </div>

            <div class="team-area pt-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center" id="who">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> FAQ</span>
                                <h2 class="site-title" id="intro">Frequently Asked Questions <span>(FAQ)</span></h2>
                                <p>We understand that the admission process can raise several questions. Below are some
                                    frequently asked questions to help guide you through the process of enrolling your
                                    child at G.D. Goenka Public School, Bareilly.
                                </p>



                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <style>
                .faq1{
                    background-color:#c50227 !important;

                }

                .faq2{
                    background-color: var(--footer-bg) !important;
                    
                }

                .faq3{
                    background-color:#3db2d5  !important;
                    
                }
            </style>

            <div class="faq-area pb-120">
                <div class="container" style="display:flex;justify-content:center;">


                    <div class="col-lg-12">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-question"></i></span> 1. When do admissions for the
                                        2025-26 session open?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Admissions for the 2025-26 academic session will open on 14th November 2024.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span><i class="far fa-question faq1"></i></span> 2. What are the age criteria for
                                        Nursery admissions?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Children applying for Nursery should be at least 3 years old as of 31st March of
                                        the admission year.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span><i class="far fa-question faq2"></i></span> 3. How do I register my child for
                                        admission?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can fill out our Online Registration Form on the admissions page. Once
                                        submitted, our admissions team will get in touch with you to guide you through
                                        the next steps.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <span><i class="far fa-question faq3"></i></span> 4. Is there an entrance test for
                                        admission?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, for certain grades, we conduct an entrance test to assess the child’s
                                        academic level. Details regarding the test will be provided after registration.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        <span><i class="far fa-question"></i></span> 5. What documents are required for
                                        admission?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse "
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You will need to submit the following documents: <br>
                                        • Birth Certificate<br>
                                        • Recent Passport-Sized Photographs<br>
                                        • Transfer Certificate (if applicable)<br>
                                        • Academic Records (for Grade 2 and above)<br>
                                        • Address Proof of Parent/Guardian<br>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <span><i class="far fa-question faq1"></i></span> 6. How can I check the status of my
                                        child’s application?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse " aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Once you have submitted the Online Registration Form, you can contact our
                                        admissions office for updates on the status of your application.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        <span><i class="far fa-question faq2"></i></span> 7. Is there a sibling discount?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse "
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, we offer a sibling discount for families with more than one child enrolled
                                        at the school. Please inquire with the admissions office for details.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        <span><i class="far fa-question faq3"></i></span> 8. How do I arrange a campus visit
                                        or virtual tour?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse "
                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        To arrange a campus, visit or virtual tour, you can contact our admissions
                                        office at [Contact Information], and we will be happy to schedule a convenient
                                        time for you.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                        <span><i class="far fa-question"></i></span> 9. What is the fee structure?
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse "
                                    aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our fee structure varies based on the grade level. Detailed information about
                                        the fees will be provided during the admission process or you can request a copy
                                        from the admissions office.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTen">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        <span><i class="far fa-question faq1"></i></span> 10. What if I missed the
                                        registration deadline?
                                    </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse " aria-labelledby="headingTen"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        If you missed the registration deadline, please contact the admissions office to
                                        inquire about available seats and any possible extension of the registration
                                        period.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    

                </div>
                <div class="contact-area py-120">
                <div class="container">

                <div class="contact-wrapper"> 
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="contact-img">
                                    <img src="assets/img-custom/contact.jpg" alt>
                                </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div class="contact-form">
                                    <div class="contact-form-header">
                                        <h2>Inquiry Form</h2>
                                        <p>Whether you have questions about admissions, our
                                            curriculum, or anything else related to G.D. Goenka Public School, Bareilly,
                                            we’re here to help. You can now book a call with us, and we’ll get in touch
                                            at a time that’s convenient for you.</p>
                                    </div>
                                    <form method="post" action="inquiery.php"
                                        id="contact-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Your Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Your Email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject"
                                                placeholder="Your Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" cols="30" rows="5" class="form-control"
                                                placeholder="Write Your Message"></textarea>
                                        </div>
                                        <div style="display:flex;justify-content:center;align-items:center;flex-direction:column">
                                        <div style="margin-bottom:10px">
                                            <div class="g-recaptcha"
                                                data-sitekey="6Ld1-XIqAAAAACtCCX4E5zrktzKmnTc_DR9T4CAJ"></div>
                                        </div>
                                        <button type="submit" class="theme-btn">Send
                                            Message <i class="far fa-paper-plane"></i></button>
                                        <div class="col-md-12 mt-3">
                                            <div class="form-messege text-success"></div>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    </div>


            </div>

        </main>
        <?php include('includes/footer.php') ?>



        <a href="faq.php#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>


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