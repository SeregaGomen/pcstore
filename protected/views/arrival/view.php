<?php
/* @var $this ArrivalController */
/* @var $model Arrival */

$this->breadcrumbs=array(
	'Склад'=>array('/site/store'),
	'Приход'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Обновить', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы действительно хотите удалить этот элемент?')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Просмотреть приход #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
//		'id_equipment',
                array(
                        'label'=>'Оборудование',
                        'type'=>'raw',
                        'value'=>$model->equipment->name,
                ),
		'arrival_date',
		'amount',
//		'id_person',
                array(
                        'label'=>'Получатель',
                        'type'=>'raw',
                        'value'=>$model->person->name,
                ),
		'notes',
	),
)); ?>
