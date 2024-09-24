<?php
function createSlideShow($arrayOfSlides, $buttonContent)
{


  echo '<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="' . $arrayOfSlides[0][0] . '" class="d-block w-100" alt="...">
     
     
      <div class="carousel-caption d-none d-md-block">
        <h3 class="text-heading">' . $arrayOfSlides[0][1] . '</h3>
        <br>
        <p>' . $arrayOfSlides[0][2] . '</p>
        ';
  if (strlen($buttonContent[0][0]) > 3 && strlen($buttonContent[0][1]) > 3) {
    echo '<div style="position: relative; bottom : -20px;  text-align:center" class="buttonContainer">';
    createButton($buttonContent[0][0], $buttonContent[0][1], 1);
    echo '</div>';
  }
  echo '
      </div>

      
    </div>
    <div class="carousel-item">
      <img src="' . $arrayOfSlides[1][0] . '" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3 class="text-heading">' . $arrayOfSlides[1][1] . '</h3>
        <br>
        <p>' . $arrayOfSlides[1][2] . '</p>
        ';
  if (@strlen($buttonContent[1][0]) > 3 && strlen($buttonContent[1][1]) > 3) {
    echo '<div style="position: relative; bottom : -20px;  text-align:center" class="buttonContainer">';
    createButton($buttonContent[1][0], $buttonContent[1][1], 1);
    echo '</div>';
  }
  echo '
      </div>
    </div>
    <div class="carousel-item">
      <img src="' . $arrayOfSlides[2][0] . '" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3 class="text-heading">' . $arrayOfSlides[2][1] . '</h3>
        <br>
        <p>' . $arrayOfSlides[2][2] . '</p>
        ';
  if (@strlen($buttonContent[2][0]) > 3 && strlen($buttonContent[2][1]) > 3) {
    echo '<div style="position: relative; bottom : -20px; text-align:center" class="buttonContainer">';
    createButton($buttonContent[2][0], $buttonContent[2][1], 1);
    echo '</div>';
  }
  echo '
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
';
}
