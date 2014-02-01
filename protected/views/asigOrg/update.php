<?php
/* @var $this AsigOrgController */
/* @var $model AsigOrg */

$this->breadcrumbs=array(
	'Asig Orgs'=>array('index'),
	$model->co_asig_org=>array('view','id'=>$model->co_asig_org),
	'Update',
);

$this->menu=array(
	//array('label'=>'List AsigOrg', 'url'=>array('index')),
	//array('label'=>'Create AsigOrg', 'url'=>array('create')),
	array('label'=>'View AsigOrg', 'url'=>array('view', 'id'=>$model->co_asig_org)),
	//array('label'=>'Manage AsigOrg', 'url'=>array('admin')),
);
?>

<h1>Update AsigOrg <?php echo $model->co_asig_org; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>