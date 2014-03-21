<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Cromos';
$this->breadcrumbs=array(
	'Cromos',
);
?>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/baraja.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" />
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.79639.js"></script>		
		<title>Compras</title>
	</head>
	
	<body class="compras">
			<header>
				<h3>Comprar Cromos o Àlbums</h3>
			</header>
			
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_xclick">
			<input type="hidden" name="business" value="jairo.m.v.iro@gmail.com">
			<input type="hidden" name="lc" value="ES">
			<input type="hidden" name="button_subtype" value="services">
			<input type="hidden" name="no_note" value="0">
			<input type="hidden" name="currency_code" value="EUR">
			<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
			<table>
			<tr><td><input type="hidden" name="on0" value="Albums">Albums</td></tr><tr><td><select name="os0">
				<option value="Album 1">Album 1 €9,99 EUR</option>
				<option value="Album 2">Album 2 €9,99 EUR</option>
				<option value="Album 3">Album 3 €9,99 EUR</option>
			</select> </td></tr>
			<tr><td><input type="hidden" name="on1" value="Cromos">Cromos</td></tr><tr><td><select name="os1">
				<option value="Cromos 1">Cromos 1 </option>
				<option value="Cromos 2">Cromos 2 </option>
				<option value="Cromos 3">Cromos 3 </option>
			</select> </td></tr>
			</table>
			<input type="hidden" name="currency_code" value="EUR">
			<input type="hidden" name="option_select0" value="Album 1">
			<input type="hidden" name="option_amount0" value="9.99">
			<input type="hidden" name="option_select1" value="Album 2">
			<input type="hidden" name="option_amount1" value="9.99">
			<input type="hidden" name="option_select2" value="Album 3">
			<input type="hidden" name="option_amount2" value="9.99">
			<input type="hidden" name="option_index" value="0">
			<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
			<img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
			</form>
    </body>
</html>
