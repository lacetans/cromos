

<h1>Colecció</h1>
<p> 
	Aquesta és la teva col·lecció.<br />
	Fes clic sobre un àlbum per començar un repte!
</p>

<?php
$this->menu=array(
	array('label'=>'Què és un repte?', 'url'=>array('info')),
	);
?>

<?php 
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_repte',
)); ?>
