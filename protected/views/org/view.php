<?php
/* @var $this OrgController */
/* @var $model Org */

$this->breadcrumbs=array(
	'Orgs'=>array('index'),
	$model->co_org,
);

$this->menu=array(
	array('label'=>'List Org', 'url'=>array('index')),
	array('label'=>'Create Org', 'url'=>array('create')),
	array('label'=>'Update Org', 'url'=>array('update', 'id'=>$model->co_org)),
	array('label'=>'Delete Org', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_org),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Org', 'url'=>array('admin')),
);
?>

<h1>View Org #<?php echo $model->co_org; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_org',
		'co_org',
		'coOrgDpnd.nb_org',
                //array ('name'=>'co_org_dpnd','value'=>'$data->coOrgDpnd.nb_org','type'=>'text'),
		'nb_org',
		'tx_descripcion',
		'abv_org',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		'in_stat',
		'tx_desc',
	),
)); 

?>
