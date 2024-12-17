<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MAJU IT Services</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&family=Playfair+Display+SC:wght@400;700;900&display=swap");
        body {
            
            background-color: #f3f6f9;
            font-family: "Montserrat", sans-serif;
            color: #333;
        }
        .it{
            padding:2rem;
        }
       
        #left-menu{
            background-color: #ffffff;
            padding: 10px;
            border-radius: 8px;
        }
        #left-menu .list-group-item {
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
            position: relative;
            padding-right: 25px;
        }
        #left-menu .list-group-item:hover,
        #left-menu .list-group-item.active {
            background-color: #f0f0f0;
            color: #333;
            /* transform: scale(1.03); */
        }
        #left-menu .list-group-item a {
            text-decoration: none;
            color: inherit;
        }
        .icon-span {
            background-color: #f0606e;
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: White !important;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        .list-group-item:hover .icon-span {
            transform: rotate(15deg);
        }
        .dropdown-content {
            display: none;
            position: absolute;
            left: 100%;
            top: 0;
            width: 250px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
            z-index: 1;
        }
        .list-group-item:hover .dropdown-content{
            display: block;
        }
        .dropdown-content li{
            font-size: 13px;
            list-style: none;
            padding: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dropdown-content li:hover {
            background-color: #f0f0f0;
        }
        .text{
            font-size: 13px;
        }
          .icon-span i{
            color:white;
        }

        #right-content {
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            min-height: 300px;
        }

        #right-content h3 {
            color: #112269;
            font-size: 24px;
        }
        #right-content h3 span{
            
            font-family:"Playfair Display SC", serif;
            font-size: 30px;
            font-weight: 600;
            /* color:#112269; */
        }
      

        #right-content p {
            color: #555;
            font-size: 16px;
        }
        #right-content .image img{
            margin-top:2rem;
            height:600px;
            width:100%
        }

        #right-content .message-content {
            max-width: 100%;
        }

        /* Message Section */
#right-content .message {
    background-color: #ffffff;
    border-radius: 16px;
    box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.5);
    padding: 24px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
    margin-bottom: 5px;
}

/* Message Heading */
#right-content .message h4 {
    font-size: 26px;
    font-weight: 500;
    color: #343a40;
    margin-bottom: 12px;
    font-family: 'Playfair Display SC', serif;
}

/* Message Subheading */
#right-content .message h6 {
    font-size: 20px;
    font-weight: 600;
    color: #1a2e8d;
    margin-bottom: 12px;
}

