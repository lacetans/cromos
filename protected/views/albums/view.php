<!DOCTYPE html>
<script src="http://yui.yahooapis.com/3.5.0/build/yui/yui-min.js"></script>
<!--YUI CONSULTES // Redirecció segons tipus de pregunta-->
<script>
YUI().use('event', 'node','node-base','cookie', function (Y) {
	
Y.one('#ok').on('click', function (ev) {
ev.preventDefault();
	var value = Y.one("#tipus_preguntes input[name=group1]:checked").get("value");
	
	//creació d'una cookie
	//Y.Cookie.set("preg_tipus", value);
	if(value==1){Y.config.win.location = '/cromos/index.php?r=preguntesDeRelacionar/create';}
	if(value==2){Y.config.win.location = '/cromos/index.php?r=preguntesSiNo/create';}
	if(value==3){Y.config.win.location = '/cromos/index.php?r=preguntesOmplirBlancs/create';}
	if(value==4){Y.config.win.location = '/cromos/index.php?r=preguntesHospot/create';}
	if(value==5){Y.config.win.location = '/cromos/index.php?r=preguntesOpcioMultipleRespostaUnica/create';}
	if(value==6){Y.config.win.location = '/cromos/index.php?r=preguntesYoutube/create';}

	});
});
</script>
<?php
/* @var $this AlbumsController */
/* @var $model Albums */

//variable id del album
$album_id=CHtml::encode($model->id); 

//cookie album_id
$_SESSION['album_id'] = $album_id;



$this->breadcrumbs=array(
	'Albums'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Albums', 'url'=>array('index')),
	array('label'=>'Create Albums', 'url'=>array('create')),
	array('label'=>'Update Albums', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Albums', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Albums', 'url'=>array('admin')),
);
?>

<h1>View Albums #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nom',
		'descripcio',
		'portada',
		'aprovat',
	),
)); ?>
<br/>
<?php $this->widget('bootstrap.widgets.TbModal', array(
    'id' => 'myModal',
    'header' => 'Choose a question for add',
    'content' => '<div id="tipus_preguntes"><br>
				<input type="radio" name="group1" value="1"> Pregunta de relacionar<br>
				<input type="radio" name="group1" value="2"> Pregunta si/no<br>
				<input type="radio" name="group1" value="3"> Pregunta omplir blanc <br>
				<input type="radio" name="group1" value="4"> Pregunta hospot<br>
				<input type="radio" name="group1" value="5"> Pregunta opció múltiple resposta única<br>
				<input type="radio" name="group1" value="6"> Pregunta Youtube<br>
				</div>',
    'footer' => array(
        TbHtml::button('Apply', array('data-dismiss' => 'modal', 'color' => TbHtml::BUTTON_COLOR_PRIMARY,'id' => 'ok')),
        TbHtml::button('Close', array('data-dismiss' => 'modal')),
     ),
)); ?>
 
<?php echo TbHtml::button('Create questions', array(
    'style' => TbHtml::BUTTON_COLOR_PRIMARY,
    'size' => TbHtml::BUTTON_SIZE_LARGE,
    'data-toggle' => 'modal',
    'data-target' => '#myModal',
)); 

?>


<script>
YUI().use('io-base', 'node-base', 'json-parse','node', function(Y){
	cont=0;

    //mostrem les preguntes
	Y.one('#next').on( 'click', function(){
    	cont=cont+1;
    	//alert(cont);
    	//Y.one('#res_body_0').hide
    	if(cont==1){
    		Y.one('#respostes h3').setHTML('Pregunta'+cont);
    		Y.one('#res_body_0').setHTML(Y.one('#res_body_1'));
    	}
    	if(cont==2){
    		Y.one('#respostes h3').setHTML('Pregunta'+cont);
    		Y.one('#res_body_0').setHTML(Y.one('#res_body_2'));
    	}
    	if(cont==3){
    		Y.one('#respostes h3').setHTML('Pregunta'+cont);
    		Y.one('#res_body_0').setHTML(Y.one('#res_body_3'));
    	}
    	if(cont==4){
    		Y.one('#respostes h3').setHTML('Pregunta'+cont);
    		Y.one('#res_body_0').setHTML(Y.one('#res_body_4'));
    	}
    	if(cont==5){
    		Y.one('#respostes h3').setHTML('Pregunta'+cont);
    		Y.one('#res_body_0').setHTML(Y.one('#res_body_5'));
    	}
    	if(cont>=6){
    		Y.one('#respostes h3').setHTML('Preguntes finalitzades');
    		Y.one('#next').hide();
    		Y.one('#res_body_0').hide();
    	}

    });
   
});
</script>

