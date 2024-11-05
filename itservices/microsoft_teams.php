<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft Teams - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .teams {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }
        .teams .content {
            max-width: 60%;
        }
        .teams h1 {
            font-weight: 600;
            font-family: "Playfair Display SC", serif;
            color: #112269;
        }
        .teams h3 {
            color: #0056b3;
            font-weight: 500;
        }
        .teams p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }
        .teams .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .teams .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .teams .image-container {
            max-width: 35%;
        }
        .teams .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .steps {
            margin-top: 40px;
        }
        .steps h2 {
            color: #112269;
            font-weight: 600;
        }
        .steps ol {
            font-size: 18px;
            line-height: 1.6;
            padding-left: 20px;
        }
        .steps li {
            margin-bottom: 10px;
        }
        @media (max-width: 768px) {
            .teams {
                flex-direction: column;
                padding: 20px;
            }
            .teams .content {
                max-width: 100%;
                text-align: center;
            }
            .teams .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Microsoft Teams Overview Section -->
        <div class="teams">
            <div class="content">
                <h1>Microsoft Teams</h1>
                <p>
                    Microsoft Teams is the university's integrated Learning Management System (LMS), designed to create a seamless digital learning experience. It offers a centralized platform where students, faculty, and staff can collaborate effectively and engage in an interactive learning environment.
                </p>
                <!-- <a href="http://teams.jinnah.edu/" target="_blank" class="btn">Visit Teams</a> -->
            </div>
            <div class="image-container">
                <img src="./public/pictures/teams.jpg" alt="Teams Image">
            </div>
        </div>

        <!-- Steps to Use Microsoft Teams -->
        <div class="steps">
            <h2>Getting Started with Microsoft Teams</h2>
            <p>Follow these simple steps to start using Microsoft Teams for your classes and meetings:</p>
            <ol>
                <li><strong>Log In:</strong> Go to <a href="https://teams.microsoft.com/" target="_blank">teams.microsoft.com</a> and sign in using your university credentials.</li>
                <li><strong>Join a Team or Create a Class:</strong> Use the 'Teams' tab to join an existing class or create a new one for your courses or project groups.</li>
                <li><strong>Access Course Materials:</strong> Check the 'Files' section within each Team for resources like lecture notes, slides, and assignments.</li>
                <li><strong>Attend Online Classes:</strong> Go to the 'Calendar' tab to find and join scheduled online classes and meetings.</li>
                <li><strong>Submit Assignments:</strong> Visit the 'Assignments' tab to complete and submit your work directly through Teams.</li>
                <li><strong>Check Your Grades:</strong> Access the 'Grades' section within each Team to see your grades and feedback from instructors.</li>
                <li><strong>Engage and Collaborate:</strong> Use the chat, video, and file-sharing features to collaborate with classmates and communicate with instructors.</li>
            </ol>
        </div>
    </div>
</body>
</html>
