<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plagiarism Check - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        .plagiarism {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .plagiarism .content {
            max-width: 60%;
        }

        .plagiarism h1 {
            font-weight: 600;
            font-family: "Playfair Display SC", serif;
            color: #112269;
        }

        .plagiarism p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .plagiarism .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }

        .plagiarism .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        .plagiarism .image-container {
            max-width: 35%;
        }

        .plagiarism .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .plagiarism {
                flex-direction: column;
                padding: 20px;
            }

            .plagiarism .content {
                max-width: 100%;
                text-align: center;
            }

            .plagiarism .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="plagiarism">
            <div class="content">
                <h1>Plagiarism Detection</h1>
                <p>
                    At Muhammad Ali Jinnah University, maintaining academic integrity is of utmost importance. To ensure originality in academic work, we use <strong>Turnitin</strong>, a leading software tool that helps detect plagiarism in assignments, projects, and other submissions.
                </p>
                <p>
                    Turnitin allows both faculty and students to check the originality of their work. Faculty members use this tool to review student submissions and ensure that each piece of work is authentic and free from unauthorized copying. Additionally, Turnitin's AI detection capabilities assist in identifying instances of academic misconduct involving AI-generated content.
                </p>
               
                <!-- <a href="http://plagiarism.jinnah.edu/" target="_blank" class="btn">Visit Plagiarism Portal</a> -->
            </div>
            <div class="image-container">
                <img src="./public/pictures/plagiarism.png" alt="Plagiarism Detection Image">
            </div>
        </div>
    </div>
</body>
</html>
