<?php
/* @var $this EntesLocalidadesController */
/* @var $model EntesLocalidades */

$this->breadcrumbs=array(
	'Entes Localidades'=>array('index'),
	$model->co_sector_proyecto,
);

$this->menu=array(
	array('label'=>'List EntesLocalidades', 'url'=>array('index')),
	array('label'=>'Create EntesLocalidades', 'url'=>array('create')),
	array('label'=>'Update EntesLocalidades', 'url'=>array('update', 'id'=>$model->co_sector_proyecto)),
	array('label'=>'Delete EntesLocalidades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_sector_proyecto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EntesLocalidades', 'url'=>array('admin')),
);
?>

<h1>View EntesLocalidades #<?php echo $model->co_sector_proyecto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sector_proyecto',
		'co_sector_proyecto',
		'nb_entidad',
		'email',
		'cnx_sectores_proyectos',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		'in_stat',
		'tx_desc',
	),
)); ?>
