<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Facilitation system - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>

        .std_faci {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .std_faci .content {
            max-width: 60%;
        }

        .std_faci h1{
            font-weight: 600;
            font-family:"Playfair Display SC", serif;
            color:#112269;
        }

        .std_faci p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .std_faci .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .std_faci .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .std_faci .image-container {
            max-width: 35%;
        }
        .std_faci .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .std_faci {
                flex-direction: column;
                padding: 20px;
            }

            .std_faci .content {
                max-width: 100%;
                text-align: center;
            }

            .std_faci .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="std_faci">
            <div class="content">
                <h1>STUDENT FACILITATION SYSTEM</h1>
                <h3>centralized facilitation system to help resolve any issues students might face!</h3>
                <p>
                    Muhammad Ali Jinnah University is dedicated to ensuring a seamless and supportive experience for its students through a centralized facilitation system. This system is designed to address and resolve a wide range of student concerns efficiently and effectively.
                    </p>
                    <p>
                    Whether it’s academic queries, administrative issues, or any other challenges, the facilitation system acts as a single point of contact, streamlining the process and reducing delays. By prioritizing student needs and fostering open communication, this system reflects the university's commitment to providing a hassle-free and student-centered environment.
                </p>
            </div>
            <div class="image-container">
                <img src="./public/pictures/Std_faci.jpg" alt="Student facilitation System Image">
            </div>
        </div>
    </div>
</body>
</html>