/* Message Content */
#right-content .message p {
    font-weight: 500;
    font-size: 15px;
    color: #000;
    line-height: 1.5;
}

            /* Add media query for mobile screens */
            @media (max-width: 768px) {
            .list-group-item:hover .dropdown-content {
                display: none;
            }

            .dropdown-content {
                position: relative;
                left: 0;
                width: 100%;
                box-shadow: none;
            }

            .list-group-item.active .dropdown-content {
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid it">
        <div class="row">


            <div class="col-md-3 p-2">
                <ul id="left-menu" class="list-group">
                    <li class="list-group-item">
                        <span class="icon-span" style="background-color: #f0606e;">
                            <i class="fas fa-chalkboard-teacher fa-lg"></i>
                        </span>
                         <span class="text">Learning management system</span>
                        <ul class="dropdown-content">
                            <li onclick="loadPage('./itservices/microsoft_teams.php')" >Microsoft Teams</li>
                            <li onclick="loadPage('./itservices/classroom.php')" >Google Classroom</li>
                            <li onclick="loadPage('./itservices/maju_online.php')" >Maju Online</li>
                            <li onclick="loadPage('./itservices/E_learning.php')" >E learning</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <span class="icon-span" style="background-color: #ff4500;">
                            <i class="fas fa-user-graduate fa-lg"></i>
                        </span>
                        <span class="text" >Library Management System</span>
                        <ul class="dropdown-content">
                            <li onclick="loadPage('./itservices/koha.php')" >LMS Koha</li>
                            <li onclick="loadPage('./itservices/Ebrary.php')" >Ebrary</li>
                            <li onclick="loadPage('./itservices/Dspace.php')" >Dspace</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <span class="icon-span" style="background-color: #96af05;">
                            <i class="fas fa-print"></i>
                        </span>
                        <span class="text">Printing Services</span>
                        <ul class="dropdown-content">
                            <li onclick="loadPage('./itservices/printServer.php')" >Print Server</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <span class="icon-span" style="background-color: #007bff;">
                            <i class="fa-solid fa-house-laptop"></i>
                        </span>
                        <span class="text">Remote Services</span>
                        <ul class="dropdown-content">
                            <li onclick="loadPage('./itservices/accessVPN.php')" >Remote Access Via VPN</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <span class="icon-span" style="background-color: #42f5b0">
                            <i class="fa-solid fa-earth-americas"></i>
                        </span>
                        <span class="text">Online Classes Services</span>
                        <ul class="dropdown-content">
                            <li onclick="loadPage('./itservices/lecture_recording.php')" >Lecture Recording Facilities</li>
                            <li onclick="loadPage('./itservices/onlineclasses.php')" >Arrangement and Monitoring of Online Classes</li>
                            
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <span class="icon-span" style="background-color: #f542da;">
                            <i class="fas fa-wifi"></i>
                        </span>
                        <span class="text">Internet Services</span>
                        <ul class="dropdown-content">
                            <li onclick="loadPage('./itservices/wifi.php')" >Wifi</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <span class="icon-span" style="background-color: #f0606e;">
                            <i class="fa-solid fa-file"></i>
                        </span>
                        <span class="text">File Storage Services</span>
                        <ul class="dropdown-content">
                            <li onclick="loadPage('./itservices/venus1.php')" >Venus1</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <span class="icon-span" style="background-color: #7f60f0;">
                            <i class="fa-regular fa-building"></i>
                        </span>
                        <span class="text">Complaint log system</span>
                        <ul class="dropdown-content">
                            <li onclick="loadPage('./itservices/std_facilitation.php')" >Student Facilitation System</li>
                            <li onclick="loadPage('./itservices/admin_desk.php')" >Admin Desk</li>
                            <li onclick="loadPage('./itservices/helpdesk.php')" >IT Helpdesk</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <span class="icon-span" style="background-color: #1f08a1;">
                            <i class="fa-solid fa-radio"></i>
                        </span>
                        <span class="text">Media Services</span>
                        <ul class="dropdown-content">
                            <li onclick="loadPage('./itservices/Maju_FM.php')" >FM Radio</li>
                            <li onclick="loadPage('./itservices/cslab.php')" >Computer Labs</li>
                            <li onclick="loadPage('./itservices/MM_SS.php')" >Multimedia and Sound Systems</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <span class="icon-span" style="background-color: #880c0c;">
                            <i class="fa-solid fa-question"></i>
                        </span>
                        <span class="text">Miscellaneous</span>
                        <ul class="dropdown-content">
                            <li onclick="loadPage('./itservices/plagiarism.php')">Plagiarism(Turnitin)</li>
                            <li  onclick="loadPage('./itservices/laptop.php')">Laptop</li>
                            <li onclick="loadPage('./itservices/office365.php')">Office 365</li>
                        </ul>
                    </li>
           
                    <li class="list-group-item">
                        <span class="icon-span" style="background-color: #f5a142;">
                            <i class="fa-solid fa-scale-balanced"></i>
                        </span>
                        <span class="text">Rules to Conduct</span>
                        <ul class="dropdown-content">
                            <li onclick="loadPage('./itservices/rulesofconduct.php')" >For Labs</li>
                            <li onclick="loadPage('./itservices/rulesLibrary.php')" >For Library</li>
                        </ul>
                    </li>
               
                    <!-- Add similar dropdown-content for other items if needed -->
                </ul>
            </div>
            

            <div class="col-md-9 p-2">
                <div id="right-content">
                    <!-- Existing content -->
                    <div class="text-center">
                        <h3>Welcome to <span>Mohammad Ali Jinnah University</span><br> IT Services Page</h3>
                        <p class="mt-3">Explore various IT services and resources available to support your academic and
                            professional needs.</p>
                    </div>
                    
                    <!-- Director IT Message Section -->
                    <div class="container">
                        <div class="message mt-5">
                            <h4>Director IT Message</h4>
                            <h6>Nauman Hafeez Ansari</h6>
                            <p>I am pleased to welcome you to our comprehensive suite of IT services designed to support the academic, research, and administrative needs of our students, faculty, and staff.
    </p>
    <p>
Our team is committed to providing reliable, secure, and innovative technology solutions that enhance educational and research experience and streamline university operations.</p>
<p>
We understand that technology is at the heart of modern education, and our goal is to ensure that our systems, networks, and digital resources are always available to support academic journey and professional development. Whether you are accessing learning management systems, collaborating on research, or utilizing campus-wide networks and applications, we are here to ensure you have the tools you need for success.
    </p>
    <p>
Our IT support services are always available to assist you with any technical issues or inquiries. We are dedicated to making your experience with technology at the university as smooth and productive as possible.</p>
                        </div>
                    </div>

                <div class="text-center image">
                        <img src="https://cdn.pixabay.com/photo/2017/08/29/08/39/industry-2692459_1280.jpg" alt="IT Services Image">
                    </div>
            

                </div>
            </div>
            
        </div>
    </div>

    <script>
        // Function to hide all dropdowns
        function hideAllDropdowns() {
            document.querySelectorAll("#left-menu .dropdown-content").forEach(function (dropdown) {
                dropdown.style.display = "none";
            });
        }

        // Add event listener to each menu item
        document.querySelectorAll("#left-menu .list-group-item").forEach(function (menuItem) {
            menuItem.addEventListener("click", function () {
                if (window.innerWidth <= 768) {
                    hideAllDropdowns(); // Hide other dropdowns

                    const dropdown = menuItem.querySelector(".dropdown-content");
                    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
                }
            });
        });

        // Scroll to content on dropdown selection (mobile only)
        function scrollToContent() {
            if (window.innerWidth <= 768) {
                document.getElementById("right-content").scrollIntoView({ behavior: "smooth" });
            }
        }

        // Add event listener to dropdown items
        document.querySelectorAll("#left-menu .dropdown-content li").forEach(function (dropdownItem) {
            dropdownItem.addEventListener("click", function () {
                scrollToContent(); // Scroll after selection
            });
        });

        // Load page function (if needed)
        function loadPage(page) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("right-content").innerHTML = xhr.responseText;
                    scrollToContent(); // Scroll after loading content
                }
            };
            xhr.open("GET", page, true);
            xhr.send();
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
