<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Склад';
$this->breadcrumbs=array(
	'Склад',
);
?>

<h1>Склад</h1>

<?php echo CHtml::link('Устройства',array('/equipment/index')); ?>
<div></div>
<?php echo CHtml::link('Приход',array('/arrival/index')); ?>
<div></div>
<?php echo CHtml::link('Расход',array('/expense/index')); ?>
<div></div>
<?php echo CHtml::link('Модернизация',array('/person/index')); ?>
<div></div>
<?php echo CHtml::link('Списание',array('/nomenclature/index')); ?>

<!-- <?php echo CHtml::button('Button Text', array('submit' => array('controller/action'))); ?> -->
