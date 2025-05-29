
<?php
function createVideoContainer($video){
    echo'<div class="conatiner-fluid videocontainer">
    <div class="container videoinnercontainer">
    <iframe width="560" height="315" src="'.$video.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>';
}
?>