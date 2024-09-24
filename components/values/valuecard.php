<?php
function creteValueCard($img,$heading, $paragraph){
echo'
<div style="padding-bottom:100px;" class="container">
<div class="row">
    <div class="col-md-5">
        <img width=100% src="'.$img.'" alt="">
    </div>
    <div class="col-md-7">
        <h1 class="play">'.$heading.'</h1>
        <br>
        <br>
        <p class="monst">'.$paragraph.'</p>
    </div>
</div>
</div>
';
}
