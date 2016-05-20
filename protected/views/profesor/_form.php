<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'profesor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	// 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model,'NOMBRE_PROF',array('class'=>'span5','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'PAT_PROF',array('class'=>'span5','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'MAT_PROF',array('class'=>'span5','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'RUT_PROF',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'TEL_PROF',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'EMAIL_PROF',array('class'=>'span5','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'DIR_PROF',array('class'=>'span5','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'PASS_PROF',array('class'=>'span5','maxlength'=>50)); ?>


<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
