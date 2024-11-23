<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MM_SS - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>

        .MM_SS {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .MM_SS .content {
            max-width: 60%;
        }

        .MM_SS h1{
            font-weight: 600;
            font-family:"Playfair Display SC", serif;
            color:#112269;
        }

        .MM_SS p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .MM_SS .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .MM_SS .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .MM_SS .image-container {
            max-width: 35%;
        }
        .MM_SS .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .MM_SS {
                flex-direction: column;
                padding: 20px;
            }

            .MM_SS .content {
                max-width: 100%;
                text-align: center;
            }

            .MM_SS .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="MM_SS">
            <div class="content">
                <h1>Multi media and sound system</h1>
                <h3>Modern Technology For Better Learning!</h3>
                <p>
                    At Muhammad Ali Jinnah University, we’re committed to creating a learning environment that’s both modern and engaging. That’s why every classroom is equipped with projectors and high-quality sound systems, making lectures and discussions more interactive and easy to follow. These tools help students and teachers connect better, turning ordinary lessons into dynamic and immersive experiences that truly bring learning to life.
                </p>
               
            </div>
            <div class="image-container">
                <img src="./public/pictures/MM.jpg" alt="MM_SS Image">
            </div>
        </div>
    </div>
</body>
</html>