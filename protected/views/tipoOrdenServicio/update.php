<?php
/* @var $this TipoOrdenServicioController */
/* @var $model TipoOrdenServicio */

$this->breadcrumbs=array(
	'Tipo Orden Servicios'=>array('index'),
	$model->co_tipo_orden_servicio=>array('view','id'=>$model->co_tipo_orden_servicio),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoOrdenServicio', 'url'=>array('index')),
	array('label'=>'Create TipoOrdenServicio', 'url'=>array('create')),
	array('label'=>'View TipoOrdenServicio', 'url'=>array('view', 'id'=>$model->co_tipo_orden_servicio)),
	array('label'=>'Manage TipoOrdenServicio', 'url'=>array('admin')),
);
?>

<h1>Update TipoOrdenServicio <?php echo $model->co_tipo_orden_servicio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>