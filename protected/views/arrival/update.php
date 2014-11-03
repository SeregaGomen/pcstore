<?php
/* @var $this ArrivalController */
/* @var $model Arrival */

$this->breadcrumbs=array(
	'Склад'=>array('/site/store'),
	'Приход'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Обновить приход <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>