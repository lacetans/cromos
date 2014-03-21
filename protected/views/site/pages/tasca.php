<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Tasca';
$this->breadcrumbs=array(
	'Tasca',
);
?>
<h1>Tasca</h1>
<h2>Yiiwheels</h2>
<p>Exemple de tooltip <?php echo TbHtml::tooltip('mira aqui', 'www.google.es', 'Exemple de tooltip'); ?></p>

<p>Label </p>
<?php echo TbHtml::labelTb('Success', array('color' => TbHtml::LABEL_COLOR_SUCCESS)); ?>
<p>Badges </p>
<?php echo TbHtml::badge('6', array('color' => TbHtml::BADGE_COLOR_IMPORTANT)); ?>
<p>Form Validation States </p>
<?php echo TbHtml::textFieldControlGroup('text', '', array(
    'label' => 'Input with info',
    'help' => 'Username is taken',
    'color' => TbHtml::INPUT_COLOR_INFO,
)); ?>
<p>Button Danger </p>
<?php echo TbHtml::button('Danger', array('color' => TbHtml::BUTTON_COLOR_DANGER)); ?>
<p>Icons </p>
<?php echo TbHtml::icon(TbHtml::ICON_GLASS); ?>
<?php Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_WARNING,'<strong>Vigila!</strong> Això és una prova'); $this->widget('bootstrap.widgets.TbAlert'); ?>
<p>Type ahead amb la <?php echo TbHtml::tooltip('llista', 'www.google.es', 'Manresa, Montserrat, Mataró, Montmeló, Mallorca, Matadepera i Madeira'); ?>Com a màxim apareixeran 3 elements que s'autocompletaran quan l'usuari escriu, almenys, 2 caràcters. Consulteu el API per veure on posar aquests elements: http://www.getyiistrap.com/api/class-TbTypeAhead.html</p>
<?php $this->widget('bootstrap.widgets.TbTypeAhead', array(
    'name' => 'typeahead-test',
    'source' => array('Manresa', 'Montserrat', 'Mataró', 'Montmeló', 'Mallorca', 'Matadepera', 'Madeira'),
    'htmlOptions' => array(
        'prepend' => TbHtml::icon(TbHtml::ICON_HEART),
        'placeholder' => 'Escriu un element de la llista'
    ),
)); ?>

<p>Si vols fer alguna modificació en aquesta view has d'editar <code><?php echo __FILE__; ?></code>.</p>


