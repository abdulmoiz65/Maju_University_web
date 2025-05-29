<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VPN - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>

        .VPN {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .VPN .content {
            max-width: 60%;
        }

        .VPN h1{
            font-weight: 600;
            font-family:"Playfair Display SC", serif;
            color:#112269;
        }

        .VPN p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .VPN .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .VPN .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .VPN .image-container {
            max-width: 35%;
        }
        .VPN .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .VPN {
                flex-direction: column;
                padding: 20px;
            }

            .VPN .content {
                max-width: 100%;
                text-align: center;
            }

            .VPN .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="VPN">
            <div class="content">
                <h1>VPN ACCESS</h1>
                <h3>Remote access of VPN for student , staff and faculty!</h3>
                <p>
                    Muhammad Ali Jinnah University offers secure VPN access to faculty and  students, enabling them to connect to university services remotely. This facility ensures uninterrupted access to essential resources like academic databases, internal systems, and other MAJU services, no matter where users are.
                </p>
                <p>
                    Additionally, the university provides robust video conferencing capabilities, making virtual meetings, online classes, and collaborative sessions seamless and effective. These features reflect MAJU’s commitment to embracing modern technology, ensuring flexibility and connectivity for its academic community
                </p>
            </div>
            <div class="image-container">
                <img src="./public/pictures/vpn.jpg" alt="VPN Image">
            </div>
        </div>
    </div>
</body> 
</html>