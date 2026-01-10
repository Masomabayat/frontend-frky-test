<?php

include("includes/countries.php");

// Images:
$img1 = "assets/images/hepaliv_1-p_no-macaron.png";
$img3 = "assets/images/hepaliv_3-p_no-macaron.png";
$img6 = "assets/images/hepaliv_6-p_no-macaron.png";


// Price:      
$choice = strip_tags(strtolower($_GET["choice"]));

if($choice == "")
	$choice = 3;

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

$page_suivante = "/faites-le-plein.php";

include("includes/contact-variables.php");
$contact = getContactVariables('de');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <title>HépaLiv - Entrez Vos Informations de Commande</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css"  crossorigin="anonymous" /> 
</head>

<body>
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
                                                        <a class="nav-item nav-link choose-price  <?= (CHOICE == 1)? 'active' : '';?>" id="product-by-1" data-toggle="tab" href="#nav-product-by-1" role="tab" aria-controls="nav-product-by-1" data-quantity="1" data-blrefprix="<?= $refprix1 ?>" aria-selected="<?= (CHOICE == 1)? 'true' : '';?>">1 Boîte – 59 €</a>
                                                        <a class="nav-item nav-link choose-price  <?= (CHOICE == 6)? 'active' : '';?>" id="product-by-6" data-toggle="tab" href="#nav-product-by-6" role="tab" aria-controls="nav-product-by-6" data-quantity="6" data-blrefprix="<?= $refprix6 ?>" aria-selected="<?= (CHOICE == 6)? 'true' : '';?>">6 Boîtes – 234 €</a>
                                                        <a class="nav-item nav-link choose-price  <?= (CHOICE == 3)? 'active' : '';?>" id="product-by-3" data-toggle="tab" href="#nav-product-by-3" role="tab" aria-controls="nav-product-by-3" data-quantity="3" data-blrefprix="<?= $refprix3 ?>" aria-selected="<?= (CHOICE == 3)? 'true' : '';?>">3 Boîtes – 147 €</a>
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
                                                                        <img loading="lazy" class="img-fluid d-block mx-auto mov-left" src="<?= $img1 ?>" style="width: 90% !important">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="price">
                                                                            <h1>59 €  / Boite</h1>
                                                                            <h2 class="sale">Avant : <span class="sale_price"><del>69 €</del></span></h2>
                                                                            <h2 class="regular">Maintenant : 59 €</h2>
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
                                                                            <h1>39 €  / Boite</h1>
                                                                            <h2 class="sale">Avant : 414 €</del></span></h2>
                                                                            <h2 class="regular">Maintenant : 234 €</h2>
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
                                                                        <img loading="lazy" class="img-fluid d-block mx-auto" src="<?= $img3 ?>">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="price">
                                                                            <h1>49 € / Boite</h1>
                                                                            <h2 class="sale">Avant : 207 €</del></span></h2>
                                                                            <h2 class="regular">Maintenant : 147 €</h2>
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
                                                <input name="bl_url_conf" id="bl_url_conf" type="hidden" value="<?=$page_suivante?>">
                                                <input name="bl_url_err" id="bl_url_err" type="hidden" value="<?= $_SERVER["REQUEST_URI"]?>">
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

    <?php include("includes/footer/footer-checkout.php"); ?>

    <script src="https://www.bluesteel.fr/_minisite/v2/assets/js/common/jquery.3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="assets/js/timer-checkout.js"></script>
    <script>
        function goToNextPage() {
            window.location.href = $("#bl_url_conf").val();
        }
    </script>

    <script>
		jQuery(document).ready(function(){
			$("#pay_submit").on("click", function(){
				goToNextPage();
			});
			$("#cb_submit").on("click", function(){
                goToNextPage();
			});
		});
	</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput.js"  crossorigin="anonymous"></script>
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
</body>
</html>
