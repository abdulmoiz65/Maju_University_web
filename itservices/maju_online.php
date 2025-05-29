<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAJU Online - Jinnah University</title>
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
        .online h1 {
            font-weight: 600;
            font-family: "Playfair Display SC", serif;
            color: #112269;
        }
        .online h3 {
            color: #0056b3;
            font-weight: 500;
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
                <h1>MAJU Online</h1>
                <h3>Your Gateway to Academic Resources</h3>
                <p>
                    MAJU Online is an integrated portal for students and faculty, streamlining academic and administrative tasks into one user-friendly platform. Faculty members can easily manage student attendance and academic records, while students can access essential resources, including their class schedules, attendance records, transcripts, and semester admit cards. The portal also facilitates the viewing and downloading of fee challans, making it a comprehensive solution for academic and financial needs.
                </p>
                <a href="https://majuonline.edu.pk/" target="_blank" class="btn">Visit MAJU Online</a>
            </div>
            <div class="image-container">
                <img src="./public/pictures/MAJU-Online.png" alt="MAJU Online Portal">
            </div>
        </div>
    </div>
</body>
</html>
