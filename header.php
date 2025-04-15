<?php if (isset($_GET['cty']) && $_GET['cty'] != '') {
    $newurl = '?cty=' . $_GET['cty'];
} else {
    $newurl = '';
}
?>
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



    <div class="topbar">
        <div class="container">
            <div class="topbar-actions">

                <a href="#" class="tA-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                            d="M192 0C139 0 96 43 96 96l0 160c0 53 43 96 96 96s96-43 96-96l0-160c0-53-43-96-96-96zM64 216c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40c0 89.1 66.2 162.7 152 174.4l0 33.6-48 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l72 0 72 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-48 0 0-33.6c85.8-11.7 152-85.3 152-174.4l0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-40z" />
                    </svg>
                </a>
                <a href="#" class="tA-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="rotate: -260deg;">
                        <path
                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg>
                </a>

                <a href="#" class="tA-link">Sprache</a>
                <a href="#" class="tA-link">Kontakt </a>
                <a href="#" class="tA-link">Presse</a>
                <a href="#" class="tA-link">Glossar</a>
                <a href="#" class="tA-link"><svg width="27" height="27" viewBox="0 0 27 27" fill="none"
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
                <a href="#" class="tA-link theme-btn">Spenden</a>

            </div>
        </div>
    </div>




    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">

                <img src="./assets/img/logo.svg" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./unser-verein.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" onclick="location.href=this.href">
                            Unser Verein
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./uber-uns.php">Über uns</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Geschichte des Vereins</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Meilensteine</a></li>
                                    <li><a class="dropdown-item" href="#">NSP</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Hilfprojekte 
                                    (Schmetterlings-Hilfe)</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">EB-Family Treffen</a></li>
                                    <li><a class="dropdown-item" href="#">Alltagshilfen</a></li>
                                    <li><a class="dropdown-item" href="#">Anton</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Hilfprojekte 
                                (Schmetterlings-Hilfe)</a></li>
                            <li><a class="dropdown-item" href="#">Partner/Förderer</a></li>
                            <li><a class="dropdown-item" href="#">Kooperationspartner 
                                (Schmetterlings-Hilfe)</a></li>
                            <li><a class="dropdown-item" href="#">Mitglied werden</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./epidermolysis-bullosa.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Epidermolysis bullosa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./alltag-mit-eb.php">Alltag mit EB (24h)</a></li>
                
                            <li><a class="dropdown-item" href="./haupttypen.php">Haupttypen von EB</a></li>
                            <li><a class="dropdown-item" href="#">Forschung</a></li>
                            <li><a class="dropdown-item" href="#">(EB im Netz)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hilfsangebote EB </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./helfen-sie-mit.php">Helfen Sie mit!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ratgeber</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
