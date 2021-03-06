<?php
/**
 *
 * SiteController class
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
class SiteController extends GxController
{
	public function actionIndex()
	{
            
            if(Yii::app()->user->isGuest){
            $this->layout='//layouts/column1';
            }
		$this->render('index');
	}

        public function actionAbout()
	{
            
            if(Yii::app()->user->isGuest){
            $this->layout='//layouts/column1';
            }
		$this->render('about');
	}
        public function actionTeam()
	{
            
            if(Yii::app()->user->isGuest){
            $this->layout='//layouts/column1';
            }
		$this->render('team');
	}


	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
}