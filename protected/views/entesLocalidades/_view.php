<?php
/* @var $this EntesLocalidadesController */
/* @var $data EntesLocalidades */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_sector_proyecto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_sector_proyecto), array('view', 'id'=>$data->co_sector_proyecto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sector_proyecto')); ?>:</b>
	<?php echo CHtml::encode($data->id_sector_proyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_entidad')); ?>:</b>
	<?php echo CHtml::encode($data->nb_entidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cnx_sectores_proyectos')); ?>:</b>
	<?php echo CHtml::encode($data->cnx_sectores_proyectos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_crea')); ?>:</b>
	<?php echo CHtml::encode($data->fe_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_modf')); ?>:</b>
	<?php echo CHtml::encode($data->fe_modf); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_crea')); ?>:</b>
	<?php echo CHtml::encode($data->usr_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_modf')); ?>:</b>
	<?php echo CHtml::encode($data->usr_modf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_stat')); ?>:</b>
	<?php echo CHtml::encode($data->in_stat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_desc')); ?>:</b>
	<?php echo CHtml::encode($data->tx_desc); ?>
	<br />

	*/ ?>

</div>