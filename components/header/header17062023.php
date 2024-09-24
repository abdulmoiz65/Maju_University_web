<?php
include('./components/resources/socailmedialinks.php');
include('./components/header/navlink.php');

?>
<link rel="stylesheet" href="./css/style.css">

<header>
    <!-- Top Subnavigation Menu -->
    <nav class="topsubnavigation">
        <div class="container topmenucontainer">
            <div class="row topmenu">
                <div class="col-md-3 socialicons">
                    <div class="row">
                        <div class="col-md iconcont">
                            <a href="<?php echo $instalink ?>">
                                <svg class="socialico" fill="none" viewBox="0 0 64 64">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32 12.324c6.408 0 7.168.024 9.698.14 2.732.124 5.266.672 7.216 2.622 1.95 1.95 2.498 4.484 2.622 7.216.116 2.53.14 3.29.14 9.698s-.024 7.168-.14 9.698c-.124 2.732-.672 5.266-2.622 7.216-1.95 1.95-4.484 2.498-7.216 2.622-2.53.116-3.29.14-9.698.14s-7.168-.024-9.698-.14c-2.732-.124-5.266-.672-7.216-2.622-1.95-1.95-2.498-4.484-2.622-7.216-.116-2.53-.14-3.29-.14-9.698s.024-7.168.14-9.698c.124-2.732.672-5.266 2.622-7.216 1.95-1.95 4.484-2.498 7.216-2.622 2.53-.116 3.29-.14 9.698-.14zM32 8c-6.518 0-7.336.028-9.896.144-3.9.178-7.326 1.134-10.076 3.884-2.75 2.75-3.706 6.176-3.884 10.076C8.028 24.664 8 25.482 8 32c0 6.518.028 7.336.144 9.896.178 3.9 1.134 7.326 3.884 10.076 2.75 2.75 6.176 3.706 10.076 3.884 2.56.116 3.378.144 9.896.144 6.518 0 7.336-.028 9.896-.144 3.9-.178 7.326-1.134 10.076-3.884 2.75-2.75 3.706-6.176 3.884-10.076.116-2.56.144-3.378.144-9.896 0-6.518-.028-7.336-.144-9.896-.178-3.9-1.134-7.326-3.884-10.076-2.75-2.75-6.176-3.706-10.076-3.884C39.336 8.028 38.518 8 32 8zm0 11.676c-6.806 0-12.324 5.518-12.324 12.324S25.194 44.324 32 44.324 44.324 38.806 44.324 32 38.806 19.676 32 19.676zM32 40a8 8 0 110-16 8 8 0 010 16zm12.812-17.932a2.88 2.88 0 100-5.76 2.88 2.88 0 000 5.76z" fill="#000"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="col-md iconcont">
                            <a href="<?php echo $linkedinlink ?>">
                                <svg class="socialico" fill="none" viewBox="0 0 64 64">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M54 8H10c-1.2 0-2 .8-2 2v44c0 1.2.8 2 2 2h44c1.2 0 2-.8 2-2V10c0-1.2-.8-2-2-2zM22.2 49h-7V26h7.2v23h-.2zm-3.6-26.2c-2.2 0-4.2-1.8-4.2-4.2 0-2.2 1.8-4.2 4.2-4.2 2.2 0 4.2 1.8 4.2 4.2 0 2.4-1.8 4.2-4.2 4.2zM49 49h-7.2V37.8c0-2.6 0-6-3.6-6-3.8 0-4.2 2.8-4.2 5.8V49h-7.2V26h6.8v3.2c1-1.8 3.2-3.6 6.8-3.6 7.2 0 8.6 4.8 8.6 11V49z" fill="#000"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="col-md iconcont">
                            <a href="<?php echo $fblink ?>">
                                <svg class="socialico" fill="none" viewBox="0 0 64 64">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M26.796 56l-.069-21.818H18v-8.728h8.727V20c0-8.098 5.015-12 12.238-12 3.46 0 6.434.258 7.301.373v8.462l-5.01.002c-3.928 0-4.69 1.867-4.69 4.607v4.01H48l-4.364 8.728h-7.07V56h-9.77z" fill="#000"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="col-md iconcont">
                            <a href="<?php echo $twitterlink ?>">
                                <svg class="socialico" fill="none" viewBox="0 0 64 64">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M56 17.505c-1.8.784-3.6 1.371-5.6 1.567 2-1.175 3.6-3.134 4.4-5.288-2 1.175-4 1.958-6.2 2.35A9.774 9.774 0 0041.4 13c-5.4 0-9.8 4.31-9.8 9.598 0 .783 0 1.567.2 2.155-8.4-.392-15.6-4.31-20.4-10.186-1 1.567-1.4 3.134-1.4 4.897 0 3.33 1.8 6.268 4.4 8.03-1.6 0-3.2-.39-4.4-1.174v.195c0 4.701 3.4 8.619 7.8 9.402-.8.196-1.6.392-2.6.392-.6 0-1.2 0-1.8-.196 1.2 3.918 4.8 6.66 9.2 6.66-3.4 2.547-7.6 4.114-12.2 4.114-.8 0-1.6 0-2.4-.196C12.4 49.433 17.6 51 23 51c18.2 0 28-14.69 28-27.423v-1.175c2-1.371 3.6-3.134 5-4.897z" fill="#000"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="col-md iconcont">
                            <a href="<?php echo $ytlink ?>">
                                <svg class="socialico" fill="none" viewBox="0 0 64 64">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M55.6 22.286s-.4-3.44-2-4.857c-1.8-2.024-3.8-2.024-4.8-2.024C42 15 32 15 32 15s-10 0-16.8.405c-1 .202-3 .202-4.8 2.024-1.4 1.416-2 4.857-2 4.857S8 26.13 8 30.179v3.642c0 3.846.4 7.893.4 7.893s.4 3.44 2 4.857c1.8 2.024 4.2 1.822 5.2 2.024C19.4 49 32 49 32 49s10 0 16.8-.607c1-.203 3-.203 4.8-2.024 1.4-1.417 2-4.857 2-4.857s.4-3.845.4-7.893v-3.643c0-3.845-.4-7.69-.4-7.69zM27 38.274v-13.56l13 6.881-13 6.679z" fill="#000"></path>
                                </svg>
                            </a>
                        </div>
                        <!-- <div class="col-md iconcont">
                            <a href="<?php #echo $ytlink 
                                        ?>">
                                <svg class="socialico" fill="none" viewBox="0 0 60 60">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25,2C12.318,2,2,12.318,2,25c0,3.96,1.023,7.854,2.963,11.29L2.037,46.73c-0.096,0.343-0.003,0.711,0.245,0.966 C2.473,47.893,2.733,48,3,48c0.08,0,0.161-0.01,0.24-0.029l10.896-2.699C17.463,47.058,21.21,48,25,48c12.682,0,23-10.318,23-23 S37.682,2,25,2z M36.57,33.116c-0.492,1.362-2.852,2.605-3.986,2.772c-1.018,0.149-2.306,0.213-3.72-0.231 c-0.857-0.27-1.957-0.628-3.366-1.229c-5.923-2.526-9.791-8.415-10.087-8.804C15.116,25.235,13,22.463,13,19.594 s1.525-4.28,2.067-4.864c0.542-0.584,1.181-0.73,1.575-0.73s0.787,0.005,1.132,0.021c0.363,0.018,0.85-0.137,1.329,1.001 c0.492,1.168,1.673,4.037,1.819,4.33c0.148,0.292,0.246,0.633,0.05,1.022c-0.196,0.389-0.294,0.632-0.59,0.973 s-0.62,0.76-0.886,1.022c-0.296,0.291-0.603,0.606-0.259,1.19c0.344,0.584,1.529,2.493,3.285,4.039 c2.255,1.986,4.158,2.602,4.748,2.894c0.59,0.292,0.935,0.243,1.279-0.146c0.344-0.39,1.476-1.703,1.869-2.286 s0.787-0.487,1.329-0.292c0.542,0.194,3.445,1.604,4.035,1.896c0.59,0.292,0.984,0.438,1.132,0.681 C37.062,30.587,37.062,31.755,36.57,33.116z"></path>
                                </svg>
                            </a>
                        </div> -->

                    </div>
                </div>
                <div class="col-md-3">
                    <?php include("./components/googleTranslate/googleTranslate.php") ?>
                </div>
                <div class="col-md-6 submenu">
                    <div class="submenucontainer" style="display: flex;">
                        <div class=""></div>
                       
                        <div class="submenulink"><a href="<?php echo $feedback ?>">FEEDBACK</a></div>
                        <div class="submenulink"><a href="<?php echo $careers ?>">CAREERS</a></div>
                        <div class="submenulink"><a href="<?php echo $alumni ?>">ALUMNI</a></div>
                        <div class="submenulink"><a href="<?php echo $QEC ?>">ORIC</a></div>
                        <div class="submenulink"><a href="<?php echo $contact ?>">CONTACT</a></div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Top Subnavigation Menu Ends-->

    <!-- Main Menu Starts Here -->
    <nav class="mainnav" id="mainnav">
        <div class="container">
            <div class="row">
                <div class="col-md-4 logo">
                    <div class="col-md-10">
                        <img width="100%" src="./public/pictures/official/logowhite.png" alt="">

                    </div>
                </div>
                <div class="col-md-8 mainnavigation">
                    <div class="findyourprogram">
                        <a style="text-decoration: none;" href="https://jinnah.edu/admissions/"><button class="findyourprogram" id="findyourprogram">
                                Find Your Program
                            </button></a>
                    </div>
                    <div class="container">
                        <div id="hamburger" style="z-index: 1000;" class="mainmenulinks hamburger" onclick="this.classList.toggle('open');">
                            <svg width="30" height="30" viewBox="0 0 100 100">
                                <path style="stroke: white;" class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                                <path style="stroke: white;" class="line line2" d="M 20,50 H 80" />
                                <path style="stroke: white;" class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                            </svg>
                        </div>
                    </div>
                    <div id="popupmenu" class="mainmenulinks">
                        <div class="mainmenulink"><a href="<?php echo $home ?>">HOME</a></div>
                        <div class="mainmenulink"><a style="" href="<?php echo $programs ?>">PROGRAMS</a>

                        </div>
                        <div class="mainmenulink"><a href="<?php echo $admission ?>">ADMISSIONS</a></div>
                        <div class="mainmenulink"><a href="<?php echo $sustainability ?>">SUBTAINABILITY</a></div>
                        <div class="mainmenulink"><a href="<?php echo $jberj ?>">JBERJ</a></div>
                        <div class="mainmenulink"><a href="<?php echo $navttc ?>">NAVTTC</a></div>
                    </div>
                   <div id="programsdropdown" class="container-fluid programsdropdown">

                   </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Menu Ends Here -->
    <nav class="mainnavs" id="mainnavs">
        <div class="container">
            <div class="row">
                <div class="col-md-4 logo">
                    <div class="col-md-10">
                        <?php include("./public/pictures/official/logo.php") ?>
                    </div>
                </div>
                <div class="col-md-8 mainnavigations">
                    <div class="findyourprograms">
                        <a style="text-decoration: none;" href="https://jinnah.edu/admissions/"><button class="findyourprograms" id="findyourprogram">
                                Find Your Program
                            </button></a>
                    </div>
                    <div class="container">
                        <div id="hamburger" style="z-index: 1000;" class="mainmenulinks hamburgerb" onclick="this.classList.toggle('open');">
                            <svg width="30" height="30" viewBox="0 0 100 100">
                                <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                                <path class="line line2" d="M 20,50 H 80" />
                                <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                            </svg>
                        </div>
                    </div>

                    <div id="popupmenub" class="mainmenulinks hovmen">
                        <div class="mainmenulink-s"><a href="<?php echo $home ?>">HOME</a></div>
                        <div class="mainmenulink-s"><a href="<?php echo $programs ?>">PROGRAMS</a></div>
                        <div class="mainmenulink-s"><a href="<?php echo $admission ?>">ADMISSIONS</a></div>
                        <div class="mainmenulink-s"><a href="<?php echo $sustainability ?>">SUSTAINABILITY</a></div>
                        <div class="mainmenulink-s"><a href="<?php echo $jberj ?>">JBERJ</a></div>
                        <div class="mainmenulink-s"><a href="<?php echo $navttc ?>">NAVTTC</a></div>
                    </div>
                </div>
            </div>
        </div>
    </nav>





</header>

<a href="https://admissions.maju.edu.pk/login" class="floatingapplynowbutton button button-blue">
    <button>
        Apply Now
    </button>
</a>

<script src="./components/header/scroll.js"></script>
<script>
    let elementa = document.querySelector("#popupmenu");
    let elementb = document.querySelector("#popupmenub");

    let hamburger = document.querySelector(".hamburger");
    let hamburgerb = document.querySelector(".hamburgerb");


    hamburger.addEventListener("click", () => {
        if (elementa.classList.contains("show")) {
            elementa.classList.remove("show");

        } else {
            elementb.classList.remove("show");
            elementa.classList.add("show");
        }
    })
    hamburgerb.addEventListener("click", () => {
        if (elementb.classList.contains("show")) {
            elementb.classList.remove("show");

        } else {
            elementa.classList.remove("show");
            elementb.classList.add("show");
        }

    })
</script>