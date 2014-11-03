<?php
/* @var $this ContractorController */
/* @var $model Contractor */

$this->breadcrumbs=array(
	'Справочники'=>array('/site/dict'),
	'Поставщики'=>array('index'),
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
	$('#contractor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Обзор поставщиков</h1>

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
	'id'=>'contractor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
/*                array(            
                 'name'=>'id',
                 'htmlOptions'=>array('width'=>'30px'),
                 ),	*/
		'name',
		'phones',
		'email',
		'note',
		array(
                'class'=>'CButtonColumn',
		),
	),
)); ?>
