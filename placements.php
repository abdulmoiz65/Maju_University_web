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
.placements h1{
    font-family: "Playfair Display SC", serif ;
    font-size: 3.5rem;
    margin: 2rem;
}
.placements p{
    font-size: 1.2rem;
}

@media screen and (max-width: 768px) {
    .placements h1 {
        font-size: 2.5rem;
        margin: 1rem;
    }
    .placements p {
        text-align: left !important;
    }
    
}

</style>
</head>

<body>

  <?php include('./components/header/header.php');?>  
  <?php
 include("./components/buttons/buttons.php");
include('./components/carousel/carousel_it.php');
$arrayOfSlides = [
    ["./public/pictures/placements1.jpg", "<b>MAJU PLACEMENTS</b>", "Mohammad Ali Jinnah University<br>Career placement and internship opportunities"],
    ["./public/pictures/placements2.jpg", "<b>MAJU PLACEMENTS</b>", "Mohammad Ali Jinnah University<br>Career placement and internship opportunities"],
    ["./public/pictures/placements3.jpg", "<b>MAJU PLACEMENTS</b>", "Mohammad Ali Jinnah University<br>Career placement and internship opportunities"]
];
// $arrayOfButtonContents = [['MAJU ORIC', 'oric.php']];
createSlideShow($arrayOfSlides, $arrayOfButtonContents); 
?>
    <div class="container placements ">
        <h1 class="text-center">Placements</h1>
        <p class="text-center mb-4">Mohammad Ali Jinnah University (MAJU) is committed to providing its students with the best possible opportunities for career development and success.</p>
</div>

<?php
    // Include footer
    include('./components/footer/footer.php');
    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
