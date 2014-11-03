<?php
/* @var $this ArrivalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Склад'=>array('/site/store'),
	'Приход',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Приход</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
