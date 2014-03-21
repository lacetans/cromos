<!DOCTYPE html>
<script src="http://yui.yahooapis.com/3.5.0/build/yui/yui-min.js"></script>

<!--YUI CONSULTES // Redirecció segons tipus de pregunta-->
<script>
YUI().use('event', 'node','node-base', function (Y) {
	
Y.one('#ok').on('click', function (ev) {
ev.preventDefault();
	var value = Y.one("#tipus_preguntes input[name=group1]:checked").get("value");
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
/* @var $this PreguntesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Preguntes',
);

$this->menu=array(
	array('label'=>'Create preguntes', 'url'=>array('create')),
	array('label'=>'Manage preguntes', 'url'=>array('admin')),
);
?>

<h1>Preguntes</h1>
<br>
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
)); ?>



<!--
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>-->
