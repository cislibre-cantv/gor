<?php
/* @var $this EntesLocalidadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entes Localidades',
);

$this->menu=array(
	array('label'=>'Create EntesLocalidades', 'url'=>array('create')),
	array('label'=>'Manage EntesLocalidades', 'url'=>array('admin')),
);
?>

<h1>Entes Localidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
