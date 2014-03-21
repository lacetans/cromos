<!DOCTYPE html>
<script src="http://yui.yahooapis.com/3.5.0/build/yui/yui-min.js"></script>
<?php
/* @var $this PreguntesYoutubeController */
/* @var $model PreguntesYoutube */
//id_album passada per una cookie
$album_id = $_SESSION['album_id'];
$pregunta_id=CHtml::encode($model->id);
$pregunta_tipus=CHtml::encode($model->pregunta_id);
//$pregunta_tipus=$_COOKIE['preg_tipus'];
//echo $pregunta_tipus;

//echo $pregunta_id.$album_id;
if(!empty($album_id)){
	/*Introduir valors a la base de dades*/
	$command = Yii::app()->db->createCommand();
	$command->insert("album_pregunta", array("album_id"=>$album_id,"pregunta_id"=>$pregunta_id,"tipus_pregunta"=>$pregunta_tipus));
}


$this->breadcrumbs=array(
	'Preguntes Si Nos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PreguntesSiNo', 'url'=>array('index')),
	array('label'=>'Create PreguntesSiNo', 'url'=>array('create')),
	array('label'=>'Update PreguntesSiNo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PreguntesSiNo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PreguntesSiNo', 'url'=>array('admin')),
);
?>

<h1>View PreguntesSiNo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pregunta_id',
		'descripcio',
		'resposta',
	),
)); 



?>
<a href="<?php print_r(Yii::app()->request->baseUrl)?>/index.php?r=albums/view&id=<?php echo $album_id ?>"><?php echo TbHtml::button('Album', array('color' => TbHtml::BUTTON_COLOR_SUCCESS)); ?></a>