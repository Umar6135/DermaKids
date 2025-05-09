<!DOCTYPE html>

<html lang="de">



<head>



    <?php



    if ($GLOBALS['title']) {



        $title = $GLOBALS['title'];
    } else {



        $GLOBALS['title'] = "";
    }



    if ($GLOBALS['desc']) {



        $desc = $GLOBALS['desc'];
    } else {



        $desc = "";
    }



    ?>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">



    <link rel="stylesheet" type="text/css" href="./assets/css/slick.css" />

    <link rel="stylesheet" type="text/css" href="./assets/css/slick-theme.min.css" />

    <title>Home</title>

    <link rel="stylesheet" href="./assets/css/style.min.css">







<body>


    <!-- Start Here -->



    <header>




        <div class="topbar">

            <div class="container">

                <div class="topbar-actions">














                    <a href="./kontakt.php" class="tA-link">Kontakt </a>





                    <a href="./shop.php" class="tA-link d-lg-block d-none">Shop<svg width="27" height="27" viewBox="0 0 27 27" style="margin-left: 16px;" fill="d-none"



                            xmlns="http://www.w3.org/2000/svg">

                            <path

                                d="M26.2891 13.4658C26.2891 20.5078 20.5811 26.2158 13.5391 26.2158C6.49706 26.2158 0.789062 20.5078 0.789062 13.4658C0.789062 6.42382 6.49706 0.71582 13.5391 0.71582C20.5811 0.71582 26.2891 6.42382 26.2891 13.4658Z"

                                fill="#7B7B7A" />

                            <path d="M18.6163 17.4482H8.62934L6.52734 10.2792L20.2663 11.1262L18.6163 17.4482Z"

                                stroke="white" stroke-width="0.637" stroke-linejoin="round" />

                            <path

                                d="M12.2642 21.4343C12.2642 22.3143 11.5502 23.0283 10.6702 23.0283C9.79017 23.0283 9.07617 22.3143 9.07617 21.4343C9.07617 20.5543 9.79017 19.8403 10.6702 19.8403C11.5502 19.8403 12.2642 20.5543 12.2642 21.4343Z"

                                fill="white" />

                            <path

                                d="M18.6392 21.4343C18.6392 22.3143 17.9252 23.0283 17.0452 23.0283C16.1652 23.0283 15.4512 22.3143 15.4512 21.4343C15.4512 20.5543 16.1652 19.8403 17.0452 19.8403C17.9252 19.8403 18.6392 20.5543 18.6392 21.4343Z"

                                fill="white" />

                            <path d="M10.0331 17.6091L9.07715 19.2031H18.6391" stroke="white" stroke-width="0.637"

                                stroke-linecap="round" stroke-linejoin="round" />

                            <path d="M4.06348 8.16443L6.17548 9.12043L6.53348 10.3154" stroke="white" stroke-width="0.637"

                                stroke-linecap="round" stroke-linejoin="round" />

                        </svg>

                    </a>

                    <a href="./helfen-sie-mit.php" class="tA-link theme-btn">Spenden</a>




                </div>

            </div>

        </div>









        <nav class="navbar navbar-expand-lg navbar-light ">

            <div class="container">

                <a class="navbar-brand" href="./">



                    <img src="./assets/img/logo.svg" alt="logo">

                </a>

                <div class="navbar-toggle" id="navbarSupportedContent">
                    <div class="navbar-toggler collapsed" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="hamburger"> <img src="./assets/img/bars.png" width="39" height="23" alt=""> </span>
                        <div class="navbar-toggle-open">
                            <span class="close"> <img src="./assets/img/close.svg" width="15" height="15" alt=""> </span>
                        </div>
                    </div>


                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle unser-verein

<?php

if (

    basename($_SERVER['PHP_SELF']) == "unser-verein.php"  ||
    basename($_SERVER['PHP_SELF']) == "satzungszweck.php"  ||
    basename($_SERVER['PHP_SELF']) == "uber-uns.php"

) {

    echo 'active';
} ?>

