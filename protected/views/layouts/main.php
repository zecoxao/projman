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
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        //array('label'=>'Home', 'url'=>array('/site/index')),
                        //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                        //array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('url' => Yii::app()->getModule('user')->loginUrl, 'label' => Yii::app()->getModule('user')->t("Login"), 'visible' => Yii::app()->user->isGuest),
                        array('url' => Yii::app()->getModule('user')->registrationUrl, 'label' => Yii::app()->getModule('user')->t("Register"), 'visible' => Yii::app()->user->isGuest),
                        array('url' => Yii::app()->getModule('user')->profileUrl, 'label' => Yii::app()->getModule('user')->t("Profile"), 'visible' => !Yii::app()->user->isGuest),
                        array('url' => Yii::app()->getModule('user')->logoutUrl, 'label' => Yii::app()->getModule('user')->t("Logout") . ' (' . Yii::app()->user->name . ')', 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Rights', 'url' => array('/rights'), 'visible' => Yii::app()->user->checkAccess(Rights::module()->superuserName)),
                        array('label' => 'Alteracao', 'url' => array('/alteracao/index')),
                        array('label' => 'CasoUso', 'url' => array('/casouso/index')),
                        array('label' => 'Cliente', 'url' => array('/cliente/index')),
                        array('label' => 'Ecra', 'url' => array('/ecra/index')),
                        array('label' => 'Entidade', 'url' => array('/entidade/index')),
                        array('label' => 'Estado', 'url' => array('/estado/index')),
                        array('label' => 'Grupo', 'url' => array('/grupo/index')),
                        array('label' => 'Membro', 'url' => array('/membro/index')),
                        array('label' => 'Pessoa', 'url' => array('/pessoa/index')),
                        array('label' => 'Projecto', 'url' => array('/projecto/index')),
                        array('label' => 'Requisito', 'url' => array('/requisito/index')),
                        array('label' => 'Stakeholder', 'url' => array('/stakeholder/index')),
                        /*array('label' => 'Alteracao Requisito', 'url' => array('/alteracaoRequisito/index')),
                        array('label' => 'Ecra Caso', 'url' => array('/ecraCaso/index')),
                        array('label' => 'Entidade Caso', 'url' => array('/entidadeCaso/index')),
                        array('label' => 'Membro Caso', 'url' => array('/membroCaso/index')),
                        array('label' => 'Membro Projecto', 'url' => array('/membroProjecto/index')),
                        array('label' => 'Requisito Stakeholder', 'url' => array('/requisitoStakeholder/index')),
                        array('label' => 'Stakeholder Membro', 'url' => array('/stakeholderMembro/index')),
                         * 
                         */
                    ),
                ));
                ?>
            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
