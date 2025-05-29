<?php


function createJumbotron($heading, $text, $linktoButton="#", $bgimgpath="", $iscenter=false ){
    echo'<div style="padding-top:6rem; padding-bottom:6rem;';
    if($iscenter=true){
      echo'text-align:center';
    }
  echo' padding-bottom:5rem; backgtound-image:url("'.$bgimgpath.'")" class="jumbotron jumbotron-fluid bg-blue">
  <div class="container">
  <h1  class="jumboHeading display-4">'.$heading.'</h1>
    <p class="jumboText lead">'.$text.'</p>';
    createButton("View Oric", $linktoButton,3);
    echo'
  </div>
</div>';
}

?>