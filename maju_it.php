<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/pictures/logofavwhite.png" type="image/x-icon">

    <title>Mohammad Ali Jinnah University</title>
    <style>
        
    </style>
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
include('./components/carousel/carousel.php');
$arrayOfSlides = [
    ["./public/pictures/it9.jpg", "<b>MAJU IT Services</b>", "We at Mohammad Ali Jinnah University<br>provides best IT Services"],
    ["./public/pictures/it7.jpg", "<b>MAJU IT Services</b>", "We at Mohammad Ali Jinnah University<br>provides best IT Services"],
    ["./public/pictures/it6.jpg", "<b>MAJU IT Services</b>", "We at Mohammad Ali Jinnah University<br>provides best IT Services"]
];
$arrayOfButtonContents = [['IT Services', 'services.php']];
createSlideShow($arrayOfSlides, $arrayOfButtonContents); 
?>


<?php include("./All_IT_services.php");?>
<?php include("./components/footer/footer.php");?>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
</body>
</html>