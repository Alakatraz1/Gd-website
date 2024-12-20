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

        <style>
            body {
                overflow-y: hidden;
            }

            .feature-icon {
                background: #a46a3759;
            }

            .feature-item .count {
                -webkit-text-stroke: 2px var(--theme-color2) !important !important;
            }
        </style>

    </head>

    <body>

        <?php include('includes/preloader.php') ?>


        <?php include('includes/navbar.php') ?>



        <div class="search-popup">
            <button class="close-search"><span class="far fa-times"></span></button>
            <form action="about.php#">
                <div class="form-group">
                    <input type="search" name="search-field" placeholder="Search Here..." required>
                    <button type="submit"><i class="far fa-search"></i></button>
                </div>
            </form>
        </div>

        <main class="main">

            <div class="site-breadcrumb" style="background: url(assets/home/alltop.webp)">
                <div class="container">
                    <h2 class="breadcrumb-title">About Us</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
            <style>
                .image-container {

                    overflow: hidden;
                    /* Hide any overflow when the image scales */
                    position: relative;
                    /* Ensure the container keeps its size */
                }

                .image-container img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    /* Maintain the aspect ratio and fill the container */
                    transition: transform 0.3s ease-in-out;
                    /* Smooth scaling effect */
                }

                .image-container:hover img {
                    transform: scale(1.2);
                    /* Scale up the image on hover */
                }
            </style>

            <div class="col-lg-12 pt-80 pb-50" id="values" style="padding-left:40px;padding-right:40px;">
                <h2 class="site-title mb-5" style="text-align:center;font-size:40px">
                    Vision and <span>Mission</span>
                </h2>
                <div class="row"
                    style="padding-top:20px;padding-bottom:20px;background-color:#132a6736;border-radius:40px;">
                    <div class="col-lg-6 image-container">

                        <img src="assets/gd/images/home/hero1.jpg" alt="" style="border-radius:20px;">

                    </div>
                    <div class="col-lg-6">
                        <h3 class="mb-3 mt-3" style="text-align:center;color:#c50227;text-decoration:underline">
                            VISION
                        </h3>
                        <p style="text-align:justify;font-size:large;color:black">
                            In our vision for the school, each and every student should develop and mould their
                            ambitions towards perfection.


                        </p>
                        <p style="text-align:justify;font-size:large;color:black">

                            The goal is to support and nurture the student’s and our own natural desire to be lifelong
                            learners. We anticipate creativity and initiative, enterprise and innovation, and cognitive
                            strategies for progressive learning. Our vision is to prepare and motivate our students for
                            a rapidly changing world, by instilling in them critical thinking skills, a global
                            perspective and a respect for core values of honesty, loyalty, perseverance and compassion.
                            Students will have success for today and be prepared for tomorrow.

                        </p>
                        <div class="button-1">

                        </div>
                    </div>
                </div>

            </div>
            <style>
                .flip {
                    --bs-gutter-x: 1.5rem;
                    --bs-gutter-y: 0;
                    display: flex;
                    flex-wrap: wrap;
                    margin-top: calc(-1* var(--bs-gutter-y));
                    margin-right: calc(-.5* var(--bs-gutter-x));
                    margin-left: calc(-.5* var(--bs-gutter-x));


                }

                @media(max-width:800px) {
                    .flip {}
                }
            </style>

            <div class="col-lg-12 pt-30 pb-120" style="padding-left:40px;padding-right:40px;">

                <div class="row"
                    style="padding-top:20px;padding-bottom:20px;background-color:#132a6736;border-radius:40px;">
                    <div class="col-lg-6">
                        <h3 class="mb-3" style="text-align:center;color:#c50227;text-decoration:underline">
                            MISSION
                        </h3>
                        <p style="text-align:justify;font-size:large;color:black">
                            The school motto HIGHER STRONGER BRIGHTER takes its core idea from a quest for excellence,
                            an insatiable thirst for knowledge and a limitless craving for the latest.
                            Our school aspires to be a national leader in developing educated contributors, career ready
                            learners and global citizens, and in generating a meaningful, high impact, progressive and
                            sustainable partnership with society.






                        </p>
                        <p style="text-align:justify;font-size:large;color:black">

                            Our mission is to provide a safe haven where everyone is valued and respected. The faculty,
                            in partnership with parents and families are fully committed to student’s college and career
                            readiness. Students are empowered to meet current and future challenges to develop social
                            awareness, civic responsibility and personal growth.
                        </p>
                        <div class="button-1">

                        </div>
                    </div>
                    <div class="col-lg-6 image-container">

                        <img src="assets//home/place3.webp" alt="" style="border-radius:20px;">

                    </div>

                </div>

            </div>



            <div class="team-area2 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto" id="intro">
                            <div class="site-heading text-center">

                                <h2 class="site-title" style="font-size:40px">Management <span>Introduction</span></h2>
                                <p></p>
                            </div>

                        </div>

                    </div>
                </div>

                <style>
                    .blog-thumbnail {
                        position: relative;
                        overflow: hidden;
                        border-radius: 10px;
                    }

                    .blog-thumbnail img {
                        width: 100%;
                        transition: transform 0.3s ease;
                    }

                    .blog-thumbnail:hover img {
                        transform: scale(1.1);
                    }

                    .blog-date {
                        position: absolute;
                        top: 10px;
                        left: 10px;
                        background-color: rgba(0, 0, 0, 0.7);
                        color: #fff;
                        padding: 5px 10px;
                        border-radius: 5px;
                        text-align: center;
                    }

                    .blog-date-day {
                        font-size: 24px;
                        font-weight: bold;
                    }

                    .blog-date-month {
                        font-size: 14px;
                    }

                    .blog-content {
                        padding-top: 15px;
                    }

                    .blog-title {
                        font-size: 40px;
                        font-weight: bold;
                        margin-bottom: 10px;
                    }

                    .blog-title a {
                        text-decoration: none;
                        color: #000;
                    }

                    .blog-title a:hover {
                        text-decoration: underline;
                    }

                    .blog-meta {
                        font-size: 14px;
                        color: #666;
                        margin-bottom: 10px;
                    }

                    .blog-meta a {
                        text-decoration: none;
                        color:#c50227;
                    }

                    .blog-meta a:hover {
                        text-decoration: underline;
                    }

                    .read-more {
                        text-decoration: none;
                        color: #fff;
                        background-color: #c50227;
                        padding: 5px 15px;
                        border-radius: 5px;
                    }

                    .read-more:hover {
                        background-color: white;
                        color:#c50227;
                    }
                </style>


                <div class="container py-5">

                    <div class="col-lg-12">
                        <div class="row">

                            <div class="col-lg-5">
                                <div class="blog-thumbnail">
                                    <img src="assets/management/CEO.jpg" alt="Blog Image">

                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="blog-content">
                                    <h3 class="blog-title">
                                        <a href="ceo.php" style="color:#c50227">
                                            Mrs. Anshu Singh Gautam
                                        </a>
                                    </h3>
                                    <h1>
                                        <a href="ceo.php">Chairperson</a>

                                        </h3>
                                        <div class="blog-meta">
                                            <span>Of <a href="#">GD Goenka Bareilly</a></span>

                                        </div>
                                        <p>
                                            Dear Students, Parents, and Visitors,

                                            It gives me immense pleasure to welcome you to GD Goenka Public School,
                                            Bareilly—a place where young minds are nurtured, dreams are realized, and
                                            future leaders are shaped.

                                            At GD Goenka Public School, we are committed to fostering an environment
                                            that balances academic excellence with holistic development. Our
                                            state-of-the-art facilities, dedicated faculty, and well-designed curriculum
                                            ensure that every child receives the best opportunities to grow
                                            intellectually, emotionally, and socially.....
                                            <a class="read-more" href="ceo.php">Read
                                                More</a>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="overlay hidden" id="popup1">
                    <div class="popup-content">
                        <p>At G.D. Goenka Public School, we believe that true education lies in nurturing both the
                            intellect
                            and the spirit. Inspired by the words of Swami Vivekananda, "Education is the manifestation
                            of
                            the perfection already in man," our goal is to help each student realize their inherent
                            potential and become well-rounded individuals. Our mission is to deliver inclusive,
                            value-based
                            education that empowers students with the knowledge, skills, and values they need to
                            contribute
                            positively to society and the nation’s progress.</p>
                    </div>
                </div>
                <style>
                    .popup-content>p {
                        text-align: justify;
                    }
                </style>
                <div class="overlay hidden" id="popup2">
                    <div class="popup-content">
                        <p>In line with our management’s dedication to fostering excellence, we offer a dynamic
                            curriculum
                            that balances traditional academic rigor with modern, innovative approaches. Our teachers,
                            inspired by Dr. Sarvepalli Radhakrishnan's belief that "True teachers are those who help us
                            think for ourselves," work tirelessly to create an engaging, supportive, and stimulating
                            environment. By catering to diverse learning styles and encouraging critical thinking, we
                            ensure
                            that every child is challenged to explore their full potential.</p>
                    </div>
                </div>
                <div class="overlay hidden" id="popup3">
                    <div class="popup-content">
                        <p>While academic success is important, we at G.D. Goenka Bareilly recognize that education
                            extends
                            far beyond the
                            classroom. Our school places strong emphasis on extracurricular activities, including
                            sports,
                            arts, music, and community service. Through these, we aim to develop essential life skills
                            such
                            as leadership, teamwork, and empathy, nurturing students who are not only knowledgeable but
                            also
                            compassionate and responsible citizens.</p>
                    </div>
                </div>
                <div class="overlay hidden" id="popup4">
                    <div class="popup-content">
                        <p>Aligned with our core values of Integrity, Excellence, Heritage, and Compassion, we are
                            committed
                            to instilling these virtues in every aspect of school life. In a world where moral values
                            and
                            ethics are often overlooked, we ensure that our students are guided by principles that will
                            stand them in good stead throughout their lives. As Swami Vivekananda wisely stated,
                            "Education
                            is that by which character is formed," and at G.D. Goenka Bareilly, we strive to develop
                            individuals who lead
                            with integrity, respect, and a sense of responsibility toward society.</p>
                    </div>
                </div>


                <div class="choose-area pt-80 pb-80" id="principal">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                                    <div class="choose-content-info">
                                        <div class="site-heading mb-0">

                                            <h2 class="site-title text-white mb-10">Message from <span>Principal</span>
                                            </h2>
                                            <p class="text-white">
                                                Dear Students, Parents, and Well-Wishers, <br>
                                                A warm welcome to G.D. Goenka Public School, Bareilly! As the Principal,
                                                it
                                                is
                                                both an honor and a privilege to lead this vibrant institution that
                                                stands
                                                for more than just academic excellence—it is a place where young minds
                                                are
                                                nurtured, values are instilled, and futures are shaped. Our school is
                                                founded on the vision of "Building Nation Through Education", and we are
                                                deeply committed to providing an environment that supports holistic
                                                development, critical thinking, and a lifelong love for learning.
                                            </p>
                                        </div>
                                        <style>
                                            .open-popup {
                                                cursor: pointer;
                                                color: #007BFF;

                                                margin: 10px;
                                            }

                                            .overlay {
                                                position: fixed;
                                                top: 0;
                                                left: 0;
                                                width: 100%;
                                                height: 100%;
                                                background-color: rgba(0, 0, 0, 0.5);
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                z-index: 1000;
                                            }

                                            .hidden {
                                                display: none;
                                            }

                                            .popup-content {
                                                background-color: white;
                                                padding: 20px;
                                                width: 80%;
                                                max-width: 500px;
                                                border-radius: 8px;
                                                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                                                text-align: center;
                                            }

                                            .choose-item-icon {
                                                display: flex;
                                                justify-content: end;
                                                align-items: center;
                                            }
                                        </style>
                                        <div class="choose-content-wrap">
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="choose-item">
                                                        <div class="choose-item-icon" style="">
                                                            <img src="assets/img/icon/teacher-2.svg" alt="">
                                                        </div>
                                                        <div class="choose-item-info open-popup" data-popup="popup1">
                                                            <h4>Vision and Mission</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="choose-item" style="background-color:#c50227;">
                                                        <div class="choose-item-icon">
                                                            <img src="assets/img/icon/course-material.svg" alt="">
                                                        </div>
                                                        <div class="choose-item-info open-popup" data-popup="popup2">
                                                            <h4 style="color:white">Academic Excellence</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="choose-item" style="background-color:var(--footer-bg);">
                                                        <div class="choose-item-icon">
                                                            <img src="assets/img/icon/online-course.svg" alt="">
                                                        </div>
                                                        <div class="choose-item-info open-popup" data-popup="popup3">
                                                            <h4 style="color:white">Beyond Academics</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="choose-item" style="background-color:#3db2d5;">
                                                        <div class="choose-item-icon">
                                                            <img src="assets/img/icon/money.svg" alt="">
                                                        </div>
                                                        <div class="choose-item-info open-popup" data-popup="popup4">
                                                            <h4 style="color:white">Values at the Core</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="choose-img wow fadeInRight" data-wow-delay=".25s">
                                    <img src="assets/gd/principalsquare.webp" alt="">
                                </div>
                                <div class="mt-50 " style="display:flex;justify-content:center">
                                    <h6 class="site-title text-white mb-10" style="font-size:25px"><span>Principal
                                        </span>Mr. Rajesh Kumar K</h6>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const openPopupButtons = document.querySelectorAll('.open-popup');
                        const overlays = document.querySelectorAll('.overlay');

                        openPopupButtons.forEach(button => {
                            button.addEventListener('click', () => {
                                const popupId = button.getAttribute('data-popup');
                                document.getElementById(popupId).classList.remove('hidden');
                            });
                        });

                        overlays.forEach(overlay => {
                            overlay.addEventListener('click', (event) => {
                                if (event.target === overlay) {
                                    overlay.classList.add('hidden');
                                }
                            });
                        });
                    });

                </script>


                <div class="department-area bg py-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mx-auto" id="choose">
                                <div class="site-heading text-center">

                                    <h2 class="site-title">Why Choose <span>Us</span></h2>
                                    <p></p>
                                </div>
                            </div>
                            <div class="my-4">

                                <p>At G.D. Goenka Public School, Bareilly, we are committed to more than just education;
                                    we
                                    are
                                    dedicated to shaping the leaders of tomorrow. Our unique approach combines academic
                                    excellence, a values-driven curriculum, and a nurturing environment, all designed to
                                    help students thrive in a rapidly changing world. Here’s why G.D. Goenka Public
                                    School
                                    stands out:</p>
                            </div>
                        </div>
                        <style>
                            .more-text {
                                display: none;
                            }

                            .read-more-btn {
                                background: none;
                                border: none;
                                color:#c50227;
                                /* Matches the user's preferred color */
                                cursor: pointer;
                                font-weight: bold;
                            }
                        </style>
                        <style>
                            .department-item1::before {
                                border-color: #ff002a;
                                /* Custom color for Item 1 */
                            }

                            .department-item2::before {
                                border-color: var(--footer-bg);
                                /* Custom color for Item 2 */
                            }

                            .department-item3::before {
                                border-color: #3db2d5;
                                /* Custom color for Item 3 */
                            }

                            .department-item:hover {

                                box-shadow: 10px 10px 5px 2px rgba(0, 0, 0, 0.1);


                            }

                            .owl-carousel .owl-item img {
                                filter: brightness(4) invert(.9);


                            }
                        </style>
                        <div class="department-slider owl-carousel owl-theme">



                            <div class="department-item">
                                <div class="department-icon">
                                    <img src="assets/img/icon/monitor.svg" alt="">
                                </div>
                                <div class="department-info">
                                    <h4 class="department-title"><a href="#">Visionary Leadership</a>
                                    </h4>
                                    <p>Guided by the visionary leadership of our Chairman, our
                                        institution is built on the belief that education is the foundation of

                                        nation-building. We nurture
                                            every aspect of<span class="more-text" style="display: none;"> a student’s development—intellectual,
                                            emotional, social, and ethical—preparing them for success in life, not just
                                            in
                                            academics.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>


                                </div>
                            </div>
                            <div class="department-item department-item1">
                                <div class="department-icon">
                                    <img src="assets/img/icon/law.svg" alt="">
                                </div>
                                <div class="department-info">
                                    <h4 class="department-title"><a href="#">Value-Based Education</a>
                                    </h4>
                                    <p>Our core values—Integrity, Excellence, Heritage, and Compassion—are at the heart
                                        of
                                        everything we do. We instill these values in our students, ensuring that they
                                        grow
                                        <span class="more-text" style="display: none;">
                                            into well-rounded individuals who are not only academically accomplished but
                                            also
                                            morally grounded and socially responsible.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>


                                </div>
                            </div>
                            <div class="department-item department-item2">
                                <div class="department-icon">
                                    <img src="assets/img/icon/data.svg" alt="">
                                </div>
                                <div class="department-info">
                                    <h4 class="department-title"><a href="#">Focus on Academic
                                            Excellence</a></h4>
                                    <p>We offer a dynamic, inclusive curriculum that combines traditional academic rigor
                                        with modern, innovative teaching methods. Our dedicated<span class="more-text"
                                            style="display: none;"> faculty use a variety of

                                            teaching approaches to cater to every student’s learning style, fostering
                                            critical
                                            thinking, creativity, and a love for learning.</span>

                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>


                                </div>
                            </div>
                            <div class="department-item department-item3">
                                <div class="department-icon">
                                    <img src="assets/img/icon/health.svg" alt="">
                                </div>
                                <div class="department-info">
                                    <h4 class="department-title"><a href="#">Global Perspective with
                                            Local Roots</a></h4>
                                    <p>At G.D. Goenka Bareilly, we balance our rich cultural heritage with a global
                                        perspective. We
                                        encourage our students to appreciate their <span class="more-text" style="display: none;">own cultural identity while also
                                        
                                            broadening their horizons through global awareness and understanding,
                                            equipping
                                            them
                                            to thrive in an interconnected world.</span>

                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>


                                </div>
                            </div>
                            <div class="department-item">
                                <div class="department-icon">
                                    <img src="assets/img/icon/art.svg" alt="">
                                </div>
                                <div class="department-info">
                                    <h4 class="department-title"><a href="#">Comprehensive
                                            Extracurricular Programs</a></h4>
                                    <p>We believe in nurturing all aspects of a student’s personality. Our diverse
                                        extracurricular programs, including sports,<span class="more-text"
                                            style="display: none;"> arts, music, and community service,
                                            help
                                            students develop essential life skills such as leadership, teamwork, and
                                            empathy,
                                            ensuring their all-around development.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>


                                </div>
                            </div>

                            <div class="department-item department-item1">
                                <div class="department-icon">
                                    <img src="assets/img/icon/art.svg" alt="">
                                </div>
                                <div class="department-info">
                                    <h4 class="department-title"><a href="#">Technologically Advanced
                                            Learning Environment</a></h4>
                                    <p>Our state-of-the-art facilities and technology-driven approach to education
                                        ensure
                                        that our students are prepared for the<span class="more-text"
                                            style="display: none;"> demands of the 21st century.
                                            From digital
                                            literacy to innovative learning methods, we equip students with the skills
                                            they
                                            need
                                            to succeed in the modern world.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>


                                </div>
                            </div>
                            <div class="department-item department-item2">
                                <div class="department-icon">
                                    <img src="assets/img/icon/art.svg" alt="">
                                </div>
                                <div class="department-info">
                                    <h4 class="department-title"><a href="#">Safe and Supportive
                                            Atmosphere</a></h4>
                                    <p>The safety and well-being of our students are our top priorities. We provide a
                                        secure, supportive environment where students can<span class="more-text"
                                            style="display: none;"> grow both personally
                                            and
                                            academically. Our focus on mental, emotional, and physical well-being
                                            ensures
                                            that
                                            every child is cared for throughout their educational journey.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>


                                </div>
                            </div>
                            <div class="department-item department-item3">
                                <div class="department-icon">
                                    <img src="assets/img/icon/art.svg" alt="">
                                </div>
                                <div class="department-info">
                                    <h4 class="department-title"><a href="#">Strong Partnership with
                                            Parents</a></h4>
                                    <p>We believe that education is a collaborative effort, and we work closely with
                                        parents
                                        to ensure the best outcomes for our students.Open communication <span
                                            class="more-text" style="display: none;">and active parental

                                            involvement are key components of the strong, supportive community we’ve
                                            built
                                            at
                                            G.D. Goenka Public School.</span>

                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>


                                </div>
                            </div>


                        </div>
                        <script>
                            function toggleReadMore(button) {
                                const moreText = button.previousElementSibling;
                                if (moreText.style.display === "none") {
                                    moreText.style.display = "inline";
                                    button.textContent = "Read less";
                                } else {
                                    moreText.style.display = "none";
                                    button.textContent = "Read more";
                                }
                            }
                        </script>


                    </div>
                </div>













        </main>

        <?php include('includes/footer.php') ?>



        <a href="about.php#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>


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