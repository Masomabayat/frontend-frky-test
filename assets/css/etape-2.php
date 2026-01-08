<?php
// header("Location:https://www.hepaliv.fr/etape-2-rptr.php?". $_SERVER['QUERY_STRING']);
// exit;
$part = $_GET['part'];
if($part == null) {
	$part = strtolower($_COOKIE["blpc"]);
}

define('PART', $part);

include('class.api.v1.php');
include("bl-param.php");
include($_SERVER["DOCUMENT_ROOT"] . "../../../includes/countries.php");

// Images:
$img1 = "assets/images/hepaliv_1-p_no-macaron.png";
$img3 = "assets/images/hepaliv_3-p_no-macaron.png";
$img6 = "assets/images/hepaliv_6-p_no-macaron.png";


// Price:      
$choice = strip_tags(strtolower($_GET["choice"]));

if($choice == "")
	$choice = 6;

define('CHOICE', $choice);

$refprix1 = "1-x4bqi94";
$refprix3 = "1-yuc6c2t";
$refprix6 = "1-pwbg0lb";

if(CHOICE == 1) {
    $refPriceActive = $refprix1;
} 
else if(CHOICE == 3) {
    $refPriceActive = $refprix3;
}
else if (CHOICE == 6) {
    $refPriceActive = $refprix6;
}
else {};

// $blapi = new blapi(CLE_ENTITE, CLE_SITE);
// $infominisite = $blapi->MakeRequest("GetInfoForm", array());
// $info = $blapi->MakeRequest("GetInfoPrix", array("prix_p1" => $refprix1, "prix_p3" => $refprix3, "prix_p6" => $refprix6));
// $shippingCosts = file_get_contents("https://www.nutrisolution.net/shipping-costs.php?url=" . $_SERVER['HTTP_HOST'] . '&refprod=' . $info->prix_p1->prd->reference);

$blapi = new blapi(CLE_ENTITE, CLE_SITE, false);
$info = $blapi->MakeRequest("GetPrices", array("prix_p1" => $refprix1, "prix_p3" => $refprix3, "prix_p6" => $refprix6));
$shippingCosts = file_get_contents("https://www.nutrisolution.net/shipping-costs.php?url=" . $_SERVER['HTTP_HOST'] . '&refprod=' . $info->prix_p1->prd->reference);


$page_suivante = "/faites-le-plein-12.php";

// Black Friday 2024
$product_name = "hepaliv";
$lang_bf = 'fr';
$page_type = "form";
// End 

include($_SERVER["DOCUMENT_ROOT"] . "../../../includes/contact-variables.php");
$contact = getContactVariables('fr');
?>

