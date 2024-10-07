<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/pictures/logofavwhite.png" type="image/x-icon">
    <title>Mohammad Ali Jinnah University</title>

    <?php
    include('./components/bootstrap/bootstrap.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>

        .button button {
            padding: 1rem 1rem;
        }

        .mainnav {
            background-color: #112269 !important;
        }

        .contact-section {
            margin-top: 5rem;
            padding: 70px 0;
            text-align: center;
            background: url('https://cdn.pixabay.com/photo/2016/08/31/10/15/phone-booth-1633029_1280.jpg') no-repeat center center / cover;
            position: relative;
            color: #fff;
        }

        .contact-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .contact-section h1 {
            font-weight: 700;
            color: #ffffff;
            font-size: 3rem;
            z-index: 2;
            position: relative;
        }

        .contact-section p {
            font-size: 1.2rem;
            color: #f1f1f1;
            margin-bottom: 40px;
            z-index: 2;
            position: relative;
        }

        .contact-card {
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            padding: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .contact-card img {
            width: 60px;
            margin-bottom: 20px;
        }

        .contact-card h4 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #112269;
        }

        .contact-card p,
        .contact-card h5 {
            font-size: 1rem;
            color: #666;
        }

        .contact-card a {
            text-decoration: none;
            color: #112269;
            font-weight: 600;
        }

        .contact-card a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .contact-section h1 {
                font-size: 2.5rem;
            }

            .contact-card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <?php
    include('./components/header/header.php');
    ?>

    <section class="contact-section">
        <h1>Get in Touch</h1>
        <p class="text-center">We'd love to hear from you. Here's how you can reach us...</p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="contact-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="Phone">
                        <h4>MAJU - UNIVERSITY</h4>
                        <p  class="text-center"  >MAJU Bus Stop, Main Shahrah-e-Faisal, KARACHI</p>
                        <h5>EMAIL : info@jinnah.edu</h5>
                        <h5>CONTACT : 92-21-3431-1327</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include("./components/important-links/important-links.php");
    include("./components/footer/footer.php");
    ?>
</body>

</html>
