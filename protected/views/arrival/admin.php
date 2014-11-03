<?php
/* @var $this ArrivalController */
/* @var $model Arrival */

$this->breadcrumbs=array(
	'Склад'=>array('/site/store'),
	'Приход'=>array('index'),
	'Обзор',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#arrival-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Обзор прихода</h1>

<p>
Вы также можете использовать дополнительный оператор сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) в начале каждого поискового значения, чтобы задать режим сравнения.
</p>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'arrival-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
//		'id_equipment',
                array(
                        'name' => 'id_equipment',
                        'filter' => CHtml::listData(Equipment::model()->findAll(), 'id', 'name'),
                        'value' => '$data->equipment->name',
                ),
		'arrival_date',
		'amount',
//		'id_person',
                array(
                        'name' => 'id_person',
                        'filter' => CHtml::listData(Person::model()->findAll(), 'id', 'name'),
                        'value' => '$data->person->name',
                ),
		'notes',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
