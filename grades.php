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

            .facility-item:hover {
                box-shadow: 7px 7px rgba(0, 0, 0, 0.5);
            }
            .facility-item p{
                color: white;
            }
            .facility-item h3 a{
                color: white !important;
            }
        </style>
    </head>

    <body>

        <?php include('includes/preloader.php') ?>

        <?php include('includes/navbar.php') ?>



        <div class="search-popup">
            <button class="close-search"><span class="far fa-times"></span></button>
            <form action="facility.php#">
                <div class="form-group">
                    <input type="search" name="search-field" placeholder="Search Here..." required>
                    <button type="submit"><i class="far fa-search"></i></button>
                </div>
            </form>
        </div>

        <main class="main">

            <div class="site-breadcrumb" style="background: url(assets/home/alltop.webp)">
                <div class="container">
                    <h2 class="breadcrumb-title">Grades</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Grades</li>
                    </ul>
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


            <div class="facility-area py-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Grades</span>
                                <h2 class="site-title">Grades </h2>
                                <p></p>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp blog-item1" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/NURSERY.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Nursery</a>
                                    </h3>
                                    <p class="facility-text">
                                        In the Nursery class, we focus on developing foundational skills in a
                                        play-based, engaging environment. Our curriculum emphasizes sensory exploration,
                                        <span class="more-text" style="display: none;">
                                            language development, and motor skills, setting the stage for early literacy
                                            and
                                            numeracy. Through storytelling, music, and interactive activities, children
                                            begin to build social skills, curiosity, and confidence.
                                            Learning Outcome: Recognition of letters and numbers, improved coordination,
                                            and
                                            basic communication skills.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>

                                    </p>

                                </div>
                            </div>
                        </div>
                        <style>
                            .blog-item1 {
                                background-color:#c50227;
                            }

                            .blog-item2 {
                                background-color: var(--footer-bg);
                            }

                            .blog-item3 {
                                background-color: #3db2d5;
                            }
                        </style>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInDown blog-item2" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/LKG.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">LKG (Lower Kindergarten)</a>
                                    </h3>
                                    <p class="facility-text">
                                        LKG introduces students to a structured learning environment while continuing to
                                        emphasize play-based learning. Activities include phonics,<span
                                            class="more-text" style="display: none;"> early math concepts,

                                            and creative expression through art and play. Our approach encourages
                                            children
                                            to express themselves, work in groups, and understand basic concepts of the
                                            world around them.
                                            Learning Outcome: Letter-sound recognition, basic counting, enhanced social
                                            interaction, and creativity.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp blog-item3" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/UKG.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">UKG (Upper Kindergarten)</a>
                                    </h3>
                                    <p class="facility-text">
                                        In UKG, we build on the early literacy and numeracy skills introduced in LKG,
                                        with more structured activities and guided exploration. Children are introduced
                                        <span class="more-text" style="display: none;">
                                            to reading, writing, and logical reasoning through engaging stories, games,
                                            and
                                            puzzles. The curriculum prepares them for the transition to formal schooling
                                            in
                                            Grade 1.
                                            Learning Outcome: Basic reading and writing abilities, number sense,
                                            improved
                                            problem-solving, and teamwork.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp blog-item3" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/1.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Grade 1</a>
                                    </h3>
                                    <p class="facility-text">
                                        Grade 1 marks the beginning of formal learning in subjects like Mathematics,
                                        Science, and English. Our focus is on building strong reading and math skills
                                        <span class="more-text" style="display: none;">
                                            through NCERT resources while encouraging curiosity through inquiry-based
                                            learning. The curriculum also includes hands-on activities to promote
                                            logical
                                            thinking and real-world understanding.
                                            Learning Outcome: Reading fluency, basic arithmetic, understanding of the
                                            environment, and critical thinking.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInDown blog-item1" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/2.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Grade 2</a>
                                    </h3>
                                    <p class="facility-text">
                                        At this stage, we emphasize the development of language skills, comprehension,
                                        and written expression. Math concepts, such as addition, subtraction, and
                                        <span class="more-text" style="display: none;">
                                            patterns, are reinforced. Students engage in Science projects and begin
                                            learning
                                            about social sciences to broaden their knowledge. We focus on creative and
                                            critical thinking through interactive classroom activities.
                                            Learning Outcome: Enhanced reading and writing abilities, strong
                                            mathematical
                                            foundations, and understanding of the environment and social context.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp blog-item2" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/3.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Grade 3</a>
                                    </h3>
                                    <p class="facility-text">
                                        In Grade 3, the focus shifts toward independent learning and mastery of core
                                        subjects. Students delve deeper into language arts, arithmetic, and basic
                                        <span class="more-text" style="display: none;">
                                            scientific concepts. Project-based learning helps students connect
                                            theoretical
                                            knowledge with real-world applications, fostering a deeper understanding of
                                            core
                                            subjects.
                                            Learning Outcome: Ability to write structured paragraphs, solve arithmetic
                                            problems independently, and demonstrate scientific inquiry.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp blog-item1" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/4.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Grade 4</a>
                                    </h3>
                                    <p class="facility-text">
                                        Students in Grade 4 begin to explore more complex subjects, including fractions,
                                        measurements in Math, and simple experiments in Science. Language skills are
                                        <span class="more-text" style="display: none;">
                                            further honed with an emphasis on reading comprehension and written
                                            expression.
                                            Critical thinking is promoted through interactive lessons and hands-on
                                            projects.
                                            Learning Outcome: Application of math in daily life, improved writing
                                            skills,
                                            and a solid understanding of basic scientific principles.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInDown blog-item2" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/5.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Grade 5</a>
                                    </h3>
                                    <p class="facility-text">
                                        At this stage, students develop advanced language skills, including vocabulary
                                        building and essay writing. Math lessons explore geometry and more complex
                                        <span class="more-text" style="display: none;">
                                            problem-solving, while Science introduces students to natural phenomena. We
                                            also
                                            encourage independent research and presentation skills through project work.
                                            Learning Outcome: Strong written communication, mastery of basic geometry,
                                            and
                                            understanding of natural and social sciences.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp blog-item3" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/6.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Grade 6</a>
                                    </h3>
                                    <p class="facility-text">
                                        The curriculum in Grade 6 introduces students to more structured academic
                                        concepts in Mathematics, Science, and Social Studies. Language arts focus on
                                        <span class="more-text" style="display: none;">
                                            comprehension, grammar, and creative writing. Students engage in group
                                            projects
                                            and presentations to encourage collaboration and independent learning.
                                            Learning Outcome: Critical thinking, problem-solving in math, scientific
                                            experimentation, and historical awareness.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp blog-item3" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/7.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Grade 7</a>
                                    </h3>
                                    <p class="facility-text">
                                        In Grade 7, students expand their understanding of algebra, geometry, and basic
                                        physics concepts. English lessons emphasize critical reading, analytical
                                        <span class="more-text" style="display: none;">
                                            writing, and literature. Social Science includes in-depth discussions on
                                            history
                                            and geography, promoting a broader understanding of world cultures.
                                            Learning Outcome: Algebraic thinking, comprehension of scientific
                                            principles,
                                            and understanding of historical events.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInDown blog-item1" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/8.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Grade 8</a>
                                    </h3>
                                    <p class="facility-text">
                                        Grade 8 students are prepared for more rigorous academics, with a focus on
                                        advanced math, science, and social studies concepts. Students are encouraged
                                        <span class="more-text" style="display: none;">to
                                            conduct independent research, engage in debates, and critically analyse
                                            texts.
                                            Life skills education also becomes an important component of the curriculum.
                                            Learning Outcome: Application of algebraic and geometric principles,
                                            advanced
                                            comprehension, and critical thinking.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp blog-item2" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/9.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Grade 9</a>
                                    </h3>
                                    <p class="facility-text">
                                        In Grade 9, we focus on preparing students for board examinations with a strong
                                        emphasis on NCERT curriculum guidelines. Subjects like Physics, Chemistry,
                                        <span class="more-text" style="display: none;">
                                            Biology, and Mathematics become more detailed, while English focuses on
                                            literary
                                            analysis and advanced grammar. Social Science subjects explore civics,
                                            history,
                                            and economics.
                                            Learning Outcome: Mastery of high school level math and science, critical
                                            analysis of literature, and understanding of socio-political systems.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp blog-item1" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/10.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Grade 10</a>
                                    </h3>
                                    <p class="facility-text">
                                        As students prepare for their CBSE board exams, the curriculum becomes more
                                        focused and intensive. Grade 10 covers the complete CBSE syllabus with in-depth
                                        <span class="more-text" style="display: none;">
                                            revision sessions, practice papers, and board exam preparation. We emphasize
                                            time management, problem-solving, and exam techniques to ensure students
                                            excel.
                                            Learning Outcome: Comprehensive understanding of all core subjects, ready
                                            for
                                            board exams, and enhanced analytical skills.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInDown blog-item2" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/11.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Grade 11</a>
                                    </h3>
                                    <p class="facility-text">
                                        Grade 11 marks the beginning of specialized subject choices. Students can opt
                                        for streams like Science (Physics, Chemistry, Biology/Math), Commerce
                                        <span class="more-text" style="display: none;"> (Business
                                            Studies, Economics, Accountancy), or Humanities. Our curriculum supports
                                            deeper
                                            exploration of chosen subjects, preparing students for competitive exams and
                                            higher studies.
                                            Learning Outcome: In-depth subject knowledge, preparation for competitive
                                            exams,
                                            and research skills.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>


                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp blog-item3" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/grades/12.jpg" alt="">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.html#">Grade 12</a>
                                    </h3>
                                    <p class="facility-text">
                                        In the final year of school, the focus is on preparing students for board exams
                                        and future career paths. Our Grade 12 curriculum aligns with CBSE guidelines
                                        <span class="more-text" style="display: none;"> and
                                            includes extensive revision, practice, and personalized mentoring. Students
                                            are
                                            guided toward excellence in their chosen streams, with a focus on higher
                                            education and career readiness.
                                            Learning Outcome: Mastery of chosen subjects, readiness for CBSE board
                                            exams,
                                            and preparation for entrance exams and higher education.</span>
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
            </div>

        </main>

        <?php include('includes/footer.php') ?>




        <a href="facility.php#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>


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