" href="./unser-verein.php" id="navbarDropdown" role="button"

                                data-bs-toggle="dropdown" aria-expanded="false" onclick="location.href=this.href">

                                Unser Verein

                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="./uber-uns.php">Über uns</a></li>
                                <li><a class="dropdown-item" href="./satzungszweck.php">Satzungszweck </a></li>




                                <li class="dropdown-submenu">

                                    <a class="dropdown-item dropdown-toggle" href="#">Geschichte des Vereins</a>

                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Meilensteine</a></li>

                                        <li><a class="dropdown-item" href="#">NSP</a></li>

                                    </ul>

                                </li>

                                <li class="dropdown-submenu">

                                    <a class="dropdown-item dropdown-toggle" href="#">Hilfsprojekte

                                    </a>

                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">EB-Family Treffen</a></li>

                                        <li><a class="dropdown-item" href="#">Alltagshilfen</a></li>

                                        <li><a class="dropdown-item" href="#">Anton</a></li>

                                    </ul>

                                </li>



                                <li><a class="dropdown-item" href="#">Partner/Förderer</a></li>

                                <li><a class="dropdown-item" href="#">Kooperationspartner

                                    </a></li>

                                <li><a class="dropdown-item" href="#">Mitglied werden</a></li>

                            </ul>

                        </li>



                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle epidermolysis-bullosa

                        <?php

                        if (

                            basename($_SERVER['PHP_SELF']) == "epidermolysis-bullosa.php"  ||

                            basename($_SERVER['PHP_SELF']) == "alltag-mit-eb.php" ||

                            basename($_SERVER['PHP_SELF']) == "haupttypen.php"

                        ) {

                            echo 'active';
                        } ?>

                        " href="./epidermolysis-bullosa.php" id="navbarDropdown" role="button"

                                data-bs-toggle="dropdown" aria-expanded="false" onclick="location.href=this.href">

                                Epidermolysis bullosa

                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="./alltag-mit-eb.php">Alltag mit EB</a></li>



                                <li><a class="dropdown-item" href="./haupttypen.php">Haupttypen von EB</a></li>

                                <li><a class="dropdown-item" href="#">Forschung</a></li>

                                <li><a class="dropdown-item" href="#">(EB im Netz)</a></li>

                            </ul>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link

<?php

if (basename($_SERVER['PHP_SELF']) == "hilfsangebote-eb.php") {

    echo 'active';
} ?>" href="./hilfsangebote-eb.php">Hilfsangebote EB </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link

                        <?php

                        if (basename($_SERVER['PHP_SELF']) == "helfen-sie-mit.php") {

                            echo 'active';
                        } ?>" href="./helfen-sie-mit.php">Helfen Sie mit!</a>

                        </li>
                        <!-- 
                    <li class="nav-item">

                        <a class="nav-link" href="#">Ratgeber</a>

                    </li>
                    
                    -->





                    </ul>

                    <ul class="mob-menu-link d-lg-none">

                       

                        <li>
                            <a href="">Shop 
                        <svg width="27" height="27" viewBox="0 0 27 27" style="margin-left: 16px;"  fill="#7b7b7a" xmlns="http://www.w3.org/2000/svg">

                            <path d="M26.2891 13.4658C26.2891 20.5078 20.5811 26.2158 13.5391 26.2158C6.49706 26.2158 0.789062 20.5078 0.789062 13.4658C0.789062 6.42382 6.49706 0.71582 13.5391 0.71582C20.5811 0.71582 26.2891 6.42382 26.2891 13.4658Z" fill="#7B7B7A"></path>

                            <path d="M18.6163 17.4482H8.62934L6.52734 10.2792L20.2663 11.1262L18.6163 17.4482Z" stroke="white" stroke-width="0.637" stroke-linejoin="round"></path>

                            <path d="M12.2642 21.4343C12.2642 22.3143 11.5502 23.0283 10.6702 23.0283C9.79017 23.0283 9.07617 22.3143 9.07617 21.4343C9.07617 20.5543 9.79017 19.8403 10.6702 19.8403C11.5502 19.8403 12.2642 20.5543 12.2642 21.4343Z" fill="white"></path>

                            <path d="M18.6392 21.4343C18.6392 22.3143 17.9252 23.0283 17.0452 23.0283C16.1652 23.0283 15.4512 22.3143 15.4512 21.4343C15.4512 20.5543 16.1652 19.8403 17.0452 19.8403C17.9252 19.8403 18.6392 20.5543 18.6392 21.4343Z" fill="white"></path>

                            <path d="M10.0331 17.6091L9.07715 19.2031H18.6391" stroke="white" stroke-width="0.637" stroke-linecap="round" stroke-linejoin="round"></path>

                            <path d="M4.06348 8.16443L6.17548 9.12043L6.53348 10.3154" stroke="white" stroke-width="0.637" stroke-linecap="round" stroke-linejoin="round"></path>

                        </svg>
</a>
                        </li>

                    </ul>



                </div>

            </div>

        </nav>





    </header>