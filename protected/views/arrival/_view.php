<?php
/* @var $this ArrivalController */
/* @var $data Arrival */
?>

<div class="view">

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>    
	<br />  -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_equipment')); ?>:</b>
	<?php echo CHtml::encode($data->equipment->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrival_date')); ?>:</b>
	<?php echo CHtml::encode($data->arrival_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_person')); ?>:</b>
	<?php echo CHtml::encode($data->person->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>