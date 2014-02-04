<?php
/* @var $this TipoLocalidadesController */
/* @var $model TipoLocalidades */

$this->breadcrumbs=array(
	'Tipo Localidades'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo Localidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>