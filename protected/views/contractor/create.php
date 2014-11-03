<?php
/* @var $this ContractorController */
/* @var $model Contractor */

$this->breadcrumbs=array(
	'Справочники'=>array('/site/dict'),
	'Поставщики'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Создать поставщика</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>