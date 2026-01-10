<?php
$bannerLang = 'FR';
include_once("includes/banner-txt-by-date.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noimageindex, nofollow, nosnippet">
    <meta name="description" content="HépaLiv par Nutrisolution">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <title>HépaLiv par Nutrisolution</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/vturb.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
</head>
<body>
    <div style="background: #0395C1">
        <div class="notification-banner has-text-white m-0 py-2 px-4 hidden remove" style="background:#b00;border-bottom:2px solid white;">
        <button class="delete delRedPop"></button>
        <div style="margin:0 auto;max-width:1200px;" class="d-flex justify-content-center">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="column m-0 p-0" style="flex: 0 0 66%">
                    <div class="px-2 has-text-weight-bold notification-banner-txt" style="letter-spacing:4px;color:yellow;">ATTENDEZ !</div>
                    <div class="px-2 mb-1 text-white has-text-weight-bold notification-banner-txt" style="line-height: 1.2">
                        <span class="exitIntentSpan">Vous êtes à seulement 
                            <span class="banner-timer"></span>
                            de découvrir l’astuce d’un scientifique Américain de renom pour réinitialiser votre foie et brûler la graisse abdominale
                        </span>
                    </div>
                </div>
                <div class="column is-narrow m-0 p-0" style="flex: 0 0 33%">
                    <div class="lh1 px-2 has-text-centered mb-0 has-text-weight-bold d-flex justify-content-center notification-banner-txt">
                        <a class="notification-banner-txt has-text-weight-bold notification-banner-btn mt-3 mb-2" style="padding:4px 10px;">Cliquez&nbsp;ici&nbsp;pour&nbsp;découvrir&nbsp;!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- start video vturb -->
    <section class="cover py-5" style="background: #0395C1;">
        <div class="video-section container" id="video-section">
            <div class="row videoRow py-4" id="videoRow">		
                <div class="col-md-12">
                    <div class="video-wrapper video-border">
                        <div class="video-inner">
                        <vturb-smartplayer id="vid-68e8c54bc98b7a8c52bb5f49" style="display: block; margin: 0 auto; width: 100%;"></vturb-smartplayer>
                        <script type="text/javascript">
                            var s = document.createElement("script");
                            s.src = "https://scripts.converteai.net/4a5b918c-a976-4f02-bd7f-e230b18b1475/players/68e8c54bc98b7a8c52bb5f49/v4/player.js";
                            s.async = true;
                            document.head.appendChild(s);
                        </script>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="f1"></div>
    
    <div class="hidethis timer-container cta-bg-countdown cta-bg-countdown-ny text-center p-2" id=f2>

        <div class="container pt-md-2 pb-0">
            <div class="row">
                <div class="col-md-7 col-6 pr-0 pl-0">
                    <h2 class="clock-headline text-white pt-1 text-left">
                        <b>
                            <?= $bannerTxt; ?>
                            <span class="count-up">14:59</span>
                        </b>

                    </h2>

                </div>
                <div class="col-md-5 pl-md-0 pr-md-0 col-6">
                    <a href="#PricingBox" class="btn btn-pager w-100">
                        CLIQUEZ ICI POUR RÉSERVER VOTRE RÉDUCTION
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .reset-timer:hover {
            cursor: pointer;
        }
    </style>
    <div class="end-timer-container cta-bg-countdown cta-bg-countdown-ny text-center p-3 d-none">
        <h2 class="clock-headline text-white pt-1">
            <b>
                Votre lot n'est plus réservé et votre réduction a expiré. <span class="d-block"></span><a class="reset-timer" style="text-decoration: underline" onclick="resetTimer()">Cliquez ici</a> pour savoir s'il reste encore du stock pour vous aujourd'hui.
            </b>
        </h2>
    </div>
    <div class="triangle-grey-ctr tg triangle-grey-ctr-ny hidethis"></div>
    <div class="py-md-5 py-4 hidethis"></div>

    <section class="pb-5 hidethis">
        <div class="container">
            <div class="row">


                <div class="col-12 col-md-6">


                    <div id="sync1" class="slider owl-carousel">
                        <div class="item">
                            <img src="assets/images/bg1.webp" alt="img" class="img-fluid">
                        </div>
                        <div class="item">

                            <img src="assets/images/bg5.png" alt="img" class="img-fluid">
                        </div>
                        <div class="item">

                            <img src="assets/images/bg6.png" alt="img" class="img-fluid">
                        </div>
                        <div class="item">

                            <img src="assets/images/bg7.webp" alt="img" class="img-fluid">
                        </div>
                    </div>
                    <div id="sync2" class="navigation-thumbs owl-carousel owl-carousel-thumbs">
                        <div class="item">
                            <img src="assets/images/bg1.webp" alt="img" class="img-fluid">
                        </div>
                        <div class="item">

                            <img src="assets/images/bg5.png" alt="img" class="img-fluid">
                        </div>
                        <div class="item">

                            <img src="assets/images/bg6.png" alt="img" class="img-fluid">
                        </div>
                        <div class="item">

                            <img src="assets/images/bg7.webp" alt="img" class="img-fluid">
                        </div>

                    </div>

                    <div class="pt-2"></div>

                    <div class="clients-box bg-lgray radius-l1 mt-4">

                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>

                        <p class="pt-2 pb-2">
                            « Mon médecin était choqué. Cholestérol et triglycérides parfaits après seulement 3 mois ! »
                        </p>

                        <div class="d-flex align-items-center">
                            <img src="assets/images/client1.png" class="img-fluid" alt="img" width="70">
                            <div class="pl-3">
                                <p class="mb-1">
                                    <b>Daniel T.  </b>
                                </p>
                                <p class="f14 lblue fw-600">
                                    <img src="assets/images/verify.svg" class="img-fluid" alt="img">
                                    Acheteur vérifié
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="clients-box bg-lgray radius-l1 mt-4">

                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>

                        <p class="pt-2 pb-2">
                            « Je rentre dans mon jean préféré de fac. Je n’aurais jamais cru que ce soit possible. »
                        </p>

                        <div class="d-flex align-items-center">
                            <img src="assets/images/client2.png" class="img-fluid" alt="img" width="70">
                            <div class="pl-3">
                                <p class="mb-1">
                                    <b> Angèle R. </b>
                                </p>
                                <p class="f14 lblue fw-600">
                                    <img src="assets/images/verify.svg" class="img-fluid" alt="img">
                                    Acheteur vérifié
                                </p>
                            </div>
                        </div>

                    </div>


                </div>


                <div class="col-md-6 pt-md-0 pt-4">
                    <h1 class="blue-h1">
                        HÉPALIV
                    </h1>

                    <p class="f26">
                        <b>
                            La formule secrète méditerranéenne qui réactive votre métabolisme
                        </b>
                    </p>
                    <p>
                        Le premier complexe 100% naturel qui transforme votre foie en véritable machine à brûler les graisses – sans régime ni exercice.

                    </p>

                    <ul class="list-inline ul1">
                        <li class="d-flex">
                            <i class="fa fa-check-circle green"></i>
                            <span>
                                <b>Purifie votre foie</b> de plus de 85 000 toxines qui bloquent la perte de poids
                            </span>

                        </li>
                        <li class="d-flex">

                            <i class="fa fa-check-circle green"></i>
                            <span>
                                <b>Réactive les cellules brûleuses</b> de graisses restées inactives pendant des années
                            </span>

                        </li>

                        <li class="d-flex">

                            <i class="fa fa-check-circle green"></i>
                            <span>
                                <b>Accélère votre métabolisme</b> jusqu’à 400% selon des études cliniques
                            </span>

                        </li>
                        <li class="d-flex">

                            <i class="fa fa-check-circle green"></i>
                            <span>
                                <b>Fait fondre jusqu’à 24 kilos</b> en 90 jours (moyenne observée)
                            </span>

                        </li>
                        <li class="d-flex" id="PricingBox">

                            <i class="fa fa-check-circle green"></i>
                            <span>
                                <b>Redonne une énergie</b> comme si vous aviez 20 ans de moins
                            </span>
                        </li>
                    </ul>

                    <p class="pt-md-1 pt-3 bubbleOpen" id="price-table">
                        Choisissez votre offre :
                    </p>

                    <ul class="nav nav-pills mb-3 custom-nav-box" id="pills-tab" role="tablist">
                        <li class="nav-item choiceBtn" role="presentation" data-qty="6">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">

                                <div class="row pt-2">
                                    <div class="col-md-2 col-lg-1 col-2">
                                        <span class="empty-check empty1" style="display:none"></span>
                                        <span class="filled-check fill1">
                                            <i class="fa fa-check"></i>
                                        </span>

                                    </div>
                                    <div class="col-md-7 col-lg-8 col-7 pl-md-2 pl-0">
                                        <p class="mb-2">
                                            <b>
                                                6 Boîtes
                                            </b>

                                            <span class="bs-save ml-2">
                                                Vous économisez 180 €
                                            </span>

                                        </p>
                                        <p class="f14 mb-2">
                                            Cure de 180 Jours | Livraison Gratuite


                                        </p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-3 pl-0">
                                        <div class="pl-xl-4">
                                            <p class="f18 mb-0">
                                                <b>
                                                    39€/Boîte
                                                </b>
                                            </p>
                                            <p class="mb-2 f17">
                                                <span class="bs-rem-price">
                                                    <span class="text-black">
                                                        59€
                                                    </span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="nav-item choiceBtn" role="presentation" data-qty="3">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">




                                <div class="row pt-2">
                                    <div class="col-md-2 col-lg-1 col-2">
                                        <span class="empty-check empty2"></span>
                                        <span class="filled-check fill2" style="display:none">
                                            <i class=" fa fa-check">
                                            </i>
                                        </span>

                                    </div>
                                    <div class="col-md-7 col-lg-8 col-7 pl-md-2 pl-0">
                                        <p class="mb-2">
                                            <b>
                                                3 Boîtes
                                            </b>

                                            <span class="bs-save2 ml-2">
                                                Vous économisez 60 €
                                            </span>

                                        </p>
                                        <p class="f14 mb-2">
                                            Cure de 90 Jours | Livraison


                                        </p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-3 pl-0">
                                        <div class="pl-xl-4">
                                            <p class="f18 mb-0">
                                                <b>
                                                    49€/Boîte
                                                </b>
                                            </p>
                                            <p class="mb-2 f17">
                                                <span class="bs-rem-price">
                                                    <span class="text-black">
                                                        59€
                                                    </span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item choiceBtn" role="presentation" data-qty="1">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">


                                <div class="row pt-2">
                                    <div class="col-md-2 col-lg-1 col-2">
                                        <span class="empty-check empty3"></span>
                                        <span class="filled-check  fill3" style="display:none">
                                            <i class=" fa fa-check">
                                            </i>
                                        </span>

                                    </div>
                                    <div class="col-md-7 col-lg-8 col-7 pl-md-2 pl-0">
                                        <p class="mb-2">
                                            <b>
                                                1 Boîte
                                            </b>


                                        </p>
                                        <p class="f14 mb-2">
                                            Cure de 30 Jours | Livraison


                                        </p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-3 pl-0">
                                        <div class="pl-xl-4">
                                            <p class="f18 mb-0">
                                                <b>
                                                    59€/Boîte
                                                </b>
                                            </p>

                                        </div>
                                    </div>
                                </div>


                            </a>
                        </li>
                    </ul>


                    <div class="pt-3">
                        <a href="etape-2.php?choice=6" class="btn btn-pager w-100 btn-shadow btn-big offerBtn">
                            CLIQUEZ ICI POUR RÉSERVER VOTRE RÉDUCTION
                        </a>
                    </div>

                    <div class="text-center pt-4">
                        <img src="assets/images/card-group.svg" class="img-fluid" alt="img">

                    </div>

                    <div class="delivery-time mt-4">
                        <b class="darkblue"> Livraison rapide :</b> 3 à 4 jours ouvrables
                    </div>



                </div>

            </div>
        </div>
    </section>


    <section class="bg-lorange pt-5 pb-5 hidethis">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center col-xl-10 offset-xl-1">
                    <p class="pb-md-3">
                        Présenté sur:
                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/images/g1.png" class="img-fluid" alt="img">
                        </div>
                        <div class="col-md-6 pt-md-0 pt-4 mb-2">
                            <img src="assets/images/g2.png" class="img-fluid" alt="img">
                        </div>

                        <div class="col-md-12 pt-4">
                            <div class="yl-line">

                            </div>

                            <p class="pt-4 mb-2 mt-2">
                                « La découverte qui révolutionne notre compréhension du métabolisme »
                            </p>
                            <p class="mb-0">
                                <i> <b>– Health & Science Magazine</b> </i>
                            </p>
                        </div>
                    </div>


                </div>



            </div>
        </div>
    </section>


    <section class="pt-5 pb-5 hidethis openOderBtn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="head-02 text-center pb-1">
                        Avis de nos clients sur Hépaliv
                    </h2>

                    <div class="text-center pb-4 mb-md-2">

                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>

                        4.8/5
                    </div>

                </div>


                <div class="col-md-12">


                    <div class="owl-carousel owl-theme home-carousel" id="home">

                        <div class="item">

                            <div class="h-clientbox">
                                <img src="assets/images/feedback1.png" class="img-fluid" alt="img">

                                <div class="pt-4">
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                </div>


                                <p class="pt-2">
                                    « J’ai perdu 24 kilos en 3 mois ! Mon médecin n’en revient pas. Mon scanner du foie a montré qu’il est comme neuf. Je mange ce que je veux sans culpabilité. »
                                </p>
                                <p class="mb-1">
                                    <b>
                                        Paulette S.,  Lyon
                                    </b>
                                </p>
                                <p class="f14 lblue fw-600 d-flex align-items-center">
                                    <img src="assets/images/verify.svg" class="img-fluid d-inline-block mr-2" alt="img" style="width:16px !important">
                                    Acheteur vérifié
                                </p>

                            </div>

                        </div>


                        <div class="item">

                            <div class="h-clientbox">
                                <img src="assets/images/feedback2.png" class="img-fluid" alt="img">

                                <div class="pt-4">
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                </div>


                                <p class="pt-2">

                                    « Honnêtement, je me sens comme une nouvelle personne. J’ai perdu 14 kilos et mon double menton a disparu. »


                                </p>
                                <p class="mb-1">
                                    <b>
                                        Kévin M., Paris
                                    </b>
                                </p>
                                <p class="f14 lblue fw-600 d-flex align-items-center">
                                    <img src="assets/images/verify.svg" class="img-fluid d-inline-block mr-2" alt="img" style="width:16px !important">
                                    Acheteur vérifié
                                </p>

                            </div>

                        </div>


                        <div class="item">

                            <div class="h-clientbox">
                                <img src="assets/images/feedback3.png" class="img-fluid" alt="img">

                                <div class="pt-4">
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                </div>


                                <p class="pt-2">


                                    « J’ai perdu 18 kilos. J’ai plus d’énergie que jamais. C’est incroyable à quel point cela a changé ma vie. »



                                </p>
                                <p class="mb-1">
                                    <b>
                                        Céline L.,  Marseille
                                    </b>
                                </p>
                                <p class="f14 lblue fw-600 d-flex align-items-center">
                                    <img src="assets/images/verify.svg" class="img-fluid d-inline-block mr-2" alt="img" style="width:16px !important">
                                    Acheteur vérifié
                                </p>

                            </div>

                        </div>

                        <div class="item">

                            <div class="h-clientbox">
                                <img src="assets/images/feedback4.png" class="img-fluid" alt="img">

                                <div class="pt-4">
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                    <i class="fa-solid fa-star orange"></i>
                                </div>


                                <p class="pt-2">


                                    « Moins 12 kilos et deux tailles en moins. Je rentre à nouveau dans mon jean de fac ! »


                                </p>
                                <p class="mb-1">
                                    <b>
                                        Alicia D., Bordeaux
                                    </b>
                                </p>
                                <p class="f14 lblue fw-600 d-flex align-items-center">
                                    <img src="assets/images/verify.svg" class="img-fluid d-inline-block mr-2" alt="img" style="width:16px !important">
                                    Acheteur vérifié
                                </p>

                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>


    <section class="bonus-section pt-5 pb-md-5 pb-4 hidethis openOrderBtn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="head-02 text-center mb-1">
                        VOS BONUS OFFERTS
                    </h2>
                    <h2 class="head-03 lblue text-center">
                        (Valeur 97 €)

                    </h2>
                </div>


                <div class="col-md-6 d-md-flex mt-4">
                    <div class="card w-100 bonus-card text-center">
                        <img src="assets/images/bonus2.png" class="img-fluid" alt="img">
                        <div class="card-body text-center">

                            <h2 class="lblue head-04 mb-2 pt-2">
                                BONUS n°1 :
                            </h2>
                            <h2 class="head-03 darkblue pb-2">
                                « Les 10 rituels méditerranéens pour un foie en bonne santé »
                            </h2>

                            <p>
                                Découvrez les secrets ancestraux de l’île d’Ikaria, où l’obésité n’existe pas. Ce guide exclusif révèle les habitudes quotidiennes qui maintiennent votre foie en parfaite santé.

                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-md-flex mt-4">
                    <div class="card w-100 bonus-card text-center">
                        <img src="assets/images/bonus1.png" class="img-fluid" alt="img">
                        <div class="card-body text-center">

                            <h2 class="lblue head-04 mb-2 pt-2">
                                BONUS n°2 :
                            </h2>
                            <h2 class="head-03 darkblue pb-2">
                                « 21 recettes méditerranéennes brûle-graisses »

                            </h2>

                            <p>
                                Des repas délicieux qui activent naturellement votre métabolisme. Mangez avec plaisir tout en accélérant votre perte de poids !

                            </p>

                        </div>
                    </div>
                </div>


                <div class="col-md-12 text-center pt-md-5 pt-4">
                    <p class="mb-2 f27">
                        <b> OFFERT avec votre commande aujourd’hui seulement ! </b>
                    </p>
                    <p>
                        <i> (Téléchargement immédiat après achat) </i>
                    </p>
                </div>

            </div>
        </div>
    </section>


    <section class="doctor-section hidethis">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 pt-5 pb-5">
                    <div class="radius-l1 bg-white p-4">
                        <h2 class="head-05 pt-2">Développé par des Experts Reconnus</h2>
                        <h2 class="darkblue head-01 pb-1">
                            Dr. Eric Wood
                        </h2>
                        <p>
                            Médecin naturopathe agréé et expert reconnu en médecine intégrative et fonctionnelle, titulaire de certifications en nutrition clinique, optimisation hormonale et diagnostics avancés de médecine fonctionnelle.
                        </p>
                        <p>
                            En tant qu’expert de santé très sollicité et co-auteur de plusieurs publications, il est apparu dans des émissions de télévision et des médias grand public, partageant son savoir sur la santé et le bien-être naturels auprès d’audiences du monde entier.
                        </p>
                        <p class="fw-600">
                            <i>
                                « Après avoir testé 300 combinaisons pendant 6 mois, nous avons créé une formule 4 fois plus puissante que la recette ikarienne originale. HÉPALIV cible directement la cause profonde du métabolisme lent : un foie surchargé de toxines. »
                            </i>
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="pt-5 mt-md-5 hidethis"></div>


    <div class="container pricebox hidethis">
        <div class="row">
            <div class="col-lg-4 col-12 mb-3 order-3 order-lg-0">
                <div class="price-box left">
                    <div class="price_header">
                        <div class="pt-2"></div>
                        <h3 class="text-center pt-4 mb-0" style="font-size:40px;">
                            <b class="bt-blue">1 Boîte</b>
                        </h3>
                        <p class="text-center  mb-0 semi-b price_bottle" style="font-size:22px;">

                            <span replace item="1" type="fe" parameter="days"></span> Cure de 30 Jours
                        </p>
                        <div class="price_product_box d-md-none d-block">
                            <img loading="lazy" src="assets/images/index2/HEPALIV_1_image.png" productimage="1" type="fe" style="max-height:240px;" class="d-block mx-auto one-bottle-img img-fluid px-3">
                        </div>
                        <div class="py-md-2"></div>
                    </div>
                    <div class="card-product">
                        <div class="price_product_box d-md-block d-none">
                            <img src="assets/images/index2/HEPALIV_1_image.png" productimage="1" type="fe" style="max-height:240px;" class="d-block mx-auto  img-fluid px-3">
                        </div>
                        <div class="py-md-2"></div>
                        <h2 class="pricing-txt text-center">
                            59€<span> / Boîte </span>
                        </h2>
                        <!--<div class="mt-md-5 pt-md-3"></div>-->
                        <p class="text-center delivery-text pb-md-2 xs-0">+ Livraison</p>
                        <!--<div class="py-2 pt-lg-5"></div>-->

                        <div class="py-2 d-md-none"></div>
                        <div class="text-center">
                            <a href="etape-2.php?choice=1" class="order-cart-button mb-md-3 btn-pager  d-block">
                                AJOUTER AU PANIER
                            </a>
                        </div>
                        <div class="card-section py-0 d-md-none d-block">
                            <img loading="lazy" src="assets/images/img-credit-cards.jpg" class="img-fluid mx-auto d-block mb-0" style="width: 133px; max-width:256px;" alt="">
                        </div>
                        <p class="text-center mt-1 mt-md-0 mb-1 tprice" style="font-size:23px;">
                            TOTAL: <span class="fi-price">69€</span>
                            <b>59€<span replace item="1" type="fe" parameter="price"></span></b>
                        </p>
                        <div class="card-section py-2 mb-4 d-md-block d-none">
                            <img loading="lazy" src="assets/images/img-credit-cards.jpg" class="img-fluid mx-auto d-block mb-0" style="width: 133px; max-width:256px;" alt="">
                        </div>
                        <!--<p class="text-center medium mb-5">Livraison GRATUITE ! </p>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-3 col-lg-4 order-lg-2 highlighted">
                <div class="price-box middle">
                    <div class="price_header">
                        <div class="pt-2"></div>
                        <h3 class="text-center pt-4 mb-0" style="font-size:40px;">
                            <b class="bt-blue">6 Boîtes</b>
                        </h3>
                        <p class="text-center  mb-0 semi-b price_bottle" style="font-size:22px;">

                            <span replace item="3" type="fe" parameter="days"></span>  Cure de 180 Jours
                        </p>
                        <div class="price_product_box d-md-none d-block">
                            <img src="assets/images/index2/HEPALIV_6_image.png" productimage="3" type="fe" class="d-block mx-auto img-fluid mt-2 px-1" style="max-height:260px;">
                        </div>
                        <div class="py-lg-2"></div>
                    </div>
                    <div class="card-product">
                        <div class="price_product_box d-md-block d-none">
                            <img loading="lazy" src="assets/images/index2/HEPALIV_6_image.png" productimage="3" type="fe" class="d-block mx-auto img-fluid mt-2 px-1" style="max-height:260px;">
                        </div>
                        <div class="py-md-3"></div>
                        <div class="pt-md-1"></div>


                        <h2 class="pricing-txt text-center mt-lg-0 mt-2 bubbleOpen">
                            39€<span> / Boîte </span>
                        </h2>

                        <p class="text-center delivery-text pb-md-2 xs-0">
                            Livraison Gratuite
                        </p>

                        <div class="py-2 d-md-none"></div>
                        <div class="text-center">
                            <a href="etape-2.php?choice=6" class="order-cart-button mb-md-3 btn-pager  d-block">
                                AJOUTER AU PANIER
                            </a>
                        </div>
                        <div class="card-section py-0 d-md-none d-block">
                            <img loading="lazy" src="assets/images/img-credit-cards.jpg" class="img-fluid mx-auto d-block mb-0" style="width: 133px; max-width:256px;" alt="">
                        </div>
                        <p class="text-center mt-1 mt-md-0 mb-1 tprice" style="font-size:23px;">
                            TOTAL: <span class="fi-price">414€</span>
                            <b>
                                234€<span replace item="3" type="fe" parameter="price"></span>
                            </b>
                        </p>
                        <div class="card-section py-2 mb-4 d-md-block d-none">
                            <img loading="lazy" src="assets/images/img-credit-cards.jpg" class="img-fluid mx-auto d-block mb-0" style="width: 133px; max-width:256px;" alt="">
                        </div>
                        <!--<p class="text-center medium mb-5">Livraison GRATUITE ! </p>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-3 order-2 order-lg-3">
                <div class="price-box left">
                    <div class="price_header">
                        <div class="pt-2"></div>
                        <h3 class="text-center pt-4 mb-0" style="font-size:40px;">
                            <b class="bt-blue">3 Boîtes</b>
                        </h3>
                        <p class="text-center  mb-0 semi-b price_bottle" style="font-size:22px;">

                            <span replace item="2" type="fe" parameter="days"></span> Cure de 90 Jours
                        </p>
                        <div class="price_product_box d-md-none d-block">
                            <img src="assets/images/index2/HEPALIV_3_image.png" productimage="2" type="fe" class="d-block mx-auto img-fluid pl-2 px-2" style="max-height:256px;">
                        </div>
                    </div>
                    <div class="card-product">
                        <div class="price_product_box d-md-block d-none">
                            <img loading="lazy" src="assets/images/index2/HEPALIV_3_image.png" productimage="2" type="fe" class="d-block mx-auto img-fluid pl-2 px-2" style="max-height:256px;">
                        </div>
                        <div class="py-md-3"></div>
                        <h2 class="pricing-txt text-center">
                            49€<span> / Boîte </span>
                        </h2>
                        <p class="text-center delivery-text pb-md-2 xs-0">
                            + Livraison
                        </p>

                        <div class="py-2 d-md-none"></div>

                        <div class="text-center">
                            <a href="etape-2.php?choice=3" class="order-cart-button mb-md-3 btn-pager  d-block">
                                AJOUTER AU PANIER
                            </a>
                        </div>
                        <div class="card-section py-0 d-md-none d-block">
                            <img loading="lazy" src="assets/images/img-credit-cards.jpg" class="img-fluid mx-auto d-block mb-0" style="width: 133px; max-width:256px;" alt="">
                        </div>
                        <p class="text-center mb-1 mt-1 mt-md-0 tprice" style="font-size:23px;">
                            TOTAL:
                            <span class="fi-price">207€</span>
                            <b>
                                147€<span replace item="2" type="fe" parameter="price"></span>
                            </b>
                        </p>
                        <div class="card-section py-2 mb-4 d-md-block d-none">
                            <img loading="lazy" src="assets/images/img-credit-cards.jpg" class="img-fluid mx-auto d-block mb-0" style="width: 133px; max-width:254px;" alt="">
                        </div>
                        <!--<p class="text-center medium mb-5">Livraison GRATUITE ! </p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>


        <section class="pt-5 pb-5 bg-lblue mt-5 hidethis">
            <div class="container container-001">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="head-02 text-center pb-4">
                            Garantie de Remboursement 180 Jours


                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <p>
                            Essayez HÉPALIV sans aucun risque pendant 6 mois complets.
                        </p>
                        <p>
                            Si vous ne constatez pas :
                        </p>


                        <ul class="list-inline ul1">
                            <li class="d-flex">
                                <i class="fa fa-check-circle green"></i>
                                <span>
                                    Une perte de poids visible dès les premières semaines

                                </span>
                            </li>
                            <li class="d-flex">
                                <i class="fa fa-check-circle green"></i>
                                <span>
                                    Plus d’énergie tout au long de la journée

                                </span>
                            </li>
                            <li class="d-flex">
                                <i class="fa fa-check-circle green"></i>
                                <span>
                                    Un métabolisme visiblement plus rapide

                                </span>
                            </li>
                            <li class="d-flex">
                                <i class="fa fa-check-circle green"></i>
                                <span>
                                    Une amélioration de votre santé générale
                                </span>
                            </li>

                        </ul>

                        <p class="pt-3">
                            <b> Nous vous remboursons intégralement. </b>
                        </p>
                        <p>
                            Aucune question. Aucune justification. Même les flacons vides.

                        </p>

                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/index2/money-back-guarantee-black.png" class="guarantee-img img-fluid d-block mx-auto pb-md-4 pb-lg-0">
                    </div>
                </div>

                <div class="row row-lr">
                    <div class="col-md-12 pt-4">
                        <div class="bg-white radius-l1 doc-box4">

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="doc-box4-details">
                                        <p class="mb-3" style="font-weight:500">
                                            « Votre satisfaction est notre priorité absolue. C’est pourquoi nous prenons tout le risque à votre place. »
                                        </p>
                                        <p class="darkblue mb-md-0">
                                            <b>
                                                – Dr Eric Wood
                                            </b>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <img src="assets/images/doc.png" class="img-fluid" alt="img">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- here -->


        <section class="bg-lgray pt-5 pb-5 hidethis openOrderBtn">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="head-02 text-center pb-1">
                            Plus de témoignages vérifiés

                        </h2>
                    </div>

                    <div class="col-md-6">

                        <img src="assets/images/testimonial1.webp" class="img-fluid  mt-4" alt="img">
                        <img src="assets/images/testimonial3.webp" class="img-fluid  mt-4" alt="img">
                    </div>
                    <div class="col-md-6">

                        <img src="assets/images/testimonial2.webp" class="img-fluid  mt-4" alt="img">
                        <img src="assets/images/testimonial4.webp" class="img-fluid  mt-4" alt="img">
                    </div>

                    <div class="col-md-12 text-center mt-md-2 pt-4">

                        <p class="mb-0">
                            <b class="lblue"> Plus de 240 305 clients satisfaits</b> • Note moyenne : 4,8/5
                            <span class="f18 pl-1">
                                <i class="fa-solid fa-star orange"></i>
                                <i class="fa-solid fa-star orange"></i>
                                <i class="fa-solid fa-star orange"></i>
                                <i class="fa-solid fa-star orange"></i>
                                <i class="fa-solid fa-star orange"></i>
                            </span>
                        </p>

                    </div>


                </div>
            </div>
        </section>


        <div class="pt-5 pb-5 hidethis" id="faq">
            <div class="container container-001">


                <div class="row pt-xl-3">
                    <div class="col-md-12">

                        <h2 class="text-center pb-4 main-titles">
                            Questions Fréquentes
                        </h2>

                        <div class="faqs-container">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne1">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                                <i class="fa fa-angle-up"></i>
                                                Est-ce que HépaLiv est adapté à mon cas ?


                                            </button>
                                        </h2>
                                    </div>


                                    <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Avez-vous des réserves de graisse tenaces dont aucun régime ou programme d’exercice ne semble pouvoir vous débarrasser ? Si c’est le cas, la réponse est oui, HépaLiv est adapté à votre cas.
                                            </p>
                                            <p>
                                                HépaLiv a changé la vie de plusieurs milliers de femmes et d’hommes âgés de 18 à 80 ans, et ce produit est conçu pour dissoudre rapidement les graisses, même dans les cas les plus compliqués.
                                            </p>
                                            <p>
                                                Mais si par malchance, vous faisiez partie des rares personnes pour qui cela ne marchait pas, vous êtes protégé à 100 % par notre garantie de remboursement de six mois. C'est dire à quel point nous sommes convaincus de la puissance d’HépaLiv.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">
                                                <i class="fa fa-angle-down"></i>
                                                Comment fonctionne HépaLiv ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Hépaliv est le seul complément alimentaire qui s'attaque à l’une des causes majeures du manque d'énergie, du métabolisme lent et de la prise de poids inexpliquée : une fonction hépatique compromise.
                                            </p>
                                            <p>
                                                Comme vous le savez sûrement, l’une des principales fonctions du foie est de nettoyer l’organisme de tous les produits chimiques et toxines auxquels il est exposé par l’alimentation, les médicaments, l’alcool ou encore la pollution.
                                            </p>
                                            <p>
                                                Mais ce que l’on sait moins, c’est que le foie est également la « machine à combustion des graisses » de l’organisme.
                                            </p>
                                            <p>
                                                Tout ce que vous mangez ou buvez finit par atteindre votre foie pour y être filtré.
                                            </p>
                                            <p>
                                                Votre foie décide alors si les aliments que vous consommez, qu'ils soient sains ou malsains, seront brûlés sous forme d'énergie ou s'ils seront stockés sous forme de graisse disgracieuse.
                                            </p>
                                            <p>
                                                En purifiant et en assurant le bon fonctionnement de votre foie, vous pouvez naturellement augmenter votre énergie, votre brûlage des graisses et votre métabolisme.
                                            </p>


                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header openOrderBtn" id="headingThree">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseThree">
                                                <i class="fa fa-angle-down"></i>
                                                Que contient HépaLiv ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Chaque gélule d’HépaLiv contient deux complexes exclusifs de plantes et de nutriments aux bienfaits prouvés par la science :
                                            </p>
                                            <p>
                                                Notre "Complexe de purification du foie", conçu pour nettoyer et détoxifier rapidement votre corps, et notre "Complexe de combustion des graisses", conçu pour redynamiser votre métabolisme et brûler les graisses tenaces de vos zones à problèmes.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFour">
                                                <i class="fa fa-angle-down"></i>
                                                Est-ce que HépaLiv est sûr et sans danger ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                HépaLiv est une formule 100 % naturelle, fabriquée en France, dans un laboratoire à la pointe de la technologie et certifié ISO 9001, ISO 22000 et Ecocert.
                                            </p>
                                            <p>
                                                Il est donc soumis aux standards d’hygiène et de qualité les plus stricts.
                                            </p>
                                            <p>
                                                Chaque ingrédient est 100 % naturel, sans lactose, sans gluten, sans OGM et végétarien.
                                            </p>
                                            <p>
                                                Le seul effet secondaire rapporté sur HépaLiv est de devoir jeter ses vêtements amples et “baggy” à la poubelle et de devoir passer des heures dans les cabines d'essayage pour racheter de nouveaux vêtements sexy et moulants !
                                            </p>
                                            <p>
                                                Comme toujours, je recommande de montrer une boîte de cette formule à votre médecin traitant, pour vous assurer qu’il n’y a pas de contre-indications pour vous.
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive">
                                                <i class="fa fa-angle-down"></i>
                                                Et si HépaLiv ne marche pas pour moi ?

                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Nous sommes convaincus qu’HépaLiv vous apportera le soutien puissant dont vous avez besoin pour dissoudre la graisse abdominale tenace.
                                            </p>
                                            <p>
                                                Mais nous sommes aussi conscients qu'aucun complément alimentaire ne fonctionne pour 100 % des gens, même si nous nous en approchons. Il peut y avoir un petit nombre de clients pour qui la formule ne fonctionne pas.
                                            </p>
                                            <p>
                                                C’est pour cela que chaque boîte d’HépaLiv est couverte par une garantie Satisfait ou Remboursé de 180 jours. Si pour une raison quelconque, vous changez d’avis à propos de votre commande, vous pouvez nous renvoyer vos boîtes, y compris la boîte entamée, pour un remboursement intégral.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFive6">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive6">
                                                <i class="fa fa-angle-down"></i>
                                                Combien de boîtes devrais-je commander ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive6" class="collapse" aria-labelledby="headingFive6" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Si vous avez plus de 35 ans, et que vous êtes en surpoids, nous recommandons que vous preniez HépaLiv pendant au moins 3 à 6 mois…
                                            </p>
                                            <p>
                                                Pour que le produit ait le temps de nettoyer tout votre corps, et que vous puissiez atteindre votre poids idéal et vous y maintenir durablement.
                                            </p>
                                            <p>
                                                Les packs de 3 ou 6 boîtes d’HépaLiv sont accompagnés d’une grosse remise et de la livraison gratuite.
                                            </p>
                                            <p>
                                                Gardez en tête que les stocks s'épuisent rapidement. Raison de plus pour acheter des packs de trois ou six bouteilles avant que le prix n'augmente ou que nous ne soyons en rupture de stock.
                                            </p>

                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header" id="headingFive7">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive7">
                                                <i class="fa fa-angle-down"></i>
                                                Comment prendre HépaLiv?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive7" class="collapse" aria-labelledby="headingFive7" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Prenez deux gélules d’HépaLiv avec un grand verre d’eau chaque matin.
                                            </p>
                                            <p>
                                                Cette formule unique travaille toute la journée à dissoudre la graisse et purifier votre corps, même pendant votre sommeil.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFive8">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive8">
                                                <i class="fa fa-angle-down"></i>
                                                Est-ce un paiement unique ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive8" class="collapse" aria-labelledby="headingFive8" data-parent="#accordionExample">
                                        <div class="card-body">

                                            <p>

                                                Oui, votre commande aujourd’hui est un paiement unique. Il n’y a pas d’abonnement ni de frais cachés.
                                            </p>


                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFive8v">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive8v">
                                                <i class="fa fa-angle-down"></i>
                                                Quand est-ce que je vais recevoir HépaLiv chez moi ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive8v" class="collapse" aria-labelledby="headingFive8v" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Si vous habitez en France métropolitaine, votre commande sera livrée chez vous via Colissimo sous 3 à 4 jours ouvrés.
                                            </p>
                                            <p>
                                                Si vous habitez en Belgique ou au Luxembourg, votre commande sera livrée via Colissimo ou DPD en 4 à 6 jours ouvrés.
                                            </p>
                                            <p>
                                                Si vous habitez la Suisse, votre commande sera livrée par Colissimo ou DPD en 6 à 8 jours ouvrés à cause des formalités douanières.
                                            </p>


                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header" id="headingFive9v">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive9v">
                                                <i class="fa fa-angle-down"></i>
                                                Comment puis-je démarrer ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive9v" class="collapse" aria-labelledby="headingFive9v" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                C’est la partie la plus amusante. Cliquez sur l’un des packs ci-dessous.
                                            </p>
                                            <p>
                                                Entrez vos informations de livraison sur la page suivante, puis vos informations de paiement sur la page de paiement sécurisé. Une fois votre commande passée, nous vous enverrons vos boîtes de HépaLiv rapidement via Colissimo.
                                            </p>
                                            <p>
                                                N'oubliez pas que votre commande est couverte par notre garantie de remboursement à 100 % pendant 180 jours. Il n'y a donc aucun risque à commander.
                                            </p>
                                            <p>
                                                Le stock s'épuise rapidement et les prix peuvent augmenter à tout moment. Alors, cliquez sur le bouton ci-dessous pour passer votre commande.
                                            </p>



                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <section class=" pb-5 hidethis">
            <div class="container container-001">
                <div class="row">
                    <div class="col-md-12">
                        <div style="background:url('assets/images/bg-11.png')" class="section-details-bg">
                            <div class="section-details-bx">
                                <img src="assets/images/logos-icon.svg" class="img-fluid" alt="img">
                                <h3 class="text-white pb-2 pt-3">
                                    HÉPALIV est une formule révolutionnaire d’activation du métabolisme, fabriquée selon les plus hauts standards européens.
                                </h3>
                                <p class="text-white mb-0">
                                    HÉPALIV est produit dans une installation certifiée ISO 9001, ISO 22000 et ECOCERT. ISO 9001 garantit les systèmes de gestion de la qualité les plus stricts pour une excellence constante du produit. ISO 22000 assure une gestion complète de la sécurité alimentaire tout au long du processus de production. ECOCERT confirme notre engagement envers des ingrédients biologiques et naturels, garantissant pureté et responsabilité environnementale. La sécurité et l’efficacité du produit ont été cliniquement testées sur 790 volontaires, avec un taux de succès de 96 %.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="pt-5 text-center">
                            <a href="#PricingBox" class="btn btn-pager btn-pager-space  btn-shadow btn-big">
                                CLIQUEZ ICI POUR RÉSERVER VOTRE RÉDUCTION


                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div id="footer-light">
            <div class="container container-xl">
            
                <div class="row justify-content-center">
                    <img src="assets/images/logo-green.png" alt="" style="width: 200px;">
                    <div class="col-md-12">
                        <p class="text-center">
                            Copyright © <?= date('Y'); ?> Nutrisolution.fr Tous droits réservés.
                        </p>
                        <p class="text-center mt-0">
                            Nos guides et produits ne sont pas destinés à traiter, guérir ou prévenir les maladies. Consultez votre médecin avant tout nouveau régime ou prise de complément alimentaire.
                        </p>
                        <ul class="list list-inline text-center mb-0 pb-0">
                            <li class="list-inline-item">
                                <a href="https://www.nutrisolution.net/mention-2.php" target="_blank">C.G.V et Mentions Légales</a><span> |</span>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://boutique.nutrisolution.fr/contact" target="_blank">Contact</a><span> |</span>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.nutrisolution.net/politique-confidentialite.php" target="_blank">Politique de Confidentialité</a><span> |</span>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.nutrisolution.net/moyens-de-paiement.php" target="_blank">Moyens de paiement</a><span> |</span>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.nutrisolution.net/retours.php" target="_blank">Retours</a>
                            </li>
                        
                        </ul>
                        

                        <div id="label-container" class="d-flex justify-content-center align-items-center">
                        <label class="switch">
                            <input type="checkbox" id="label-toggle" onchange="document.getElementById('label-img').style.display = this.checked ? 'block' : 'none';">
                            <span class="toggle round"></span>
                        </label>
                        </div>
                        <div id="label-img-container" class="d-flex justify-content-center align-items-center">
                        <label for="label-toggle">
                            <img src="assets/images/label.png" alt="" id="label-img" style="width: 100%; display: none;">
                        </label>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
     
        <!-- OPEN CTA MODAL -->
        <div id="open-cta-modal" class="modal fade  justify-content-center align-items-center" aria-modal="true">
            <div class="modal-dialog modal-l1-main">
                <div class="modal-content">
                    <button type="button" class="close close-icon" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                    <div class="modal-body ps-0 pr-0 pt-0 p-0">
                        <div class="">
                            <img src="https://nutrisolution.net/assets/images/logo/v4-green.png" alt="" class="img-fluid">
                            <p class="text-capitalize text-center mt-2 title" style="color: #1c8da7!important; font-weight: 700; line-height: 1">
                                Perdre du poids <br /> n’a jamais été aussi simple.
                            </p>
                            <p class="text-center mb-0 txt">Ne vous fiez pas seulement à notre parole.</p>
                            <p class="text-center txt"><strong>Lancez la vidéo ci-dessous pour découvrir leurs résultats :</strong></p>
                        </div>
                        <div class="button-yellow-container d-flex justify-content-center align-items-center">
                            <a href="#price-table" class="button-yellow text-center">
                                Oui ! Je veux essayer HépaLiv sans aucun risque !
                            </a>
                        </div>
                        <div class="icons-container d-flex justify-content-center align-items-center mt-5">
                            <img src="assets/images/rating-new.png" style="width: 240px" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- BUBBLE COMMENT -->
        <div id="bubble-comments-container" style=" opacity: 1; transform: translateX(-400px) translateY(0px);">
            <div class="d-flex text-white">
                <span id="bubble-name" class="bubble-name"></span>
                <span id="bubble-state">,&nbsp;<span class="bubble-city"></span> France</span>
            </div>
            <div style="color: #84e7ff; font-weight: 700">
                <span id="bubble-qty" class="bubble-quantity"></span>
                <span> de HépaLiv</span>
            </div>
            <div class="text-white d-flex align-items-center">
                    <span class="bubble-time mr-5">Il y a <span class="bubble-time"></span></span>
                    <img src="assets/images/verified.png" alt="" style="width: 24px;" class="img-fluid pr-1">
                    <span style="font-weight: 700">AVIS VÉRIFIÉS</span>
            </div>
        </div>

        <!-- LINK TO PRICE TABLE -->
        <div id="linkToPriceTable" class="d-flex justify-content-center align-items-center">
            <a href="#price-table" class="linkToPriceTableBtn"><span style="font-weight: 700; ">✓ Oui !</span><span style="font-weight: 500"> Je Veux Essayer HépaLiv</span></a>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="assets/js/vturb.js"></script>
        <script src="assets/js/timer-offer-pages.js"></script>
        <script>
            // Offer BTN. 
            let currentChoice = 3;
            let choiceBtns = document.querySelectorAll('.choiceBtn');
            let offerBtn = document.querySelector('.offerBtn');

            choiceBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    currentChoice = btn.getAttribute('data-qty');
                    offerBtn.setAttribute('href', `etape-2.php?choice=${currentChoice}`);
                })
            });
        </script>

        <script>
            var sync1 = $(".slider");
            var sync2 = $(".navigation-thumbs");

            var thumbnailItemClass = '.owl-item';

            var slides = sync1.owlCarousel({
                video: true,
                startPosition: 4,
                items: 1,
                loop: true,
                margin: 10,
                autoplay: false,
                autoplayTimeout: 6000,
                autoplayHoverPause: false,
                nav: true,
                dots: true
            }).on('changed.owl.carousel', syncPosition);

            function syncPosition(el) {
                $owl_slider = $(this).data('owl.carousel');
                var loop = $owl_slider.options.loop;

                if (loop) {
                    var count = el.item.count - 1;
                    var current = Math.round(el.item.index - (el.item.count / 2) - .5);
                    if (current < 0) {
                        current = count;
                    }
                    if (current > count) {
                        current = 0;
                    }
                } else {
                    var current = el.item.index;
                }

                var owl_thumbnail = sync2.data('owl.carousel');
                var itemClass = "." + owl_thumbnail.options.itemClass;


                var thumbnailCurrentItem = sync2
                .find(itemClass)
                .removeClass("synced")
                .eq(current);

                thumbnailCurrentItem.addClass('synced');

                if (!thumbnailCurrentItem.hasClass('active')) {
                    var duration = 300;
                    sync2.trigger('to.owl.carousel', [current, duration, true]);
                }
            }
            var thumbs = sync2.owlCarousel({
                startPosition: 4,
                items: 4,
                loop: false,
                margin: 10,
                autoplay: false,
                nav: false,
                dots: false,
                onInitialized: function (e) {
                    var thumbnailCurrentItem = $(e.target).find(thumbnailItemClass).eq(this._current);
                    thumbnailCurrentItem.addClass('synced');
                },
            })
            .on('click', thumbnailItemClass, function (e) {
                e.preventDefault();
                var duration = 300;
                var itemIndex = $(e.target).parents(thumbnailItemClass).index();
                sync1.trigger('to.owl.carousel', [itemIndex, duration, true]);
            }).on("changed.owl.carousel", function (el) {
                var number = el.item.index;
                $owl_slider = sync1.data('owl.carousel');
                $owl_slider.to(number, 100, true);
            });
        </script>


        <script>
            $("#pills-home-tab").click(function(){
                $(".empty1").hide();
                $(".fill1").show();

                $(".empty2").show();
                $(".fill2").hide();



                $(".empty3").show();
                $(".fill3").hide();
            });
            $("#pills-profile-tab").click(function(){
                $(".empty2").hide();
                $(".fill2").show();

                $(".empty1").show();
                $(".fill1").hide();



                $(".empty3").show();
                $(".fill3").hide();
            });
            $("#pills-contact-tab").click(function(){
                $(".empty3").hide();
                $(".fill3").show();

                $(".empty1").show();
                $(".fill1").hide();

                $(".empty2").show();
                $(".fill2").hide();
            });
        </script>

        <script>
            $('.home-carousel').owlCarousel({
                margin: 10,
                autoplay: true,
                dots: false,
                nav: true,
                loop: true,
                smartSpeed: 1000,
                autoplayTimeout: 17000,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',

                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        </script>
</body>
</html>
