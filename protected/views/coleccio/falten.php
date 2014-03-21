<?php
/* @var $this ColeccioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Coleccios',
	'Llistat',
	'Falten'
);

?>

<h1><?php echo TbHtml::em('Llistat de cromos que falten', array('color' => TbHtml::TEXT_COLOR_ERROR)); ?></h1>
<ul>
	<li><p>Tens <?php echo $cromos_totals  ?> cromos <?php echo TbHtml::icon(TbHtml::ICON_HAND_RIGHT); ?> <a href="http://localhost/cromos-master/index.php?r=coleccio/cromosUsuari"><?php echo TbHtml::button('Veure Cromos que tinc',array('color' => TbHtml::BUTTON_COLOR_SUCCESS)); ?>  <?php echo TbHtml::icon(TbHtml::ICON_EYE_OPEN);?> </a> </p></li>
	<li><p>Et falten <?php echo $cromos_falten  ?> cromos per completar l'album <?php echo TbHtml::icon(TbHtml::ICON_ARROW_RIGHT);?> <a href="http://localhost/cromos-master/index.php?r=coleccio/falten"><?php echo TbHtml::button('Cromos que falten'); ?></a> <?php echo TbHtml::icon(TbHtml::ICON_WARNING_SIGN);?> </p></li>
	<li><p>Tens <?php echo $cromos_repes  ?> cromos repetits <?php echo TbHtml::icon(TbHtml::ICON_CIRCLE_ARROW_RIGHT); ?>
	<a href="http://localhost/cromos-master/index.php?r=coleccio/repetits"><?php echo TbHtml::button('Cromos repetits',array('color' => TbHtml::BUTTON_COLOR_WARNING));?> <?php echo TbHtml::icon(TbHtml::ICON_EXCLAMATION_SIGN);?> </a></p></li>
	<li><p> Tornar a 
	<a href="http://localhost/cromos-master/index.php?r=coleccio/llistat"><?php echo TbHtml::button('Cromos Album',
    array('color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?> <?php echo TbHtml::icon(TbHtml::ICON_BACKWARD);?> </a></p></li>

</ul>
<?php 
 
//$array_dades = array($id, $numeracio_cromo[$id], $descripcio[$id],$llista_repes[$id]);//array_dades
 
$gridDataProvider = new CArrayDataProvider($array_dades);
 
//$gridDataProvider = new CArrayDataProvider($array_dades);
// $gridColumns
$gridColumns = array(
	//array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
	array('name'=>'numeracio_cromo', 'header'=>'Numeració'),
	array('name'=>'descripcio', 'header'=>'Descripció'),
	array('name'=>'repetits', 'header'=>'Repetits'),
	/*array(
		'htmlOptions' => array('nowrap'=>'nowrap'),
		'class'=>'bootstrap.widgets.TbButtonColumn',
		'viewButtonUrl'=>null,
		'updateButtonUrl'=>null,
		'deleteButtonUrl'=>null,
		),*/

	
);
 
$this->widget('bootstrap.widgets.TbGridView', array(
        'type' => 'condensed',
        'dataProvider' => $gridDataProvider,
        'template' => "{items}",
        'columns' => $gridColumns,
    ));
    
  
 
//$dataProvider[0]['numeracio']="hola";
/*
$gridColumns = array(
	array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
	array('name'=>'numeracio_cromo', 'header'=>'Numeració'),
	array('name'=>'descripcio', 'header'=>'Descripció'),
	array('name'=>'llista_repes', 'header'=>'Repetits'),
	array(
		'htmlOptions' => array('nowrap'=>'nowrap'),
		'class'=>'bootstrap.widgets.TbButtonColumn',
		'viewButtonUrl'=>null,
		'updateButtonUrl'=>null,
		'deleteButtonUrl'=>null,
	)
);
*/
?>
 
  <?php echo TbHtml::pagination(array(
      array('label' => '&laquo;', 'url' => '#'),
      array('label' => '1', 'url' => '#'),
      array('label' => '&raquo;', 'url' => '#'),
)); ?>
