<?php
/* @var $this NomenclatureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Справочники'=>array('/site/dict'),
	'Номенклатура',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Номенклатура</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
