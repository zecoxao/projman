<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'ProjMan',
    // preloading 'log' component
    'preload' => array('log','bootstrap'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.rights.*',
        'application.modules.rights.components.*',
        'ext.pdffactory.*',
        'application.pdf.docs.*',
		'ext.AweCrud.components.*',
    ),
    'modules' => array(
// uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'root',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
			'generatorPaths' => array('ext.AweCrud.generators'),
        ),
        'user' => array(
            'tableUsers' => 'users',
            'tableProfiles' => 'profiles',
            'tableProfileFields' => 'profiles_fields',
            # encrypting method (php hash function)
            'hash' => 'md5',
            # send activation email
            'sendActivationMail' => true,
            # allow access for non-activated users
            'loginNotActiv' => false,
            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,
            # automatically login from registration
            'autoLogin' => true,
            # registration path
            'registrationUrl' => array('/user/registration'),
            # recovery password path
            'recoveryUrl' => array('/user/recovery'),
            # login form path
            'loginUrl' => array('/user/login'),
            # page after login
            'returnUrl' => array('/user/profile'),
            # page after logout
            'returnLogoutUrl' => array('/user/login'),
        ),
        //Modules Rights
        'rights' => array(
            'superuserName' => 'Admin', // Name of the role with super user privileges. 
            'authenticatedName' => 'Authenticated', // Name of the authenticated user role. 
            'userIdColumn' => 'id', // Name of the user id column in the database. 
            'userNameColumn' => 'username', // Name of the user name column in the database. 
            'enableBizRule' => true, // Whether to enable authorization item business rules. 
            'enableBizRuleData' => true, // Whether to enable data for business rules. 
            'displayDescription' => true, // Whether to use item description instead of name. 
            'flashSuccessKey' => 'RightsSuccess', // Key to use for setting success flash messages. 
            'flashErrorKey' => 'RightsError', // Key to use for setting error flash messages. 
            'baseUrl' => '/rights', // Base URL for Rights. Change if module is nested. 
            'layout' => 'rights.views.layouts.main', // Layout to use for displaying Rights. 
            'appLayout' => 'application.views.layouts.main', // Application layout. 
            'cssFile' => 'rights.css', // Style sheet file to use for Rights. 
            'install' => false, // Whether to enable installer. 
            'debug' => false,
        ),
    ),
    // application components
    'components' => array(
		'bootstrap' => array(
            'class' => 'ext.yiibooster.components.Bootstrap',
			'fontAwesomeCss'=> true,
		    'minify'=>true,
        ),
        'pdfFactory' => array(
            'class' => 'ext.pdffactory.EPdfFactory',
            'tcpdfPath' => 'ext.pdffactory.vendors.tcpdf', //=default: the path to the tcpdf library
            'fpdiPath' => 'ext.pdffactory.vendors.fpdi', //=default: the path to the fpdi library
            //the cache duration
            'cacheHours' => 5, //-1 = cache disabled, 0 = never expires, hours if >0
            //The alias path to the directory, where the pdf files should be created
            'pdfPath' => 'application.runtime.pdf',
            //The alias path to the *.pdf template files
            'templatesPath'=>'application.pdf.templates', //= default
            //the params for the constructor of the TCPDF class  
            // see: http://www.tcpdf.org/doc/code/classTCPDF.html 
            'tcpdfOptions' => array(
                //default values
                'format' => 'A4',
                'orientation' => 'P', //=Portrait or 'L' = landscape
                'unit' => 'mm', //measure unit: mm, cm, inch, or point
                'unicode' => true,
                'encoding' => 'UTF-8',
                'diskcache' => false,
                'pdfa' => false,
            )
        ),
		'themeManager' => array(
			'basePath' => 'protected/extensions',
		), 
        // uncomment the following to use a MySQL database
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=root',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ),
        'user' => array(
            'class' => 'RWebUser',
            'behaviors' => array(
                'ext.web-user-behavior.WebUserBehavior'
            ),
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl' => array('/user/login'),
        ),
        'authManager' => array(
            'class' => 'RDbAuthManager',
            'connectionID' => 'db',
            'itemTable' => 'authitem',
            'itemChildTable' => 'authitemchild',
            'assignmentTable' => 'authassignment',
            'rightsTable' => 'rights',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
		'messages' => array (
        'extensionPaths' => array(
            'AweCrud' => 'ext.AweCrud.messages', // AweCrud messages directory.
        ),
    ),
    ),
    // application-level parameters that can be accessed
// using Yii::app()->params['paramName']
    'params' => array(
// this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);
