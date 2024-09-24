<?php
function createBanner($bannerText='', $bgimage){
echo'
<div class="container-fluid" style="position: relative; width:100%; padding:0; margin:0">
    <img style=" width: 100%;" src="'.$bgimage.'" alt="">
    <h1 class="display-1 play" style="color: white; position: absolute; top:50%; left:10%; z-index:1" class="play">
    '.$bannerText.'
    </h1>
</div>';
}