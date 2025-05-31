<?php
// include('./components/resources/socailmedialinks.php');
include('./components/header/navlink.php');

?>
<link rel="stylesheet" href="./css/style.css">

<header>
  
    <!-- Main Menu Starts Here -->
    <nav class="mainnav" id="mainnav">
        <div class="container">
            <div class="row">
                <div class="col-md-4 logo">
                    <div class="col-md-10">
                        <a href="<?php echo $home ?>">
                        <img width="100%" src="./public/pictures/official/logowhite.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 mainnavigation">
                    <!-- <div class="findyourprogram">
                        <a style="text-decoration: none;" href="<?php echo $itservices ?>"><button class="findyourprogram" id="findyourprogram">
                                Explore Our IT Services
                            </button></a>
                    </div> -->
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
                        <div class="mainmenulink"><a href="<?php echo $itservices ?>">IT Services</a></div>
                        <div class="mainmenulink"><a href="<?php echo $oric ?>">ORIC</a></div>
                        <div class="mainmenulink"><a href="<?php echo $placements ?>">Placements</a></div>
                        <div class="mainmenulink"><a href="<?php echo $fyp ?>"  target="_blank">MAJU-FYP</a></div>
                        <div class="mainmenulink dropdown">
                        <a href="" >Other</a>
                        <div class="dropdown-contentt">
                                <a href="<?php echo $jberj ?>" target="_blank" >JBERJ</a>
                                <a href="<?php echo $navtcc ?>" target="_blank" >Navtcc</a>
                        </div>
                    </div>
                        <div class="mainmenulink dropdown">
                        <a href="">Academy</a>
                        <div class="dropdown-contentt">
                                <a href="<?php echo $mpa ?>" target="_blank" >Palo Alto</a>
                                <a href="<?php echo $mca ?>" target="_blank" >Cisco Academy</a>
                                <a href="<?php echo $eca ?>" target="_blank" >EC-COUNCIL</a>
                        </div>
                    </div>

                        <div class="mainmenulink"><a href="<?php echo $contact ?>">Contact</a></div>
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
                        <a href="<?php echo $home ?>">
                            <?php include("./public/pictures/official/logo.php") ?>
                            </a>
                    </div>
                </div>
                <div class="col-md-8 mainnavigations">
                    <!-- <div class="findyourprograms">
                        <a style="text-decoration: none;" href="<?php echo $itservices ?>"><button class="findyourprograms" id="findyourprogram">
                        Explore Our IT Services
                            </button></a>
                    </div> -->
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
                        <div class="mainmenulink-s"><a href="<?php echo $itservices ?>">IT Services</a></div>
                        <div class="mainmenulink-s"><a href="<?php echo $oric ?>">ORIC</a></div>
                        <div class="mainmenulink-s"><a href="<?php echo $placements ?>">Placements</a></div>
                        <div class="mainmenulink-s"><a href="<?php echo $fyp ?>" target="_blank" >MAJU-FYP</a></div>
                        <div class="mainmenulink-s dropdown">
                            <a href="">Other</a>
                            <div class="dropdown-contentt">
                                <a href="<?php echo $jberj ?>" target="_blank" >JBERJ</a>
                                <a href="<?php echo $navttc ?>" target="_blank" >Navtcc</a>
                            </div>
                        </div>
                        <div class="mainmenulink-s dropdown">
                            <a href="">Academy</a>
                            <div class="dropdown-contentt">
                                <a href="<?php echo $mpa ?>" target="_blank" >Palo Alto</a>
                                <a href="<?php echo $mca ?>" target="_blank" >Cisco Academy</a>
                                <a href="<?php echo $eca ?>" target="_blank" >EC-COUNCIL</a>
                            </div>
                        </div>
                        <div class="mainmenulink-s"><a href="<?php echo $contact ?>">contact</a></div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>

<a href="<?php echo $feedback ?>" class="floatingapplynowbutton button button-blue">
    <button>
        Feedback
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