<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Справочники'=>array('/site/dict'),
	'Отделы'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Создать отдел</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>