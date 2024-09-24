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
    <style>
        .button button {
            padding: 1rem 1rem;
        }

        .mainnav {
            background-color: #112269 !important;
        }

        .contact-section {
            margin-top:5rem;
            padding: 100px 0;
            text-align: center;
            background-color: #f3f6f9;
        }

        .contact-section h1 {
            font-weight: 700;
            color: #112269;
        }

        .contact-section p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 40px;
        }

        .contact-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 40px;
        }

        .contact-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            transition: transform 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-10px);
        }

        .contact-card img {
            width: 50px;
            margin-bottom: 20px;
        }

        .contact-card h4 {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .contact-card a {
            text-decoration: none;
            color: #112269;
        }

        .contact-card a:hover {
            text-decoration: underline;
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
                        <p class="text-center">MAJU Bus Stop, Main Shahrah-e-Faisal, KARACHI</p>
                        <h5 class="text-center">EMAIL : info@jinnah.edu</h5>
                        <h5 class="text-center">CONTACT :  92-21-3431-1327</h5>
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
