<?php
/* @var $this AsigOrgController */
/* @var $model AsigOrg */

$this->breadcrumbs=array(
	'Asig Orgs'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List AsigOrg', 'url'=>array('index')),
	//array('label'=>'Manage AsigOrg', 'url'=>array('admin')),
);
?>

<h1>Create AsigOrg</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>