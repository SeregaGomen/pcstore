<?php
/* @var $this ArrivalController */
/* @var $model Arrival */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'arrival-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля, помеченные <span class="required">*</span>, являются обязательными.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_equipment'); ?>
<!--		<?php echo $form->textField($model,'id_equipment'); ?>  -->
                <?php echo $form->dropDownList($model,'id_equipment',  Equipment::All(), array('empty' => ''));?>
		<?php echo $form->error($model,'id_equipment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arrival_date'); ?>
<!--		<?php echo $form->textField($model,'arrival_date'); ?>  -->
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                   'name' => 'arrival_date',
                   'model' => $model,
                   'attribute' => 'arrival_date',
                   'language' => 'ru',
                   'options' => array(
                       'showAnim' => 'fold',
                   ),
                   'htmlOptions' => array(
                       'style' => 'height:20px;'
                   ),
                ));?>
            
		<?php echo $form->error($model,'arrival_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_person'); ?>
<!--		<?php echo $form->textField($model,'id_person'); ?> -->
                <?php echo $form->dropDownList($model,'id_person',  Person::All(), array('empty' => ''));?>
		<?php echo $form->error($model,'id_person'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->