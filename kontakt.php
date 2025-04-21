<?php

$GLOBALS['title'] = "";
$GLOBALS['desc'] = "";
include('header.php'); ?>




<main class="kontakt" id="kontakt">


    <section class="banner service-banner about-banner">
        <div class="container">
            <h1>Wir sind <span>immer</span> für <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>Sie da!</span>
            </h1>
        </div>
    </section>

    <div class="contact pt">
        <a href="#" class="contact-link">
            <img src="./assets/img/whatsapp.svg" alt="whatsapp">
        </a>
        <a href="#" class="contact-link">
            <img src="./assets/img/twitter.svg" alt="twitter">
        </a>
        <a href="#" class="contact-link">
            <img src="./assets/img/phone.svg" alt="phone">
        </a>
        <a href="#" class="contact-link">
            <img src="./assets/img/mail.svg" alt="mail">
        </a>
        <a href="#" class="contact-link">
            <img src="./assets/img/calender.svg" alt="calender">
        </a>
        <a href="#" class="contact-link">
            <img src="./assets/img/messages.svg" alt="messages">
        </a>
    </div>


    <section class="kontakt-content">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kontakt</li>

                </ol>
            </nav>
            <div class="kontakt-info">
                <img src="./assets/img/kontakt-banner-logo.png" alt="DermaKids">
                <p>Albert-Einstein-Ring 11</p>
                <p>14532 Berlin-Kleinmachnow</p>
                <p>Tel.: +49 30 319981-05</p>
                <p>Fax: +49 30 319981-04</p>
                <p>E-Mail: info@dermakids.de
                </p>
            </div>

            <img class="kontakt-side-img" src="./assets/img/kontakt-banner.png" alt="kontakt-banner">


            <div class="map">
                <img src="./assets/img/map.png" alt="map">
            </div>



            <div class="row">
                <div class="kontakt-form">
                    <h2>
                        Kontaktieren Sie uns
                    </h2>
                    <form>
                        <div class="form-field">
                            <input type="Name" class="form-control" placeholder="Name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-field">
                            <input type="Name" class="form-control" placeholder="E-Mail" aria-describedby="emailHelp">
                        </div>
                        <div class="form-field">
                            <input type="Name" class="form-control" placeholder="Anliegen" aria-describedby="emailHelp">
                        </div>
                        <div class="form-field">
                            <input type="Name" class="form-control" placeholder="Nachricht" aria-describedby="emailHelp">
                        </div>
                        <div class="btn-group">
                            <label for="">
                            <input type="radio" name="" id="">
                            Datenschutz*
</label>

                            <button type="submit" class="theme-btn">Abschicken</button>

                        </div>
                    </form>


                    <span>
                        *Ja, ich habe die Datenschutzerklärung (Datenschutz) zur Kenntnis genommen und bin damit einverstanden, dass die von mir angegebenen Daten elektronisch erhoben und gespeichert werden. Meine Daten werden dabei nur streng zweckgebunden zur Bearbeitung und Beantwortung meiner Anfrage benutzt. Mit dem Absenden des Kontaktformulars erkläre ich mich mit der Verarbeitung einverstanden.
                    </span>
                </div>

                <div class="col-md-5">
                    <div id="carouseltwo" class="carousel round-carousal slide carousel-fade"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/kontakt-carousel/1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="./assets/img/kontakt-carousel/2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="./assets/img/kontakt-carousel/3.png" class="d-block w-100" alt="...">
                            </div>

                        </div>
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouseltwo" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouseltwo" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouseltwo" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>

                        </div>


                    </div>

                    <img src="./assets/img/kontakt-bottom.png" alt="" class="kontakt-bottom">
                </div>
            </div>
        </div>
    </section>


</main>

<?php include('footer.php'); ?>