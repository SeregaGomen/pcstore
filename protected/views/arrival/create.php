<?php
/* @var $this ArrivalController */
/* @var $model Arrival */

$this->breadcrumbs=array(
	'Склад'=>array('/site/store'),
	'Приход'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Создать приход</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>