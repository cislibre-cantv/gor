<?php
/* @var $this TipoOrdenServicioController */
/* @var $model TipoOrdenServicio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-orden-servicio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_orden_servicio'); ?>
		<?php echo $form->textField($model,'id_tipo_orden_servicio'); ?>
		<?php echo $form->error($model,'id_tipo_orden_servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'co_tipo_orden_servicio'); ?>
		<?php echo $form->textField($model,'co_tipo_orden_servicio'); ?>
		<?php echo $form->error($model,'co_tipo_orden_servicio'); ?>
	</div>
        */ ?>
        
	<div class="row">
		<?php echo $form->labelEx($model,'nb_tipo_servicio'); ?>
		<?php echo $form->textField($model,'nb_tipo_servicio',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nb_tipo_servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_desc'); ?>
		<?php echo $form->textField($model,'tx_desc',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tx_desc'); ?>
	</div>

        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
		<?php echo $form->error($model,'fe_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fe_modf'); ?>
		<?php echo $form->textField($model,'fe_modf'); ?>
		<?php echo $form->error($model,'fe_modf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr_crea'); ?>
		<?php echo $form->textField($model,'usr_crea',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usr_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr_modf'); ?>
		<?php echo $form->textField($model,'usr_modf',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usr_modf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'in_stat'); ?>
	</div>
        */ ?>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->