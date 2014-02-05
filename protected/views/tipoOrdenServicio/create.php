<?php
/* @var $this TipoOrdenServicioController */
/* @var $model TipoOrdenServicio */

$this->breadcrumbs=array(
	'Tipo Orden Servicios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoOrdenServicio', 'url'=>array('index')),
	array('label'=>'Manage TipoOrdenServicio', 'url'=>array('admin')),
);
?>

<h1>Create TipoOrdenServicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>