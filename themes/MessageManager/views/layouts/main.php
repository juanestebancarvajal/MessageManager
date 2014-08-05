<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- blueprint CSS framework -->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/simple-sidebar.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" >

        <div class="row">
            <?php if(isset($this->breadcrumbs)):?>
                    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links'=>$this->breadcrumbs,
                    )); ?><!-- breadcrumbs -->
            <?php endif?>            
        </div>
    
        <div class="row">
            <div class="col-lg-2">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Message CRM 
                    </a>
                </li>
                <li>
                    <a href="<?php echo Yii::app()->createUrl("site/contact") ?>">Mi Cuenta</a>
                </li>
                <li>
                    <a href="<?php echo Yii::app()->createUrl("messages/message") ?>">Mensajeria</a>
                </li>

                <li>
                    <a href="<?php echo Yii::app()->createUrl("site/contact") ?>">Estadisticas</a>
                </li>
                <li>
                    <a href="<?php echo Yii::app()->createUrl("site/contact") ?>">Contactenos</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
            </div>
            
            <div class="col-lg-10">

                <?php echo $content; ?>
                <div class="clear"></div>
            </div>
        </div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> Une telecomunicaciones.<br/>
		Todos los derechos reservados.<br/>Medellín
		<?php //echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
