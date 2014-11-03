<?php
/* @var $this NomenclatureController */
/* @var $model Nomenclature */

$this->breadcrumbs=array(
	'Справочники'=>array('/site/dict'),
	'Номенклатура'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Обновить номенклатуру <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>