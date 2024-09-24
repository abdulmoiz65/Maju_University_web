<?php
function createContactCard($departmentName, $officeLocation, $email, $contactNumber ){
echo'
    <div class="concard" style="width:80%;"  >
        <div class="general">
            <h4 style="text-align:center; width:100%; font-weight:600" class="monst">'.$departmentName.'</h4>
            <a href="">
            <div class="play">
            '.$officeLocation.'
            </div>
            </a>
            <a href="">
            <div class="play"><span><img width="25px" src=".\/public\/pictures\/official\/email.png" alt="email"></span>
            '.$email.'
            </div>
            </a>
            <a href="">
            <div class="play"><span><img width="25px" src=".\/public\/pictures\/official\/phone.png" alt="contact number"></span>
            '.$contactNumber.'
            </div>
            </a>
        </div>
    </div>';
}
