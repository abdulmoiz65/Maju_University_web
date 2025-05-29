<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venus1 - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        .venus1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .venus1 .content {
            max-width: 60%;
        }

        .venus1 h1 {
            font-weight: 600;
            font-family: "Playfair Display SC", serif;
            color: #112269;
        }

        .venus1 p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .venus1 .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }

        .venus1 .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        .venus1 .image-container {
            max-width: 35%;
        }

        .venus1 .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .venus1 {
                flex-direction: column;
                padding: 20px;
            }

            .venus1 .content {
                max-width: 100%;
                text-align: center;
            }

            .venus1 .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="venus1">
            <div class="content">
                <h1>Venus1</h1>
                <h3>MAJU File Server</h3>
                <p>
                    Venus1 is Muhammad Ali Jinnah University's comprehensive file server, offering seamless digital storage and resource access for faculty, students, and staff. Designed to support MAJU’s academic and administrative activities, Venus1 enables users to securely store, access, and share vital documents and data across the university.
                    <br><br>
                    In addition to secure storage, Venus1 provides access to a variety of essential software tools required for academic research, classroom activities, and administrative tasks. Faculty members can access teaching materials and specialized academic software, while students can benefit from access to educational software that supports their coursework and projects. Staff members also have access to necessary tools and resources for efficient operational management, all centralized within this robust platform.
                    <br>
                   
                </p>
                
            </div>
            <div class="image-container">
                <img src="./public/pictures/venus.jpg" alt="Venus1 Image">
            </div>
        </div>
    </div>
</body>

</html>
