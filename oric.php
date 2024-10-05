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

    /* .mainnav {
        background-color: #112269 !important;
    } */
    h1{
        /* margin-top:8rem; */
    }
    .oric_about h1 {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 20px;
}

.oric_about h5 {
    font-size: 20px;
    margin-bottom: 15px;
}
.oric_about .cont p{
  font-size: 0.8rem;;
}
/* .oric_about p {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
} */

.oric-icon {
    width: 50px;
    height: 50px;
    margin-bottom: 15px;
}

.oric_about h3 {
  font-family: "Playfair Display SC", serif;
    font-size: calc(0.375rem + 1.5vw);
    margin-top: 10px;
}

.oric_about p {
  font-size: 0.8rem;;
    color: #777;w
    margin-top: 10px;
}

@media (min-width: 768px) {
    .oric_about .row.text-center .col-lg-3 {
        margin-bottom: 0;
    }
}

/* .container {
    max-width: 1140px;
} */

.mt-5 {
    margin-top: 50px;
}
.oric-icon {
    font-size: 60px;
    color: #112269;
    margin-bottom: 15px;
}

.oric_scope-section {
  /* background-color: #F3F6F9; */
  padding: 50px 0;
}

.oric_scope-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
}

.oric_scope-image img {
  width: 100%;
  max-width: 500px;
}

.oric_scope-content {
  max-width: 600px;
}

.oric_scope-tagline {
  font-size: 14px;
  color: #6c757d;
  font-weight: 600;
  text-transform: uppercase;
  margin-bottom: 20px;
}

.oric_scope-content h1 {
  font-family: "Playfair Display SC", serif;
  font-size: 48px;
  line-height: 1.2;
  margin-bottom: 20px;
}

.oric_scope-description {
  font-size: 0.8rem;
  color: #6c757d;
  margin-bottom: 20px;
  line-height: 1.6;
}

@media (max-width: 768px) {
  .oric_scope-content{
    margin:2rem;
  }
  .oric_scope-container {
    flex-direction: column;
    text-align: center;
  }

  .oric_scope-image img {
    max-width: 80%;
    margin-bottom: 30px;
  }

  .oric_scope-content h1 {
    font-size: 36px;
  }
}


/* research  */
.oric_re-section {
  padding: 50px 0;
}

.oric_re-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
}

.oric_re-image img {
  width: 100%;
  max-width: 500px;
}

.oric_re-content {
  max-width: 600px;
}

.oric_re-tagline {
  font-size: 14px;
  color: #6c757d;
  font-weight: 600;
  text-transform: uppercase;
  margin-bottom: 20px;
}

.oric_re-content h1 {
  font-family: "Playfair Display SC", serif;
  font-size: 48px;
  line-height: 1.2;
  margin-bottom: 20px;
}

.oric_re-description {
  font-size: 0.9rem;
  color: #6c757d;
  margin-bottom: 20px;
  line-height: 1.6;
  list-style-type: none; /* Remove default bullets */
  padding-left: 20px;
}

.oric_re-description li::before {
  content: "➢"; /* Set bullet character */
  color: #6c757d; /* You can change the color if needed */
  font-size: 1rem; /* Adjust bullet size if necessary */
  display: inline-block;
  width: 1em; /* Ensure space between bullet and text */
  margin-right: 10px;
}


@media (max-width: 768px) {
  .oric_re-content {
    margin: 2rem;
  }
  
  .oric_re-container {
    flex-direction: column;
    text-align: center;
  }

  .oric_re-image img {
    max-width: 80%;
    margin-bottom: 30px;
  }

  .oric_re-content h1 {
    font-size: 36px;
  }
}

/* message  */

.oric_message-section {
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  max-width: 1000px;
  margin: 40px auto;
}

.oric_message-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}
.oric_message-content h1{
  font-family: "Playfair Display SC", serif;
    font-size: calc(1.375rem + 1.5vw);
    margin-bottom: 20px;
}
.oric_message-content h2 {
  font-size: 24px;
  color: #000;
  margin: 0;
  max-width: 70%;
}

