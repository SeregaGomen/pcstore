<?php
/* @var $this EquipmentController */
/* @var $model Equipment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'equipment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля, помеченные <span class="required">*</span>, являются обязательными.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_nomenclature'); ?>
<!--		<?php echo $form->textField($model,'id_nomenclature'); ?> -->
                <?php echo $form->dropDownList($model,'id_nomenclature', Nomenclature::All(), array('empty' => ''));?>       
		<?php echo $form->error($model,'id_nomenclature'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'feature'); ?>
		<?php echo $form->textField($model,'feature',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'feature'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inventory_no'); ?>
		<?php echo $form->textField($model,'inventory_no',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'inventory_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serial_no'); ?>
		<?php echo $form->textField($model,'serial_no',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'serial_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_contractor'); ?> 
<!--		<?php echo $form->textField($model,'id_contractor'); ?> -->
                <?php echo $form->dropDownList($model,'id_contractor', Contractor::All(), array('empty' => ''));?>       
		<?php echo $form->error($model,'id_contractor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchase_date'); ?>
<!--		<?php echo $form->textField($model,'purchase_date'); ?> -->
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                   'name' => 'purchase_date',
                   'model' => $model,
                   'attribute' => 'purchase_date',
                   'language' => 'ru',
                   'options' => array(
                       'showAnim' => 'fold',
                   ),
                   'htmlOptions' => array(
                       'style' => 'height:20px;'
                   ),
                ));?>
            
		<?php echo $form->error($model,'purchase_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warranty'); ?>
		<?php echo $form->textField($model,'warranty',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'warranty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warranty_date'); ?>
<!--		<?php echo $form->textField($model,'warranty_date'); ?> -->
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                   'name' => 'warranty_date',
                   'model' => $model,
                   'attribute' => 'warranty_date',
                   'language' => 'ru',
                   'options' => array(
                       'showAnim' => 'fold',
                   ),
                   'htmlOptions' => array(
                       'style' => 'height:20px;'
                   ),
                ));?>

		<?php echo $form->error($model,'warranty_date'); ?>
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