<?php
include("includes/contact-variables.php");
$contact = getContactVariables('de');
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HépaLiv | Merci pour votre commande</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/confirmation.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">


<style>


</style>

</head>
<body>
    <header class="main-header">
        <div class="main-logo-block pos-r">
            <div class="container py-4">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-4 text-center">
                        <h1 class="mb-3 mb-sm-0">
							<a class="main-site-link d-inline-block" href="#">
								<img class="img-fluid" src="assets/images/logo-nutri.png" alt="img" style="width: 185px;">
							</a>
							
					</h1>
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
                    <div class="box-cont bordered-box-cont">
                        <div class="inner-box">
                            <div class="row">
                                <div class="col-lg-12 text-center">



							<ul class="list-unstyled list-inline finish-progressbar">
								<li class="list-inline-item">VOS INFORMATIONS</li>
                                <li class="list-inline-item second-bar">PAIEMENT</li>
                                <li class="list-inline-item colored-bar">RECAPITULATIF DE COMMANDE</li>
                            </ul>


<div class="thankyou-box text-left">
	 <h1 class="text-center title-01">
                               Merci Pour Votre Commande
                            </h1>
                            <h3 class="title-02">
                              Votre relevé de compte portera l'une des mentions suivantes : <strong>Nutrisolution.Fr</strong>, <strong>CB Nutrisoluti</strong>, <strong>CB Nutrisoluti Paris</strong> ou  <strong>CB Nutrisolution</strong>.
                            </h3>

<p class="mt-32">
Votre commande a bien été prise en compte.
</p>
<p>
	<b>
Votre relevé bancaire portera la mention Nutrisolution.
</b>
</p>
<p>>
Un email de confirmation de votre commande vous a été envoyé à.
<br>
Si vous ne l’avez pas reçu, pensez à vérifier votre boîte spam.
</p>
<p>
Votre commande vous sera livrée d'ici 3 à 4 jours ouvrés environ. Vous recevrez un email qui vous notifiera de son expédition.
</p>


	<p class="text-center colorgray mt-52" >
		<b>
	Récapitulatif de Commande :
</b>
</p>
	<p class="text-center add-mbl" style="margin-bottom: 2px">
		<b>
Numéro de Commande :
<span class="mbl-br"></span>

</b>
</p>
	<p class="text-center">
		<b>
		Date de Commande :
<span class="mbl-br"></span>
		 Le 
			</b>
</p>
	<p class="text-center">
		<b>
		Total de la Commande : €
		</b>
</p>

<p class="text-center colorgray mt-52">
<b>
	Détails de la Commande :
</b>

</p>


<div class="table-responsive">

						<table class="table table-stripped  prd-table w-100">
							<tr class="first-row">
								<td>
									&nbsp;
								</td>
								<td>
									PRODUIT
								</td>

								<td>
									REFERENCE
								</td>

								<td>
									PRIX
								</td>
							</tr>

							<tbody>
									
								</tbody>

						</table>
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

	<?php include("includes/footer/footer-conf.php"); ?>
</body>
</html>
