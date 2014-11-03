<?php
/* @var $this NomenclatureController */
/* @var $model Nomenclature */

$this->breadcrumbs=array(
	'Справочники'=>array('/site/dict'),
	'Номенклатура'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Обновить', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы действительно хотите удалить этот элемент?')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Просмотр номенклатуры #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
		'name',
	),
)); ?>
