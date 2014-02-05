<?php
/* @var $this EntesLocalidadesController */
/* @var $model EntesLocalidades */

$this->breadcrumbs=array(
	'Entes Localidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EntesLocalidades', 'url'=>array('index')),
	array('label'=>'Manage EntesLocalidades', 'url'=>array('admin')),
);
?>

<h1>Create EntesLocalidades</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>