<?php
/* @var $this TipoLocalidadesController */
/* @var $model TipoLocalidades */

$this->breadcrumbs=array(
	'Tipo Localidades'=>array('index'),
	$model->co_tipo_localidad=>array('view','id'=>$model->co_tipo_localidad),
	'Update',
);

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_tipo_localidad)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo Localidad <?php echo $model->co_tipo_localidad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>