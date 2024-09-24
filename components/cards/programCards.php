<?php
function createProgramCard($cardTitle, $cardText, $link, $picturepath)
{
    echo'
<div class="col-md-3">
    <a class="post" href="' . $link . '">
        <div class="card programcard" style="width: 100%; height: 20rem;">
            <img style="height:100%; max-height:100% " class="card-img-top" src="' . $picturepath . '" alt="post card">
            <div style="height:100%; max-height:100%" class="card-body">
                <h5 class=" card-title">' . $cardTitle . '</h5>
                <hr class="breaker" style="border:2px solid white; border-radius:15px; width:15%; color:white;">
                <p class="card-text">' . $cardText . '</p>
            </div>
        </div>
    </a>
</div>
';

}
