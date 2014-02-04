<?php
/* @var $this EntesLocalidadesController */
/* @var $model EntesLocalidades */

$this->breadcrumbs=array(
	'Entes Localidades'=>array('index'),
	$model->co_sector_proyecto=>array('view','id'=>$model->co_sector_proyecto),
	'Update',
);

$this->menu=array(
	array('label'=>'List EntesLocalidades', 'url'=>array('index')),
	array('label'=>'Create EntesLocalidades', 'url'=>array('create')),
	array('label'=>'View EntesLocalidades', 'url'=>array('view', 'id'=>$model->co_sector_proyecto)),
	array('label'=>'Manage EntesLocalidades', 'url'=>array('admin')),
);
?>

<h1>Update EntesLocalidades <?php echo $model->co_sector_proyecto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>