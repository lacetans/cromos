<link rel="stylesheet" type="text/css" href="css/image-picker.css">
<script src="image-picker/image-picker.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
    $("select").imagepicker({
		hide_select : true,
        show_label  : true,
		clicked:function(){
			imatges_marcats = $(this).val(); //id's dels Imatges seleccionats
			console.log(imatges_marcats);
		}
	})
	//Al clicar Aprovar: mostrem confirmació acceptar imatges
	$('#preaprovar').on('click', function (e) {
		document.getElementById('missatges_usuari').style.display='none'; //amaguem missatges usuari
		document.getElementById('botons_aprovar_denegar').style.display='none'; //amaguem botons originals
		document.getElementById('confirm_denegar').style.display='none'; //amaguem capa confirmar denegar
		document.getElementById('confirm_acceptar').style.display='block'; //mostrem capa confirmar acceptar
	})
	//Al clicar Denegar: mostrem confirmació denegar Imatges
	$('#predenegar').on('click', function (e) {
		document.getElementById('missatges_usuari').style.display='none'; //amaguem missatges usuari
		document.getElementById('botons_aprovar_denegar').style.display='none'; //amaguem botons originals
		document.getElementById('confirm_acceptar').style.display='none'; //amaguem capa confirmar acceptar
		document.getElementById('confirm_denegar').style.display='block'; //mostrem capa confirmar denegar
	})
	//Al clicar Cancelar (al aprovar): tornem a ensenyar els botons generals (aprovar, denegar) i amaguem la resta de botons
	$('#cancelar_aprovar').on('click', function (e) {
		document.getElementById('missatges_usuari').style.display='none'; //amaguem missatges usuari
		document.getElementById('botons_aprovar_denegar').style.display='block'; //amaguem botons originals
		document.getElementById('confirm_denegar').style.display='none'; //amaguem capa confirmar denegar
		document.getElementById('confirm_acceptar').style.display='none'; //mostrem capa confirmar acceptar
		//selectNone(select_cromos,false);
	})
	//Al clicar Cancelar (al denegar): tornem a ensenyar els botons generals (aprovar, denegar) i amaguem la resta de botons
	$('#cancelar_denegar').on('click', function (e) {
		document.getElementById('missatges_usuari').style.display='none'; //amaguem missatges usuari
		document.getElementById('botons_aprovar_denegar').style.display='block'; //amaguem botons originals
		document.getElementById('confirm_denegar').style.display='none'; //amaguem capa confirmar denegar
		document.getElementById('confirm_acceptar').style.display='none'; //mostrem capa confirmar acceptar
		//selectNone(select_cromos,false);
	})
});
</script>
<script>
//Selecciona tots els Imatges del select.
function selectAll(selectBox,selectAll) { 
    // have we been passed an ID 
    if (typeof selectBox == "string") { 
        selectBox = document.getElementById(selectBox);
    } 
    // is the select box a multiple select box? 
    if (selectBox.type == "select-multiple") { 
        for (var i = 0; i < selectBox.options.length; i++) { 
             selectBox.options[i].selected = true;
        } 
    }
    $("select").imagepicker({
		hide_select : true,
        show_label  : true,
	});
}
//Des-selecciona els Imatges del select.
function selectNone(selectBox,selectNone) { 
    // have we been passed an ID 
    if (typeof selectBox == "string") { 
        selectBox = document.getElementById(selectBox);
    } 
    // is the select box a multiple select box? 
    if (selectBox.type == "select-multiple") { 
        for (var i = 0; i < selectBox.options.length; i++) { 
             selectBox.options[i].selected = false;
        } 
    }
    $("select").imagepicker({
		hide_select : true,
        show_label  : true,
	});
}
</script>

<?php
/* @var $this ValidarController */
$this->breadcrumbs=array(
	'Gallery',
); 
?>

