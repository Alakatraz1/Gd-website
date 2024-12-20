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
    <style>
        .calendar-container {
            
            margin: 0 auto;
            touch-action: pan-y pinch-zoom;
        }
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 2px;
            margin-top: 1rem;
        }
        .calendar-grid div {
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9em;
            background-color: #f9f9f9;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .calendar-grid .day-name {
            font-weight: bold;
            color: #FFF;
            background-color: var(--footer-bg);
        }
        .calendar-grid .date-cell {
            cursor: pointer;
            color: #333;
        }
        .calendar-grid .event-date {
            background-color: #116E63;
            color: #fff;
        }
        .calendar-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 1rem;
        }
        .calendar-nav button {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem 1rem;
            color: #555;
            transition: color 0.3s ease;
        }
        .calendar-nav button:hover {
            color: #000;
        }
        .calendar-carousel {
            padding: 0px 10% 30px 10%;
            position: relative;
            overflow: hidden;
            touch-action: pan-x pan-y;
        }
        .calendar-slide {
            transition: transform 0.3s ease;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
        }
        .swipe-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 10;
        }
        @media (max-width: 576px) {
            .calendar-grid div {
                height: 50px;
                font-size: 0.8em;
            }
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
                    <h2 class="breadcrumb-title">Academic Calendar</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Academic Calendar</li>
                    </ul>
                </div>
            </div>
            <style>
                #monthSelect,#yearSelect{
                    width: auto;
                }
                .fixit{
                    display: flex;
                    width: 100%;
                    justify-content: center;
                    gap: 0px;
                    
                }
                .fixit>select{
                    padding: 20px;
                    width: 150px !important;
                    text-align: center;
                    border:none
                    
                }
                .fixit>select:hover{
                    opacity: 80%;
                }
                .fixit>select:hover{
                    font-size: 20px;
                }
                #monthSelect{
                    border-radius: 10px 0px 0px 10px;
                }
                #yearSelect{
                    border-radius: 0px 10px 10px 0px;
                }
                .thead-light th{
                    background: var(--footer-bg) !important;
                    color: #fff;
                    padding-top: 15px;
                    padding-bottom: 15px;
                    
                }
                .form-control{
                    background-color: var(--footer-bg);
                    color: white;
                    
                }
                .form-control:hover{
                    background-color: #fff;
                    color: #116E63;
                }
                .form-control option{
                    background-color: var(--footer-bg);
                    color: white;
                }
                .calendar-nav button{
                    background: var(--theme-color2);
                    border-radius: 10px;
                    color: white;
                }
                .calendar-grid>div{
                    font-weight: 800;
                    font-size: 1.2rem;
                }
                .calendar-grid .day-name{
                    font-size:15px !important;

                }
            </style>


            <div class="container mt-5 calendar-container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <!-- Month and Year Dropdown -->
                    <div class="form-inline fixit">
                        <select id="monthSelect" class="form-control mr-2 ">
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                        <select id="yearSelect" class="form-control">
                            <?php
                            for ($year = 2023; $year <= 2025; $year++) {
                                echo "<option>$year</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Calendar Navigation -->
                <div class="calendar-nav">
                    <button id="prevMonth">&larr;</button>
                    <h3 class="text-center m-0" id="currentMonth"></h3>
                    <button id="nextMonth">&rarr;</button>
                </div>

                <!-- Calendar Carousel -->
                <div class="calendar-carousel">
                    <div class="swipe-overlay"></div>
                    <div class="calendar-slide">
                        <div class="calendar-grid" id="calendarGrid">
                            <!-- Day Names -->
                            <div class="day-name">Sun</div>
                            <div class="day-name">Mon</div>
                            <div class="day-name">Tue</div>
                            <div class="day-name">Wed</div>
                            <div class="day-name">Thu</div>
                            <div class="day-name">Fri</div>
                            <div class="day-name">Sat</div>
                            <!-- Dates will be dynamically added here -->
                        </div>
                    </div>
                </div>

                <!-- Events Table -->
                <table class="table table-bordered mt-3 mb-5">
                    <thead class="thead-light">
                        <tr>
                            <th>Date</th>
                            <th>Event</th>
                        </tr>
                    </thead>
                    <tbody id="eventsTable">
                        <!-- Dynamic content will be inserted here -->
                    </tbody>
                </table>
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script>
                const eventsData = <?php echo file_get_contents("events.json"); ?>;
                const months = [
                    'January', 'February', 'March', 'April', 'May', 'June',
                    'July', 'August', 'September', 'October', 'November', 'December'
                ];

                // Touch handling variables
                let touchStartX = 0;
                let touchEndX = 0;
                let isSwiping = false;
                const SWIPE_THRESHOLD = 50; // minimum distance for a swipe

                // Function to get the total days in a month
                function daysInMonth(month, year) {
                    return new Date(year, month, 0).getDate();
                }

                // Function to update the calendar grid with animation
                function updateCalendar(month, year, direction = 'none') {
                    const monthIndex = new Date(Date.parse(month + " 1, " + year)).getMonth();
                    const firstDay = new Date(year, monthIndex, 1).getDay();
                    const days = daysInMonth(monthIndex + 1, year);
                    const events = eventsData[year] && eventsData[year][month] ? eventsData[year][month] : [];

                    // Create new calendar content
                    let newContent = `
            <div class="day-name">Sun</div>
            <div class="day-name">Mon</div>
            <div class="day-name">Tue</div>
            <div class="day-name">Wed</div>
            <div class="day-name">Thu</div>
            <div class="day-name">Fri</div>
            <div class="day-name">Sat</div>
        `;

                    for (let i = 0; i < firstDay; i++) {
                        newContent += `<div></div>`;
                    }

                    for (let day = 1; day <= days; day++) {
                        const dateString = `${year}-${String(monthIndex + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                        const isEvent = events.some(event => event.date === dateString);
                        newContent += `<div class="date-cell ${isEvent ? 'event-date' : ''}">${day}</div>`;
                    }

                    // Animate the transition
                    const slide = $('.calendar-slide');
                    if (direction !== 'none') {
                        const currentPosition = direction === 'right' ? '-100%' : '100%';
                        slide.css({
                            transform: `translateX(${direction === 'right' ? '0' : '0'})`,
                            opacity: 0
                        });

                        $('#calendarGrid').html(newContent);

                        slide.animate({ opacity: 1 }, 300);
                    } else {
                        $('#calendarGrid').html(newContent);
                    }
                }

                function updateTable(month, year) {
                    const events = eventsData[year] && eventsData[year][month] ? eventsData[year][month] : [];
                    const eventsTable = document.getElementById("eventsTable");
                    eventsTable.innerHTML = events.length
                        ? events.map(event => `<tr><td>${new Date(event.date).toLocaleDateString()}</td><td>${event.event}</td></tr>`).join("")
                        : "<tr><td colspan='2'>No events scheduled for this month.</td></tr>";
                }

                function updateHeader() {
                    const month = $("#monthSelect").val();
                    const year = $("#yearSelect").val();
                    $("#currentMonth").text(`${month} ${year}`);
                    updateCalendar(month, year);
                    updateTable(month, year);
                }

                function changeMonth(direction) {
                    let currentMonth = months.indexOf($("#monthSelect").val());
                    let currentYear = parseInt($("#yearSelect").val());

                    if (direction === 'next') {
                        if (currentMonth === 11) {
                            currentMonth = 0;
                            currentYear++;
                        } else {
                            currentMonth++;
                        }
                    } else {
                        if (currentMonth === 0) {
                            currentMonth = 11;
                            currentYear--;
                        } else {
                            currentMonth--;
                        }
                    }

                    // Update dropdowns
                    $("#monthSelect").val(months[currentMonth]);
                    $("#yearSelect").val(currentYear);

                    // Update calendar
                    $("#currentMonth").text(`${months[currentMonth]} ${currentYear}`);
                    updateCalendar(months[currentMonth], currentYear, direction === 'next' ? 'right' : 'left');
                    updateTable(months[currentMonth], currentYear);
                }

                function handleSwipe() {
                    const swipeDistance = touchEndX - touchStartX;
                    if (Math.abs(swipeDistance) > SWIPE_THRESHOLD) {
                        if (swipeDistance > 0) {
                            changeMonth('prev');
                        } else {
                            changeMonth('next');
                        }
                    }
                }

                function setDefaultDate() {
                    const today = new Date();
                    const month = today.toLocaleString('default', { month: 'long' });
                    const year = today.getFullYear();

                    $("#monthSelect").val(month);
                    $("#yearSelect").val(year);
                    $("#currentMonth").text(`${month} ${year}`);
                    updateCalendar(month, year);
                    updateTable(month, year);
                }

                // Initialize and set event listeners
                $(document).ready(function () {
                    setDefaultDate();
                    $("#monthSelect, #yearSelect").change(updateHeader);
                    $("#prevMonth").click(() => changeMonth('prev'));
                    $("#nextMonth").click(() => changeMonth('next'));

                    // Touch event listeners
                    const swipeOverlay = document.querySelector('.swipe-overlay');

                    swipeOverlay.addEventListener('touchstart', (e) => {
                        touchStartX = e.touches[0].clientX;
                        isSwiping = true;
                    }, { passive: true });

                    swipeOverlay.addEventListener('touchmove', (e) => {
                        if (!isSwiping) return;

                        touchEndX = e.touches[0].clientX;
                        const currentX = touchEndX - touchStartX;

                        // Add some resistance to the swipe
                        const transform = Math.min(Math.max(currentX, -100), 100);
                        $('.calendar-slide').css('transform', `translateX(${transform}px)`);
                    }, { passive: true });

                    swipeOverlay.addEventListener('touchend', () => {
                        if (!isSwiping) return;

                        handleSwipe();
                        isSwiping = false;
                        $('.calendar-slide').css('transform', '');
                    }, { passive: true });

                    // Add keyboard navigation
                    $(document).keydown(function (e) {
                        if (e.keyCode === 37) { // Left arrow
                            changeMonth('prev');
                        } else if (e.keyCode === 39) { // Right arrow
                            changeMonth('next');
                        }
                    });
                });
            </script>


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