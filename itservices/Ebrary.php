<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebrary - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>

        .ebrary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .ebrary .content {
            max-width: 60%;
        }

        .ebrary h1{
            font-weight: 600;
            font-family:"Playfair Display SC", serif;
            color:#112269;
        }

        .ebrary p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .ebrary .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .ebrary .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .ebrary .image-container {
            max-width: 35%;
        }
        .ebrary .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .ebrary {
                flex-direction: column;
                padding: 20px;
            }

            .ebrary .content {
                max-width: 100%;
                text-align: center;
            }

            .ebrary .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="ebrary">
            <div class="content">
                <h1>Ebrary</h1>
                <h3>The Online Library For You!</h3>
                <p>
                    EBrary offers a wide variety of content across many subject areas, especially in business and social
                    science. It acquires integrated collections of eBooks and other content. Ebrary continues to add
                    quality eBooks and other authoritative titles to their selection from the world's leading academic and
                    professional publishers. Users will be able to copy paste each page and download a book for 15 days
                    (after 15 days it can be downloaded again). All institutions will be able to access all subject
                    collections; 142,000 e-Books will be accessible.
                </p>
                <a href="http://ebrary.jinnah.edu/" target="_blank" class="btn">Visit Ebrary</a>
            </div>
            <div class="image-container">
                <img src="./public/pictures/library.jpg" alt="Ebrary Image">
            </div>
        </div>
    </div>
</body>
</html>