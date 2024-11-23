<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lecture - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>

        .lecture {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .lecture .content {
            max-width: 60%;
        }

        .lecture h1{
            font-weight: 600;
            font-family:"Playfair Display SC", serif;
            color:#112269;
        }

        .lecture p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .lecture .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .lecture .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .lecture .image-container {
            max-width: 35%;
        }
        .lecture .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .lecture {
                flex-direction: column;
                padding: 20px;
            }

            .lecture .content {
                max-width: 100%;
                text-align: center;
            }

            .lecture .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
</style>
</head>
<body>
    <div class="container">
        <div class="lecture">
            <div class="content">
                <h1>Record Lectures</h1>
                <h3>Lecture recording facility for the faculty members!</h3>
                <p>
                    At Muhammad Ali Jinnah University, we support our faculty with state-of-the-art lecture recording facilities available at the Media Studio in Block B. This dedicated space is equipped with professional-grade equipment, allowing faculty to record high-quality lectures for their students.
                </p>
                <p>
                These recorded lectures can be used for online courses, supplementary learning materials, or as a resource for students who may have missed a class. By providing this facility, the university ensures that learning remains accessible, flexible, and in tune with modern educational needs.
                </p>
                
            </div>
            <div class="image-container">
                <img src="./public/pictures/lecture.jpg" alt="lecture Image">
            </div>
        </div>
    </div>
</body>
</html>