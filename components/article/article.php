<?php
function createArticle($heading, $dateOfPosting, $summary, $article, $pathToImage){
echo'<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-8 article">
                <article>
                    <h1>
                        '.$heading.'
                    </h1>
                    <em>
                        <small>'.$dateOfPosting.'</small>
                    </em>
                    <div class="summary" style="padding-top:2rem; padding-bottom:2rem">
                    <b >'.$summary.'</b>
                    </div>
                    <img src="'.$pathToImage.'" alt="">
                    <p style="padding-top:2rem; padding-bottom:2rem">
                    '.$article.'
                    </p>
                </article>
            </div>
            <div class="col-md-4" style="margin-top:170px">
                <h2 class="headingFont">
                    READ NEXT
                </h2>
                <ul class="list-group textFont" >
                    // <li class="list-group-item">An item</li>
                    // <li class="list-group-item">A second item</li>
                    // <li class="list-group-item">A third item</li>
                    // <li class="list-group-item">A fourth item</li>
                </ul>
            </div>
        </div>
    </div>
</div>';
}
?>
<style>
    .mainnav{
        background-color: #112269;
    }
</style>