<!DOCTYPE html>
<html>
<head>

	<!-- Google Tag Manager | CONTAINER NUTRITION -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TRNTPDP');</script>
	<!-- End Google Tag Manager | CONTAINER NUTRITION  -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= $imgFavicon ?>" type="image/x-icon" />

    <title><?= NAME_PRODUCT ?> - Entrez Vos Informations de Commande</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/rupture.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css"  crossorigin="anonymous" /> 
	
	<?php 
	if($part == 'pure2') {
	?>
		<!-- Mgid Sensor -->  
		<script type="text/javascript"> (function() { var d = document, w = window; w.MgSensorData = w.MgSensorData || []; w.MgSensorData.push({ cid:269138, lng:"us", project: "a.mgid.com" }); var l = "a.mgid.com"; var n = d.getElementsByTagName("script")[0]; var s = d.createElement("script"); s.type = "text/javascript"; s.async = true; var dt = !Date.now?new Date().valueOf():Date.now(); s.src = "https://" + l + "/mgsensor.js?d=" + dt; n.parentNode.insertBefore(s, n); })();  
		</script>  
		<!-- /Mgid Sensor -->
	<?php
	}
	?>

    <style>
        /**/
    .main-logo-block {
            padding: 1em 0;
            display: flex;
            align-items: center;
        }
        .contact-link span:first-child {
            font-size: 0.9em;
            color: #998f83;
            margin-bottom: 2px;
        }

        .contact-link span {
            display: block;
            font-weight: 600;
            line-height: 1;
            font-family: "Myriad Pro", Helvetica, Arial, sans-serif;
        }

        .contact-link span:last-child {
            font-size: 1.00em;
            color: #000;
            font-weight: bold;
        }
        .main-logo-block {
            background: #fff;
            box-shadow: 0 0 6px 0 #b3b1b1;
        }
        .main-logo {
            width: 60%;
        }
        /**
        * Start input tel: 
        **/
        .popup-tel{
            text-align: center;
            position: absolute;
            top: -10px;
            left: 0;
            right: 0;
            background: #fff;
            color: #000;
            display: none;
            font-size: 14px;
            border-radius: 5px;
        }
        .container-tel{
            position: relative;
        }

        .container-tel img:hover{
            
            cursor: pointer;
        }

        .iti {
            display: block !important; 
        }

        @media(max-width:767px) {
            .iti-mobile .iti--container  {
                top: 0vh !important;
                left: 0 !important;
                right: 0 !important;
            }
            .iti--allow-dropdown input[type=tel] {
            padding-left: 3.5em; 
            }
        }   
        .link-rptr {
        background: #41C13F 0% 0% no-repeat padding-box;
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
        border: 2px solid #9BF09A;
        border-radius: 8px;
        
        opacity: 1;
        padding:  10px 12px;
        

        text-decoration: none;

    }
    .link-rptr:hover {
    color: #fff;
    opacity: 0.8;
    text-decoration: none;
    cursor: pointer;
    }
    .link-rptr a {
        font-weight: 500;
        color: #fff;
    }
    form {
        position: relative;
    }
    .disable-form {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.6);
        z-index: 1000;
    }
    </style>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRNTPDP"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

    <?php include($_SERVER["DOCUMENT_ROOT"] . "../../../includes/bf/banner-form.php");  ?>

    <header class="main-header aj_top">
        <div class="main-logo-block pos-r">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-4 text-center">
                        <h1 class="mb-3 mb-sm-0"><a class="main-site-link d-inline-block" href="#"><img loading="lazy" class="img-fluid main-logo" src="assets/images/logo-nutri.png" alt="img"></a></h1>
                    </div>
                    <div class="col-12 col-sm-8 text-center text-sm-right">
                        <a class="contact-link d-block d-sm-inline-block" href="tel:<?= $contact['phone']; ?>">
                            <div class="d-inline-block align-middle text-center"><span>Des questions ? Appelez-nous !</span><span><?= $contact['phone']; ?></span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="checkout-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-cont">
                    <!-- <div class="warning-box font-weight-bold">
                            <h3>
                                <strong>Victime de son succès, Prodentim est malheureusement en Rupture de Stock pour une durée indéterminée.</strong>
                            </h3>
                            <p class="mb-4">
                                Nous n’avons actuellement pas de date de réapprovisionnement à vous communiquer.
                            </p>
                            <p class="mt-4 link-rptr d-md-inline">
                                <a href="https://boutique.nutrisolution.fr/produits/" >
                                    Visitez notre boutique pour découvrir notre gamme complète
                                </a>
                            </p>
                        </div> -->
                        <div class="inner-box">

                            <ul class="list-unstyled list-inline finish-progress">
                                <li class="list-inline-item">TERMINEZ VOTRE COMMANDE</li>
                                <li class="list-inline-item">SOMMAIRE</li>
                            </ul>


                            <div class="row">
                                <div class="col-lg-8">

                                    <div class="timer-cont text-center">
                                        <p>Votre Commande est Réservée Pendant Encore : <span class="count-up">9:59</span></p>
                                    </div>

                                    <h1 class="great-text">
                                        <span>Bravo !</span>
                                        Vous faites un pas important pour votre foie et votre santé. Agissez maintenant pour ne pas rater cette offre !
                                    </h1>

                                    <div class="low-sec">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <ul class="list-unstyled list-inline low-list">
                                                    <li class="list-inline-item">Disponibilité</li>
                                                    <li class="list-inline-item"><div class="low"></div></li>
                                                    <li class="list-inline-item vol-text">BASSE</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <p>Risque de Rupture de Stock :<span class="vol-text">ÉLEVÉ</span></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="packages">
                                        <div class="row mb-4">
                                            <div class="col-lg-3 col-md-3">
                                                <h2 class="select-text mblcenter">Votre Pack :</h2>
                                            </div>
                                            <div class="col-lg-9 col-md-9">
                                                <nav>
                                                    <div class="nav nav-tabs tab-nav custom-tab" id="nav-tab" role="tablist">
                                                        <a class="nav-item nav-link choose-price  <?= (CHOICE == 1)? 'active' : '';?>" id="product-by-1" data-toggle="tab" href="#nav-product-by-1" role="tab" aria-controls="nav-product-by-1" data-quantity="1" data-blrefprix="<?= $refprix1 ?>" aria-selected="<?= (CHOICE == 1)? 'true' : '';?>" data-price="<?=number_format($info->prix_p1->prix_total, 0)?>" data-shipping="<?=$info->prix_p1->livraison?>">1 Boîte – <?=number_format($info->prix_p1->prix_total, 0)?> €</a>
                                                        <a class="nav-item nav-link choose-price  <?= (CHOICE == 6)? 'active' : '';?>" id="product-by-6" data-toggle="tab" href="#nav-product-by-6" role="tab" aria-controls="nav-product-by-6" data-quantity="6" data-blrefprix="<?= $refprix6 ?>" aria-selected="<?= (CHOICE == 6)? 'true' : '';?>" data-price="<?=number_format($info->prix_p6->prix_total, 0)?>" data-shipping="<?=$info->prix_p6->livraison?>">6 Boîtes – <?=number_format($info->prix_p6->prix_total, 0)?> €</a>
                                                        <a class="nav-item nav-link choose-price  <?= (CHOICE == 3)? 'active' : '';?>" id="product-by-3" data-toggle="tab" href="#nav-product-by-3" role="tab" aria-controls="nav-product-by-3" data-quantity="3" data-blrefprix="<?= $refprix3 ?>" aria-selected="<?= (CHOICE == 3)? 'true' : '';?>" data-price="<?=number_format($info->prix_p3->prix_total, 0)?>" data-shipping="<?=$info->prix_p3->livraison?>">3 Boîtes – <?=number_format($info->prix_p3->prix_total, 0)?> €</a>
                                                    </div>
                                                </nav>

                                            </div>
                                        </div>

                                        <div class="select-cont">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="inner-cont">

                                                        <div class="tab-content" id="nav-tabContent">

                                            <!-- 
                                            ----------------  
                                                Choice == 1
                                            ----------------  
                                            -->
                                                            <div class="tab-pane fade show <?= (CHOICE == 1)? 'active' : '';?>" id="nav-product-by-1" role="tabpanel" aria-labelledby="product-by-1">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <img loading="lazy" class="img-fluid d-block mx-auto mov-left" src="<?= $img1 ?>" style="width: 151px !important">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="price">
                                                                            <h1><?=number_format($info->prix_p1->prix_total, 0)?> €  / Boite</h1>
                                                                            <h2 class="sale">Avant : <span class="sale_price"><del><?=number_format($info->prix_p1->prix_brut, 0)?> €</del></span></h2>
                                                                            <h2 class="regular">Maintenant : <?=number_format($info->prix_p1->prix_total, 0)?> €</h2>
                                                                            <h2 class="free">(+ Livraison)</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                
                                            <!-- 
                                            ----------------  
                                                Choice == 6
                                            ----------------  
                                            -->

                                                            <div class="tab-pane fade show <?= (CHOICE == 6)? 'active' : '';?>" id="nav-product-by-6" role="tabpanel" aria-labelledby="product-by-6">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <img loading="lazy" class="img-fluid d-block mx-auto" src="<?= $img6 ?>">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="price">
                                                                            <h1><?=number_format($info->prix_p6->prix / 6, 0)?> €  / Boite</h1>
                                                                            <h2 class="sale">Avant : <span class="sale_price"><del><?=number_format($info->prix_p6->prix_brut, 0)?> €</del></span></h2>
                                                                            <h2 class="regular">Maintenant : <?=number_format($info->prix_p6->prix_total, 0)?> €</h2>
                                                                            <h2 class="free">(Livraison Gratuite)</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                            <!-- 
                                            ----------------  
                                                Choice == 3
                                            ----------------  
                                            -->

                                                            <div class="tab-pane fade show <?= (CHOICE == 3)? 'active' : '';?>" id="nav-product-by-3" role="tabpanel" aria-labelledby="product-by-3">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <img loading="lazy" class="img-fluid d-block mx-auto" src="<?= $img3 ?>" style="width: 80% !important">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="price">
                                                                            <h1><?=number_format($info->prix_p3->prix_total / 3, 0)?> € / Boite</h1>
                                                                            <h2 class="sale">Avant : <span class="sale_price"><del><?=number_format($info->prix_p3->prix_brut, 0)?> €</del></span></h2>
                                                                            <h2 class="regular">Maintenant : <?=number_format($info->prix_p3->prix_total, 0)?> €</h2>
                                                                            <h2 class="free">(+ Livraison)</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                          

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- <div class="order-box">
                                            <h1>DÉPÊCHEZ-VOUS DE COMMANDER !</h1>
                                            <h2>QUANTITÉS LIMITÉES !</h2>
                                        </div> -->


                                        <div class="grey-box">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img class="img-fluid gurantee-img" src="assets/images/img-guarantee_badge.png" style="width: 300px;">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2>Garantie Satisfait ou Remboursé à 100% de <span class="blue"> 180 Jours</span></h2>
                                                    <p class="g-text">N’oubliez pas que si pour une quelconque raison, vous changez d’avis à propos de votre achat…</p>
                                                    <p class="g-text mb-0">
                                                        Il vous suffit de nous écrire par mail ou de nous appeler pendant les 180 jours suivants votre commande et de nous retourner vos boîtes et nous vous rembourserons à 100%, y compris les boîtes entamées. <br><span>Il n'y a donc aucun risque à commander !</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>



                                    </div>


                                </div>

                                <div class="col-lg-4">
                                    <div class="user-form">
                                        <div class="purple-box">
                                            <h1>VOS INFORMATIONS</h1>

                                        </div>

                                        <div class="user-cont">
                                            <form action="/bl_form.php" id="form_paiement" method="post" name="form_paiement">
                                            <!-- <div class="disable-form"></div> -->
                                                <input name="bl_url_conf" id="bl_url_conf" type="hidden" value="<?= "https://$_SERVER[HTTP_HOST]";?><?=$page_suivante?>">
                                                <input name="bl_url_err" id="bl_url_err" type="hidden" value="<?= "https://$_SERVER[HTTP_HOST]";?><?= $_SERVER["REQUEST_URI"]?>">
                                                <input name="bl_refprix[]" type="hidden" value="<?= $refPriceActive ?>">
                                                <input name="bl_methode" id="bl_methode" type="hidden" value="cb">

                                                <div class="form-group">
                                                    <label class="semi-bold" for="inputNickname">Prénom</label>
                                                    <input type="text" class="form-control inp" id="bl_prenom" name="bl_prenom" maxlength="75" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="semi-bold" for="inputName">Nom</label>
                                                    <input type="text" class="form-control inp" name="bl_nom" id="bl_nom" maxlength="75" required="">

                                                </div>



                                                <div class="form-group">
                                                    <label class="semi-bold" for="inputEmail">Adresse email</label>
                                                    <input type="email" class="form-control inp" name="bl_email" id="bl_email" maxlength="150" required="">
                                                </div>

                                                <div class="form-group container-tel">
                                                    <label class="semi-bold" for="bl_telephone">Téléphone </label><span id="questionmark"><img src="../assets/images/questionmark.png" alt="" width="20" class="mb-3 ml-2"></span>

                                                    <input type="tel" id="bl_telephone" name="bl_telephone" class="form-control inp">
                                                    <div class="popup-tel">
                                                    <span ><span class="font-weight-bold">Optionnel :</span> Votre numéro de téléphone est requis pour faciliter la livraison de votre commande.</span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="semi-bold" for="inputAdress">Adresse postale</label>
                                                    <input type="text" class="form-control inp" name="bl_address_street1" id="bl_address_street1" maxlength="32" required="">
                                                </div>

                                                <div class="form-group">
                                                    <label class="semi-bold" for="inputAddress2">
                                                        Adresse postale ligne 2
                                                        <span class="light-text">(optionnel)</span>
                                                    </label>
                                                    <input type="text" class="form-control inp" name="bl_address_street2" id="bl_address_street2" maxlength="32">
                                                </div>

                                                <div class="form-row">

                                                    <div class="form-group col-md-6">
                                                        <label class="semi-bold" for="inputPostalCode">Code Postal</label>
                                                        <input type="text" class="form-control inp" name="bl_address_cp" id="bl_address_cp" size="6" maxlength="6" required="">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="semi-bold" for="inputCity">Ville</label>
                                                        <input type="text" class="form-control inp" name="bl_address_city" id="bl_address_city" required="">
                                                    </div>
                                                </div>

                                                <div class="form-row">

                                                    <div class="form-group col-md-6">
                                                        <label class="semi-bold" for="inputState">Pays</label>
                                                        <select name="bl_address_country_id" id="bl_address_country_id" class="form-control inp">
                                                        <?php displayCountriesOptions('fr');?>
                                                        </select>
                                                    </div>

                                                </div>
                                                <?php include($_SERVER["DOCUMENT_ROOT"] . "/../../includes/recap-fdl.php"); ?>
                                               <style>
                                                .spinner-border {
                                                    --bs-spinner-width: 1.2rem;
                                                    --bs-spinner-height: 1.2rem;
                                                    width: 1.2rem;
                                                    height: 1.2rem;
                                                }
                                                </style>
                                                <a style="color:white !important" class="payer-btn-1 click-btn click-btn-payment btn cb-button mt-4" id="cb_submit">
                                                    <span class="cartContent">Payer par carte</span>
                                                    <div class="cartLoader spinner-border text-light" style="display: none" role="status"></div>
                                                </a>
                                                <img src="assets/images/cb.png" alt="img" class="img-fluid mx-auto d-block" style="max-width: 140px;margin-top: 10px;margin-bottom: 10px;" />
                                                <a class="paypal-button text-center payer-btn-2 click-btn click-btn-payment" id="pay_submit">
                                                    <span class="payContent">Payer avec <img loading="lazy" style="width: 90px; margin-left: 10px;" class="img-fluid" src="assets/images/paypal.png"></span>
                                                    <div class="payLoader spinner-border text-dark" style="display: none" role="status"></div>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include($_SERVER["DOCUMENT_ROOT"] . "/../../includes/footer/footer-form.php"); ?>

    <script src="https://www.bluesteel.fr/_minisite/v2/assets/js/common/jquery.3.4.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://www.bluesteel.fr/_minisite/v2/assets/js/common/bl.js"></script>
	 <script src="https://www.bluesteel.fr/_minisite/v2/assets/js/common/trk.js"></script>
    <script src="assets/js/timer-2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput.js"  crossorigin="anonymous"></script>
    <script type="text/javascript">var shippingCosts = JSON.parse('<?=$shippingCosts?>');</script>
    <script src="//www.bluesteel.fr/_minisite/v2/assets/js/common/shipping.js"></script>

    <script>
        // Script question mark tel.
        $('#questionmark').hover(function(){
            $('.popup-tel').css('display', 'block');
        })
        $('.popup-tel').mouseleave(function(){
            $(this).css('display', 'none');
        })
        $('input').click(function(){
            $('.popup-tel').css('display', 'none');
        }) 

        var langue = $('#bl_langue').val();
            if (langue == undefined) {
                langue = 'fr';
            }

            var inputTelephone = document.querySelector("#bl_telephone");
            var iti = window.intlTelInput(inputTelephone, {
                'initialCountry' : true, 
                'initialCountry' : langue, 
                'preferredCountries' : ['fr'],
                'onlyCountries' : ['fr', 'be', 'ch', 'lu' ],
            });
    </script>

    <script>
        /**
         * Fonction redirection url_conf en fonction de la quantité :
         */

        const initUrlConf = (refPrice) =>
        {
            let urlConf = $("#bl_url_conf");

            if (refPrice == "1-y3v1cu8") { /* 1 boite */
                urlConf.val('https://www.hepaliv.fr/faites-le-plein-3.php'); 
            } 
            else if (refPrice == "1-21snxnd") { /* 3 boites */ 
                urlConf.val('https://www.hepaliv.fr/faites-le-plein-6.php');
            }
            else if (refPrice == "1-qm7bnij") { /* 6 boites */ 
                urlConf.val('https://www.hepaliv.fr/faites-le-plein-12.php');
            }
            console.log(urlConf.val());		
        };
    </script>

    <script>
		jQuery(document).ready(function(){

                function showLoader() {
                    $('.cartLoader').show();
                    $('.payLoader').show();
                    $('.cartContent').hide();
                    $('.payContent').hide();
                }
                function showCartLoader() {
                    $('.cartLoader').show();
                    $('.cartContent').hide();
                }
                function showPaypalLoader() {
                    $('.payLoader').show();
                    $('.payContent').hide();
                }
                function hideLoader() {
                    $('.cartLoader').hide();
                    $('.payLoader').hide();
                    $('.cartContent').show();
                    $('.payContent').show();
                }
                window.addEventListener('pageshow', function (e) {
                    if (e.persisted || performance.getEntriesByType('navigation')[0]?.type === 'back_forward') {
                        hideLoader();
                    }
                });
            function setDataAttribute(selector, name, value){
				$(selector).attr('data-' + name, value);
			}

            initUrlConf('<?= $refPriceActive ?>');

			$('.choose-price').click(function(){
				$("input[name='bl_refprix[]']").val($(this).data('blrefprix'));

                initUrlConf($(this).data('blrefprix'));

                setDataAttribute('.click-btn-payment', 'price', $(this).data('price'));
				setDataAttribute('.click-btn-payment', 'quantity', $(this).data('quantity'));
			});

			$("#pay_submit").on("click", function(){
				$("#bl_methode").val("PAY");
				$("#form_paiement").submit();

			});

			$("#cb_submit").on("click", function(){
				$("#bl_methode").val("CB");
				$("#form_paiement").submit();

			});

			$("#form_paiement").on("submit", function(e){

				e.preventDefault();

				if($("#bl_prenom").val() == ''){
					alert('Vous devez saisir votre prénom');
					return false;
				}

				if($("#bl_nom").val() == ''){
					alert('Vous devez saisir votre nom');
                    return false;
				}

				if($("#bl_address_street1").val() == ''){
					alert('Vous devez saisir une adresse');
					return false;
				}


				if($("#bl_address_city").val() == ''){
					alert('Vous devez saisir une ville');
					return false;
				}

				if($("#bl_address_cp").val() == ''){
					alert('Vous devez saisir un code postal');
					return false;
				}
                if($("#bl_methode").val() === "CB") {
                    showCartLoader();
                }
                if($("#bl_methode").val() === "PAY") {
                    showPaypalLoader();
                }

				console.log($("input[name='bl_refprix[]']").val());

                /*Validation du formulaire*/
                var form =  {
                    bl_ajax: 'O',
                    bl_methode: $("#bl_methode").val(),
                    bl_email : $("#bl_email").val(),
                    bl_telephone : $("#bl_telephone").val(),
                    bl_indicatif : iti.selectedCountryData.dialCode, 
                    bl_prenom : $("#bl_prenom").val(),
                    bl_nom : $("#bl_nom").val(),
                    bl_address_street1 : $("#bl_address_street1").val(),
                    bl_address_street2 : $("#bl_address_street2").val(),
                    bl_address_street3 : $("#bl_address_street3").val(),
                    bl_address_city : $("#bl_address_city").val(),
                    bl_address_cp : $("#bl_address_cp").val(),
                    bl_address_country_id : $("#bl_address_country_id").val(),
                    bl_refprix : $("input[name='bl_refprix[]']").val(),
                    bl_url_conf : $("#bl_url_conf").val(),
                    bl_url_err : $("#bl_url_err").val()
                };

				console.log(form);

				$.post("/bl_form.php", form).done(function(data, textStatus, jqXHR) {
					console.log(data);
					data = JSON.parse(data);

					if(data.bl_code == 200){
						setTimeout(function(){ window.location.href=data.bl_redirect; }, 500);
					}else{
						alert(data.bl_description);
					}


				}).fail(function(jqXHR, textStatus, errorThrown) {
					$body.removeClass("loading");
					console.log(jqXHR);
					if(tryParseJSON(jqXHR.responseText)){
						let response =  JSON.parse(jqXHR.responseText);
						$("#card-errors").html(response.message);
						$("#card-errors").show();
					}else{
						$("#card-errors").html("Erreur interne");
						$("#card-errors").show();
					}
                    hideLoader();
				});

			});

		});
	</script>

