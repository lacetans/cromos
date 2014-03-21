<?php
/* @var $this ColeccioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Coleccios',
	'Llistat'
);

$this->menu=array(
	array('label'=>'Create Coleccio', 'url'=>array('create')),
	array('label'=>'Manage Coleccio', 'url'=>array('admin')),
);
?>
 
<h1><?php echo TbHtml::em("Llistat de cromos de l'album", array('color' => TbHtml::TEXT_COLOR_INFO)); ?></h1>
<ul>
	<li><p>Tens <?php echo $cromos_totals  ?> cromos <?php echo TbHtml::icon(TbHtml::ICON_HAND_RIGHT); ?> <a href="http://localhost/cromos-master/index.php?r=coleccio/cromosUsuari"><?php echo TbHtml::button('Veure Cromos que tinc',array('color' => TbHtml::BUTTON_COLOR_SUCCESS)); ?>  <?php echo TbHtml::icon(TbHtml::ICON_EYE_OPEN);?> </a> </p></li>
    
	<li><p>Et falten <?php echo $cromos_falten  ?> cromos per completar l'album <?php echo TbHtml::icon(TbHtml::ICON_ARROW_RIGHT);?> <a href="http://localhost/cromos-master/index.php?r=coleccio/falten"><?php echo TbHtml::button('Cromos que falten',array('color' => TbHtml::BUTTON_COLOR_DANGER)); ?></a> <?php echo TbHtml::icon(TbHtml::ICON_WARNING_SIGN);?> </p></li>

	<li><p>Tens <?php echo $cromos_repes  ?> cromos repetits <?php echo TbHtml::icon(TbHtml::ICON_CIRCLE_ARROW_RIGHT); ?>  <a href="http://localhost/cromos-master/index.php?r=coleccio/repetits"><?php echo TbHtml::button('Cromos repetits',array('color' => TbHtml::BUTTON_COLOR_WARNING)); ?> <?php echo TbHtml::icon(TbHtml::ICON_EXCLAMATION_SIGN);?> </a> </p></li>
	
	<!--<li>Numeració:<?php /*
							foreach ($numeracio_cromo as $num) {
									//echo '-'.$num[0].' '.$num[1];
									echo '-'.$num;
						}*/?>
	</li>-->

    
</ul>

<?php 
//print_r($dataProvider);
/*
 ?>
 <?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'vista',
)); ?>
*/
?>
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
      array('label' => '2', 'url' => '#'),
      array('label' => '3', 'url' => '#'),
      array('label' => '4', 'url' => '#'),
      array('label' => '5', 'url' => '#'),
      array('label' => '&raquo;', 'url' => '#'),
)); ?>