/* Responsive */
@media (max-width: 768px) {
  .oric_message-container {
    flex-direction: column;
    text-align: center;
  }

  .oric_message-content h2 {
    max-width: 100%;
    margin-bottom: 15px;
  }
}

/* organ  */
.oric_organogram-section {
  text-align: center;
  padding: 40px 0;
  background-color: #f3f6f9;
}

.oric_organogram-container {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Box styles */
.oric_organogram-box {
  background-color: #007bff;
  color: #fff;
  padding: 20px;
  border-radius: 5px;
  width: 200px;
  position: relative;
  margin-bottom: 20px;
}

.oric_organogram-box p {
  font-weight: bold;
  margin: 0;
}

.oric_organogram-box span {
  display: block;
  margin-top: 5px;
}

/* Line connecting President to Director */
.oric_organogram-vertical-line {
  width: 2px;
  height: 40px;
  background-color: #007bff;
  margin-bottom: 20px;
}

/* Line connecting Director to Managers */
.oric_organogram-horizontal-line {
  width: 80%;
  height: 2px;
  background-color: #007bff;
  margin-bottom: 20px;
}

/* Managers and roles row */
.oric_organogram-row {
  display: flex;
  justify-content: space-around;
  width: 80%;
  position: relative;
}

/* Connectors (pseudo-elements) for linking nodes */
.oric_organogram-row::before,
.oric_organogram-row::after {
  content: '';
  position: absolute;
  top: -20px;
  height: 20px;
  width: 50%;
  border-top: 2px solid #007bff;
}

.oric_organogram-row::before {
  left: 0;
  border-right: 2px solid #007bff;
}

.oric_organogram-row::after {
  right: 0;
  border-left: 2px solid #007bff;
}
.oric_organogram-section h1{
  font-family: "Playfair Display SC", serif;
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 30px;
}

.oric_organogram-box::before {
  content: '';
  position: absolute;
  top: -20px;
  left: 50%;
  transform: translateX(-50%);
  width: 2px;
  height: 20px;
  background-color: #007bff;
}

/* Responsive layout */
@media (max-width: 768px) {
  .oric_organogram-row {
    flex-direction: column;
    align-items: center;
  }

  .oric_organogram-horizontal-line {
    display: none;
  }

  .oric_organogram-row::before,
  .oric_organogram-row::after {
    display: none;
  }

  .oric_organogram-row .oric_organogram-box {
    width: 100%;
    margin-bottom: 20px;
  }

  .oric_organogram-box::before {
    top: auto;
    bottom: -20px;
  }
}


    </style>
</head>

<body>

  <?php include('./components/header/header.php');?>  
  <?php
 include("./components/buttons/buttons.php");
include('./components/carousel/carousel.php');
$arrayOfSlides = [
    ["./public/pictures/majuoric3.jpg", "<b>MAJU ORIC</b>", "Mohammad Ali Jinnah University<br>Office of Research, Innovation and Commercialization"],
    ["./public/pictures/live.jpg", "<b>MAJU ORIC</b>", "Mohammad Ali Jinnah University<br>Office of Research, Innovation and Commercialization"],
    ["./public/pictures/majuoric4.jpg", "<b>MAJU ORIC</b>", "Mohammad Ali Jinnah University<br>Office of Research, Innovation and Commercialization"]
];
$arrayOfButtonContents = [['MAJU ORIC', 'oric.php']];
createSlideShow($arrayOfSlides, $arrayOfButtonContents); 
?>

<section class="oric_scope-section">
  <div class="oric_scope-container">
    <div class="oric_scope-image">
      <img src="./public/pictures/oric.avif" alt="oric image">
    </div>
    <div class="oric_scope-content">
      <p class="oric_scope-tagline">MAJU ORIC</p>
      <h1>ORIC Scope</h1>
      
      <p class="oric_scope-description">
      We at ORIC share the responsibility of nurturing all research programs and policies to reflect the above core values. We also strive to have full compliance with all legal requirements and operational policies of the university.
      </p>
      <p class="oric_scope-description">
      The Mohammad Ali Jinnah University is deeply committed to the promulgation of a knowledge culture and cultivation of wisdom for the benefit of the humanity.
      </p>
    </div>
  </div>
</section>

<!-- RESEARCH  -->
<section class="oric_re-section">
  <div class="oric_re-container">
   
  <div class="oric_re-image">
      <img src="./public/pictures/oric5.jpg" alt="oric image">
    </div>

    <div class="oric_re-content">
      <p class="oric_re-tagline">MAJU ORIC</p>
      <h1>Research Areas</h1>
      
<ul class="oric_re-description">
  <li>Biotechnology, Genomics, Bioinformatics, Protein Science, Pharmacology</li>
  <li>Electrical Engineering</li>
  <li>Computer Science</li>
  <li>Computer Systems Engineering</li>
  <li>Management Science</li>
  <li>Social Sciences (including Psychology)</li>
</ul>

    </div>

    

  </div>
</section>

<section class="oric_about">
    <div class="container">
        <div class="row text-center">
            <h1>MAJU ORIC</h1>
            <h5>‘Office of Research, Innovation and Commercialization’</h5>
            <p>The Mohammad Ali Jinnah University has a binding concern to produce individuals with high academic caliber. For this purpose, it is pertinent to establish ‘Office of Research, Innovation and Commercialization’ (ORIC) to nurture research and innovation. We strive to merge research efforts of internal and external stakeholders through participative governance structures.</p>
        </div>
        <div class="row text-center mt-5">
            <div class="col-lg-3 col-md-6 mb-4 cont">
            <i class="fas fa-bullseye oric-icon"></i>
                <h3>MISSION</h3>
                <p>To be a dynamic and competitive center for research and development that serves humanity.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 cont">
            <i class="fas fa-eye oric-icon"></i>
                <h3>VISION</h3>
                <p>To deliver quality research and foster innovation, creativity, and sustainability.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 cont">
            <i class="fas fa-handshake oric-icon"></i>
                <h3>CORE VALUES</h3>
                <p>Integrity, creativity, excellence, innovation, diversity, and accountability.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 cont">
            <i class="fas fa-flag oric-icon"></i>
                <h3>AIMS</h3>
                <p>To enhance research, faculty development, student quality, and curriculum improvements..</p>
            </div>
        </div>
    </div>
</section>

<section class="oric_message-section">
  <div class="oric_message-container">
    <div class="oric_message-content">
        <h1>Director ORIC Message</h1>
      <h2>Our endeavors are to make our students useful to the society in particular and the people in general.</h2>
    </div>
   
  </div>
</section>


<section class="oric_organogram-section">
    <h1 class="text-center">ORIC ORGANOGRAM</h1>
  <div class="oric_organogram-container">
    <!-- President -->
    <div class="oric_organogram-box president mb-0">
      <p>President</p>
      <span>MAJU</span>
    </div>

    <!-- Line connecting President to Director -->
    <div class="oric_organogram-vertical-line"></div>

    <!-- Director -->
    <div class="oric_organogram-box director">
      <p>Director</p>
      <span>ORIC</span>
    </div>

    <!-- Line connecting Director to Managers -->
    <div class="oric_organogram-horizontal-line"></div>

    <!-- Managers and Other Roles -->
    <div class="oric_organogram-row">
      <div class="oric_organogram-box">
        <p>Manager</p>
        <span>Research</span>
      </div>
      <div class="oric_organogram-box">
        <p>Manager Industry</p>
        <span>Linkages</span>
      </div>
      <div class="oric_organogram-box">
        <p>Manager</p>
        <span>Legal</span>
      </div>
      <div class="oric_organogram-box">
        <p>Accountant and</p>
        <span>Communications</span>
      </div>
      <div class="oric_organogram-box">
        <p>Research</p>
        <span>Associate(s)</span>
      </div>
    </div>
  </div>
</section>




<?php
    // Include footer
    include('./components/footer/footer.php');
    ?>

</body>

</html>
