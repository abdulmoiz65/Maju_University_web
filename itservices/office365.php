<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>office365 - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>

        .office {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .office .content {
            max-width: 60%;
        }

        .office h1{
            font-weight: 600;
            font-family:"Playfair Display SC", serif;
            color:#112269;
        }

        .office p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .office .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .office .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .office .image-container {
            max-width: 35%;
        }
        .office .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .office {
                flex-direction: column;
                padding: 20px;
            }

            .office .content {
                max-width: 100%;
                text-align: center;
            }

            .office .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="office">
            <div class="content">
                <h1>OFFICE 365</h1>
                <p>
                    Muhammad Ali Jinnah University provides a reliable and efficient email solution for faculty , staff and students through Office 365. As a licensed A1 user, the university ensures access to professional email services that streamline communication and collaboration across the campus.
</p>
<p>
                    This system allows faculty and students to stay connected, share resources, and engage in academic activities seamlessly. With the robust features of Office 365, users also benefit from enhanced security, ample storage, and integration with other Microsoft tools, fostering a modern and productive learning and teaching environment.
                </p>
                <a href="https://office.com/" target="_blank" class="btn">Visit office365</a>
            </div>
            <div class="image-container">
                <img src="./public/pictures/office365.webp" alt="office365 Image">
            </div>
        </div>
    </div>
</body>
</html>