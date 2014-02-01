<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */

$this->breadcrumbs=array(
	'Empleadoses'=>array('index'),
	$model->nu_docm_idnt=>array('view','id'=>$model->nu_docm_idnt),
	'Update',
);

$this->menu=array(
	array('label'=>'List Empleados', 'url'=>array('index')),
	array('label'=>'Create Empleados', 'url'=>array('create')),
	array('label'=>'View Empleados', 'url'=>array('view', 'id'=>$model->nu_docm_idnt)),
	array('label'=>'Manage Empleados', 'url'=>array('admin')),
);
?>

<h1>Update Empleados <?php echo $model->nu_docm_idnt; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>