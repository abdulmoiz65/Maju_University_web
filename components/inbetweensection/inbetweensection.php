
<?php
function createinbetween($heading = '', $paragraph = '', $type=1)
{
    echo '
<section ';  if($type == 0){
    echo 'style=" background-color:white"';
} echo'class="inbetween">
    <div class="container textFont">
    <h1 class="headingFont display-1 white "';  if($type == 0){
        echo 'style=" color:black"';
    } echo' >'. $heading . '</h1> <p '; if($type == 0){
        echo 'style=" color:black"';
    } echo'class="monst white">'
        . $paragraph . '</p>
    </div>
</section>';
} ?>