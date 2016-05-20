<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'ID_ALUMNO',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'NOMBRE_ALUMNO',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'PAT_ALUMNO',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'MAT_ALUMNO',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'RUT_ALUMNO',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'TEL_ALUMNO',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'EMAIL_ALUMNO',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'DIR_ALUMNO',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'PASS_ALUMNO',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
