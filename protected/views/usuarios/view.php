<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->nu_docm_idnt,
);


if ( !is_array($model->asigOrgs) || empty($model->asigOrgs) ) {
    $sumintEstOrg = array (
       '/asigOrg/create','nu_docm_idnt'=>$model->nu_docm_idnt
    );
}else{
    $sumintEstOrg = array (
       '/asigOrg/view','id'=>$model->asigOrgs[0]->co_asig_org
    );
}


$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Create Usuarios', 'url'=>array('create')),
	array('label'=>'Update Usuarios', 'url'=>array('update', 'id'=>$model->nu_docm_idnt)),
	array('label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_docm_idnt),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
        
        array('label'=>'Ubicación Organizativa', 'url'=>'#', 'linkOptions'=>array('submit'=>$sumintEstOrg)),
        
);
?>

<h1>View Usuarios #<?php echo $model->nu_docm_idnt; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_usuario',
		'nu_docm_idnt',
		'nu_docm_idnt_supv',
		'username',
		'password',
		'nb_pers',
		'email',
		'ldap_login',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		'in_stat',
		'tx_desc',
	),
)); ?>
