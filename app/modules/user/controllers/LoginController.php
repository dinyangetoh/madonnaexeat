<?php

class LoginController extends Controller
{
	public $defaultAction = 'login';

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
	//	$this->layout='//layouts/main';
		if (Yii::app()->user->isGuest) {
			$model=new UserLogin;
			// collect user input data
			if(isset($_POST['UserLogin']))
			{
				$model->attributes=$_POST['UserLogin'];
				// validate user input and redirect to previous page if valid
				if($model->validate()) {
                                    Yii::app()->user->setFlash('success', '<strong>Congratulations!</strong> Login Scuccessful.');

					$this->lastViset();
					//if (Yii::app()->user->returnUrl=='/index.php')
					//	$this->redirect(Yii::app()->controller->module->returnUrl);
					//else
                                        if(Yii::app()->user->userrole=='2'){
                                            $student=Student::model()->findByPk(Yii::app()->user->id);
                                            if(empty($student)){
                                                Yii::app()->user->setFlash('danger', 'Student profile not found');
                                                $this->redirect(array('/student/create'));
                                            }else{
                                                 $this->redirect(array('/profiles','home'=>Yii::app()->user->id));
                                            }
						
                                        }
				}
			}
			// display the login form
			//$this->render('/user/login',array('model'=>$model));
                        Yii::app()->user->setFlash('warning', '<strong>Failed</strong> Invalid Username or password, try again.');

                        $this->redirect(Yii::app()->baseUrl);
		} else
			$this->redirect(Yii::app()->controller->module->returnUrl);
	}
	
	private function lastViset() {
		$lastVisit = User::model()->notsafe()->findByPk(Yii::app()->user->id);
		$lastVisit->lastvisit = time();
		$lastVisit->save();
	}

}