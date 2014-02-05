<?php
/* @var $this TipoOrdenServicioController */
/* @var $data TipoOrdenServicio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_tipo_orden_servicio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_tipo_orden_servicio), array('view', 'id'=>$data->co_tipo_orden_servicio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_orden_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_orden_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_tipo_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->nb_tipo_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_desc')); ?>:</b>
	<?php echo CHtml::encode($data->tx_desc); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_modf')); ?>:</b>
	<?php echo CHtml::encode($data->usr_modf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_stat')); ?>:</b>
	<?php echo CHtml::encode($data->in_stat); ?>
	<br />

	*/ ?>

</div>