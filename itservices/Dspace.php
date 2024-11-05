<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSpace - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        .dspace {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }
        .dspace .content {
            max-width: 60%;
        }
        .dspace h1 {
            font-weight: 600;
            font-family: "Playfair Display SC", serif;
            color: #112269;
        }
        .dspace h3 {
            color: #0056b3;
            font-weight: 500;
        }
        .dspace p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }
        .dspace .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .dspace .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .dspace .image-container {
            max-width: 35%;
        }
        .dspace .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .communities {
            margin-top: 40px;
        }
        .communities h4 {
            color: #112269;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .communities ul {
            list-style: none;
            padding: 0;
            font-size: 18px;
        }
        .communities ul li {
            margin-bottom: 10px;
        }
        .communities ul li a {
            color: #0056b3;
            text-decoration: none;
            transition: color 0.3s;
        }
        .communities ul li a:hover {
            color: #112269;
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            .dspace {
                flex-direction: column;
                padding: 20px;
            }
            .dspace .content {
                max-width: 100%;
                text-align: center;
            }
            .dspace .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="dspace">
            <div class="content">
                <h1>MAJU dSpace</h1>
                <h3>MAJU Library Repository</h3>
                <p>
                    dSpace is Jinnah University's institutional repository for preserving and providing open access to the academic and research output of the university's community. This digital platform allows students, faculty, and researchers to store, share, and access a vast collection of academic papers, theses, dissertations, and other scholarly materials. By utilizing DSpace, the university fosters a culture of knowledge sharing and ensures the long-term preservation of valuable academic contributions. Access the repository to explore a diverse range of research materials and support the advancement of knowledge.
                </p>
                <a href="http://dspace.jinnah.edu:8080/xmlui/" target="_blank" class="btn">Visit dSpace</a>
            </div>
            <div class="image-container">
                <img src="./public/pictures/dspace.png" alt="DSpace Image">
            </div>
        </div>

        
    </div>
</body>
</html>
