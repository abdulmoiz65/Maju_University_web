<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/pictures/logofavwhite.png" type="image/x-icon">
    <title>Mohammad Ali Jinnah University - Feedback</title>
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

        .feedback-section {
            margin-top: 5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            padding: 40px;
            /* background-color: #f3f6f9; */
        }

        .feedback-container {
            display: flex;
            background-color: #fff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
            transition: transform 0.3s;
        }

       
        .feedback-image {
            position: relative;
            flex: 1;
            background-image: url('./public/pictures/feedback.png');
            background-size: cover;
            background-position: center;
            padding: 30px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .feedback-image h2 {
            color: #ffffff;
            font-size: 2rem;
            font-weight: 700;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            text-align: center;
            background: rgba(17, 34, 105, 0.8);
            padding: 10px 20px;
        }

        .feedback-form {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .feedback-form .form-group {
            margin-bottom: 20px;
        }

        .feedback-form label {
            font-weight: 600;
            color: #112269;
            margin-bottom: 5px;
            display: block;
        }
        .feedback-form .form-control {
            border-radius:0 !important;
            border: 2px solid #e2e2e2;
            padding: 10px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .feedback-form .form-control:focus {
            border-color: #112269;
            box-shadow: 0 0 5px rgba(17, 34, 105, 0.5);
        }

        .feedback-form .submit-btn {
            border-radius:0 !important;
            background-color: #112269;
            color: white;
            padding: 15px;
            border: none;
            font-weight: 700;
            cursor: pointer;
            width: 100%;
            font-size: 1.1rem;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .feedback-form .submit-btn:hover {
            background-color: #0d1d50;
            box-shadow: 0 8px 15px rgba(13, 29, 80, 0.3);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .feedback-container {
                flex-direction: column;
            }

            .feedback-image {
                height: 200px;
            }

            .feedback-image h2 {
                font-size: 1.4rem;
            }
        }
    </style>
</head>

<body>

    <?php
    // Include header
    include('./components/header/header.php');
    ?>

    <!-- Feedback Form Section -->
    <div class="feedback-section">
        <div class="feedback-container">
            <!-- Image Section -->
            <div class="feedback-image">
                <h2>We Value Your Feedback</h2>
            </div>

            <!-- Form Section -->
            <div class="feedback-form">
                <form action="submit-feedback.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="feedback">Describe Your Feedback</label>
                        <textarea class="form-control" id="feedback" name="feedback" rows="5" placeholder="Enter your feedback" required></textarea>
                    </div>
                    <button type="submit" class="btn submit-btn">Submit Feedback</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Feedback Form Section -->

    <?php
    // Include footer
    include('./components/footer/footer.php');
    ?>

</body>

</html>
