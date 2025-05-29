<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>

        .online {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .online .content {
            max-width: 60%;
        }

        .online h1{
            font-weight: 600;
            font-family:"Playfair Display SC", serif;
            color:#112269;
        }

        .online p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .online .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .online .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .online .image-container {
            max-width: 35%;
        }
        .online .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .online {
                flex-direction: column;
                padding: 20px;
            }

            .online .content {
                max-width: 100%;
                text-align: center;
            }

            .online .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="online">
            <div class="content">
                <h1>Online Classes</h1>
                <h3>Arrangement and monitoring of online classes!</h3>
                <p>
                    At Muhammad Ali Jinnah University, we ensure that online classes are well-organized and closely monitored to provide a smooth and effective learning experience. Using platforms like Microsoft Teams, we schedule classes, facilitate interactive sessions, and address technical issues in real-time. With reliable tools and dedicated support, we make sure students and faculty stay connected and focused on learning, no matter where they are.
                </p>
            
            </div>
            <div class="image-container">
                <img src="./public/pictures/onlineclasses.jpg" alt="online Image">
            </div>
        </div>
    </div>
</body>
</html>