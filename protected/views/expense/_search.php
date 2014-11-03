<?php
/* @var $this ExpenseController */
/* @var $model Expense */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<!--	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>  -->

	<div class="row">
		<?php echo $form->label($model,'id_equipment'); ?>
		<?php echo $form->textField($model,'id_equipment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expense_date'); ?>
		<?php echo $form->textField($model,'expense_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_person'); ?>
		<?php echo $form->textField($model,'id_person'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notes'); ?>
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Поиск'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->