<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        .e-learning {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }
        .e-learning .content {
            max-width: 60%;
        }
        .e-learning h1 {
            font-weight: 600;
            font-family: "Playfair Display SC", serif;
            color: #112269;
        }
        .e-learning h3 {
            color: #0056b3;
            font-weight: 500;
        }
        .e-learning p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }
        .e-learning .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .e-learning .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .e-learning .image-container {
            max-width: 35%;
        }
        .e-learning .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .e-learning {
                flex-direction: column;
                padding: 20px;
            }
            .e-learning .content {
                max-width: 100%;
                text-align: center;
            }
            .e-learning .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="e-learning">
            <div class="content">
                <h1>Moodle (E-Learning)</h1>
                <h3>Your Online Classroom and Learning Hub</h3>
                <p>
                    Moodle is Jinnah University’s official e-learning platform, designed to enhance your academic experience by connecting students and faculty in a virtual environment. Through Moodle, students gain access to course materials, submit assignments, engage in discussions, and track their progress. Faculty members use Moodle to share resources, post assignments, conduct quizzes, and manage grading—all in one centralized location. This flexible and user-friendly platform fosters an interactive and efficient learning experience, anytime, anywhere.
                </p>
                <a href="https://moodle.org/" target="_blank" class="btn">Visit E-Learning</a>
            </div>
            <div class="image-container">
                <img src="./public/pictures/e-learning.jpg" alt="E-Learning Image">
            </div>
        </div>
    </div>
</body>
</html>
