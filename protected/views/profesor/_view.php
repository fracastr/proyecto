<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PROF')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_PROF),array('view','id'=>$data->ID_PROF)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_PROF')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_PROF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAT_PROF')); ?>:</b>
	<?php echo CHtml::encode($data->PAT_PROF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MAT_PROF')); ?>:</b>
	<?php echo CHtml::encode($data->MAT_PROF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUT_PROF')); ?>:</b>
	<?php echo CHtml::encode($data->RUT_PROF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEL_PROF')); ?>:</b>
	<?php echo CHtml::encode($data->TEL_PROF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL_PROF')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL_PROF); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DIR_PROF')); ?>:</b>
	<?php echo CHtml::encode($data->DIR_PROF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASS_PROF')); ?>:</b>
	<?php echo CHtml::encode($data->PASS_PROF); ?>
	<br />

	*/ ?>

</div>