<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koha - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>

        .koha {
            display: flex;
            justify-content: space-between;
            align-items:center;
            margin-top: 20px;
            background-color: #fff;
        }

        .koha .content {
            max-width: 60%;
        }
        .koha h1{
            font-weight: 600;
            font-family:"Playfair Display SC", serif;
            color:#112269;
        }

        .koha p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .koha .btn {
            margin-bottom:2rem;
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0px !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .koha .btn:hover {
            
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .koha .image-container {
            max-width: 35%;
        }
        .koha .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .koha {
                flex-direction: column;
                padding: 20px;
            }

            .koha .content {
                max-width: 100%;
                text-align: center;
            }

            .koha .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="koha">
            <div class="content">
                <h1>Library Management System KOHA!</h1>
                <p>
                    We have more than 14,000 books in print, the collection is being updated continuously and books are purchased through recommendation of senior faculty members and subject teachers, which make the collection most suited and beneficial to the students. The Library is fully computerized with the help of KOHA, this online catalogue is offers personalized account management and tracking.
<br><br>
                    We have also Digital Library facility, where almost 25,000 e- journals, magazines and more than 40,000 e-books are available in our e-book management software.  To promote research and advanced studies work with the help of Dspace software we have vast digital archive collection of our research work.
    <br><br>                
                    We subscribe periodicals and journals every month. A good number of newspapers are available in library for enhancing the knowledge of students in current affairs, every day science and technology.
        <br><br>            
                    MAJU Library is growing day by day with latest collection and software’s. The new and latest additions are always preferable to procure in order to provide the latest information to users.
            <br><br>        
                    As the Librarian of Mohammad Ali Jinnah University, I welcome you to in our library.
                </p>
            </div>
            <div class="image-container">
                <a href="http://ils.jinnah.edu/" target="_blank" class="btn">Visit koha</a>
                <img src="./public/pictures/koha2.jpg" alt="koha Image">
            </div>
        </div>
    </div>
</body>
</html>