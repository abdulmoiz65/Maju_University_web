<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Mohammad Ali Jinnah University (MAJU), a center of academic excellence in Karachi, Pakistan. Explore our programs, admissions, and student life.">
    <meta name="keywords" content="MAJU, Mohammad Ali Jinnah University, Karachi, Pakistan, education, university, admissions, student life,Programs, Engineering, Business, Computer Science">
    
    <link rel="shortcut icon" href="./public/pictures/logofavwhite.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Mohammad Ali Jinnah University</title>
    <?php
    include('./components/bootstrap/bootstrap.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>


    <!-- Meta Pixel Code-->
    <script>
        ! function(f, b, e, v, n, t, s){
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

    <?php
    include('./components/header/header.php');
    include("./components/buttons/buttons.php");
    include('./components/carousel/carousel.php');
    $arrayOfSlides = [
        ["./public/pictures/maju2.jpg", "MUHAMMAD ALI JINNAH UNIVERSITY", "Mohammad Ali Jinnah University"],
        ["./public/pictures/oric2.jpg", "MUHAMMAD ALI JINNAH UNIVERSITY", "Mohammad Ali Jinnah University"],
        ["./public/pictures/maju3.jpg", "MUHAMMAD ALI JINNAH UNIVERSITY", "Mohammad Ali Jinnah University"]
    ];
    $arrayOfButtonContents = [['Apply Now', 'https://jinnah.edu/admissions/']];
    createSlideShow($arrayOfSlides, $arrayOfButtonContents);
    include("./components/cards/cards.php");
    include("./components/jumbotron/jumbotron.php");
    createJumbotron("Discover MAJU ORIC", "The Mohammad Ali Jinnah University has a binding concern to produce individuals with high academic caliber. For this purpose, it is pertinent to establish ‘Office of Research, Innovation and Commercialization’ (ORIC) to nurture research and innovation. We strive to merge research efforts of internal and external stakeholders through participative governance structures.", "./oric.php");
    include("./components/values/values.php");
    include("./components/statscard/stats.php");
    include("./components/important-links/important-links.php");
    include("./components/footer/footer.php");
    ?>

</body>

</html>