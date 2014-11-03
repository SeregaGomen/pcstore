<?php
/* @var $this ContractorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Справочники'=>array('/site/dict'),
	'Поставщики',
);

/*
$this->breadcrumbs=array(
	'Поставщики',
);
*/
$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Поставщики</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