<h1><?php echo "Imatges pendents de validar"; ?></h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'action'=>"./index.php?r=imatges/validarimatges",
	'method'=>'POST'
)); 

	//BOTÓ SELECCIONA TOT
	echo "Marca: ";
	echo "<input type='button' name='Button' value='Tots' onclick='selectAll(select_imatges,true)' />";
	//BOTÓ SELECCIONA CAP
	echo "<input type='button' name='Button' value='Cap' onclick='selectNone(select_imatges,true)' />";

	//Select dels imatges (image-picker)
	echo "<select multiple='multiple' class='image-picker show-html' id='select_imatges' name='select_imatges[]'>";
	foreach($models as $model): //tots els de la llista
		echo "\n<option data-img-src='dades/imatges/1/$model->id.png' value='$model->id'>$model->descripcio</option>";
	endforeach; 
	echo "\n</select>\n";
	
	//Id album (camp amagat)
	echo "<input type='hidden' name='id_album' value=1>";

	//Botons de la paginació 
	$this->widget('CLinkPager', 
		array(
			'pages' => $pages,
			'currentPage'=>$pages->getCurrentPage(),
		)
	);
?>

<!--CAPA OCULTA CONFIRMACIÓ ACCEPTAR CROMOS -->
<div id="confirm_acceptar" style="display:none;">
<?php
echo TbHtml::alert(TbHtml::ALERT_COLOR_WARNING, 'Confirmes aquesta acció? No es pot desfer  '.
		TbHtml::submitButton('Aprovar aquestes Imatges', 
			array(
				'color' => TbHtml::BUTTON_COLOR_SUCCESS,
				'name' => 'aprovar'
			)
		).TbHtml::button('Cancelar'), //Botó cancela la denegació
				array(
					'name' => 'cancelar_aprovar',
					'id'=> 'cancelar_aprovar'
			)
	);
?>
</div>

<!--CAPA OCULTA CONFIRMACIÓ DENEGAR CROMOS -->
<div id="confirm_denegar" style="display:none;">
<?php
echo TbHtml::alert(TbHtml::ALERT_COLOR_WARNING, 'Confirmes aquesta acció? No es pot desfer  '.
		TbHtml::submitButton('Denegar aquestes Imatges', // Botó confirma la denegació
			array(
				'color' => TbHtml::BUTTON_COLOR_DANGER,
				'name' => 'denegar'
			)
		).TbHtml::button('Cancelar'), //Botó cancela la denegació
			array(
				'name' => 'cancelar_denegar',
				'id'=> 'cancelar_denegar'
		)
	);
?>
</div>
<!-- Missatges per a l'usuari 
/* CODIS DE COMPROVACIÓ (no confondre amb status Imatges)
 -1. denegar imatge/s 
  0. res
  1. Aprovar imatge/s 
  2. Album o imatge inexistent o ja aprovat: 2
  3. Album o imatge no vàlid: 3
  4. S'ha apretat algun botó però no s'ha sel·leccionat cap imatge
-->
<div id="missatges_usuari" style="display:block;">
<?php
if ($codi_comprovacio == 1){
	echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'S\'han aprovat '.$conta_imatges.' imatges'); 
}else if($codi_comprovacio == -1){
	echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'S\'han denegat '.$conta_imatges.' imatges');
}else if ($codi_comprovacio == 2){
	echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, 'Àlbum i/o imatge inexistent');
}else if ($codi_comprovacio == 3){ 
	echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, 'Àlbum i/o imatge no vàlid... ');
}else if ($codi_comprovacio == 4){
	echo TbHtml::alert(TbHtml::ALERT_COLOR_INFO, 'Has d\'escollir algun imatge i fer Aprovar o Denegar. Ara no s\'ha fet res.');
}
?>
</div>
<!-- BOTONS APROVAR I DENEGAR -->
<div id="botons_aprovar_denegar" style="display:block;">
<?php
	//BOTÓ APROVAR
	echo "<br />";
	echo TbHtml::Button('Aprovar', 
		array(
			'color' => TbHtml::BUTTON_COLOR_SUCCESS,
			'name' => 'preaprovar',
			'id'=> 'preaprovar',
		)
	); 
	//BOTÓ DENEGAR
	echo TbHtml::Button('Denegar', 
		array(
			'color' => TbHtml::BUTTON_COLOR_DANGER,
			'name' => 'predenegar',
			'id'=> 'predenegar'
		)
	);
?>
</div>
<?php $this->endWidget(); ?>
