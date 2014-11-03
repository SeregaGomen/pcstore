<?php
/* @var $this PersonController */
/* @var $model Person */

$this->breadcrumbs=array(
	'Справочники'=>array('/site/dict'),
	'Персоны'=>array('index'),
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

<h1>Просмотр персоны #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
		'name',
		'phone',
		'email',
//		'id_department',
                array(
                    'label'=>'Отдел',
                    'type'=>'raw',
                    'value'=>$model->department->name,
                ),
	),
)); ?>