<?php 

//RESPOSTES

//variables necessàries
$album_id=CHtml::encode($model->id);

//consulta de la bbdd album-pregunta
$res_all = Yii::app()->db->createCommand()
    ->select('*')
    ->from('album_pregunta')
    ->where('album_id=:album_id', array(':album_id'=>$album_id))
    ->queryAll();
//var_dump($res_all);

$preguntes_pos=array();

//bucle de les preguntes de l'album seleccionat
foreach ($res_all as $key => $array){
	foreach ($array as $key2 => $value) {
		if($key2=="tipus_pregunta"){
			$tipus_preg=$value;
			
			if($tipus_preg==1){$bd="preguntes_de_relacionar";}
			if($tipus_preg==2){$bd="preguntes_si_no";}
			if($tipus_preg==3){$bd="preguntes_omplir_blancs";}
			if($tipus_preg==4){$bd="preguntes_hospot";}
			if($tipus_preg==5){$bd="preguntes_opcio_multiple_resposta_unica";}
			if($tipus_preg==6){$bd="preguntes_youtube";}
		}
		if($key2=="pregunta_id"){
			//id pregunta
			$id_preg=$value;

		}

	}

	if(!empty($bd)){
		//consulta a la base de dades segons el tipus
		$res = Yii::app()->db->createCommand()
		   ->select('*')
		   ->from($bd)
		   ->where('id=:id', array(':id'=>$id_preg))
		   ->queryAll();
	

		foreach ($res as $key => $value) {
			//print_r($value);
			array_push($preguntes_pos,$value);
		}

	}
	
}


//print_r($preguntes_pos);
//print_r($preguntes_pos[0]);
//echo $preguntes_pos[0]['pregunta'];
//echo count($preguntes_pos);

