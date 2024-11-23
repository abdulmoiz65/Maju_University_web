<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FM - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        .FM {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .FM .content {
            max-width: 60%;
        }

        .FM h1 {
            font-weight: 600;
            font-family: "Playfair Display SC", serif;
            color: #112269;
        }

        .FM h3 {
            color: #0056b3;
        }

        .FM p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .FM .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }

        .FM .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        .FM .image-container {
            max-width: 35%;
        }

        .FM .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .FM {
                flex-direction: column;
                padding: 20px;
            }

            .FM .content {
                max-width: 100%;
                text-align: center;
            }

            .FM .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="FM">
            <div class="content">
                <h1>MAJU FM</h1>
                <h3>MAJU FM 97.6 FOR YOU</h3>
                <p>
                    MAJU FM broadcasts on a frequency of 97.6, connecting everyone with a wide range of programs and music. This platform serves as a source of entertainment and information, providing updates and engaging content for the entire community.
                </p>
                <p>
                    Tune in to enjoy diverse shows, discussions, and interviews that cover various topics relevant to listeners from all walks of life. Our aim is to foster a vibrant community through engaging audio content and create connections among our audience.
                </p>
                <!-- <a href="http://FM.jinnah.edu/" target="_blank" class="btn">Visit FM</a> -->
            </div>
            <div class="image-container">
                <img src="./public/pictures/FM.jpg" alt="FM Image">
            </div>
        </div>
    </div>
</body>
</html>