<script>
        function waitAndTag(){
		
        function isPageUnderATest() {
        
            function isJsonString(str) {
                try {
                    JSON.parse(str);
                } catch (e) {
                    return false;
                }
                return true;
            }
            
            var result = false;
            
            var cookiesArray = document.cookie.split(';');
            cookiesArray.forEach(cookieData => {
                var indexOf = cookieData.indexOf('=');
                var name = cookieData.substring(0, indexOf - 1);
                var value = cookieData.substring(indexOf + 1);
    
                if (name.indexOf('_KoaAbTesting_') != -1) {
                    if(value == window.location.pathname.toLowerCase())
                        result = true;                        
                    
                    if(!result && isJsonString(value)) {
                        var jsonData = JSON.parse(value);
                        if(jsonData.url == window.location.pathname.toLowerCase())
                            result = true;                        
                    }
                }
            });
			return result;
        }
        /* tracking split test */
        let dt2 = getCookie("bl_dT2");
        let data2Id = "_hep-fr-new-grt-0218";
    
        //Si l'expérience de Google Optimize is not running
        if(urlParamsTab["utm_expid"] === undefined && getCookie("_gaexp") === '' && !isPageUnderATest()) {
            data2Id = "";
        }

        /* Nettoyage tracking split test */
        dt2 = dt2.replace("_hep-fr-cur-grt-0218", "");
        dt2 = dt2.replace("_hep-fr-new-grt-0218", "");
        
        dt2 += data2Id;
    
        setCookie("bl_dT2", dt2, 30);
        }

    // On attend 5 secondes pour poser le tracking
    setTimeout(waitAndTag, 2000);
    </script>

</body>
</html>