//si no té preguntes l'album no apareix la icona respon preguntes
if(!empty($preguntes_pos)){

	for($i=0;$i<5;$i++){
		$aux=0;
		//aux per identificar div de les preguntes
		$aux=$i+1;
		$val_aleatori=rand(0,(count($preguntes_pos)-1));
		//echo $val_aleatori;
		//echo $preguntes_pos[$val_aleatori]['pregunta_id'];
		//echo $val_aleatori;
		//print_r($preguntes_pos);
		//$codi=$preguntes_pos[$val_aleatori]['pregunta_id'].TbHtml::button('next', array('id'=>'next','color' => TbHtml::BUTTON_COLOR_PRIMARY));
		if($preguntes_pos[$val_aleatori]['pregunta_id']==1){
				$codi='
				<div id="res_body_'.$aux.'">
					<h3>'.$preguntes_pos[$val_aleatori]['descripcio'].'</h3>'.
					'<h4>Respostes possibles:</h4>[<b> '.
						$preguntes_pos[$val_aleatori]['resposta_1'].','
						.$preguntes_pos[$val_aleatori]['resposta_2'].','
						.$preguntes_pos[$val_aleatori]['resposta_3'].','
						.$preguntes_pos[$val_aleatori]['resposta_4'].'</b>]
						<br/>
						<br/>'.
							$preguntes_pos[$val_aleatori]['pregunta_1'].' 
							<input type="text" name="res1"><br/>'.
							$preguntes_pos[$val_aleatori]['pregunta_2'].' 
							<input type="text" name="res2"><br/>'.
							$preguntes_pos[$val_aleatori]['pregunta_3'].' 
							<input type="text" name="res3"><br/>'.
							$preguntes_pos[$val_aleatori]['pregunta_4'].' 
							<input type="text" name="res4"></div>'.
							TbHtml::button('next', array('id'=>'next','color' => TbHtml::BUTTON_COLOR_PRIMARY));
			
		}
		if($preguntes_pos[$val_aleatori]['pregunta_id']==2){
				$codi='
					<div id="res_body_'.$aux.'">
							<h4>'.$preguntes_pos[$val_aleatori]['descripcio'].'</h4>
							Resposta: <input type="text" id="resposta" value="escriu..">
							<br/>
					</div>'.TbHtml::button('next', array('id'=>'next','color' => TbHtml::BUTTON_COLOR_PRIMARY));
		}
		if($preguntes_pos[$val_aleatori]['pregunta_id']==3){
				$codi='
				<div id="res_body_'.$aux.'">
						<h4>'.$preguntes_pos[$val_aleatori]['pregunta'].'</h4>
						Resposta: <input type="text" id="resposta">
						<br/>
				</div>'.TbHtml::button('next', array('id'=>'next','color' => TbHtml::BUTTON_COLOR_PRIMARY));
		}
		if($preguntes_pos[$val_aleatori]['pregunta_id']==4){
				$codi='
				<div id="res_body_'.$aux.'">
						<h4>'.$preguntes_pos[$val_aleatori]['pregunta'].'</h4>
						Resposta: <input type="text" id="resposta">
						<br/>
				</div>'.TbHtml::button('next', array('id'=>'next','color' => TbHtml::BUTTON_COLOR_PRIMARY));
			
		}
		if($preguntes_pos[$val_aleatori]['pregunta_id']==5){
				$codi='
				<div id="res_body_'.$aux.'">
						<h4>'.$preguntes_pos[$val_aleatori]['pregunta'].'</h4>'.
						'<br/>
						<input type="radio" name="group1" value="'.$preguntes_pos[$val_aleatori]["resposta_2"].'">'.
						$preguntes_pos[$val_aleatori]['resposta_2'].
						'<br/>
						<input type="radio" name="group1" value="'.$preguntes_pos[$val_aleatori]["resposta_3"].'">'.
						$preguntes_pos[$val_aleatori]['resposta_3'].
						'<br/>
						<input type="radio" name="group1" value="'.$preguntes_pos[$val_aleatori]["resposta_4"].'">'.
						$preguntes_pos[$val_aleatori]['resposta_4'].
						'<br/>
						<input type="radio" name="group1" value="'.$preguntes_pos[$val_aleatori]["resposta_correcta"].'">'.
						$preguntes_pos[$val_aleatori]['resposta_correcta'].'</div>
						<br/>'.
					TbHtml::button('next', array('id'=>'next','color' => TbHtml::BUTTON_COLOR_PRIMARY));
			
		}

		if($preguntes_pos[$val_aleatori]['pregunta_id']==6){
			if(!empty($preguntes_pos[$val_aleatori]['video'])){

				$codi='
					<div id="res_body_'.$aux.'"> '.
							$preguntes_pos[$val_aleatori]['pregunta'].
							'<br/>
							<input type="text" id="resposta">
							<iframe width="150" height="150" src="'.$preguntes_pos[$val_aleatori]['video'].'">
							</iframe>
					</div>'.TbHtml::button('next', array('id'=>'next','color' => TbHtml::BUTTON_COLOR_PRIMARY));
			}
		}
		//echo $codi;
		$this->widget('bootstrap.widgets.TbModal', array(
		    'id' => 'respostes',
		    'header' => 'Respostes',
		    'content' => '<div id="res_body_0"></div>'.$codi,
		    'footer' => array(
		        TbHtml::button('Envia', array('id'=>'send','data-dismiss' => 'modal', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)),
		        TbHtml::button('Close', array('data-dismiss' => 'modal')),
		     ),
		)); 
		
		}



	echo TbHtml::button("Questions", array(
		'id' => 'boto_res',
	    'style' => TbHtml::BUTTON_COLOR_PRIMARY,
	    'size' => TbHtml::BUTTON_SIZE_LARGE,
	    'data-toggle' => 'modal',
	    'data-target' => '#respostes',
	));

}
?>

<script>
/*YUI().use('io-base', 'node-base', 'json-parse','node', function(Y){

	 res1=Y.one('#resposta').value;
	 alert(res1);


});*/

</script>