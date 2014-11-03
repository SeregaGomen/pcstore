<?php
/* @var $this ExpenseController */
/* @var $data Expense */
?>

<div class="view">

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />  -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_equipment')); ?>:</b>
<!--	<?php echo CHtml::encode($data->id_equipment); ?>   -->
	<?php echo CHtml::encode($data->equipment->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expense_date')); ?>:</b>
	<?php echo CHtml::encode($data->expense_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_person')); ?>:</b>
<!--	<?php echo CHtml::encode($data->id_person); ?>  -->
	<?php echo CHtml::encode($data->person->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>