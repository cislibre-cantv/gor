<?php
/* @var $this TipoOrdenServicioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Orden Servicios',
);

$this->menu=array(
	array('label'=>'Create TipoOrdenServicio', 'url'=>array('create')),
	array('label'=>'Manage TipoOrdenServicio', 'url'=>array('admin')),
);
?>

<h1>Tipo Orden Servicios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
