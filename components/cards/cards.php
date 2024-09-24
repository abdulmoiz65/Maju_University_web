<?php
function createCard($cardTitle, $cardText, $link, $picturepath, $cardType)
{
  switch ($cardType) {
    case '1':
      echo '
      <div class="col-md-3">
          <a class="post" href="' . $link . '">
          <div class="card" style="width: 100%;">
            <img class="card-img-top" src="' . $picturepath . '" alt="post card">
            <div class="card-body">
              <h5 class=" card-title">' . $cardTitle . '</h5>
                <p class="card-text">' . $cardText . '</p>
            </div>
          </div>
          </a>
          </div>';
      break;
    case '2':
      echo '
      <div class="col-md-3">
        <a class="post" href="' . $link . '">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="' . $picturepath . '" alt="post card">
          <div class="card-body">
            <h5 class=" card-title">' . $cardTitle . '</h5>
            <p  class="card-text">' . $cardText . '</p>
          </div>
        </div>
        </a>
        </div>';
      break;

    case '3':
      echo '
      <div class="col-md-6">
        <a class="post" href="' . $link . '">
        <div class="card post-type-2" style="width: 100%; height: 20rem;">
          <img style="height:100%; max-height:100% " class="card-img-top" src="' . $picturepath . '" alt="post card">
          <div style="height:100%; max-height:100%" class="card-body">
            <h5 class=" card-title">' . $cardTitle . '</h5>
            <p  class="card-text">' . $cardText . '</p>
          </div>
        </div>
      </a>
      </div>
      ';
      break;
    default:
      # code...
      break;
  }
}
