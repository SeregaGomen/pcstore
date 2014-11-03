<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Справочники';
$this->breadcrumbs=array(
	'Справочники',
);
?>

<h1>Справочники</h1>

<?php echo CHtml::link('Поставщики',array('/contractor/index')); ?>
<div></div>
<?php echo CHtml::link('Отделы',array('/department/index')); ?>
<div></div>
<?php echo CHtml::link('Персоны',array('/person/index')); ?>
<div></div>
<?php echo CHtml::link('Номенклатура',array('/nomenclature/index')); ?>

<!-- <?php echo CHtml::button('Button Text', array('submit' => array('controller/action'))); ?> -->
