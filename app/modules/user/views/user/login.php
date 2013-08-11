<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>
<div class="login">
	<p align="center"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/accountlogin.png"></p>
<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>


	<div class="form-login">
<?php echo CHtml::beginForm(); ?>

	
	<?php echo CHtml::errorSummary($model); ?>
	
	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'username',array('placeholder'=>'Username')); ?>
		<?php echo CHtml::activeTextField($model,'username') ?>
	</div>
	
	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'password'); ?>
		<?php echo CHtml::activePasswordField($model,'password') ?>
	</div>
	
	<div class="row">
		<p class="hint">
		<?php //echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>|
		</p>
	</div>
	
	<div class="row rememberMe">
		<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
		<?php echo CHtml::activeLabelEx($model,'rememberMe'); ?>
	</div>

		
		    <?php echo TbHtml::formActions(array(
    TbHtml::submitButton('Sign In', array('color' => TbHtml::BUTTON_COLOR_SUCCESS)),
    
    )); ?>
	
	
<?php echo CHtml::endForm(); ?>

</div><!-- form -->
	
</div>




<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
            'class'=>'primary',
        ),
    ),
), $model);
?>