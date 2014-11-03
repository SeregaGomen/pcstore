<?php
/* @var $this EquipmentController */
/* @var $data Equipment */
?>

<div class="view">

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />  -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_nomenclature')); ?>:</b>
	<?php echo CHtml::encode($data->nomenclature->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('feature')); ?>:</b>
	<?php echo CHtml::encode($data->feature); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inventory_no')); ?>:</b>
	<?php echo CHtml::encode($data->inventory_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial_no')); ?>:</b>
	<?php echo CHtml::encode($data->serial_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contractor')); ?>:</b>
	<?php echo CHtml::encode($data->contractor->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchase_date')); ?>:</b>
	<?php echo CHtml::encode($data->purchase_date); ?>  
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warranty')); ?>:</b>
	<?php echo CHtml::encode($data->warranty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warranty_date')); ?>:</b>
	<?php echo CHtml::encode($data->warranty_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

</div>