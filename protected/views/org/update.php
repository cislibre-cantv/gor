<?php
/* @var $this OrgController */
/* @var $model Org */

$this->breadcrumbs=array(
	'Orgs'=>array('index'),
	$model->co_org=>array('view','id'=>$model->co_org),
	'Update',
);

$this->menu=array(
	array('label'=>'List Org', 'url'=>array('index')),
	array('label'=>'Create Org', 'url'=>array('create')),
	array('label'=>'View Org', 'url'=>array('view', 'id'=>$model->co_org)),
	array('label'=>'Manage Org', 'url'=>array('admin')),
);
?>

<h1>Update Org <?php echo $model->co_org; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>