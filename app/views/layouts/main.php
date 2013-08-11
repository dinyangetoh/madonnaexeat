<?php
/**
 *
 * main.php layout file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
		

	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css">
	

	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">


	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/libs/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
	<?php //Yii::app()->bootstrap->register(); ?>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
	your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
	improve your experience.</p>
<![endif]-->

<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
<div class="mainlogo">

<div class="container">
<div class="logo pull-left">

</div>

</div>

</div>

<div class="navbar navbar-inverse navbar-static-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#">Exeat Manager</a>

			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class="active"><a href="<?php echo Yii::app()->request->baseUrl; ?>">Home</a></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/about">About</a></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/contributors">Contributors</a></li>
					
				</ul>
                            <?php if(Yii::app()->user->isGuest){ ?>
				<form class="navbar-form pull-right" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/user/login">
                                    
					<input class="span2" type="text" name="UserLogin[username]" placeholder="Username">
					<input class="span2" type="password"name="UserLogin[password]" placeholder="Password">
					<button type="submit" class="btn">Sign in</button>
				</form>
                            <?php }else{ ?>
                            <ul class="nav"><li><a href="<?php echo Yii::app()->request->baseUrl; ?>/user/logout">Logout(<?php echo Yii::app()->user->name;  ?>) </a></li><ul>
                                    <?php } ?>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>
   

	
<div id="maincontent" class="container">


        

<?php 

$this->widget('bootstrap.widgets.TbAlert', array(
'block'=>true, // display a larger alert block?
'fade'=>true, // use transitions?
'closeText'=>'×', // close link text - if set to false, no close link is displayed
'alerts'=>array( // configurations per alert type
'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
    'warning'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
    'danger'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
    'info'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
),
));



echo $content; ?>
</div>


<div class="container">
<footer class="footer">
<p align="center">Copyright &copy; <?php echo date('Y'); ?> | Powered by Safehaven Technologies</p>
</div>
</footer>


<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/libs/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/holder.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script><script>
	var _gaq = [
		['_setAccount', 'UA-XXXXX-X'],
		['_trackPageview']
	];
	(function (d, t) {
		var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
		g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s)
	}(document, 'script'));
</script>
</body>
</html>