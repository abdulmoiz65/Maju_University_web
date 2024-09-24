<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>MAJU IT Services</title>

    <style>
        /* body {
            display: flex;
        } */

        #left-menu {
            /* flex: 0 0 500px; */
            /* Set the fixed width for the left menu */
            /* max-width: 500px; */
            /* Added maximum width to ensure it doesn't exceed 200px */
            background-color: #f1f1f1;
            padding: 10px;
        }

        #right-content {
            /* flex-grow: 1; */
            /* max-width: 1000px; */
            /* Fixed maximum width for the right content */
            padding: 10px;
        }

        #right-content h2 {
            color: #333;
        }

        #right-content p {
            color: #777;
        }

        /* Added CSS for highlighting the active menu item */
        .list-group-item.active {
            background-color: #e9ecef;
            /* Set the desired background color for the active menu item */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-5">
                <ul id="left-menu" class="list-group">
                    <li class="list-group-item" onclick="loadPage('./itservices/facultystaffworkremotely.php', 0)">
                        
                            <span
                                class="d-inline-flex align-items-center justify-content-center text-white rounded m-1 me-2"
                                style="background-color: #f0606e; width: 40px; height: 40px;">
                                <i class="fas fa-chalkboard-teacher fa-lg"></i>
                            </span>
                            Faculty / Staff Working Remotely
                        
                    </li>

                    
                    <li class="list-group-item">
                        <a onclick="loadPage('./itservices/studentworkstudyremotely.php',1)">
                            <span
                                class="d-inline-flex align-items-center justify-content-center text-white rounded m-1 me-2"
                                style="background-color: #ff4500; width: 40px; height: 40px;">
                                <i class="fas fa-user-graduate fa-lg"></i>
                            </span>
                            Student Resources for Studying Remotely
                        </a>
                    </li>



                    <li class="list-group-item">
                        <a onclick="loadPage('./itservices/accessandaccounts.php',2)">
                            <span
                                class="d-inline-flex align-items-center justify-content-center text-white rounded m-1 me-2"
                                style="background-color: #f542da; width: 40px; height: 40px;">
                                <i class="fas fa-shield-alt fa-lg"></i>
                            </span>
                            Access and Accounts
                        </a>
                    </li>

                    <li class="list-group-item">
                        <a onclick="loadPage('./itservices/passwords.php',3)">
                            <span
                                class="d-inline-flex align-items-center justify-content-center text-white rounded m-1 me-2"
                                style="background-color: #42f5b0; width: 40px; height: 40px;">
                                <i class="fas fa-user-lock fa-lg"></i>
                            </span>
                            Passwords
                        </a>
                    </li>

                    <li class="list-group-item">
                        <a onclick="loadPage('./itservices/computerlabs.php',4)">
                            <div class="d-inline-flex align-items-center justify-content-center text-white rounded m-1 me-2"
                                style="background-color: #f5a142; width: 40px; height: 40px;">
                                <i class="fas fa-desktop fa-lg"></i>
                            </div>
                            Computer Labs
                        </a>
                    </li>

                    <li class="list-group-item">
                        <a onclick="loadPage('./itservices/rulesofconduct.php',5)">
                            <div class="d-inline-flex align-items-center justify-content-center text-white rounded m-1 me-2"
                                style="background-color: #f0606e; width: 40px; height: 40px;">
                                <i class="fas fa-gavel"></i>
                            </div>
                            Rules of Conduct
                        </a>
                    </li>

                    <li class="list-group-item">
                        <a onclick="loadPage('./itservices/printing.php',6)">
                            <div class="d-inline-flex align-items-center justify-content-center text-white rounded m-1 me-2"
                                style="background-color: #ff4500; width: 40px; height: 40px;">
                                <i class="fas fa-print"></i>
                            </div>
                            Printing
                        </a>
                    </li>

                    <li class="list-group-item">
                        <a onclick="loadPage('./itservices/wirelessnetworkvpn.php',7)">
                            <div class="d-inline-flex align-items-center justify-content-center text-white rounded m-1 me-2"
                                style="background-color: #f542da; width: 40px; height: 40px;">
                                <i class="fas fa-wifi"></i>
                            </div>
                            Wireless, Network and VPN
                        </a>
                    </li>

                    <!-- <li class="list-group-item">
                        <a onclick="loadPage('./itservices/enterpriseapplications.php',8)">
                            <div class="d-inline-flex align-items-center justify-content-center text-white rounded m-1 me-2"
                                style="background-color: #42f5b0; width: 40px; height: 40px;">
                                <i class="fas fa-industry"></i>

                            </div>
                            Enterprise Applications
                        </a>
                    </li> -->

                    <!-- <li class="list-group-item">
                        <a onclick="loadPage('./itservices/projectrequeststatus.php',9)">
                            <div class="d-inline-flex align-items-center justify-content-center text-white rounded m-1 me-2"
                                style="background-color: #f5a142; width: 40px; height: 40px;">
                                <i class="fas fa-tasks"></i>

                            </div>
                            Project Request Status
                        </a>
                    </li> -->

                    <li class="list-group-item">
                        <a onclick="loadPage('./itservices/securityprivacy.php',10)">
                            <div class="d-inline-flex align-items-center justify-content-center text-white rounded m-1 me-2"
                                style="background-color: #f0606e; width: 40px; height: 40px;">
                                <i class="fas fa-lock"></i>

                            </div>
                            Security & Privacy
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-7">
                <div id="right-content">
                    <h3>Welcome to Mohammad Ali Jinnah University <br>IT Services Page</h3>

                </div>
            </div>

        </div>
    </div>




    <script>
        function loadPage(page, index) {
            
            const menuItems = document.querySelectorAll("#left-menu li");
            menuItems.forEach((item, i) => {
                if (i === index) {
                    
                    item.classList.add("active");
                } else {
                    item.classList.remove("active");
                }
            });
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("right-content").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", page, true);
            xhr.send();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>