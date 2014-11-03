<?php
/* @var $this ExpenseController */
/* @var $model Expense */

$this->breadcrumbs=array(
	'Склад'=>array('/site/store'),
	'Расход'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Создать расход</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>