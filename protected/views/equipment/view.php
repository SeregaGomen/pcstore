<?php
/* @var $this EquipmentController */
/* @var $model Equipment */

$this->breadcrumbs=array(
	'Склад'=>array('/site/store'),
	'Устройства'=>array('index'),
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

<h1>Просмотр устройства #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
//		'id_nomenclature',
                array(
                        'label'=>'Номенклатура',
                        'type'=>'raw',
                        'value'=>$model->nomenclature->name,
                ),
		'name',
		'feature',
		'inventory_no',
		'serial_no',
//		'id_contractor',
                array(
                        'label'=>'Поставщик',
                        'type'=>'raw',
                        'value'=>$model->contractor->name,
                ),
		'price',
		'purchase_date',
		'warranty',
		'warranty_date',
		'notes',
	),
)); ?>
