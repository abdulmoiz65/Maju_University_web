<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_desk - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>

        .admin_desk {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .admin_desk .content {
            max-width: 60%;
        }

        .admin_desk h1{
            font-weight: 600;
            font-family:"Playfair Display SC", serif;
            color:#112269;
        }

        .admin_desk p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .admin_desk .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .admin_desk .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .admin_desk .image-container {
            max-width: 35%;
        }
        .admin_desk .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .admin_desk {
                flex-direction: column;
                padding: 20px;
            }

            .admin_desk .content {
                max-width: 100%;
                text-align: center;
            }

            .admin_desk .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="admin_desk">
            <div class="content">
                <h1>ADMIN DESK</h1>
                <h3>Smooth and efficient work environment for our faculty and staff!</h3>
                <p>
                    Muhammad Ali Jinnah University provides a dedicated Admin Desk equipped with a robust complaint management system to streamline administrative tasks for staff and faculty. This system is designed to handle concerns and requests efficiently, ensuring that administrative processes run smoothly and without unnecessary delays.
                    </p>
                    <p>
                    Whether it’s a request for resources, addressing workplace issues, or resolving operational challenges, the Admin Desk serves as a central hub for effective communication and resolution. By prioritizing quick responses and transparent handling of complaints, the university fosters a supportive and well-organized work environment for its faculty and staff.
                </p>
                <a href="http://admindesk.jinnah.edu/" target="_blank" class="btn">Visit admin_desk</a>
            </div>
            <div class="image-container">
                <img src="./public/pictures/admin_desk.avif" alt="admin_desk Image">
            </div>
        </div>
    </div>
</body>
</html>