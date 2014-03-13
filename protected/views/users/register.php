<?php
/* @var $this AlbumsController */
/* @var $model Albums */

$this->breadcrumbs=array(
	'Register',
);

?>

<h1>Register user</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
