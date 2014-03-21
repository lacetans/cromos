
<?php
$this->menu=array(
	array('label'=>'Què és un repte?', 'url'=>array('info'))
	);
?>


<h3>Pots reptar als següents usuaris:</h3>

<ul>
<?php 
	foreach ($llista as $elem) {
		echo "<li>".$elem."  <a href='../reptar/".Yii::app()->User->id."/".$elem."'><button>Reptar</button></a></li>";
	}
?>
</ul>


