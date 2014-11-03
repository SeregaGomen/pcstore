<?php
/* @var $this PersonController */
/* @var $model Person */

$this->breadcrumbs=array(
	'Справочники'=>array('/site/dict'),
	'Персоны'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Обновить персону <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>