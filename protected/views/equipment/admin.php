<?php
/* @var $this EquipmentController */
/* @var $model Equipment */

$this->breadcrumbs=array(
	'Склад'=>array('/site/store'),
	'Устройства'=>array('index'),
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
	$('#equipment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Обзор устройств</h1>

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

<!-- <div style="width: 100%; height: 100%; overflow: scroll"> -->
<div style="width: 100%; overflow: auto"> 

    <?php $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'equipment-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'columns'=>array(
/*                    array(            
                     'name'=>'id',
                     'htmlOptions'=>array('width'=>'30px'),
                     ),*/
//                    'id_nomenclature',
                    array(
                            'name' => 'id_nomenclature',
                            'filter' => CHtml::listData(Nomenclature::model()->findAll(), 'id', 'name'),
                            'value' => '$data->nomenclature->name',
                    ),
                    'name',
                    'feature',
                    'inventory_no',
                    'serial_no',
                    
//                    'id_contractor',
                    array(
                            'name' => 'id_contractor',
                            'filter' => CHtml::listData(Contractor::model()->findAll(), 'id', 'name'),
                            'value' => '$data->contractor->name',
                    ),
                    'price',
                    'purchase_date',
                    'warranty',
                    'warranty_date',
                    'notes',
                    
                    array(
                            'class'=>'CButtonColumn',
                    ),
            ),
    )); ?>
</div>