<?php
/* @var $this NomenclatureController */
/* @var $model Nomenclature */

$this->breadcrumbs=array(
	'Справочники'=>array('/site/dict'),
	'Номенклатура'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Создать номенклатуру</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>