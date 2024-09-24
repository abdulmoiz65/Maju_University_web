<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            display: flex;
        }

        #left-menu {
            width: 500px; /* Fixed width for the left menu */
            background-color: #f1f1f1;
            padding: 10px;
        }

        #right-content {
            flex-grow: 1;
            max-width: 1000px; /* Fixed maximum width for the right content */
            padding: 10px;
        }

        #right-content h2 {
            color: #333;
        }

        #right-content p {
            color: #777;
        }
    </style>
</head>
<body>
    <div id="left-menu">
        <ul>
            <li onclick="loadPage('./itservices/facultystaffworkremotely.php')">Faculty / Staff Working Remotely</li>
            <li onclick="loadPage('./itservices/studentworkstudyremotely.php')">Student Resources for Working and Studying Remotely</li>
            <li onclick="loadPage('./itservices/accessandaccounts.php')">Access and Accounts</li>
            <li onclick="loadPage('./itservices/passwords.php')">Passwords</li>
            <li onclick="loadPage('./itservices/computerlabs.php')">Computer Labs</li>
        </ul>
    </div>

    <div id="right-content">
        <h2>Welcome to MAJU IT Services</h2>
       
    </div>

    <script>
        function loadPage(page) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("right-content").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", page, true);
            xhr.send();
        }
    </script>
</body>
</html>
