<?php
/* @var $this PersonController */
/* @var $model Person */

$this->breadcrumbs=array(
	'Справочники'=>array('/site/dict'),
	'Персоны'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Создание персоны</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>