<?php
/* @var $this TipoLocalidadesController */
/* @var $model TipoLocalidades */

$this->breadcrumbs=array(
	'Tipo Localidades'=>array('index'),
	$model->co_tipo_localidad,
);

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->co_tipo_localidad)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_tipo_localidad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Tipo Localidad #<?php echo $model->co_tipo_localidad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_localidad',
		'co_tipo_localidad',
		'nb_tipo_localidad',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		'in_stat',
		'tx_desc',
	),
)); ?>
