<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Classroom - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        .classroom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }
        .classroom .content {
            max-width: 60%;
        }
        .classroom h1 {
            font-weight: 600;
            font-family: "Playfair Display SC", serif;
            color: #112269;
        }
        .classroom h3 {
            color: #0056b3;
            font-weight: 500;
        }
        .classroom p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }
        .classroom .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .classroom .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .classroom .image-container {
            max-width: 35%;
        }
        .classroom .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .classroom {
                flex-direction: column;
                padding: 20px;
            }
            .classroom .content {
                max-width: 100%;
                text-align: center;
            }
            .classroom .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="classroom">
            <div class="content">
                <h1>Google Classroom</h1>
                <h3>Efficient, Organized, and Interactive Learning</h3>
                <p>
                    Google Classroom is Jinnah University's dedicated online learning management system, fostering collaboration between instructors and students in a streamlined virtual environment. This platform allows educators to manage course assignments, track student progress, and facilitate real-time feedback seamlessly. With Google Classroom, students can submit assignments, view grades, participate in discussions, and access resources in one organized, user-friendly space. Designed to enhance the academic experience, Google Classroom serves as a vital tool for a connected, modern learning journey.
                </p>
                <a href="https://edu.google.com/" target="_blank" class="btn">Visit Classroom</a>
            </div>
            <div class="image-container">
                <img src="./public/pictures/gcr.jpg" alt="Google Classroom Image">
            </div>
        </div>
    </div>
</body>
</html>
