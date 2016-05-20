<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'ID_PROF',array('class'=>'span5')); ?>

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
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
