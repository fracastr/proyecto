<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ALUMNO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_ALUMNO),array('view','id'=>$data->ID_ALUMNO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_ALUMNO')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_ALUMNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAT_ALUMNO')); ?>:</b>
	<?php echo CHtml::encode($data->PAT_ALUMNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MAT_ALUMNO')); ?>:</b>
	<?php echo CHtml::encode($data->MAT_ALUMNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUT_ALUMNO')); ?>:</b>
	<?php echo CHtml::encode($data->RUT_ALUMNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEL_ALUMNO')); ?>:</b>
	<?php echo CHtml::encode($data->TEL_ALUMNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL_ALUMNO')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL_ALUMNO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DIR_ALUMNO')); ?>:</b>
	<?php echo CHtml::encode($data->DIR_ALUMNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASS_ALUMNO')); ?>:</b>
	<?php echo CHtml::encode($data->PASS_ALUMNO); ?>
	<br />

	*/ ?>

</div>