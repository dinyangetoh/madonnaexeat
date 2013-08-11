<?php
/**
 *
 * main.php configuration file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'main');

use Yiinitializr\Helpers\ArrayX;

// web application configuration
return ArrayX::merge(array(
	'name' => '..::Welcome To Madonna University Exeat manager::..',

	// path aliases
	'aliases' => array(
		'bootstrap' => dirname(__FILE__) . '/../lib/vendor/2amigos/yiistrap',
		'yiiwheels' => dirname(__FILE__) . '/../lib/vendor/2amigos/yiiwheels',
	),


	// application behaviors
	'behaviors' => array(),

	// controllers mappings
	'controllerMap' => array(),

	// application modules
	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => 'yii',
			'generatorPaths' => array(
				'ext.giix-core', // giix generators
				),
			'ipFilters' => array('127.0.0.1','::1'),
		),

		'user'=>array(
                'tableUsers' => 'mde_users',
                'tableProfiles' => 'mde_profiles',
                'tableProfileFields' => 'mde_profiles_fields',
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
        'rights'=>array(
                  'superuserName'=>'admin', // Name of the role with super user privileges. 
               'authenticatedName'=>'Authenticated',  // Name of the authenticated user role. 
               'userIdColumn'=>'id', // Name of the user id column in the database. 
               'userNameColumn'=>'username',  // Name of the user name column in the database. 
               'enableBizRule'=>true,  // Whether to enable authorization item business rules. 
               'enableBizRuleData'=>true,   // Whether to enable data for business rules. 
               'displayDescription'=>true,  // Whether to use item description instead of name. 
               'flashSuccessKey'=>'RightsSuccess', // Key to use for setting success flash messages. 
               'flashErrorKey'=>'RightsError', // Key to use for setting error flash messages. 
 
               'baseUrl'=>'/rights', // Base URL for Rights. Change if module is nested. 
               'layout'=>'rights.views.layouts.main',  // Layout to use for displaying Rights. 
               'appLayout'=>'application.views.layouts.main', // Application layout. 
               'cssFile'=>'rights.css', // Style sheet file to use for Rights. 
               'install'=>false,  // Whether to enable installer. 
               'debug'=>true, 
        
        ),

		),

	// application components
	'components' => array(
		'image'=>array(
          'class'=>'application.extensions.image.CImageComponent',
            // GD or ImageMagick
            'driver'=>'GD',
            // ImageMagick setup path
            'params'=>array('directory'=>'/opt/local/bin'),
        ),

		'bootstrap' => array(
			'class' => 'bootstrap.components.TbApi',
		),
		'yiiwheels'=>array(
            'class' => 'yiiwheels.YiiWheels',
        ),


		'clientScript' => array(
			'scriptMap' => array(
				'bootstrap.min.css' => false,
				'bootstrap.min.js' => false,
				'bootstrap-yii.css' => false
			)
		),
		'urlManager' => array(
			// uncomment the following if you have enabled Apache's Rewrite module.
			'urlFormat' => 'path',
			'showScriptName' => false,

			'rules' => array(
				// default rules
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),
		'user'=>array(
                'class'=>'RWebUser',
                // enable cookie-based authentication
                'allowAutoLogin'=>true,
                'loginUrl'=>array('/user/login'),
        ),
        'authManager'=>array(
                'class'=>'RDbAuthManager',
                'connectionID'=>'db',
                'defaultRoles'=>array('Authenticated', 'Guest'),
        ),
		'errorHandler' => array(
			'errorAction' => 'site/error',
		)
	),
	// application parameters
	'params' => array(),
), require_once('common.php'));