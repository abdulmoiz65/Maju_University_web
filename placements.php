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


.placements .card {
    border-radius: 0rem;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    padding: 1.5rem;
    box-shadow: 10px 20px 30px black;
}

.placements .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.08);
}

.placements .card h5 {
    font-size: 1.15rem;
    font-weight: 600;
}

.placements .card h6 {
    font-size: 0.95rem;
}

.placements .card small {
    font-size: 0.85rem;
    color: #6c757d;
}

.placements .btn-sm {
    font-size: 0.8rem;
}

/* Card-like modal style */
.modal-content.card-theme {
    border-radius: 0rem;
    border: 1px solid #dee2e6;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
    padding: 1.5rem;
    background-color: #fff;
    font-family: 'Segoe UI', sans-serif;
    transition: all 0.3s ease;
}

/* Header/Footer cleanup */
.modal-content.card-theme .modal-header,
.modal-content.card-theme .modal-footer {
    border: none;
    background-color: transparent;
    padding-bottom: 0;
}

/* Typography adjustments */
.modal-content.card-theme .modal-title {
    font-weight: bold;
    font-size: 1.25rem;
}

.modal-content.card-theme .modal-body p {
    font-size: 1rem;
    margin-bottom: 0.6rem;
    color: #343a40;
}

.modal-content.card-theme .btn-success,
.modal-content.card-theme .btn-dark {
    /* border-radius: 0.5rem; */
    padding: 0.4rem 1rem;
    font-weight: 500;
}

.modal-content.card-theme .btn-close {
    box-shadow: none;
}

/* RESPONSIVE STYLES */
@media (max-width: 576px) {
    .modal-dialog.modal-dialog-centered.modal-lg {
        max-width: 95%;
        margin: 0 auto;
    }

    .modal-content.card-theme {
        padding: 1rem;
    }

    .modal-content.card-theme .modal-title {
        font-size: 1rem;
    }

    .modal-content.card-theme .modal-body p {
        font-size: 0.6rem;
    }

    .modal-content.card-theme .modal-footer {
        flex-direction: column;
        gap: 0.5rem;
    }

    .modal-content.card-theme .btn {
        width: 100%;
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
        <h1 class="text-center">MAJU Placements</h1>
        <p class="text-center mb-4">Mohammad Ali Jinnah University (MAJU) is committed to providing its students with the best possible opportunities for career development and success.</p>
</div>


<!-- Cards Section -->
<div class="container placements">
  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    <!-- Card 1 -->
    <div class="col">
      <div class="card h-100 p-3">
        <img src="./public/pictures/maju-logo.png" alt="MAJU Logo" style="width: 40px;" class="mb-3">
        <div>
          <h6 class="text-muted">Tech Solutions Ltd.</h6>
          <h5>Frontend Developer</h5>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-auto pt-4">
          <small>Posted on: 2 days ago</small>
          <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#jobModal1">View Details</button>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col">
      <div class="card h-100 p-3">
        <img src="./public/pictures/maju-logo.png" alt="MAJU Logo" style="width: 40px;" class="mb-3">
        <div>
          <h6 class="text-muted">Insights Analytics</h6>
          <h5>Data Analyst</h5>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-auto pt-4">
          <small>Posted on: 3 days ago</small>
          <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#jobModal2">View Details</button>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col">
      <div class="card h-100 p-3">
        <img src="./public/pictures/maju-logo.png" alt="MAJU Logo" style="width: 40px;" class="mb-3">
        <div>
          <h6 class="text-muted">Innovatech Inc.</h6>
          <h5>Backend Engineer</h5>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-auto pt-4">
          <small>Posted on: 5 days ago</small>
          <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#jobModal3">View Details</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modals Section -->
<!-- Modal 1 -->
<div class="modal fade" id="jobModal1" tabindex="-1" aria-labelledby="jobModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content card-theme">
      <div class="modal-header">
        <h5 class="modal-title">Frontend Developer - Tech Solutions Ltd.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Designation:</strong> Junior Frontend Developer</p>
        <p><strong>Details:</strong> Build and maintain responsive web applications using React and Bootstrap. Collaborate with UX teams and optimize performance.</p>
        <p><strong>Company Contact:</strong> contact@techsolutions.com | +92-300-1234567</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-dark">Apply Now</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="jobModal2" tabindex="-1" aria-labelledby="jobModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content card-theme">
      <div class="modal-header">
        <h5 class="modal-title">Data Analyst - Insights Analytics</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Designation:</strong> Data Analyst</p>
        <p><strong>Details:</strong> Analyze datasets, create dashboards, Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo maiores vero error eligendi eos pariatur nihil non voluptatum, molestias odio sapiente maxime sunt vitae itaque quaerat possimus suscipit sit earum! and present actionable insights to the business team using Power BI & Python.</p>
        <p><strong>Company Contact:</strong> careers@insights.com | +92-321-7654321</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-dark">Apply Now</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="jobModal3" tabindex="-1" aria-labelledby="jobModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content card-theme">
      <div class="modal-header">
        <h5 class="modal-title">Backend Engineer - Innovatech Inc.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Designation:</strong> Backend Software Engineer</p>
        <p><strong>Details:</strong> Responsible for designing scalable backend systems in Node.js and MongoDB. Experience with Docker is a plus.</p>
        <p><strong>Company Contact:</strong> hr@innovatech.com | +92-334-9876543</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-dark">Apply Now</button>
      </div>
    </div>
  </div>
</div>





<?php
    // Include footer
    include('./components/footer/footer.php');
    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
