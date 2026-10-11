<?php


header('Content-Type: text/html; charset=utf-8');
session_start();
ob_start();
date_default_timezone_set('Europe/Istanbul');

mb_internal_encoding('UTF-8');
setlocale(LC_ALL, 'tr_TR.UTF8',NULL);

ini_set("display_errors", 0);
error_reporting(0);

$db = @new mysqli('localhost','altim','Tm@13e14p','altim');
if($db->connect_errno) die($db->connect_error);
if(function_exists('mysqli_stmt_get_result')=== false) {die('mysqlnd error!');}
$db->set_charset("utf8");

include('function.php');

if(!empty($_POST['ad'])){

	$ad			=	trim(strip_tags($_POST["ad"]));
	$firma		=	trim(strip_tags($_POST["firma"]));
	$mail		=	trim(strip_tags($_POST["mail"]));
	$gsm		=	trim(strip_tags($_POST["gsm"]));
	$sorular	=	trim(strip_tags($_POST["sorular"]));
	$iletisim1	=	trim(strip_tags($_POST["iletisim1"]));	
	$iletisim2	=	trim(strip_tags($_POST["iletisim2"]));	
	
	$ekle   	= insert(
					'ziyaretciler', 
							array(
								'ad' => $ad, 
								'firma' => $firma, 
								'mail' => $mail, 
								'gsm' => $gsm, 
								'sorular' => $sorular, 
								'iletisim1' => $iletisim1,
								'iletisim2' => $iletisim2,
								'tarih' => $tarih
							));

	if($ekle):

		header('location:qr2.php');
		exit;


	endif;



} // if(!empty($_POST['ad'])){








?>






<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Altim</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/colors/switch.css">
	<!-- Color Alternatives -->
	<link href="assets/css/colors/color-2.css" rel="alternate stylesheet" type="text/css" title="color-2">
	<link href="assets/css/colors/color-3.css" rel="alternate stylesheet" type="text/css" title="color-3">
	<link href="assets/css/colors/color-4.css" rel="alternate stylesheet" type="text/css" title="color-4">
	<link href="assets/css/colors/color-5.css" rel="alternate stylesheet" type="text/css" title="color-5">
</head>

<body>

	<div class="wrapper clearfix" style="margin:0px">

		<div class="multisteps-form">

			<div class="row">
				<div class="col-12 col-lg-12 m-auto">
					<div style="    text-align: center; margin-top: 17px;"><img src="assets/img/altim.png" style=" width: 200px; margin: auto;"></div>
					<form class="multisteps-form__form position-relative clearfix" action="#" method="post" id="wizard">
						
						<div class="multisteps-form__panel js-active" data-animation="slideVert">
							<div class="inner pb-100">

								<div class="wizard-content-item text-center">
									<h2>Order Request</h2>
									<p>After submitting this order request, we will contact you shortly to review the details. If you would like to expedite the process and receive pricing information more quiickly, please feel free to reach us at (+90) 533 572 93 67 or via email at export1@altim.com.tr</p>
								</div>
								<div class="wizard-content-form">
									<div class="wizard-form-field">
										<div class="wizard-form-input position-relative form-group has-float-label">
											<input type="text" name="firma" class="form-control" placeholder="Company Name(Firma Adı)">
											<label>Company Name(Firma Adı)</label>
										</div>
										<div class="wizard-form-input position-relative form-group has-float-label">
											<input type="text" name="ad" class="form-control" placeholder="Name(İsim)*" required>
											<label>Name(İsim)*</label>
										</div>
										<div class="wizard-form-input position-relative form-group has-float-label">
											<input type="mail" class="form-control" name="mail" placeholder="E-mail(E-posta)">
											<label>E-mail(E-posta)</label>
										</div>
										<div class="wizard-form-input position-relative form-group has-float-label">
											<input type="text" class="form-control" name="gsm" placeholder="Telephone(Telefon)">
											<label>Telephone(Telefon)</label>
										</div>
										<div class="wizard-form-input position-relative form-group has-float-label">
											<input type="text" class="form-control" name="sorular" placeholder="Your Questions(Sorularınız)">
											<label>Your Questions(Sorularınız)</label>
										</div>


									</div>
									<div class="badge-selection">
										<h3>Preferred Contact Method 
											(Tercih edilen İletişim Yöntemi)</h3>
										<label>
											<input type="checkbox" name="iletisim1" value="1">
											<span class="checkmark">Telephone(Telefon)</span>
										</label>
										<label>
											<input type="checkbox" name="iletisim2" value="1">
											<span class="checkmark">E-mail(E-posta)</span>
										</label>
									</div>

									<div class="wizard-form-field" style="margin-top:30px">
										<div class="d-grid gap-2"><button class="btn btn-primary">Send (Gönder)</button></div>
										
									</div>

									

								</div>

							</div>
						</div>

					</form>
				</div>
			</div>
		</div>

	</div>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/switch.js"></script>
	<script src="assets/js/main.js"></script>
	<script>
		$("#files").change(function() {
			filename = this.files[0].name
			console.log(filename);
		});
	</script>
</body>

</html>