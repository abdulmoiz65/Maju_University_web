<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/pictures/logofavwhite.png" type="image/x-icon">
    <title>Mohammad Ali Jinnah University - Feedback</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

</head>

<body>

  <?php include('./components/header/header.php');?>  
  <?php
 include("./components/buttons/buttons.php");
include('./components/carousel/carousel_it.php');
$arrayOfSlides = [
    ["./public/pictures/majuoric3.jpg", "<b>MAJU ORIC</b>", "Mohammad Ali Jinnah University<br>Office of Research, Innovation and Commercialization"],
    ["./public/pictures/live.jpg", "<b>MAJU ORIC</b>", "Mohammad Ali Jinnah University<br>Office of Research, Innovation and Commercialization"],
    ["./public/pictures/majuoric4.jpg", "<b>MAJU ORIC</b>", "Mohammad Ali Jinnah University<br>Office of Research, Innovation and Commercialization"]
];
$arrayOfButtonContents = [['MAJU ORIC', 'oric.php']];
createSlideShow($arrayOfSlides, $arrayOfButtonContents); 
include('./components/oric/oric.php');
?>




<?php
    // Include footer
    include('./components/footer/footer.php');
    ?>

</body>

</html>
