<?php
/* @var $this EquipmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Склад'=>array('/site/store'),
	'Устройства',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Устройства</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
