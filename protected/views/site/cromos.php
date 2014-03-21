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
		<title>Cromos: efectes</title>
	</head>
	
	<body>
		<div class="container">
			<header class="clearfix">
				<h1>Efectes Cromos</h1>
			</header>
			
			<section class="main">
				<nav class="actions">
					<span id="add">Afegir cromos</span>
					<br>
					<span id="nav-fan5">Mostrar cromos (horizontal)</span>
					<br>
					<span id="nav-fan6">Mostrar comos (vertical)</span>
					<br>
					<span id="nav-fan7">Desplegar (lateral)</span>
					<br>
					<span id="nav-fanOther2">Desplegar (rotar)</span>
					<br>
				</nav>

				<div class="baraja-demo">
					<ul id="baraja-el" class="baraja-container">
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" alt="image1"/><h4>Coco Loko</h4><p>Total bicycle rights in blog four loko raw denim ex, helvetica sapiente odio placeat.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg" alt="image2"/><h4>Vermouth Land</h4><p>Velit chambray fugiat, enim aesthetic esse ullamco typewriter.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/3.jpg" alt="image3"/><h4>Electrodynamics</h4><p>Before they sold out PBR magna jean shorts non seitan ea. Dolor wolf pop-up.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/4.jpg" alt="image4"/><h4>Retinal Bliss</h4><p>Locavore vero ad, before they sold out food truck bushwick helvetica.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/5.jpg" alt="image5"/><h4>Disco Fever</h4><p>Cillum laboris consequat, qui elit retro next level skateboard freegan hella.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/6.jpg" alt="image6"/><h4>Serenity</h4><p>Truffaut wes anderson hoodie 3 wolf moon labore, fugiat lomo iphone eiusmod vegan.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/7.jpg" alt="image7"/><h4>Dark Honor</h4><p>Chillwave mustache pinterest, marfa seitan umami id farm-to-table iphone.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/8.jpg" alt="image8"/><h4>Nested Happiness</h4><p>Minim post-ironic banksy american apparel iphone wayfarers.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/9.jpg" alt="image9"/><h4>Cherry Country</h4><p>Sint vinyl Austin street art odd future id trust fund, terry richardson cray.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/10.jpg" alt="image10"/><h4>Cherry Country</h4><p>Sint vinyl Austin street art odd future id trust fund, terry richardson cray.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/11.jpg" alt="image11"/><h4>Coco Loko</h4><p>Total bicycle rights in blog four loko raw denim ex, helvetica sapiente odio placeat.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/12.jpg" alt="image12"/><h4>Vermouth Land</h4><p>Velit chambray fugiat, enim aesthetic esse ullamco typewriter.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/3.jpg" alt="image3"/><h4>Electrodynamics</h4><p>Before they sold out PBR magna jean shorts non seitan ea. Dolor wolf pop-up.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/4.jpg" alt="image4"/><h4>Retinal Bliss</h4><p>Locavore vero ad, before they sold out food truck bushwick helvetica.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/5.jpg" alt="image5"/><h4>Disco Fever</h4><p>Cillum laboris consequat, qui elit retro next level skateboard freegan hella.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/6.jpg" alt="image6"/><h4>Serenity</h4><p>Truffaut wes anderson hoodie 3 wolf moon labore, fugiat lomo iphone eiusmod vegan.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/7.jpg" alt="image7"/><h4>Dark Honor</h4><p>Chillwave mustache pinterest, marfa seitan umami id farm-to-table iphone.</p></li>
						<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/8.jpg" alt="image8"/><h4>Nested Happiness</h4><p>Minim post-ironic banksy american apparel iphone wayfarers.</p></li>
					</ul>
				</div>
				<nav class="actions light">
					<span id="nav-prev">&lt;</span>
					<span id="nav-next">&gt;</span>
					<span id="close">Aturar &nbsp;&nbsp;&nbsp; efecte</span>
				</nav>
			</section>
			
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.baraja.js"></script>
        <script type="text/javascript">	
			$(function() {

				var $el = $( '#baraja-el' ),
					baraja = $el.baraja();

				// navigation
				$( '#nav-prev' ).on( 'click', function( event ) {

					baraja.previous();
				
				} );

				$( '#nav-next' ).on( 'click', function( event ) {

					baraja.next();
				
				} );

				// simple fan
				$( '#nav-fan' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 90,
						direction : 'right',
						origin : { x : 25, y : 100 },
						center : true
					} );
				
				} );

				$( '#nav-fan2' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 90,
						direction : 'left',
						// note that the x origin changes (symmetric)
						origin : { x : 75, y : 100 },
						center : true
					} );
				
				} );

				// more realistic fan: without common origin (means the origin changes / increments by card )
				$( '#nav-fan3' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 90,
						direction : 'right',
						origin : { minX : 20, maxX : 80, y : 100 },
						center : true,
						translation : 60
					} );
				
				} );

				$( '#nav-fan4' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 90,
						direction : 'left',
						origin : { minX : 20, maxX : 80, y : 100 },
						center : true,
						translation : 60
					} );
				
				} );

				// playing with different origins and ranges	
				$( '#nav-fan5' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 100,
						direction : 'right',
						origin : { x : 50, y : 200 },
						center : true
					} );
				
				} );

				$( '#nav-fan6' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 80,
						direction : 'left',
						origin : { x : 200, y : 50 },
						center : true
					} );
				
				} );

				// center false, playing with translation
				$( '#nav-fan7' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 20,
						direction : 'right',
						origin : { x : 50, y : 200 },
						center : false,
						translation : 300
					} );
				
				} );

				$( '#nav-fan8' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 20,
						direction : 'left',
						origin : { x : 50, y : 200 },
						center : false,
						translation : 300
					} );
				
				} );

				// using scatter : true
				$( '#nav-fan9' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 20,
						direction : 'right',
						origin : { x : 50, y : 200 },
						center : false,
						translation : 300,
						scatter : true
					} );
				
				} );

				$( '#nav-fan10' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 20,
						direction : 'left',
						origin : { x : 50, y : 200 },
						center : false,
						translation : 300,
						scatter : true
					} );
				
				} );

				$( '#nav-fanOther1' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 130,
						direction : 'left',
						origin : { x : 25, y : 100 },
						center : false
					} );
				
				} );

				$( '#nav-fanOther2' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 360,
						direction : 'left',
						origin : { x : 50, y : 90 },
						center : false
					} );
				
				} );

				$( '#nav-fanOther3' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 330,
						direction : 'left',
						origin : { x : 50, y : 100 },
						center : true
					} );
				
				} );

				$( '#nav-fanOther4' ).on( 'click', function( event ) {

					baraja.fan( {
						speed : 500,
						easing : 'ease-out',
						range : 90,
						direction : 'right',
						origin : { minX : 20, maxX : 80, y : 100 },
						center : true,
						translation : 60,
						scatter : true
					} );
				
				} );

				// close the baraja
				$( '#close' ).on( 'click', function( event ) {

					baraja.close();
				
				} );

				// example of how to add more items
				$( '#add' ).on( 'click', function( event ) {

					if( $( this ).hasClass( 'disabled' ) ) {
						return false;
					}

					$( this ).addClass( 'disabled' );

					baraja.add( $('<li><img src="images/6.jpg" alt="image6"/><h4>Serenity</h4><p>Truffaut wes anderson hoodie 3 wolf moon labore, fugiat lomo iphone eiusmod vegan.</p></li><li><img src="images/7.jpg" alt="image7"/><h4>Dark Honor</h4><p>Chillwave mustache pinterest, marfa seitan umami id farm-to-table iphone.</p></li><li><img src="images/8.jpg" alt="image8"/><h4>Nested Happiness</h4><p>Minim post-ironic banksy american apparel iphone wayfarers.</p></li><li><img src="images/9.jpg" alt="image9"/><h4>Cherry Country</h4><p>Sint vinyl Austin street art odd future id trust fund, terry richardson cray.</p></li>') );
				
				} );
			});
		</script>
    </body>
</html>
