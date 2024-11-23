<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop - Jinnah University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        .laptop {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
        }

        .laptop .content {
            max-width: 60%;
        }

        .laptop h1{
            font-weight: 600;
            font-family:"Playfair Display SC", serif;
            color:#112269;
        }

        .laptop p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .laptop .btn {
            text-decoration: none;
            background-color: #112269;
            color: #fff;
            padding: 10px 25px;
            border-radius: 0 !important;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .laptop .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .laptop .image-container {
            max-width: 35%;
        }
        .laptop .image-container img {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .laptop {
                flex-direction: column;
                padding: 20px;
            }

            .laptop .content {
                max-width: 100%;
                text-align: center;
            }

            .laptop .image-container {
                margin-top: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="laptop">
            <div class="content">
                <h1>LAPTOP</h1>
                <p>
                    At Muhammad Ali Jinnah University, faculty members are provided with laptops to support their work in academic and administrative functions. These laptops serve as essential tools for research, course planning, and enhancing the quality of instruction. The initiative ensures that faculty have access to digital resources and tools necessary for creating engaging and effective learning environments, enabling them to stay connected with the latest developments in their fields and interact seamlessly with students and colleagues. By equipping our educators with laptops, Jinnah University aims to foster a technologically advanced campus that enhances productivity and encourages collaboration across departments.
                </p>
                
            </div>
            <div class="image-container">
                <img src="./public/pictures/laptop.jpg" alt="Laptop Image">
            </div>
        </div>
    </div>
</body>
</html>
