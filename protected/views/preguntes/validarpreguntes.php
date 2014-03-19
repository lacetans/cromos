<script>
$(document).ready(function () {
	//Al clicar Aprovar: mostrem confirmació acceptar preguntes
	$('#preaprovar').on('click', function (e) {
		document.getElementById('missatges_usuari').style.display='none'; //amaguem missatges usuari
		document.getElementById('botons_aprovar_denegar').style.display='none'; //amaguem botons originals
		document.getElementById('confirm_denegar').style.display='none'; //amaguem capa confirmar denegar
		document.getElementById('confirm_acceptar').style.display='block'; //mostrem capa confirmar acceptar
	})
	//Al clicar Denegar: mostrem confirmació denegar preguntes
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
<script> //marca o desmarca tots els checks de les preguntes
function toggle(source) {
	checkboxes = document.getElementsByName('preguntes[]');
	for(var i=0, n=checkboxes.length;i<n;i++) {
		checkboxes[i].checked = source.checked;
	}
}
</script>
<style type="text/css">
	.TFtable{
		width:100%; 
		border-collapse:collapse; 
	}
	.TFtable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	/* provide some minimal visual accomodation for IE8 and below */
	.TFtable tr{
		background: #b8d1f3;
	}
	/*  Define the background color for all the ODD background rows  */
	.TFtable tr:nth-child(odd){ 
		background: #b8d1f3;
	}
	/*  Define the background color for all the EVEN background rows  */
	.TFtable tr:nth-child(even){
		background: #dae5f4;
	}
</style>
<?php
/* @var $this PreguntesController */

$this->breadcrumbs=array(
	'Preguntes',
);
?>
<h1><?php echo "Preguntes pendents de validar"; ?></h1>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'action'=>"./index.php?r=preguntes/validarpreguntes",
	'method'=>'POST'
));
?>
<?php

echo "<table class='TFtable'>";
echo "<tr><th>Pregunta</th><th>Tipus</th><th>Descripció</th><th>Preguntes/Respostes</th><th><input type='checkbox' onClick='toggle(this)' /> Tots</th></tr>";
foreach($models as $model): //tots els de la llista
	echo"<tr>";
		echo "<td>$model->preguntes</td>";
		if ($model->tipus==1){echo "<td>Preguntes de Relacionar</td>";}else{echo "<td>Preguntes SI/NO</td>";}
		if ($model->tipus==1){ //si es tipus 1 es de relacionar
			echo "<td>".$model->PreguntesDeRelacionar->descripcio."</td>";
			echo "<td>".$model->PreguntesDeRelacionar->pregunta_1.": ".$model->PreguntesDeRelacionar->resposta_1."<br />"
					   .$model->PreguntesDeRelacionar->pregunta_2.": ".$model->PreguntesDeRelacionar->resposta_2."<br />"
					   .$model->PreguntesDeRelacionar->pregunta_3.": ".$model->PreguntesDeRelacionar->resposta_3."<br />"
					   .$model->PreguntesDeRelacionar->pregunta_4.": ".$model->PreguntesDeRelacionar->resposta_4."<br />".
				"</td>";
		}else{ //si no és tipus 1 és tipus 2 i es de SI/NO
			echo "<td>".$model->PreguntesSiNo->descripcio."</td>";
					   if($model->PreguntesSiNo->resposta==1){
							echo "<td>Si</td>";
					   }else{
							echo "<td>No</td>";
					   }
		}
		echo "<td><input type='checkbox' name='preguntes[]' value='$model->preguntes'></td>";
		echo"</tr>";
endforeach; 
echo"</table>";

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
		TbHtml::submitButton('Aprovar aquestes preguntes', 
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
		TbHtml::submitButton('Denegar aquestes preguntes', // Botó confirma la denegació
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
/* CODIS DE COMPROVACIÓ (no confondre amb status preguntes)
 -1. denegar cromo/s 
  0. res
  1. Aprovar cromo/s 
  2. Album o cromo inexistent o ja aprovat: 2
  3. Album o cromo no vàlid: 3
  4. S'ha apretat algun botó però no s'ha sel·leccionat cap cromo
-->
<div id="missatges_usuari" style="display:block;">
<?php
if ($codi_comprovacio == 1){
	echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'S\'han aprovat '.$conta_preguntes.' preguntes'); 
}else if($codi_comprovacio == -1){
	echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'S\'han denegat '.$conta_preguntes.' preguntes');
}else if ($codi_comprovacio == 2){
	echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, 'Àlbum i/o pregunta inexistent');
}else if ($codi_comprovacio == 3){ 
	echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, 'Àlbum i/o pregunta no vàlida... ');
}else if ($codi_comprovacio == 4){
	echo TbHtml::alert(TbHtml::ALERT_COLOR_INFO, 'Has d\'escollir alguna pregunta i fer Aprovar o Denegar. Ara no s\'ha fet res.');
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
