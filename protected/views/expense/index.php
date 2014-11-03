<?php
/* @var $this ExpenseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Склад'=>array('/site/store'),
	'Расход',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Расход</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
