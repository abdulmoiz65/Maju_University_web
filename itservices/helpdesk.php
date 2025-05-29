<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>helpdesk - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>

        .helpdesk {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .helpdesk .content {
            max-width: 60%;
        }

        .helpdesk h1{
            font-weight: 600;
            font-family:"Playfair Display SC", serif;
            color:#112269;
        }

        .helpdesk p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .helpdesk .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .helpdesk .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .helpdesk .image-container {
            max-width: 35%;
        }
        .helpdesk .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .helpdesk {
                flex-direction: column;
                padding: 20px;
            }

            .helpdesk .content {
                max-width: 100%;
                text-align: center;
            }

            .helpdesk .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="helpdesk">
            <div class="content">
                <h1>IT helpdesk</h1>
                <h3>MAJU IT Support For You!</h3>
                <p>
                    Helpdesk is based on ManageEngine, which offers enterprise IT management software for service management, operations management, Active Directory and security needs. Student, staff & faculty upload query/problem relevant to it services and get their solutions.
                </p>
                <a href="http://helpdesk.jinnah.edu/" target="_blank" class="btn">Visit helpdesk</a>
            </div>
            <div class="image-container">
                <img src="./public/pictures/helpdesk.jpg" alt="helpdesk Image">
            </div>
        </div>
    </div>
</body>
</html>