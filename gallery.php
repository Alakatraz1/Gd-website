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
    </head>
    <style>
        body {
            overflow-y: hidden;
        }
    </style>
    <style>
        /* Make images responsive and fit inside the screen */
        .mfp-content img {


            max-width: 90vw !important;
            /* 90% of the viewport width */
            max-height: 90vh !important;
            /* 90% of the viewport height */
            object-fit: contain !important;
            /* Maintain aspect ratio */
            margin: 0 auto !important;
            /* Center the image */
            display: block !important;
        }
    </style>

    <body>

        <?php include('includes/preloader.php') ?>

        <?php include('includes/navbar.php') ?>



        <div class="search-popup">
            <button class="close-search"><span class="far fa-times"></span></button>
            <form action="gallery.php#">
                <div class="form-group">
                    <input type="search" name="search-field" placeholder="Search Here..." required>
                    <button type="submit"><i class="far fa-search"></i></button>
                </div>
            </form>
        </div>

        <main class="main">

            <div class="site-breadcrumb" style="background: url(assets/home/alltop.webp)">
                <div class="container">
                    <h2 class="breadcrumb-title">Gallery</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>


            <div class="gallery-area py-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class="site-heading text-center">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Gallery</span>
                                <h2 class="site-title">Our Photo <span>Gallery</span></h2>
                                <p style="text-align:justify">Step into the world of G.D. Goenka Public School, Bareilly,
                                    and witness the vibrant activities, memorable events, and achievements that define
                                    our school. Our Gallery showcases the dynamic experiences of our students, from
                                    academic excellence to extracurricular participation, cultural events, sports
                                    activities, and more. Explore the moments that make Omni a place of learning,
                                    growth, and celebration.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row popup-gallery">
                        <div class="row popup-gallery">
                            <?php
                            // Read and decode the JSON file
                            $jsonData = file_get_contents('webp_files.json'); // Replace with the actual path
                            $images = json_decode($jsonData, true); // Decode JSON into an associative array
                            
                            // Initialize delay
                            $delay = 0.25;

                            // Loop through images, displaying two images in each column
                            $imageCount = count($images);
                            for ($i = 0; $i < $imageCount; $i += 2) {
                                echo '<div class="col-md-4 wow fadeInUp" data-wow-delay="' . $delay . 's">';

                                // First image in this column
                                $filename1 = $images[$i]['filename'];
                                echo '
        <div class="gallery-item">
            <div class="gallery-img">
                <img src="assets/gallery2/' . htmlspecialchars($filename1) . '" alt>
            </div>
            <div class="gallery-content">
                <a class="popup-img gallery-link" href="assets/gallery2/' . htmlspecialchars($filename1) . '">
                    <i class="fal fa-plus"></i>
                </a>
            </div>
        </div>';

                                // Check if there's a second image (to prevent undefined index error)
                                if ($i + 1 < $imageCount) {
                                    $filename2 = $images[$i + 1]['filename'];
                                    echo '
            <div class="gallery-item">
                <div class="gallery-img">
                    <img src="assets/gallery2/' . htmlspecialchars($filename2) . '" alt>
                </div>
                <div class="gallery-content">
                    <a class="popup-img gallery-link" href="assets/gallery2/' . htmlspecialchars($filename2) . '">
                        <i class="fal fa-plus"></i>
                    </a>
                </div>
            </div>';
                                }

                                echo '</div>'; // End of col-md-4
                            
                                // Increment the delay for the next column of images
                            
                            }
                            ?>
                        </div>



                    </div>
                </div>
            </div>

        </main>
        <?php include('includes/footer.php') ?>



        <a href="gallery.php#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>


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