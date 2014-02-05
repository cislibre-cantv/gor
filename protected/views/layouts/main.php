<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php /*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
                                
                                array('label'=>'Organizacion', 'url'=>array('/org/admin')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		));*/ ?>
            
                <?php $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                                array('label'=>'Inicio', 'url'=>array('/site/index')),
                                array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
                                array('label'=>'Contacto', 'url'=>array('/site/contact')),
                                
                                array('label'=>'Usuarios'
                                        , 'url'=>Yii::app()->user->ui->userManagementAdminUrl
                                        , 'visible'=>!Yii::app()->user->isGuest),
                               
                                array('label'=>'Empleados'
                                        , 'url'=>array('/empleados/admin')
                                        , 'visible'=>!Yii::app()->user->isGuest),
                               
                                array('label'=>'Organizacion'
                                        , 'url'=>array('/org/admin')
                                        , 'visible'=>!Yii::app()->user->isGuest),
                            
                                array('label'=>'Tipo Localidades'
                                        , 'url'=>array('/tipoLocalidades/admin')
                                        , 'visible'=>!Yii::app()->user->isGuest),
                            
                                array('label'=>'Tipo Orden Servicio'
                                         , 'url'=>array('/tipoOrdenServicio/admin')
                                         , 'visible'=>!Yii::app()->user->isGuest),
                            
                                array('label'=>'Entes/Localidades'
                                        , 'url'=>array('/entesLocalidades/admin')
                                        , 'visible'=>!Yii::app()->user->isGuest),
                                
                                array('label'=>'Ingresar'
                                        , 'url'=>Yii::app()->user->ui->loginUrl
                                        , 'visible'=>Yii::app()->user->isGuest),
                                array('label'=>'Salir ('.Yii::app()->user->name.')'
                                        , 'url'=>Yii::app()->user->ui->logoutUrl
                                        , 'visible'=>!Yii::app()->user->isGuest),
                        ),
                )); ?>
            
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by CANTV.<br/>
		Compañia Anónima Nacional Teléfonos de Venezuela. RIF: J-00124134-5.- Todos los derechos reservados.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

<?php echo Yii::app()->user->ui->displayErrorConsole(); ?>

</body>
</html>
