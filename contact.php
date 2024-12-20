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

        <?php include('includes/preloader.php') ?>

        <?php include('includes/navbar.php') ?>



        <div class="search-popup">
            <button class="close-search"><span class="far fa-times"></span></button>
            <form action="contact.php#">
                <div class="form-group">
                    <input type="search" name="search-field" placeholder="Search Here..." required>
                    <button type="submit"><i class="far fa-search"></i></button>
                </div>
            </form>
        </div>

        <main class="main">

            <div class="site-breadcrumb" style="background: url(assets/home/alltop.webp)">
                <div class="container">
                    <h2 class="breadcrumb-title">Contact Us</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>

            <style>
                .contact-info {
                    min-height: 251px !important;
                    background-color: #d4d0d0;
                }

                .contact-info::before {
                    display: none
                }

                .contact-info:hover {
                    background-color: white;
                    box-shadow: 10px 10px rgba(0, 0, 0, 0.5);
                }

                .contact-info-icon {
                    background: #c50227;
                }

                .contact-info-icon::before {
                    border: 3px solid var(--theme-color2)
                }
            </style>
            <div class="contact-area py-120">
                <div class="container">
                    <div class="contact-content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="contact-info">
                                    <div class="contact-info-icon"
                                        style="display:flex;justify-content:center;align-items:center;">
                                        <i class="fal fa-map-location-dot"></i>
                                    </div>

                                    <div class="contact-info-content">
                                        <h5>Campus:</h5>
                                        <p>
                                            <a href="https://maps.app.goo.gl/Y7EmAFKBJ3cor7gx5" target="_blank">
                                                Near Rohilkhand University,
                                                Dohra Road,
                                                Bareilly,
                                                U.P. 243001
                                            </a>
                                        </p>
                                    </div>



                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="contact-info">
                                    <div class="contact-info-icon"
                                        style="display:flex;justify-content:center;align-items:center;">
                                        <i class="fal fa-phone-volume"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Call Us</h5>
                                        <p><a href="tel:9012616969">+91 9012616969</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="contact-info">
                                    <div class="contact-info-icon"
                                        style="display:flex;justify-content:center;align-items:center;">
                                        <i class="fal fa-envelopes"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Email Us</h5>
                                        <p><a
                                                href="mailto:connect@gdgoenkabareilly.com">connect@gdgoenkabareilly.com</a>
                                        </p>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="contact-info">
                                    <div class="contact-info-icon"
                                        style="display:flex;justify-content:center;align-items:center;">
                                        <i class="fal fa-alarm-clock"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Open Time</h5>
                                        <p>Mon - Fri (09.00AM - 04.00PM)</p>
                                        <p>Saturday (09.00AM - 01.00PM)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-wrapper">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="contact-img">
                                    <img src="assets/gd/images/home/hero4.jpg" alt>
                                </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div class="contact-form">
                                    <div class="contact-form-header">
                                        <h2>Get In Touch</h2>
                                        <p>We’d love to hear from you! Whether you have questions about admissions, our
                                            curriculum, or anything else related to G.D. Goenka Public School, Bareilly,
                                            we’re here to help. You can now book a call with us, and we’ll get in touch
                                            at a time that’s convenient for you.</p>
                                    </div>
                                    <form method="post" action="inquiery.php" id="contact-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Your Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="tel" class="form-control" name="phone"
                                                        placeholder="Your Phone" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Your Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject"
                                                placeholder="Your Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" cols="30" rows="5" class="form-control"
                                                placeholder="Write Your Message"></textarea>
                                        </div>
                                        <div
                                            style="display:flex;justify-content:center;align-items:center;flex-direction:column">
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


            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28085.44998718249!2d79.43277235805182!3d28.368484963951822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a000deaaaaaaad%3A0x6b4b8b57ad055c99!2sG.D.%20Goenka%20Public%20School%2C%20Bareilly!5e0!3m2!1sen!2sin!4v1732083064715!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </main>

        <?php include('includes/footer.php') ?>




        <a href="contact.php#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>


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
        <script src="assets/js/contact-form.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</php>