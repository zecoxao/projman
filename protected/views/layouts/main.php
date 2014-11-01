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
                        array('url' => Yii::app()->getModule('user')->loginUrl, 'label' => Yii::app()->getModule('user')->t("Login"), 'visible' => Yii::app()->user->isGuest),
                        array('url' => Yii::app()->getModule('user')->registrationUrl, 'label' => Yii::app()->getModule('user')->t("Registo"), 'visible' => Yii::app()->user->isGuest),
                        array('url' => Yii::app()->getModule('user')->logoutUrl, 'label' => Yii::app()->getModule('user')->t("Logout") . ' (' . Yii::app()->user->name . ')', 'visible' => !Yii::app()->user->isGuest),
                        array('url' => Yii::app()->getModule('user')->profileUrl, 'label' => Yii::app()->getModule('user')->t("Perfil"), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Direitos', 'url' => array('/rights'), 'visible' => Yii::app()->user->checkAccess(Rights::module()->superuserName)),
                        array('label' => 'Alterações', 'url' => array('/alteracao/index')),
                        array('label' => 'Caso_Uso', 'url' => array('/casouso/index')),
                        array('label' => 'Cliente', 'url' => array('/cliente/index')),
                        array('label' => 'Ecra', 'url' => array('/ecra/index')),
                        array('label' => 'Ecra_Caso_Uso', 'url' => array('/ecracaso/index')),
                        array('label' => 'Entidade', 'url' => array('/entidade/index')),
                        array('label' => 'Grupo', 'url' => array('/grupoanalise/index')),
                        array('label' => 'Membro', 'url' => array('/membro/index')),
                        array('label' => 'Membro_Caso_Uso', 'url' => array('/membroscasouso/index')),
                        array('label' => 'Membro_Projecto', 'url' => array('/membrosprojecto/index')),
                        array('label' => 'Projecto', 'url' => array('/projecto/index')),
                        array('label' => 'Stakeholder', 'url' => array('/stakeholder/index')),
                        array('label' => 'Requisito', 'url' => array('/requisitos/index')),
                        array('label' => 'Membro_Stakeholder', 'url' => array('/stakeholdermembro/index')),
                        array('label' => 'Requisito_Stakeholder', 'url' => array('/requisitosstakeholders/index')),
                        array('label' => 'Alteração_Requisito', 'url' => array('/alteracoesrequisito/index')),
                        array('label' => 'Entidade_Caso_Uso', 'url' => array('/entidadecaso/index')),
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
