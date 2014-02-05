<?php
/* @var $this TipoLocalidadesController */
/* @var $data TipoLocalidades */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_tipo_localidad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_tipo_localidad), array('view', 'id'=>$data->co_tipo_localidad)); ?>
	<br />

        <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_localidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_localidad); ?>
	<br />
        */ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_tipo_localidad')); ?>:</b>
	<?php echo CHtml::encode($data->nb_tipo_localidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_crea')); ?>:</b>
	<?php echo CHtml::encode($data->fe_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_modf')); ?>:</b>
	<?php echo CHtml::encode($data->fe_modf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_crea')); ?>:</b>
	<?php echo CHtml::encode($data->usr_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_modf')); ?>:</b>
	<?php echo CHtml::encode($data->usr_modf); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('in_stat')); ?>:</b>
	<?php echo CHtml::encode($data->in_stat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_desc')); ?>:</b>
	<?php echo CHtml::encode($data->tx_desc); ?>
	<br />

	*/ ?>

</div>