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
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2578390205823605');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2578390205823605&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <style>
                 .button button {
        padding: 1rem 1rem;
    }

    .mainnav {
        background-color: #112269 !important;
    }
        .feedback-section {
            margin-top:6rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            padding: 40px;
            background-color: #f3f6f9;
        }

        .feedback-container {
            display: flex;
            background-color: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
        }

        .feedback-image {
            position: relative;
            flex: 1;
            background-image: url('https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDEwfHxjb21tdW5pY2F0aW9ufGVufDB8fHx8MTY0MjYwNTgzNw&ixlib=rb-1.2.1&q=80&w=1080');
            background-size: cover;
            background-position: center;
            padding: 30px;
        }

        .feedback-image h2 {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #112269;
            font-size: 1.8rem;
            font-weight: 600;
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
        }

        .feedback-form .form-control {
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .feedback-form .submit-btn {
            background-color: #112269;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
        }

        .feedback-form .submit-btn:hover {
            background-color: #0d1d50;
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
